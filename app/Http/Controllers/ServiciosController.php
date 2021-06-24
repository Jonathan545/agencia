<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiciosRequest;
use App\Http\Requests\UpdateServiciosRequest;
use App\Repositories\ServiciosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Trabajadores;
use DB;

class ServiciosController extends AppBaseController
{
    /** @var  ServiciosRepository */
    private $serviciosRepository;

    public function __construct(ServiciosRepository $serviciosRepo)
    {
        $this->serviciosRepository = $serviciosRepo;
    }

    /**
     * Display a listing of the Servicios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $servicios = $this->serviciosRepository->all();
        $servicios=DB::select("
             SELECT  sp.srv_id,             
                                       tb.trab_id,
                                       tb.trab_nombres,
                                       tb.trab_apellidos,
                                       sp.srv_tipo_servicio
                                       
 FROM servicio_prestado sp

JOIN trabajadores tb ON tb.trab_id=sp.trab_id
GROUP BY sp.srv_id
            ");
        return view('servicios.index')
            ->with('servicios', $servicios);
    }

    /**
     * Show the form for creating a new Servicios.
     *
     * @return Response
     */
    public function create()
    {
        $trabajadores=Trabajadores::pluck('trab_nombres','trab_id');
        return view('servicios.create')
         ->with('trabajadores',$trabajadores);

    }

    /**
     * Store a newly created Servicios in storage.
     *
     * @param CreateServiciosRequest $request
     *
     * @return Response
     */
    public function store(CreateServiciosRequest $request)
    {
        $input = $request->all();

        $servicios = $this->serviciosRepository->create($input);

        Flash::success('Servicios saved successfully.');

        return redirect(route('servicios.index'));
    }

    /**
     * Display the specified Servicios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicios = $this->serviciosRepository->find($id);

        if (empty($servicios)) {
            Flash::error('Servicios not found');

            return redirect(route('servicios.index'));
        }

        return view('servicios.show')->with('servicios', $servicios);
    }

    /**
     * Show the form for editing the specified Servicios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicios = $this->serviciosRepository->find($id);

        if (empty($servicios)) {
            Flash::error('Servicios not found');

            return redirect(route('servicios.index'));
        }

        return view('servicios.edit')->with('servicios', $servicios);
    }

    /**
     * Update the specified Servicios in storage.
     *
     * @param int $id
     * @param UpdateServiciosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiciosRequest $request)
    {
        $servicios = $this->serviciosRepository->find($id);

        if (empty($servicios)) {
            Flash::error('Servicios not found');

            return redirect(route('servicios.index'));
        }

        $servicios = $this->serviciosRepository->update($request->all(), $id);

        Flash::success('Servicios updated successfully.');

        return redirect(route('servicios.index'));
    }

    /**
     * Remove the specified Servicios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicios = $this->serviciosRepository->find($id);

        if (empty($servicios)) {
            Flash::error('Servicios not found');

            return redirect(route('servicios.index'));
        }

        $this->serviciosRepository->delete($id);

        Flash::success('Servicios deleted successfully.');

        return redirect(route('servicios.index'));
    }
}
