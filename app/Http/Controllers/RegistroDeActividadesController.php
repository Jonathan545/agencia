<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegistroDeActividadesRequest;
use App\Http\Requests\UpdateRegistroDeActividadesRequest;
use App\Repositories\RegistroDeActividadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\User;
use App\Models\Servicios;
use DB;
class RegistroDeActividadesController extends AppBaseController
{
    /** @var  RegistroDeActividadesRepository */
    private $registroDeActividadesRepository;

    public function __construct(RegistroDeActividadesRepository $registroDeActividadesRepo)
    {
        $this->registroDeActividadesRepository = $registroDeActividadesRepo;
    }

    /**
     * Display a listing of the RegistroDeActividades.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $registroDeActividades = $this->registroDeActividadesRepository->all();
        $registroDeActividades=DB::select(" SELECT rg.rgt_id,
                                        sp.srv_id,
                                        sp.srv_tipo_servicio,
                                        u.cli_id,
                                        u.name,
                                        rg.rgt_tipo_contrato,
                                        rg.rgt_servicio_contratado,
                                        rg.rgt_inicio_contrato,
                                        rg.rgt_fecha_facturar
 FROM registro_actividades  rg
JOIN servicio_prestado sp ON rg.srv_id=sp.srv_id
JOIN users u ON rg.cli_id=u.cli_id
GROUP BY rg.rgt_id
            ");
        return view('registro_de_actividades.index')
            ->with('registroDeActividades', $registroDeActividades);
    }

    /**
     * Show the form for creating a new RegistroDeActividades.
     *
     * @return Response
     */
    public function create()
    {
        $clientes=User::pluck('name','cli_id');
        $servicios=Servicios::pluck('srv_tipo_servicio','srv_id');
        return view('registro_de_actividades.create')
        ->with('clientes',$clientes)
        ->with('servicios',$servicios);
    }

    /**
     * Store a newly created RegistroDeActividades in storage.
     *
     * @param CreateRegistroDeActividadesRequest $request
     *
     * @return Response
     */
    public function store(CreateRegistroDeActividadesRequest $request)
    {
        $input = $request->all();

        $registroDeActividades = $this->registroDeActividadesRepository->create($input);

        Flash::success('Registro De Actividades saved successfully.');

        return redirect(route('registroDeActividades.index'));
    }

    /**
     * Display the specified RegistroDeActividades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $registroDeActividades = $this->registroDeActividadesRepository->find($id);

        if (empty($registroDeActividades)) {
            Flash::error('Registro De Actividades not found');

            return redirect(route('registroDeActividades.index'));
        }

        return view('registro_de_actividades.show')->with('registroDeActividades', $registroDeActividades);
    }

    /**
     * Show the form for editing the specified RegistroDeActividades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $registroDeActividades = $this->registroDeActividadesRepository->find($id);
        $clientes=User::pluck('name','cli_id');
        $servicios=Servicios::pluck('srv_tipo_servicio','srv_id');

        if (empty($registroDeActividades)) {
            Flash::error('Registro De Actividades not found');

            return redirect(route('registroDeActividades.index'));
        }

        return view('registro_de_actividades.edit')->with('registroDeActividades', $registroDeActividades)
        ->with('clientes',$clientes)
        ->with('servicios',$servicios);
    }

    /**
     * Update the specified RegistroDeActividades in storage.
     *
     * @param int $id
     * @param UpdateRegistroDeActividadesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegistroDeActividadesRequest $request)
    {
        $registroDeActividades = $this->registroDeActividadesRepository->find($id);

        if (empty($registroDeActividades)) {
            Flash::error('Registro De Actividades not found');

            return redirect(route('registroDeActividades.index'));
        }

        $registroDeActividades = $this->registroDeActividadesRepository->update($request->all(), $id);

        Flash::success('Registro De Actividades updated successfully.');

        return redirect(route('registroDeActividades.index'));
    }

    /**
     * Remove the specified RegistroDeActividades from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $registroDeActividades = $this->registroDeActividadesRepository->find($id);

        if (empty($registroDeActividades)) {
            Flash::error('Registro De Actividades not found');

            return redirect(route('registroDeActividades.index'));
        }

        $this->registroDeActividadesRepository->delete($id);

        Flash::success('Registro De Actividades deleted successfully.');

        return redirect(route('registroDeActividades.index'));
    }
}
