<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNosotrosRequest;
use App\Http\Requests\UpdateNosotrosRequest;
use App\Repositories\NosotrosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NosotrosController extends AppBaseController
{
    /** @var  NosotrosRepository */
    private $nosotrosRepository;

    public function __construct(NosotrosRepository $nosotrosRepo)
    {
        $this->nosotrosRepository = $nosotrosRepo;
    }

    /**
     * Display a listing of the Nosotros.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nosotros = $this->nosotrosRepository->all();

        return view('nosotros.index')
            ->with('nosotros', $nosotros);
    }

    /**
     * Show the form for creating a new Nosotros.
     *
     * @return Response
     */
    public function create()
    {
        return view('nosotros.create');
    }

    /**
     * Store a newly created Nosotros in storage.
     *
     * @param CreateNosotrosRequest $request
     *
     * @return Response
     */
    public function store(CreateNosotrosRequest $request)
    {
        $input = $request->all();

        $nosotros = $this->nosotrosRepository->create($input);

        Flash::success('Nosotros saved successfully.');

        return redirect(route('nosotros.index'));
    }

    /**
     * Display the specified Nosotros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nosotros = $this->nosotrosRepository->find($id);

        if (empty($nosotros)) {
            Flash::error('Nosotros not found');

            return redirect(route('nosotros.index'));
        }

        return view('nosotros.show')->with('nosotros', $nosotros);
    }

    /**
     * Show the form for editing the specified Nosotros.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nosotros = $this->nosotrosRepository->find($id);

        if (empty($nosotros)) {
            Flash::error('Nosotros not found');

            return redirect(route('nosotros.index'));
        }

        return view('nosotros.edit')->with('nosotros', $nosotros);
    }

    /**
     * Update the specified Nosotros in storage.
     *
     * @param int $id
     * @param UpdateNosotrosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNosotrosRequest $request)
    {
        $nosotros = $this->nosotrosRepository->find($id);

        if (empty($nosotros)) {
            Flash::error('Nosotros not found');

            return redirect(route('nosotros.index'));
        }

        $nosotros = $this->nosotrosRepository->update($request->all(), $id);

        Flash::success('Nosotros updated successfully.');

        return redirect(route('nosotros.index'));
    }

    /**
     * Remove the specified Nosotros from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nosotros = $this->nosotrosRepository->find($id);

        if (empty($nosotros)) {
            Flash::error('Nosotros not found');

            return redirect(route('nosotros.index'));
        }

        $this->nosotrosRepository->delete($id);

        Flash::success('Nosotros deleted successfully.');

        return redirect(route('nosotros.index'));
    }
}
