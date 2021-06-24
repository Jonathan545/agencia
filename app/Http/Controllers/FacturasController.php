<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFacturasRequest;
use App\Http\Requests\UpdateFacturasRequest;
use App\Repositories\FacturasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\User;
use App\Models\Nosotros;
use App\Models\Servicios;
use App\Models\FacturaDetalles;
use DB;
use PDF;


class FacturasController extends AppBaseController
{
    /** @var  FacturasRepository */
    private $facturasRepository;

    public function __construct(FacturasRepository $facturasRepo)
    {
        $this->facturasRepository = $facturasRepo;
    }

    /**
     * Display a listing of the Facturas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $facturas = $this->facturasRepository->all();
        $facturas=DB::select(" 
                SELECT f.fac_id,
                        f.fac_descuento,
                        f.fac_iva,
                        SUM(fd.fadet_cant*fd.fadet_valor)AS subt,
                        u.name,
                        e.ent_nombre_entidad,
                        s.srv_tipo_servicio,
                        f.fac_num_factura,
                        f.fac_fecha
                        FROM factura f
                        JOIN factura_detalles fd ON f.fac_id=fd.fac_id
                        JOIN users u ON f.cli_id=u.cli_id
                        JOIN entidad e ON f.ent_id=e.ent_id
                        JOIN servicio_prestado s ON f.srv_id=s.srv_id
                        GROUP BY f.fac_id
            ");
        // dd($facturas);


        return view('facturas.index')
            ->with('facturas', $facturas);
    }

    /**
     * Show the form for creating a new Facturas.
     *
     * @return Response
     */
    




public function create()
    {
        $clientes=User::pluck('name','cli_id');
        $entidad=Nosotros::pluck('ent_nombre_entidad','ent_id');
        $servicios=Servicios::pluck('srv_tipo_servicio','srv_id');
        $aux_fac=DB::select("SELECT * FROM factura ORDER BY fac_num_factura DESC LIMIT 1");
 // dd($aux_fac);
        if(empty($aux_fac)){
            $facNo=1;
            // $facNo='001-001-000000001';
        }else{
            // dd($aux_fac[0]->fac_num_factura);
            $facNo=($aux_fac[0]->fac_num_factura)+1;
        }
// dd($facNo);
        return view('facturas.create')
        ->with('clientes',$clientes)
        ->with('entidad',$entidad)
        ->with('servicios',$servicios)
            ->with('facNo',$facNo)
        ;

    }
    /**

     * Store a newly created Facturas in storage.
     *
     * @param CreateFacturasRequest $request
     *
     * @return Response
     */
    public function store(CreateFacturasRequest $request)
    {
        $input = $request->all();
        // dd($input);
        $input['fac_fecha']=date('Y-m-d');
        $factura = $this->facturasRepository->create($input);
        // dd($factura->fac_id);
        $Detalles=new FacturaDetalles;
        $Detalles->fac_id=$factura->fac_id;  
        $Detalles->srv_id=$input['srv_id'];
        $Detalles->fadet_cant=$input['fadet_cant'];
        $Detalles->fadet_valor=$input['fadet_valor'];
        $Detalles->save();







       Flash::success('Factura guardada correctamente');

        return redirect(route('facturas.edit',$factura->fac_id));
    }

    /**
     * Display the specified Facturas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $facturas=DB::select(" 
                SELECT f.fac_id,
                        f.fac_descuento,
                        f.fac_iva,
                        SUM(fd.fadet_cant*fd.fadet_valor)AS subt,
                        u.name,
                        u.cli_cedula,
                        u.cli_direccion,
                        u.cli_telefono,
                        e.ent_nombre_entidad,
                        e.ent_ubicacion,
                        e.ent_telefono,
                        e.ent_correo,
                        e.ent_sitio_web,
                        s.srv_tipo_servicio,
                        f.fac_num_factura,
                        f.fac_fecha
                        FROM factura f
                        JOIN factura_detalles fd ON f.fac_id=fd.fac_id
                        JOIN users u ON f.cli_id=u.cli_id
                        JOIN entidad e ON f.ent_id=e.ent_id
                        JOIN servicio_prestado s ON f.srv_id=s.srv_id
                        GROUP BY f.fac_id
            ");

        $detalle=DB::select("
                            SELECT * FROM factura_detalles fd
                            JOIN servicio_prestado sv ON fd.srv_id=sv.srv_id
                            WHERE fd.fac_id=$id
                            ");

        $pdf=app('dompdf.wrapper');
        $pdf->loadView('facturas.show',['facturas'=>$facturas[0],'detalle'=>$detalle]);
        return $pdf->stream();
  

        

        // return view('facturas.show')->with('facturas', $facturas);
    }


    /**
     * Show the form for editing the specified Facturas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facturas = $this->facturasRepository->find($id);
         $clientes=User::pluck('name','cli_id');
         $entidad=Nosotros::pluck('ent_nombre_entidad','ent_id');
         $servicios=Servicios::pluck('srv_tipo_servicio','srv_id');
         $facNo=$facturas->facNo;
             // dd($facNo);
         $facturaDetalles=DB::select("SELECT * FROM factura_detalles fd
                                    JOIN servicio_prestado sv ON fd.srv_id=sv.srv_id
                                    WHERE fd.fac_id=$id");
         
          
        // if (empty($facturas)) {
        //     Flash::error('Facturas not found');

        //     return redirect(route('facturas.index'));
        // }

        return view('facturas.edit')
        ->with('facturas', $facturas)
        ->with('clientes',$clientes)
        ->with('entidad',$entidad)
        ->with('servicios',$servicios)
        ->with('facNo',$facNo)
        ->with('facturaDetalles',$facturaDetalles)

        ;
       
    }

    /**
     * Update the specified Facturas in storage.
     *
     * @param int $id
     * @param UpdateFacturasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFacturasRequest $request)
    {
        $input=$request->all();
        $auxfacturas = $this->facturasRepository->find($id);

         if(isset($input['fac_iva']) ){
            $input['fac_iva']=1; ///1=>calcule el iva 
        }else{
            $input['fac_iva']=0; ///0=>no calcule el iva
        }

        $facturas = $this->facturasRepository->update($input, $id);

        if ($input ['fadet_cant']!=null && $input['fadet_valor']!=null){
            $Detalle=new FacturaDetalles;
            $Detalle->fac_id=$id;
            $Detalle->srv_id=$input['srv_id'];
            $Detalle->fadet_cant=$input['fadet_cant'];
            $Detalle->fadet_valor=$input['fadet_valor'];
            $Detalle->save();
            return redirect(route('facturas.edit',$id));
        }
        // Flash::success('Facturas updated successfully.');

        // return redirect(route('facturas.index'));
        return redirect(route('facturas.index'));
    }

    /**
     * Remove the specified Facturas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facturas = $this->facturasRepository->find($id);

        if (empty($facturas)) {
            Flash::error('Facturas not found');

            return redirect(route('facturas.index'));
        }

        $this->facturasRepository->delete($id);

        Flash::success('Facturas deleted successfully.');

        return redirect(route('facturas.index'));
    }
}
