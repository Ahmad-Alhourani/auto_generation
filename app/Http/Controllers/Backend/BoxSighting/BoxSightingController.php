<?php

    namespace App\Http\Controllers\Backend\BoxSighting;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use \Illuminate\Http\Response;
    use App\Http\Requests\Backend\BoxSighting\CreateBoxSighting;
    use App\Http\Requests\Backend\BoxSighting\UpdateBoxSighting;
    use App\Repositories\Backend\BoxSightingRepository;
    use Prettus\Repository\Criteria\RequestCriteria;
    //use XLabTechs\AdminListing\Facades\AdminListing;
    use App\Models\BoxSighting;
    
    use App\Models\Player;
    use App\Models\Box;

class BoxSightingController extends Controller
{
    /** @var box_sightingRepository */
    private $box_sightingRepository;


    public function __construct(BoxSightingRepository $box_sightingRepo)
    {
    $this->box_sightingRepository = $box_sightingRepo;
    }


    /**
    * Display a listing of the BoxSighting.
    *
    * @param  Request $request
    * @return Response | \Illuminate\View\View|Response
    */

    public function index(Request $request)
    {
        $this-> box_sightingRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> box_sightingRepository 
         ->with( "player","box" )
         ->paginate(25);
        

        return view('backend.box_sightings.index')->with('box_sightings', $data);
    }

    


    



    

    public function player(Request $request,$parent_id)
    {
    $data=$this-> box_sightingRepository
    
        ->with(
            "player","box")
    
    ->getPaginated(25,['player_id'=>$parent_id]);

  
    

 return view('backend.box_sightings.index' )
        ->with(['box_sightings'=> $data,'part'=>$part]);


    return view('backend.box_sightings.index')
    ->with('box_sightings',$data);
    }


    public function box(Request $request,$parent_id)
    {
    $data=$this-> box_sightingRepository
    
        ->with(
            "player","box")
    
    ->getPaginated(25,['box_id'=>$parent_id]);

  
    

 return view('backend.box_sightings.index' )
        ->with(['box_sightings'=> $data,'part'=>$part]);


    return view('backend.box_sightings.index')
    ->with('box_sightings',$data);
    }



    /**
    * Show the form for creating a new BoxSighting.
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function create()
    {
        
        $players = Player::all();
        $selectedPlayer = Player::first()?Player::first()->_id:0;
           
        $boxes = Box::all();
        $selectedBox = Box::first()?Box::first()->_id:0;
           
        
       

        return view('backend.box_sightings.create' ,compact(
        
        "players","selectedPlayer"
        
         ,"boxes","selectedBox"
        ));
    }

    /**
    * Store a newly created BoxSighting in storage.
    *
    * @param CreateBoxSightingRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateBoxSighting $request)
    {
        $obj=$this-> box_sightingRepository->create($request->only( [ "player_id","box_id","lat","lng",]));
        

        return redirect()->route('admin.box_sighting.index')->withFlashSuccess(__('alerts.frontend.box_sighting.saved'));
    }

    /**
    * Display the specified BoxSighting.
    *
    * @param BoxSighting $box_sighting
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function show(BoxSighting $box_sighting)
    {
        return view('backend.box_sightings.show')->with('box_sighting', $box_sighting);
    }


    /**
    * Show the form for editing the specified BoxSighting.
    *
    * @param BoxSighting $box_sighting
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function edit(BoxSighting $box_sighting)
    {
        
        $players = Player::all();
        $selectedPlayer = BoxSighting::first()->player_id;
         
        $boxes = Box::all();
        $selectedBox = BoxSighting::first()->box_id;
         



        
         

                return view('backend.box_sightings.edit',compact(
         
        "players","selectedPlayer"  
         ,"boxes","selectedBox"  

         )
        )->with('box_sighting', $box_sighting);
    }


    /**
    * Update the specified BoxSighting in storage.
    *
    * @param UpdateBoxSightingRequest $request
    *
    * @param BoxSighting $box_sighting
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    */
    public function update(UpdateBoxSighting  $request, BoxSighting $box_sighting)
    {
        $this->box_sightingRepository->update($box_sighting, $request->all());


       

    return redirect()->route('admin.box_sighting.index')->withFlashSuccess(__('alerts.frontend.box_sighting.updated'));

    }

    /**
    * Remove the specified BoxSighting from storage.
    *
    * @param BoxSighting $box_sighting
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function destroy(BoxSighting $box_sighting)
    {
        $this->box_sightingRepository->delete($box_sighting);
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.box_sighting.deleted'));
    }

}