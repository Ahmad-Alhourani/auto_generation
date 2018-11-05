<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGemSightingAPIRequest;
use App\Http\Requests\API\UpdateGemSightingAPIRequest;
use App\Models\GemSighting;
use App\Repositories\Backend\GemSightingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\ Gem;
use App\Models\ Player;


/**
* Class GemSightingAPIController
* @package App\Http\Controllers\API
*/
class GemSightingAPIController extends Controller
{
    /** @var  GemSightingRepository */
    private $gemsightingRepository;
    /** @var  GemSightingModel */
    private $gemsightingModel;


    public function __construct(GemSightingRepository $gemsightingRepo,GemSighting $gemsighting)
    {
        $this->gemsightingRepository = $gemsightingRepo->skipCache(true);
        $this->gemsightingModel = $gemsighting;

    }

    /**
    * Display a listing of the GemSighting.
    * GET|HEAD /gem_sightings
    *
    * @param Request $request
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function index(Request $request)
    {

        $gem_sightings = $this->gemsightingRepository->all();
        return response()->json(['data' => $gem_sightings,'GemSightings retrieved successfully']);
    }

    /**
    * Store a newly created GemSighting in storage.
    * POST /gem_sightings
    *
    * @param CreateGemSightingAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateGemSightingAPIRequest $request)
    {
        $input = $request->all();
        $this->gemsightingRepository->create($input);
        return response()->json([ 'GemSighting saved successfully']);
    }

    /**
    * Display the specified GemSighting.
    * GET|HEAD /gem_sightings/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function show($id)
    {
        /** @var GemSighting $gemsighting */
   //   $gemsighting = $this->gemsightingRepository->findByField('id',$id);
        $gemsighting = $this-> gemsightingModel->find($id);
        return response()->json(['data' => $gemsighting,'GemSighting retrieved successfully']);

    }

    /**
    * Update the specified GemSighting in storage.
    * PUT/PATCH /gem_sightings/{id}
    *
    * @param  int $id
    * @param UpdateGemSightingAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function update($id, UpdateGemSightingAPIRequest $request)
    {
        $input = $request->all();
        /** @var GemSighting $gemsighting */
        $gemsighting = $this-> gemsightingModel->find($id);
        $gemsighting = $this->gemsightingRepository->update( $gemsighting,$input);
        return response()->json([ 'GemSighting updated successfully' ]);
    }

    /**
    * Remove the specified GemSighting from storage.
    * DELETE /gem_sightings/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Exception
    */
    public function destroy($id)
    {
        /** @var GemSighting $gemsighting */
        $gemsighting = $this-> gemsightingModel->find($id);
        $gemsighting->delete();

        return response()->json('GemSighting deleted successfully');
    }

}