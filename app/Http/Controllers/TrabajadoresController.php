<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrabajadoresRequest;
use App\Http\Requests\UpdateTrabajadoresRequest;
use App\Repositories\TrabajadoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Nosotros;
use DB;

class TrabajadoresController extends AppBaseController
{
    /** @var  TrabajadoresRepository */
    private $trabajadoresRepository;

    public function __construct(TrabajadoresRepository $trabajadoresRepo)
    {
        $this->trabajadoresRepository = $trabajadoresRepo;
    }

    /**
     * Display a listing of the Trabajadores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $trabajadores = $this->trabajadoresRepository->all();
        $trabajadores=DB::select("  SELECT  tb.trab_id,                
                                       e.ent_id,
                                       e.ent_nombre_entidad,
                                       tb.trab_nombres,
                                       tb.trab_apellidos,
                                       tb.trab_genero,
                                       tb.trab_estado_civil,
                                       tb.trab_telefono,
                                       tb.trab_correo,
                                       tb.trab_cedula,
                                       tb.trab_rol_trabajo
                                       
 FROM trabajadores tb

JOIN entidad e ON e.ent_id=tb.ent_id
GROUP BY tb.trab_id
            ");
        return view('trabajadores.index')
            ->with('trabajadores', $trabajadores);
    }

    /**
     * Show the form for creating a new Trabajadores.
     *
     * @return Response
     */
    public function create()
    {
        $entidad=Nosotros::pluck('ent_nombre_entidad','ent_id');
        return view('trabajadores.create')
        ->with('entidad',$entidad);
    }

    /**
     * Store a newly created Trabajadores in storage.
     *
     * @param CreateTrabajadoresRequest $request
     *
     * @return Response
     */
    public function store(CreateTrabajadoresRequest $request)
    {
        $input = $request->all();

        $trabajadores = $this->trabajadoresRepository->create($input);

        Flash::success('Trabajadores Guardado Correctamente.');

        return redirect(route('trabajadores.index'));
    }

    /**
     * Display the specified Trabajadores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabajadores = $this->trabajadoresRepository->find($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        return view('trabajadores.show')->with('trabajadores', $trabajadores);
    }

    /**
     * Show the form for editing the specified Trabajadores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trabajadores = $this->trabajadoresRepository->find($id);

  $entidad=Nosotros::pluck('ent_nombre_entidad','ent_id');


        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        return view('trabajadores.edit')->with('trabajadores', $trabajadores)
        ->with('entidad',$entidad)
        ;
    }

    /**
     * Update the specified Trabajadores in storage.
     *
     * @param int $id
     * @param UpdateTrabajadoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrabajadoresRequest $request)
    {
        $trabajadores = $this->trabajadoresRepository->find($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        $trabajadores = $this->trabajadoresRepository->update($request->all(), $id);

        Flash::success('Trabajadores updated successfully.');

        return redirect(route('trabajadores.index'));
    }

    /**
     * Remove the specified Trabajadores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabajadores = $this->trabajadoresRepository->find($id);

        if (empty($trabajadores)) {
            Flash::error('Trabajadores not found');

            return redirect(route('trabajadores.index'));
        }

        $this->trabajadoresRepository->delete($id);

        Flash::success('Trabajadores deleted successfully.');

        return redirect(route('trabajadores.index'));
    }
}
