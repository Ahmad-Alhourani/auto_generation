<?php

    namespace App\Http\Controllers\Backend\GemSighting;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use \Illuminate\Http\Response;
    use App\Http\Requests\Backend\GemSighting\CreateGemSighting;
    use App\Http\Requests\Backend\GemSighting\UpdateGemSighting;
    use App\Repositories\Backend\GemSightingRepository;
    use Prettus\Repository\Criteria\RequestCriteria;
    //use XLabTechs\AdminListing\Facades\AdminListing;
    use App\Models\GemSighting;
    
    use App\Models\Gem;
    use App\Models\Player;

class GemSightingController extends Controller
{
    /** @var gem_sightingRepository */
    private $gem_sightingRepository;


    public function __construct(GemSightingRepository $gem_sightingRepo)
    {
    $this->gem_sightingRepository = $gem_sightingRepo;
    }


    /**
    * Display a listing of the GemSighting.
    *
    * @param  Request $request
    * @return Response | \Illuminate\View\View|Response
    */

    public function index(Request $request)
    {
        $this-> gem_sightingRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> gem_sightingRepository 
         ->with( "gem","player" )
         ->paginate(25);
        

        return view('backend.gem_sightings.index')->with('gem_sightings', $data);
    }

    


    



    

    public function gem(Request $request,$parent_id)
    {
    $data=$this-> gem_sightingRepository
    
        ->with(
            "gem","player")
    
    ->getPaginated(25,['gem_id'=>$parent_id]);

  
    

 return view('backend.gem_sightings.index' )
        ->with(['gem_sightings'=> $data,'part'=>$part]);


    return view('backend.gem_sightings.index')
    ->with('gem_sightings',$data);
    }


    public function player(Request $request,$parent_id)
    {
    $data=$this-> gem_sightingRepository
    
        ->with(
            "gem","player")
    
    ->getPaginated(25,['player_id'=>$parent_id]);

  
    

 return view('backend.gem_sightings.index' )
        ->with(['gem_sightings'=> $data,'part'=>$part]);


    return view('backend.gem_sightings.index')
    ->with('gem_sightings',$data);
    }



    /**
    * Show the form for creating a new GemSighting.
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function create()
    {
        
        $gems = Gem::all();
        $selectedGem = Gem::first()?Gem::first()->_id:0;
           
        $players = Player::all();
        $selectedPlayer = Player::first()?Player::first()->_id:0;
           
        
       

        return view('backend.gem_sightings.create' ,compact(
        
        "gems","selectedGem"
        
         ,"players","selectedPlayer"
        ));
    }

    /**
    * Store a newly created GemSighting in storage.
    *
    * @param CreateGemSightingRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateGemSighting $request)
    {
        $obj=$this-> gem_sightingRepository->create($request->only( [ "gem_id","player_id","founded_at","lat","lng",]));
        

        return redirect()->route('admin.gem_sighting.index')->withFlashSuccess(__('alerts.frontend.gem_sighting.saved'));
    }

    /**
    * Display the specified GemSighting.
    *
    * @param GemSighting $gem_sighting
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function show(GemSighting $gem_sighting)
    {
        return view('backend.gem_sightings.show')->with('gem_sighting', $gem_sighting);
    }


    /**
    * Show the form for editing the specified GemSighting.
    *
    * @param GemSighting $gem_sighting
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function edit(GemSighting $gem_sighting)
    {
        
        $gems = Gem::all();
        $selectedGem = GemSighting::first()->gem_id;
         
        $players = Player::all();
        $selectedPlayer = GemSighting::first()->player_id;
         



        
         

                return view('backend.gem_sightings.edit',compact(
         
        "gems","selectedGem"  
         ,"players","selectedPlayer"  

         )
        )->with('gem_sighting', $gem_sighting);
    }


    /**
    * Update the specified GemSighting in storage.
    *
    * @param UpdateGemSightingRequest $request
    *
    * @param GemSighting $gem_sighting
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    */
    public function update(UpdateGemSighting  $request, GemSighting $gem_sighting)
    {
        $this->gem_sightingRepository->update($gem_sighting, $request->all());


       

    return redirect()->route('admin.gem_sighting.index')->withFlashSuccess(__('alerts.frontend.gem_sighting.updated'));

    }

    /**
    * Remove the specified GemSighting from storage.
    *
    * @param GemSighting $gem_sighting
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function destroy(GemSighting $gem_sighting)
    {
        $this->gem_sightingRepository->delete($gem_sighting);
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.gem_sighting.deleted'));
    }

}