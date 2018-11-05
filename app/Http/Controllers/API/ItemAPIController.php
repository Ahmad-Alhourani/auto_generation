<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateItemAPIRequest;
use App\Http\Requests\API\UpdateItemAPIRequest;
use App\Models\Item;
use App\Repositories\Backend\ItemRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


/**
* Class ItemAPIController
* @package App\Http\Controllers\API
*/
class ItemAPIController extends Controller
{
    /** @var  ItemRepository */
    private $itemRepository;
    /** @var  ItemModel */
    private $itemModel;


    public function __construct(ItemRepository $itemRepo,Item $item)
    {
        $this->itemRepository = $itemRepo->skipCache(true);
        $this->itemModel = $item;

    }

    /**
    * Display a listing of the Item.
    * GET|HEAD /items
    *
    * @param Request $request
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function index(Request $request)
    {

        $items = $this->itemRepository->all();
        return response()->json(['data' => $items,'Items retrieved successfully']);
    }

    /**
    * Store a newly created Item in storage.
    * POST /items
    *
    * @param CreateItemAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateItemAPIRequest $request)
    {
        $input = $request->all();
        $this->itemRepository->create($input);
        return response()->json([ 'Item saved successfully']);
    }

    /**
    * Display the specified Item.
    * GET|HEAD /items/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function show($id)
    {
        /** @var Item $item */
   //   $item = $this->itemRepository->findByField('id',$id);
        $item = $this-> itemModel->find($id);
        return response()->json(['data' => $item,'Item retrieved successfully']);

    }

    /**
    * Update the specified Item in storage.
    * PUT/PATCH /items/{id}
    *
    * @param  int $id
    * @param UpdateItemAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function update($id, UpdateItemAPIRequest $request)
    {
        $input = $request->all();
        /** @var Item $item */
        $item = $this-> itemModel->find($id);
        $item = $this->itemRepository->update( $item,$input);
        return response()->json([ 'Item updated successfully' ]);
    }

    /**
    * Remove the specified Item from storage.
    * DELETE /items/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Exception
    */
    public function destroy($id)
    {
        /** @var Item $item */
        $item = $this-> itemModel->find($id);
        $item->delete();

        return response()->json('Item deleted successfully');
    }

}