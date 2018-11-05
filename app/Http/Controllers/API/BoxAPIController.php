<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBoxAPIRequest;
use App\Http\Requests\API\UpdateBoxAPIRequest;
use App\Models\Box;
use App\Repositories\Backend\BoxRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


/**
* Class BoxAPIController
* @package App\Http\Controllers\API
*/
class BoxAPIController extends Controller
{
    /** @var  BoxRepository */
    private $boxRepository;
    /** @var  BoxModel */
    private $boxModel;


    public function __construct(BoxRepository $boxRepo,Box $box)
    {
        $this->boxRepository = $boxRepo->skipCache(true);
        $this->boxModel = $box;

    }

    /**
    * Display a listing of the Box.
    * GET|HEAD /boxes
    *
    * @param Request $request
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function index(Request $request)
    {

        $boxes = $this->boxRepository->all();
        return response()->json(['data' => $boxes,'Boxes retrieved successfully']);
    }

    /**
    * Store a newly created Box in storage.
    * POST /boxes
    *
    * @param CreateBoxAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateBoxAPIRequest $request)
    {
        $input = $request->all();
        $this->boxRepository->create($input);
        return response()->json([ 'Box saved successfully']);
    }

    /**
    * Display the specified Box.
    * GET|HEAD /boxes/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function show($id)
    {
        /** @var Box $box */
   //   $box = $this->boxRepository->findByField('id',$id);
        $box = $this-> boxModel->find($id);
        return response()->json(['data' => $box,'Box retrieved successfully']);

    }

    /**
    * Update the specified Box in storage.
    * PUT/PATCH /boxes/{id}
    *
    * @param  int $id
    * @param UpdateBoxAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function update($id, UpdateBoxAPIRequest $request)
    {
        $input = $request->all();
        /** @var Box $box */
        $box = $this-> boxModel->find($id);
        $box = $this->boxRepository->update( $box,$input);
        return response()->json([ 'Box updated successfully' ]);
    }

    /**
    * Remove the specified Box from storage.
    * DELETE /boxes/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Exception
    */
    public function destroy($id)
    {
        /** @var Box $box */
        $box = $this-> boxModel->find($id);
        $box->delete();

        return response()->json('Box deleted successfully');
    }

}