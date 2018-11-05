<?php

    namespace App\Http\Controllers\Backend\LevelGem;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use \Illuminate\Http\Response;
    use App\Http\Requests\Backend\LevelGem\CreateLevelGem;
    use App\Http\Requests\Backend\LevelGem\UpdateLevelGem;
    use App\Repositories\Backend\LevelGemRepository;
    use Prettus\Repository\Criteria\RequestCriteria;
    //use XLabTechs\AdminListing\Facades\AdminListing;
    use App\Models\LevelGem;
    
    use App\Models\Gem;
    use App\Models\Level;

class LevelGemController extends Controller
{
    /** @var level_gemRepository */
    private $level_gemRepository;


    public function __construct(LevelGemRepository $level_gemRepo)
    {
    $this->level_gemRepository = $level_gemRepo;
    }


    /**
    * Display a listing of the LevelGem.
    *
    * @param  Request $request
    * @return Response | \Illuminate\View\View|Response
    */

    public function index(Request $request)
    {
        $this-> level_gemRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> level_gemRepository 
         ->with( "gem","level" )
         ->paginate(25);
        

        return view('backend.level_gems.index')->with('level_gems', $data);
    }

    


    



    

    public function gem(Request $request,$parent_id)
    {
    $data=$this-> level_gemRepository
    
        ->with(
            "gem","level")
    
    ->getPaginated(25,['gem_id'=>$parent_id]);

  
    

 return view('backend.level_gems.index' )
        ->with(['level_gems'=> $data,'part'=>$part]);


    return view('backend.level_gems.index')
    ->with('level_gems',$data);
    }


    public function level(Request $request,$parent_id)
    {
    $data=$this-> level_gemRepository
    
        ->with(
            "gem","level")
    
    ->getPaginated(25,['level_id'=>$parent_id]);

  
    

 return view('backend.level_gems.index' )
        ->with(['level_gems'=> $data,'part'=>$part]);


    return view('backend.level_gems.index')
    ->with('level_gems',$data);
    }



    /**
    * Show the form for creating a new LevelGem.
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function create()
    {
        
        $gems = Gem::all();
        $selectedGem = Gem::first()?Gem::first()->_id:0;
           
        $levels = Level::all();
        $selectedLevel = Level::first()?Level::first()->_id:0;
           
        
       

        return view('backend.level_gems.create' ,compact(
        
        "gems","selectedGem"
        
         ,"levels","selectedLevel"
        ));
    }

    /**
    * Store a newly created LevelGem in storage.
    *
    * @param CreateLevelGemRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateLevelGem $request)
    {
        $obj=$this-> level_gemRepository->create($request->only( [ "gem_id","level_id",]));
        

        return redirect()->route('admin.level_gem.index')->withFlashSuccess(__('alerts.frontend.level_gem.saved'));
    }

    /**
    * Display the specified LevelGem.
    *
    * @param LevelGem $level_gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function show(LevelGem $level_gem)
    {
        return view('backend.level_gems.show')->with('level_gem', $level_gem);
    }


    /**
    * Show the form for editing the specified LevelGem.
    *
    * @param LevelGem $level_gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function edit(LevelGem $level_gem)
    {
        
        $gems = Gem::all();
        $selectedGem = LevelGem::first()->gem_id;
         
        $levels = Level::all();
        $selectedLevel = LevelGem::first()->level_id;
         



        
         

                return view('backend.level_gems.edit',compact(
         
        "gems","selectedGem"  
         ,"levels","selectedLevel"  

         )
        )->with('level_gem', $level_gem);
    }


    /**
    * Update the specified LevelGem in storage.
    *
    * @param UpdateLevelGemRequest $request
    *
    * @param LevelGem $level_gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    */
    public function update(UpdateLevelGem  $request, LevelGem $level_gem)
    {
        $this->level_gemRepository->update($level_gem, $request->all());


       

    return redirect()->route('admin.level_gem.index')->withFlashSuccess(__('alerts.frontend.level_gem.updated'));

    }

    /**
    * Remove the specified LevelGem from storage.
    *
    * @param LevelGem $level_gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function destroy(LevelGem $level_gem)
    {
        $this->level_gemRepository->delete($level_gem);
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.level_gem.deleted'));
    }

}