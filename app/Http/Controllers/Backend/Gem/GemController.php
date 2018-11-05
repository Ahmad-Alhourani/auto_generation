<?php

    namespace App\Http\Controllers\Backend\Gem;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use \Illuminate\Http\Response;
    use App\Http\Requests\Backend\Gem\CreateGem;
    use App\Http\Requests\Backend\Gem\UpdateGem;
    use App\Repositories\Backend\GemRepository;
    use Prettus\Repository\Criteria\RequestCriteria;
    //use XLabTechs\AdminListing\Facades\AdminListing;
    use App\Models\Gem;
    
    use App\Models\Player;
    use App\Models\GemSighting;
    use App\Models\Level;
    use App\Models\GemLevel;
    use App\Models\Box;
    use App\Models\LevelGem;

class GemController extends Controller
{
    /** @var gemRepository */
    private $gemRepository;


    public function __construct(GemRepository $gemRepo)
    {
    $this->gemRepository = $gemRepo;
    }


    /**
    * Display a listing of the Gem.
    *
    * @param  Request $request
    * @return Response | \Illuminate\View\View|Response
    */

    public function index(Request $request)
    {
        $this-> gemRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> gemRepository 
         ->paginate(25);
        

        return view('backend.gems.index')->with('gems', $data);
    }

    


    
    /*
    * many to many
    */
    
        

    public function player(Request $request,$foriegn_id)
        {
        $this-> gemRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> gemRepository
        
        ->paginate(25);

        foreach ($data as $key => $items) {
        $temp2 = [];
        $gem_sightings =GemSighting::where('gem_id', '=', $items->id)->get();
        foreach ($gem_sightings as $item2) {
        array_push($temp2, $item2->player_id);
        }
        if (!in_array($foriegn_id, $temp2)) {
        unset($data[$key]);
        }
        }

        $part=count($data);

         


       return view('backend.gems.index' )
        ->with(['gems'=> $data,'part'=>$part]);
    } 
        

    public function level(Request $request,$foriegn_id)
        {
        $this-> gemRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> gemRepository
        
        ->paginate(25);

        foreach ($data as $key => $items) {
        $temp2 = [];
        $gem_levels =GemLevel::where('gem_id', '=', $items->id)->get();
        foreach ($gem_levels as $item2) {
        array_push($temp2, $item2->level_id);
        }
        if (!in_array($foriegn_id, $temp2)) {
        unset($data[$key]);
        }
        }

        $part=count($data);

         


       return view('backend.gems.index' )
        ->with(['gems'=> $data,'part'=>$part]);
    } 
        

    public function box(Request $request,$foriegn_id)
        {
        $this-> gemRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> gemRepository
        
        ->paginate(25);

        foreach ($data as $key => $items) {
        $temp2 = [];
        $level_gems =LevelGem::where('gem_id', '=', $items->id)->get();
        foreach ($level_gems as $item2) {
        array_push($temp2, $item2->box_id);
        }
        if (!in_array($foriegn_id, $temp2)) {
        unset($data[$key]);
        }
        }

        $part=count($data);

         


       return view('backend.gems.index' )
        ->with(['gems'=> $data,'part'=>$part]);
    } 



    


    /**
    * Show the form for creating a new Gem.
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function create()
    {
        
        
       

        return view('backend.gems.create' );
    }

    /**
    * Store a newly created Gem in storage.
    *
    * @param CreateGemRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateGem $request)
    {
        $obj=$this-> gemRepository->create($request->only( [ "name","description","is_deleted","radius",]));
        

        return redirect()->route('admin.gem.index')->withFlashSuccess(__('alerts.frontend.gem.saved'));
    }

    /**
    * Display the specified Gem.
    *
    * @param Gem $gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function show(Gem $gem)
    {
        return view('backend.gems.show')->with('gem', $gem);
    }


    /**
    * Show the form for editing the specified Gem.
    *
    * @param Gem $gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function edit(Gem $gem)
    {
        



           
         

                return view('backend.gems.edit'
        )->with('gem', $gem);
    }


    /**
    * Update the specified Gem in storage.
    *
    * @param UpdateGemRequest $request
    *
    * @param Gem $gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    */
    public function update(UpdateGem  $request, Gem $gem)
    {
        $this->gemRepository->update($gem, $request->all());


          

    return redirect()->route('admin.gem.index')->withFlashSuccess(__('alerts.frontend.gem.updated'));

    }

    /**
    * Remove the specified Gem from storage.
    *
    * @param Gem $gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function destroy(Gem $gem)
    {
        $this->gemRepository->delete($gem);
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.gem.deleted'));
    }

}