<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLevelGemAPIRequest;
use App\Http\Requests\API\UpdateLevelGemAPIRequest;
use App\Models\LevelGem;
use App\Repositories\Backend\LevelGemRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\ Gem;
use App\Models\ Level;


/**
* Class LevelGemAPIController
* @package App\Http\Controllers\API
*/
class LevelGemAPIController extends Controller
{
    /** @var  LevelGemRepository */
    private $levelgemRepository;
    /** @var  LevelGemModel */
    private $levelgemModel;


    public function __construct(LevelGemRepository $levelgemRepo,LevelGem $levelgem)
    {
        $this->levelgemRepository = $levelgemRepo->skipCache(true);
        $this->levelgemModel = $levelgem;

    }

    /**
    * Display a listing of the LevelGem.
    * GET|HEAD /level_gems
    *
    * @param Request $request
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function index(Request $request)
    {

        $level_gems = $this->levelgemRepository->all();
        return response()->json(['data' => $level_gems,'LevelGems retrieved successfully']);
    }

    /**
    * Store a newly created LevelGem in storage.
    * POST /level_gems
    *
    * @param CreateLevelGemAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateLevelGemAPIRequest $request)
    {
        $input = $request->all();
        $this->levelgemRepository->create($input);
        return response()->json([ 'LevelGem saved successfully']);
    }

    /**
    * Display the specified LevelGem.
    * GET|HEAD /level_gems/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function show($id)
    {
        /** @var LevelGem $levelgem */
   //   $levelgem = $this->levelgemRepository->findByField('id',$id);
        $levelgem = $this-> levelgemModel->find($id);
        return response()->json(['data' => $levelgem,'LevelGem retrieved successfully']);

    }

    /**
    * Update the specified LevelGem in storage.
    * PUT/PATCH /level_gems/{id}
    *
    * @param  int $id
    * @param UpdateLevelGemAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function update($id, UpdateLevelGemAPIRequest $request)
    {
        $input = $request->all();
        /** @var LevelGem $levelgem */
        $levelgem = $this-> levelgemModel->find($id);
        $levelgem = $this->levelgemRepository->update( $levelgem,$input);
        return response()->json([ 'LevelGem updated successfully' ]);
    }

    /**
    * Remove the specified LevelGem from storage.
    * DELETE /level_gems/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Exception
    */
    public function destroy($id)
    {
        /** @var LevelGem $levelgem */
        $levelgem = $this-> levelgemModel->find($id);
        $levelgem->delete();

        return response()->json('LevelGem deleted successfully');
    }

}