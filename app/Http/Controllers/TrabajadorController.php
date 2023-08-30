<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrabajadorRequest;
use App\Http\Requests\UpdateTrabajadorRequest;
use App\Repositories\TrabajadorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TrabajadorController extends AppBaseController
{
    /** @var  TrabajadorRepository */
    private $trabajadorRepository;

    public function __construct(TrabajadorRepository $trabajadorRepo)
    {
        $this->trabajadorRepository = $trabajadorRepo;
    }

    /**
     * Display a listing of the Trabajador.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->trabajadorRepository->pushCriteria(new RequestCriteria($request));
        $trabajadors = $this->trabajadorRepository->all();

        return view('trabajadors.index')
            ->with('trabajadors', $trabajadors);
    }

    /**
     * Show the form for creating a new Trabajador.
     *
     * @return Response
     */
    public function create()
    {
        return view('trabajadors.create');
    }

    /**
     * Store a newly created Trabajador in storage.
     *
     * @param CreateTrabajadorRequest $request
     *
     * @return Response
     */
    public function store(CreateTrabajadorRequest $request)
    {
        $input = $request->all();

        $trabajador = $this->trabajadorRepository->create($input);

        Flash::success('Trabajador saved successfully.');

        return redirect(route('trabajadors.index'));
    }

    /**
     * Display the specified Trabajador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabajador = $this->trabajadorRepository->findWithoutFail($id);

        if (empty($trabajador)) {
            Flash::error('Trabajador not found');

            return redirect(route('trabajadors.index'));
        }

        return view('trabajadors.show')->with('trabajador', $trabajador);
    }

    /**
     * Show the form for editing the specified Trabajador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trabajador = $this->trabajadorRepository->findWithoutFail($id);

        if (empty($trabajador)) {
            Flash::error('Trabajador not found');

            return redirect(route('trabajadors.index'));
        }

        return view('trabajadors.edit')->with('trabajador', $trabajador);
    }

    /**
     * Update the specified Trabajador in storage.
     *
     * @param  int              $id
     * @param UpdateTrabajadorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrabajadorRequest $request)
    {
        $trabajador = $this->trabajadorRepository->findWithoutFail($id);

        if (empty($trabajador)) {
            Flash::error('Trabajador not found');

            return redirect(route('trabajadors.index'));
        }

        $trabajador = $this->trabajadorRepository->update($request->all(), $id);

        Flash::success('Trabajador updated successfully.');

        return redirect(route('trabajadors.index'));
    }

    /**
     * Remove the specified Trabajador from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabajador = $this->trabajadorRepository->findWithoutFail($id);

        if (empty($trabajador)) {
            Flash::error('Trabajador not found');

            return redirect(route('trabajadors.index'));
        }

        $this->trabajadorRepository->delete($id);

        Flash::success('Trabajador deleted successfully.');

        return redirect(route('trabajadors.index'));
    }
}
