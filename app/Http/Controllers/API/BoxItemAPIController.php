<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBoxItemAPIRequest;
use App\Http\Requests\API\UpdateBoxItemAPIRequest;
use App\Models\BoxItem;
use App\Repositories\Backend\BoxItemRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\ Item;
use App\Models\ Box;


/**
* Class BoxItemAPIController
* @package App\Http\Controllers\API
*/
class BoxItemAPIController extends Controller
{
    /** @var  BoxItemRepository */
    private $boxitemRepository;
    /** @var  BoxItemModel */
    private $boxitemModel;


    public function __construct(BoxItemRepository $boxitemRepo,BoxItem $boxitem)
    {
        $this->boxitemRepository = $boxitemRepo->skipCache(true);
        $this->boxitemModel = $boxitem;

    }

    /**
    * Display a listing of the BoxItem.
    * GET|HEAD /box_items
    *
    * @param Request $request
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function index(Request $request)
    {

        $box_items = $this->boxitemRepository->all();
        return response()->json(['data' => $box_items,'BoxItems retrieved successfully']);
    }

    /**
    * Store a newly created BoxItem in storage.
    * POST /box_items
    *
    * @param CreateBoxItemAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateBoxItemAPIRequest $request)
    {
        $input = $request->all();
        $this->boxitemRepository->create($input);
        return response()->json([ 'BoxItem saved successfully']);
    }

    /**
    * Display the specified BoxItem.
    * GET|HEAD /box_items/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function show($id)
    {
        /** @var BoxItem $boxitem */
   //   $boxitem = $this->boxitemRepository->findByField('id',$id);
        $boxitem = $this-> boxitemModel->find($id);
        return response()->json(['data' => $boxitem,'BoxItem retrieved successfully']);

    }

    /**
    * Update the specified BoxItem in storage.
    * PUT/PATCH /box_items/{id}
    *
    * @param  int $id
    * @param UpdateBoxItemAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function update($id, UpdateBoxItemAPIRequest $request)
    {
        $input = $request->all();
        /** @var BoxItem $boxitem */
        $boxitem = $this-> boxitemModel->find($id);
        $boxitem = $this->boxitemRepository->update( $boxitem,$input);
        return response()->json([ 'BoxItem updated successfully' ]);
    }

    /**
    * Remove the specified BoxItem from storage.
    * DELETE /box_items/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Exception
    */
    public function destroy($id)
    {
        /** @var BoxItem $boxitem */
        $boxitem = $this-> boxitemModel->find($id);
        $boxitem->delete();

        return response()->json('BoxItem deleted successfully');
    }

}