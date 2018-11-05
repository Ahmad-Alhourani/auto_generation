<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateGemAPIRequest;
use App\Http\Requests\API\UpdateGemAPIRequest;
use App\Models\Gem;
use App\Repositories\Backend\GemRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


/**
* Class GemAPIController
* @package App\Http\Controllers\API
*/
class GemAPIController extends Controller
{
    /** @var  GemRepository */
    private $gemRepository;
    /** @var  GemModel */
    private $gemModel;


    public function __construct(GemRepository $gemRepo,Gem $gem)
    {
        $this->gemRepository = $gemRepo->skipCache(true);
        $this->gemModel = $gem;

    }

    /**
    * Display a listing of the Gem.
    * GET|HEAD /gems
    *
    * @param Request $request
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function index(Request $request)
    {

        $gems = $this->gemRepository->all();
        return response()->json(['data' => $gems,'Gems retrieved successfully']);
    }

    /**
    * Store a newly created Gem in storage.
    * POST /gems
    *
    * @param CreateGemAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateGemAPIRequest $request)
    {
        $input = $request->all();
        $this->gemRepository->create($input);
        return response()->json([ 'Gem saved successfully']);
    }

    /**
    * Display the specified Gem.
    * GET|HEAD /gems/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function show($id)
    {
        /** @var Gem $gem */
   //   $gem = $this->gemRepository->findByField('id',$id);
        $gem = $this-> gemModel->find($id);
        return response()->json(['data' => $gem,'Gem retrieved successfully']);

    }

    /**
    * Update the specified Gem in storage.
    * PUT/PATCH /gems/{id}
    *
    * @param  int $id
    * @param UpdateGemAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function update($id, UpdateGemAPIRequest $request)
    {
        $input = $request->all();
        /** @var Gem $gem */
        $gem = $this-> gemModel->find($id);
        $gem = $this->gemRepository->update( $gem,$input);
        return response()->json([ 'Gem updated successfully' ]);
    }

    /**
    * Remove the specified Gem from storage.
    * DELETE /gems/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Exception
    */
    public function destroy($id)
    {
        /** @var Gem $gem */
        $gem = $this-> gemModel->find($id);
        $gem->delete();

        return response()->json('Gem deleted successfully');
    }

}