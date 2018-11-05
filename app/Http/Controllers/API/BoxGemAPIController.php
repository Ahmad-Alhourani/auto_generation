<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateBoxGemAPIRequest;
use App\Http\Requests\API\UpdateBoxGemAPIRequest;
use App\Models\BoxGem;
use App\Repositories\Backend\BoxGemRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\ Gem;
use App\Models\ Box;


/**
* Class BoxGemAPIController
* @package App\Http\Controllers\API
*/
class BoxGemAPIController extends Controller
{
    /** @var  BoxGemRepository */
    private $boxgemRepository;
    /** @var  BoxGemModel */
    private $boxgemModel;


    public function __construct(BoxGemRepository $boxgemRepo,BoxGem $boxgem)
    {
        $this->boxgemRepository = $boxgemRepo->skipCache(true);
        $this->boxgemModel = $boxgem;

    }

    /**
    * Display a listing of the BoxGem.
    * GET|HEAD /box_gems
    *
    * @param Request $request
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function index(Request $request)
    {

        $box_gems = $this->boxgemRepository->all();
        return response()->json(['data' => $box_gems,'BoxGems retrieved successfully']);
    }

    /**
    * Store a newly created BoxGem in storage.
    * POST /box_gems
    *
    * @param CreateBoxGemAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateBoxGemAPIRequest $request)
    {
        $input = $request->all();
        $this->boxgemRepository->create($input);
        return response()->json([ 'BoxGem saved successfully']);
    }

    /**
    * Display the specified BoxGem.
    * GET|HEAD /box_gems/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function show($id)
    {
        /** @var BoxGem $boxgem */
   //   $boxgem = $this->boxgemRepository->findByField('id',$id);
        $boxgem = $this-> boxgemModel->find($id);
        return response()->json(['data' => $boxgem,'BoxGem retrieved successfully']);

    }

    /**
    * Update the specified BoxGem in storage.
    * PUT/PATCH /box_gems/{id}
    *
    * @param  int $id
    * @param UpdateBoxGemAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function update($id, UpdateBoxGemAPIRequest $request)
    {
        $input = $request->all();
        /** @var BoxGem $boxgem */
        $boxgem = $this-> boxgemModel->find($id);
        $boxgem = $this->boxgemRepository->update( $boxgem,$input);
        return response()->json([ 'BoxGem updated successfully' ]);
    }

    /**
    * Remove the specified BoxGem from storage.
    * DELETE /box_gems/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Exception
    */
    public function destroy($id)
    {
        /** @var BoxGem $boxgem */
        $boxgem = $this-> boxgemModel->find($id);
        $boxgem->delete();

        return response()->json('BoxGem deleted successfully');
    }

}