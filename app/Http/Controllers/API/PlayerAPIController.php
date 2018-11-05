<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePlayerAPIRequest;
use App\Http\Requests\API\UpdatePlayerAPIRequest;
use App\Models\Player;
use App\Repositories\Backend\PlayerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


/**
* Class PlayerAPIController
* @package App\Http\Controllers\API
*/
class PlayerAPIController extends Controller
{
    /** @var  PlayerRepository */
    private $playerRepository;
    /** @var  PlayerModel */
    private $playerModel;


    public function __construct(PlayerRepository $playerRepo,Player $player)
    {
        $this->playerRepository = $playerRepo->skipCache(true);
        $this->playerModel = $player;

    }

    /**
    * Display a listing of the Player.
    * GET|HEAD /players
    *
    * @param Request $request
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function index(Request $request)
    {

        $players = $this->playerRepository->all();
        return response()->json(['data' => $players,'Players retrieved successfully']);
    }

    /**
    * Store a newly created Player in storage.
    * POST /players
    *
    * @param CreatePlayerAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreatePlayerAPIRequest $request)
    {
        $input = $request->all();
        $this->playerRepository->create($input);
        return response()->json([ 'Player saved successfully']);
    }

    /**
    * Display the specified Player.
    * GET|HEAD /players/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function show($id)
    {
        /** @var Player $player */
   //   $player = $this->playerRepository->findByField('id',$id);
        $player = $this-> playerModel->find($id);
        return response()->json(['data' => $player,'Player retrieved successfully']);

    }

    /**
    * Update the specified Player in storage.
    * PUT/PATCH /players/{id}
    *
    * @param  int $id
    * @param UpdatePlayerAPIRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function update($id, UpdatePlayerAPIRequest $request)
    {
        $input = $request->all();
        /** @var Player $player */
        $player = $this-> playerModel->find($id);
        $player = $this->playerRepository->update( $player,$input);
        return response()->json([ 'Player updated successfully' ]);
    }

    /**
    * Remove the specified Player from storage.
    * DELETE /players/{id}
    *
    * @param  int $id
    *
    * @return Response | \Illuminate\View\View|Response
    * @throws \Exception
    */
    public function destroy($id)
    {
        /** @var Player $player */
        $player = $this-> playerModel->find($id);
        $player->delete();

        return response()->json('Player deleted successfully');
    }

}