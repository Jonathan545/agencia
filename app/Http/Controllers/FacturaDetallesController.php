<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFacturaDetallesRequest;
use App\Http\Requests\UpdateFacturaDetallesRequest;
use App\Repositories\FacturaDetallesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FacturaDetallesController extends AppBaseController
{
    /** @var  FacturaDetallesRepository */
    private $facturaDetallesRepository;

    public function __construct(FacturaDetallesRepository $facturaDetallesRepo)
    {
        $this->facturaDetallesRepository = $facturaDetallesRepo;
    }

    /**
     * Display a listing of the FacturaDetalles.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $facturaDetalles = $this->facturaDetallesRepository->all();

        return view('factura_detalles.index')
            ->with('facturaDetalles', $facturaDetalles);
    }

    /**
     * Show the form for creating a new FacturaDetalles.
     *
     * @return Response
     */
    public function create()
    {
        return view('factura_detalles.create');
    }

    /**
     * Store a newly created FacturaDetalles in storage.
     *
     * @param CreateFacturaDetallesRequest $request
     *
     * @return Response
     */
    public function store(CreateFacturaDetallesRequest $request)
    {
        $input = $request->all();

        $facturaDetalles = $this->facturaDetallesRepository->create($input);

        Flash::success('Factura Detalles saved successfully.');

        return redirect(route('facturaDetalles.index'));
    }

    /**
     * Display the specified FacturaDetalles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
 return $this->destroy($id);
 }
    //     $facturaDetalles = $this->facturaDetallesRepository->find($id);

    //     if (empty($facturaDetalles)) {
    //         Flash::error('Factura Detalles not found');

    //         return redirect(route('facturaDetalles.index'));
    //     }

    //     return view('factura_detalles.show')->with('facturaDetalles', $facturaDetalles);
    // }

    /**
     * Show the form for editing the specified FacturaDetalles.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facturaDetalles = $this->facturaDetallesRepository->find($id);

        if (empty($facturaDetalles)) {
            Flash::error('Factura Detalles not found');

            return redirect(route('facturaDetalles.index'));
        }

        return view('factura_detalles.edit')->with('facturaDetalles', $facturaDetalles);
    }

    /**
     * Update the specified FacturaDetalles in storage.
     *
     * @param int $id
     * @param UpdateFacturaDetallesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFacturaDetallesRequest $request)
    {
        $facturaDetalles = $this->facturaDetallesRepository->find($id);

        if (empty($facturaDetalles)) {
            Flash::error('Factura Detalles not found');

            return redirect(route('facturaDetalles.index'));
        }

        $facturaDetalles = $this->facturaDetallesRepository->update($request->all(), $id);

        Flash::success('Factura Detalles updated successfully.');

        return redirect(route('facturaDetalles.index'));
    }

    /**
     * Remove the specified FacturaDetalles from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facturaDetalles = $this->facturaDetallesRepository->find($id);



        // if (empty($facturaDetalles)) {
        //     Flash::error('Factura Detalles not found');

        //     return redirect(route('facturaDetalles.index'));
        // }

        $this->facturaDetallesRepository->delete($id);

            // Flash::success('Factura Detalles deleted successfully.');

        return redirect(route('facturas.edit',$facturasDetalles->fac_id));
    }
}
