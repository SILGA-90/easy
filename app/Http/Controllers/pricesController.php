<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepricesRequest;
use App\Http\Requests\UpdatepricesRequest;
use App\Repositories\pricesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class pricesController extends AppBaseController
{
    /** @var  pricesRepository */
    private $pricesRepository;

    public function __construct(pricesRepository $pricesRepo)
    {
        $this->pricesRepository = $pricesRepo;
    }

    /**
     * Display a listing of the prices.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $prices = $this->pricesRepository->all();

        return view('prices.index')
            ->with('prices', $prices);
    }

    /**
     * Show the form for creating a new prices.
     *
     * @return Response
     */
    public function create()
    {
        return view('prices.create');
    }

    /**
     * Store a newly created prices in storage.
     *
     * @param CreatepricesRequest $request
     *
     * @return Response
     */
    public function store(CreatepricesRequest $request)
    {
        $input = $request->all();

        $prices = $this->pricesRepository->create($input);

        Flash::success('Prices saved successfully.');

        return redirect(route('prices.index'));
    }

    /**
     * Display the specified prices.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prices = $this->pricesRepository->find($id);

        if (empty($prices)) {
            Flash::error('Prices not found');

            return redirect(route('prices.index'));
        }

        return view('prices.show')->with('prices', $prices);
    }

    /**
     * Show the form for editing the specified prices.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prices = $this->pricesRepository->find($id);

        if (empty($prices)) {
            Flash::error('Prices not found');

            return redirect(route('prices.index'));
        }

        return view('prices.edit')->with('prices', $prices);
    }

    /**
     * Update the specified prices in storage.
     *
     * @param int $id
     * @param UpdatepricesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepricesRequest $request)
    {
        $prices = $this->pricesRepository->find($id);

        if (empty($prices)) {
            Flash::error('Prices not found');

            return redirect(route('prices.index'));
        }

        $prices = $this->pricesRepository->update($request->all(), $id);

        Flash::success('Prices updated successfully.');

        return redirect(route('prices.index'));
    }

    /**
     * Remove the specified prices from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prices = $this->pricesRepository->find($id);

        if (empty($prices)) {
            Flash::error('Prices not found');

            return redirect(route('prices.index'));
        }

        $this->pricesRepository->delete($id);

        Flash::success('Prices deleted successfully.');

        return redirect(route('prices.index'));
    }
}
