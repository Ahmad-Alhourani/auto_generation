<?php

    namespace App\Http\Controllers\Backend\Player;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use \Illuminate\Http\Response;
    use App\Http\Requests\Backend\Player\CreatePlayer;
    use App\Http\Requests\Backend\Player\UpdatePlayer;
    use App\Repositories\Backend\PlayerRepository;
    use Prettus\Repository\Criteria\RequestCriteria;
    //use XLabTechs\AdminListing\Facades\AdminListing;
    use App\Models\Player;
    
    use App\Models\Gem;
    use App\Models\GemSighting;
    use App\Models\Box;
    use App\Models\BoxSighting;

class PlayerController extends Controller
{
    /** @var playerRepository */
    private $playerRepository;


    public function __construct(PlayerRepository $playerRepo)
    {
    $this->playerRepository = $playerRepo;
    }


    /**
    * Display a listing of the Player.
    *
    * @param  Request $request
    * @return Response | \Illuminate\View\View|Response
    */

    public function index(Request $request)
    {
        $this-> playerRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> playerRepository 
         ->paginate(25);
        

        return view('backend.players.index')->with('players', $data);
    }

    


    
    /*
    * many to many
    */
    
        

    public function gem(Request $request,$foriegn_id)
        {
        $this-> playerRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> playerRepository
        
        ->paginate(25);

        foreach ($data as $key => $items) {
        $temp2 = [];
        $gem_sightings =GemSighting::where('player_id', '=', $items->id)->get();
        foreach ($gem_sightings as $item2) {
        array_push($temp2, $item2->gem_id);
        }
        if (!in_array($foriegn_id, $temp2)) {
        unset($data[$key]);
        }
        }

        $part=count($data);

         


       return view('backend.players.index' )
        ->with(['players'=> $data,'part'=>$part]);
    } 
        

    public function box(Request $request,$foriegn_id)
        {
        $this-> playerRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> playerRepository
        
        ->paginate(25);

        foreach ($data as $key => $items) {
        $temp2 = [];
        $box_sightings =BoxSighting::where('player_id', '=', $items->id)->get();
        foreach ($box_sightings as $item2) {
        array_push($temp2, $item2->box_id);
        }
        if (!in_array($foriegn_id, $temp2)) {
        unset($data[$key]);
        }
        }

        $part=count($data);

         


       return view('backend.players.index' )
        ->with(['players'=> $data,'part'=>$part]);
    } 



    


    /**
    * Show the form for creating a new Player.
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function create()
    {
        
        
       

        return view('backend.players.create' );
    }

    /**
    * Store a newly created Player in storage.
    *
    * @param CreatePlayerRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreatePlayer $request)
    {
        $obj=$this-> playerRepository->create($request->only( [ "name","token","type","birth_date",]));
        

        return redirect()->route('admin.player.index')->withFlashSuccess(__('alerts.frontend.player.saved'));
    }

    /**
    * Display the specified Player.
    *
    * @param Player $player
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function show(Player $player)
    {
        return view('backend.players.show')->with('player', $player);
    }


    /**
    * Show the form for editing the specified Player.
    *
    * @param Player $player
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function edit(Player $player)
    {
        



          
         

                return view('backend.players.edit'
        )->with('player', $player);
    }


    /**
    * Update the specified Player in storage.
    *
    * @param UpdatePlayerRequest $request
    *
    * @param Player $player
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    */
    public function update(UpdatePlayer  $request, Player $player)
    {
        $this->playerRepository->update($player, $request->all());


         

    return redirect()->route('admin.player.index')->withFlashSuccess(__('alerts.frontend.player.updated'));

    }

    /**
    * Remove the specified Player from storage.
    *
    * @param Player $player
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function destroy(Player $player)
    {
        $this->playerRepository->delete($player);
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.player.deleted'));
    }

}