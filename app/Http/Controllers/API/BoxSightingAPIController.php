<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBoxSightingAPIRequest;
use App\Http\Requests\API\UpdateBoxSightingAPIRequest;
use App\Models\BoxSighting;
use App\Repositories\Backend\BoxSightingRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\ Player;
use App\Models\ Box;


/**
* Class BoxSightingAPIController
* @package App\Http\Controllers\API
*/
class BoxSightingAPIController extends Controller
{
    /** @var  BoxSightingRepository */
    private $boxsightingRepository;
    /** @var  BoxSightingModel */
    private $boxsightingModel;


    public function __construct(BoxSightingRepository $boxsightingRepo,BoxSighting $boxsighting)
    {
        $this->boxsightingRepository = $boxsightingRepo->skipCache(true);
        $this->boxsightingModel = $boxsighting;

    }

    /**
    * Display a listing of the BoxSighting.
    * GET|HEAD /box_sightings
    *
    * @param Request $request
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function index(Request $request)
    {

        $box_sightings = $this->boxsightingRepository->all();
        return response()->json(['data' => $box_sightings,'BoxSightings retrieved successfully']);
    }

    /**
    * Store a newly created BoxSighting in storage.
    * POST /box_sightings
    *
    * @param CreateBoxSightingAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateBoxSightingAPIRequest $request)
    {
        $input = $request->all();
        $this->boxsightingRepository->create($input);
        return response()->json([ 'BoxSighting saved successfully']);
    }

    /**
    * Display the specified BoxSighting.
    * GET|HEAD /box_sightings/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function show($id)
    {
        /** @var BoxSighting $boxsighting */
   //   $boxsighting = $this->boxsightingRepository->findByField('id',$id);
        $boxsighting = $this-> boxsightingModel->find($id);
        return response()->json(['data' => $boxsighting,'BoxSighting retrieved successfully']);

    }

    /**
    * Update the specified BoxSighting in storage.
    * PUT/PATCH /box_sightings/{id}
    *
    * @param  int $id
    * @param UpdateBoxSightingAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function update($id, UpdateBoxSightingAPIRequest $request)
    {
        $input = $request->all();
        /** @var BoxSighting $boxsighting */
        $boxsighting = $this-> boxsightingModel->find($id);
        $boxsighting = $this->boxsightingRepository->update( $boxsighting,$input);
        return response()->json([ 'BoxSighting updated successfully' ]);
    }

    /**
    * Remove the specified BoxSighting from storage.
    * DELETE /box_sightings/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Exception
    */
    public function destroy($id)
    {
        /** @var BoxSighting $boxsighting */
        $boxsighting = $this-> boxsightingModel->find($id);
        $boxsighting->delete();

        return response()->json('BoxSighting deleted successfully');
    }

}