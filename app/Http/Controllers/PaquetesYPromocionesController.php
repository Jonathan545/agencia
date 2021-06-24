<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaquetesYPromocionesRequest;
use App\Http\Requests\UpdatePaquetesYPromocionesRequest;
use App\Repositories\PaquetesYPromocionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Servicios;
use DB;
class PaquetesYPromocionesController extends AppBaseController
{
    /** @var  PaquetesYPromocionesRepository */
    private $paquetesYPromocionesRepository;

    public function __construct(PaquetesYPromocionesRepository $paquetesYPromocionesRepo)
    {
        $this->paquetesYPromocionesRepository = $paquetesYPromocionesRepo;
    }

    /**
     * Display a listing of the PaquetesYPromociones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
            // $paquetesYPromociones = $this->paquetesYPromocionesRepository->all();
            $paquetesYPromociones=DB::select("SELECT pp.prom_id,
                                        sp.srv_id,
                                        sp.srv_tipo_servicio,
                                        pp.prom_descuentos,
                                        pp.prom_planes_prepago,
                                        pp.prom_planes_pospago,
                                        pp.prom_combos_bonos,
                                        pp.prom_celulares_promocion
 FROM paquetes_y_promociones  pp
JOIN servicio_prestado sp ON pp.prom_id=sp.srv_id
                ");
            // dd($paquetes);
        return view('paquetes_y_promociones.index')
            ->with('paquetesYPromociones', $paquetesYPromociones);
            // ->with(['paquetesYPromociones'=>$paquetesYPromociones[0]]);
    }

    /**
     * Show the form for creating a new PaquetesYPromociones.
     *
     * @return Response
     */
    public function create()
    {
        $servicios=Servicios::pluck('srv_tipo_servicio','srv_id');
        return view('paquetes_y_promociones.create')
        ->with('servicios',$servicios);
    }

    /**
     * Store a newly created PaquetesYPromociones in storage.
     *
     * @param CreatePaquetesYPromocionesRequest $request
     *
     * @return Response
     */
    public function store(CreatePaquetesYPromocionesRequest $request)
    {
        $input = $request->all();

        $paquetesYPromociones = $this->paquetesYPromocionesRepository->create($input);

        Flash::success('Paquetes Y Promociones saved successfully.');

        return redirect(route('paquetesYPromociones.index'));
    }

    /**
     * Display the specified PaquetesYPromociones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paquetesYPromociones = $this->paquetesYPromocionesRepository->find($id);

        if (empty($paquetesYPromociones)) {
            Flash::error('Paquetes Y Promociones not found');

            return redirect(route('paquetesYPromociones.index'));
        }

        return view('paquetes_y_promociones.show')->with('paquetesYPromociones', $paquetesYPromociones);
    }

    /**
     * Show the form for editing the specified PaquetesYPromociones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paquetesYPromociones = $this->paquetesYPromocionesRepository->find($id);
         $servicios=Servicios::pluck('srv_tipo_servicio','srv_id');

        if (empty($paquetesYPromociones)) {
            Flash::error('Paquetes Y Promociones not found');

            return redirect(route('paquetesYPromociones.index'));
        }

        return view('paquetes_y_promociones.edit')->with('paquetesYPromociones', $paquetesYPromociones)
        ->with('servicios',$servicios);
    }

    /**
     * Update the specified PaquetesYPromociones in storage.
     *
     * @param int $id
     * @param UpdatePaquetesYPromocionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaquetesYPromocionesRequest $request)
    {
        $paquetesYPromociones = $this->paquetesYPromocionesRepository->find($id);

        if (empty($paquetesYPromociones)) {
            Flash::error('Paquetes Y Promociones not found');

            return redirect(route('paquetesYPromociones.index'));
        }

        $paquetesYPromociones = $this->paquetesYPromocionesRepository->update($request->all(), $id);

        Flash::success('Paquetes Y Promociones updated successfully.');

        return redirect(route('paquetesYPromociones.index'));
    }

    /**
     * Remove the specified PaquetesYPromociones from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paquetesYPromociones = $this->paquetesYPromocionesRepository->find($id);

        if (empty($paquetesYPromociones)) {
            Flash::error('Paquetes Y Promociones not found');

            return redirect(route('paquetesYPromociones.index'));
        }

        $this->paquetesYPromocionesRepository->delete($id);

        Flash::success('Paquetes Y Promociones deleted successfully.');

        return redirect(route('paquetesYPromociones.index'));
    }
}
