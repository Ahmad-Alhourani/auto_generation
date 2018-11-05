<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLevelAPIRequest;
use App\Http\Requests\API\UpdateLevelAPIRequest;
use App\Models\Level;
use App\Repositories\Backend\LevelRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


/**
* Class LevelAPIController
* @package App\Http\Controllers\API
*/
class LevelAPIController extends Controller
{
    /** @var  LevelRepository */
    private $levelRepository;
    /** @var  LevelModel */
    private $levelModel;


    public function __construct(LevelRepository $levelRepo,Level $level)
    {
        $this->levelRepository = $levelRepo->skipCache(true);
        $this->levelModel = $level;

    }

    /**
    * Display a listing of the Level.
    * GET|HEAD /levels
    *
    * @param Request $request
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function index(Request $request)
    {

        $levels = $this->levelRepository->all();
        return response()->json(['data' => $levels,'Levels retrieved successfully']);
    }

    /**
    * Store a newly created Level in storage.
    * POST /levels
    *
    * @param CreateLevelAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateLevelAPIRequest $request)
    {
        $input = $request->all();
        $this->levelRepository->create($input);
        return response()->json([ 'Level saved successfully']);
    }

    /**
    * Display the specified Level.
    * GET|HEAD /levels/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function show($id)
    {
        /** @var Level $level */
   //   $level = $this->levelRepository->findByField('id',$id);
        $level = $this-> levelModel->find($id);
        return response()->json(['data' => $level,'Level retrieved successfully']);

    }

    /**
    * Update the specified Level in storage.
    * PUT/PATCH /levels/{id}
    *
    * @param  int $id
    * @param UpdateLevelAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function update($id, UpdateLevelAPIRequest $request)
    {
        $input = $request->all();
        /** @var Level $level */
        $level = $this-> levelModel->find($id);
        $level = $this->levelRepository->update( $level,$input);
        return response()->json([ 'Level updated successfully' ]);
    }

    /**
    * Remove the specified Level from storage.
    * DELETE /levels/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Exception
    */
    public function destroy($id)
    {
        /** @var Level $level */
        $level = $this-> levelModel->find($id);
        $level->delete();

        return response()->json('Level deleted successfully');
    }

}