<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCentroDeLlamadasRequest;
use App\Http\Requests\UpdateCentroDeLlamadasRequest;
use App\Repositories\CentroDeLlamadasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\User;
use App\Models\Trabajadores;
use App\Models\PaquetesYPromociones;
use DB;

class CentroDeLlamadasController extends AppBaseController
{
    /** @var  CentroDeLlamadasRepository */
    private $centroDeLlamadasRepository;

    public function __construct(CentroDeLlamadasRepository $centroDeLlamadasRepo)
    {
        $this->centroDeLlamadasRepository = $centroDeLlamadasRepo;
    }

    /**
     * Display a listing of the CentroDeLlamadas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $centroDeLlamadas = $this->centroDeLlamadasRepository->all();
        $centroDeLlamadas=DB::select("
              SELECT cc.call_id,                
                                        pp.prom_id,
                                        u.cli_id,
                                        u.name,
                                        tb.trab_nombres,
                                        tb.trab_apellidos,
                                        cc.call_ayuda_cliente,
                                        cc.call_contrato_servicios,
                                        cc.call_servicios_tecnicos,
                                        cc.call_soluciones_problemas,
                                        cc.call_puntos_pago
 FROM call_center  cc
JOIN trabajadores tb ON tb.trab_id=cc.trab_id
JOIN users u ON cc.cli_id=u.cli_id
JOIN paquetes_y_promociones pp ON cc.prom_id=pp.prom_id
GROUP BY cc.call_id
            ");

        return view('centro_de_llamadas.index')
            ->with('centroDeLlamadas', $centroDeLlamadas);
    }

    /**
     * Show the form for creating a new CentroDeLlamadas.
     *
     * @return Response
     */
    public function create()
    {
        $clientes=User::pluck('name','cli_id');
        $trabajadores=Trabajadores::pluck('trab_nombres','trab_id');
        $promo=PaquetesYPromociones::pluck('prom_descuentos','prom_id');
        return view('centro_de_llamadas.create')
        ->with('clientes',$clientes)
        ->with('trabajadores',$trabajadores)
        ->with('promo',$promo);
    }

    /**
     * Store a newly created CentroDeLlamadas in storage.
     *
     * @param CreateCentroDeLlamadasRequest $request
     *
     * @return Response
     */
    public function store(CreateCentroDeLlamadasRequest $request)
    {
        $input = $request->all();

        $centroDeLlamadas = $this->centroDeLlamadasRepository->create($input);

        Flash::success('Centro De Llamadas saved successfully.');

        return redirect(route('centroDeLlamadas.index'));
    }

    /**
     * Display the specified CentroDeLlamadas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $centroDeLlamadas = $this->centroDeLlamadasRepository->find($id);

        if (empty($centroDeLlamadas)) {
            Flash::error('Centro De Llamadas not found');

            return redirect(route('centroDeLlamadas.index'));
        }

        return view('centro_de_llamadas.show')->with('centroDeLlamadas', $centroDeLlamadas);
    }

    /**
     * Show the form for editing the specified CentroDeLlamadas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $centroDeLlamadas = $this->centroDeLlamadasRepository->find($id);
        $clientes=User::pluck('name','cli_id');
        $trabajadores=Trabajadores::pluck('trab_nombres','trab_id');
        $promo=PaquetesYPromociones::pluck('prom_descuentos','prom_id');

        if (empty($centroDeLlamadas)) {
            Flash::error('Centro De Llamadas not found');

            return redirect(route('centroDeLlamadas.index'));
        }

        return view('centro_de_llamadas.edit')
        ->with('centroDeLlamadas', $centroDeLlamadas)
         ->with('clientes',$clientes)
        ->with('trabajadores',$trabajadores)
        ->with('promo',$promo);
    }

    /**
     * Update the specified CentroDeLlamadas in storage.
     *
     * @param int $id
     * @param UpdateCentroDeLlamadasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCentroDeLlamadasRequest $request)
    {
        $centroDeLlamadas = $this->centroDeLlamadasRepository->find($id);

        if (empty($centroDeLlamadas)) {
            Flash::error('Centro De Llamadas not found');

            return redirect(route('centroDeLlamadas.index'));
        }

        $centroDeLlamadas = $this->centroDeLlamadasRepository->update($request->all(), $id);

        Flash::success('Centro De Llamadas updated successfully.');

        return redirect(route('centroDeLlamadas.index'));
    }

    /**
     * Remove the specified CentroDeLlamadas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $centroDeLlamadas = $this->centroDeLlamadasRepository->find($id);

        if (empty($centroDeLlamadas)) {
            Flash::error('Centro De Llamadas not found');

            return redirect(route('centroDeLlamadas.index'));
        }

        $this->centroDeLlamadasRepository->delete($id);

        Flash::success('Centro De Llamadas deleted successfully.');

        return redirect(route('centroDeLlamadas.index'));
    }
}
