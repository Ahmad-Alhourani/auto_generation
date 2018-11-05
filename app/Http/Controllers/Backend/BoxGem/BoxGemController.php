<?php

    namespace App\Http\Controllers\Backend\BoxGem;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use \Illuminate\Http\Response;
    use App\Http\Requests\Backend\BoxGem\CreateBoxGem;
    use App\Http\Requests\Backend\BoxGem\UpdateBoxGem;
    use App\Repositories\Backend\BoxGemRepository;
    use Prettus\Repository\Criteria\RequestCriteria;
    //use XLabTechs\AdminListing\Facades\AdminListing;
    use App\Models\BoxGem;
    
    use App\Models\Gem;
    use App\Models\Box;

class BoxGemController extends Controller
{
    /** @var box_gemRepository */
    private $box_gemRepository;


    public function __construct(BoxGemRepository $box_gemRepo)
    {
    $this->box_gemRepository = $box_gemRepo;
    }


    /**
    * Display a listing of the BoxGem.
    *
    * @param  Request $request
    * @return Response | \Illuminate\View\View|Response
    */

    public function index(Request $request)
    {
        $this-> box_gemRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> box_gemRepository 
         ->with( "gem","box" )
         ->paginate(25);
        

        return view('backend.box_gems.index')->with('box_gems', $data);
    }

    


    



    

    public function gem(Request $request,$parent_id)
    {
    $data=$this-> box_gemRepository
    
        ->with(
            "gem","box")
    
    ->getPaginated(25,['gem_id'=>$parent_id]);

  
    

 return view('backend.box_gems.index' )
        ->with(['box_gems'=> $data,'part'=>$part]);


    return view('backend.box_gems.index')
    ->with('box_gems',$data);
    }


    public function box(Request $request,$parent_id)
    {
    $data=$this-> box_gemRepository
    
        ->with(
            "gem","box")
    
    ->getPaginated(25,['box_id'=>$parent_id]);

  
    

 return view('backend.box_gems.index' )
        ->with(['box_gems'=> $data,'part'=>$part]);


    return view('backend.box_gems.index')
    ->with('box_gems',$data);
    }



    /**
    * Show the form for creating a new BoxGem.
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function create()
    {
        
        $gems = Gem::all();
        $selectedGem = Gem::first()?Gem::first()->_id:0;
           
        $boxes = Box::all();
        $selectedBox = Box::first()?Box::first()->_id:0;
           
        
       

        return view('backend.box_gems.create' ,compact(
        
        "gems","selectedGem"
        
         ,"boxes","selectedBox"
        ));
    }

    /**
    * Store a newly created BoxGem in storage.
    *
    * @param CreateBoxGemRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateBoxGem $request)
    {
        $obj=$this-> box_gemRepository->create($request->only( [ "gem_id","box_id",]));
        

        return redirect()->route('admin.box_gem.index')->withFlashSuccess(__('alerts.frontend.box_gem.saved'));
    }

    /**
    * Display the specified BoxGem.
    *
    * @param BoxGem $box_gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function show(BoxGem $box_gem)
    {
        return view('backend.box_gems.show')->with('box_gem', $box_gem);
    }


    /**
    * Show the form for editing the specified BoxGem.
    *
    * @param BoxGem $box_gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function edit(BoxGem $box_gem)
    {
        
        $gems = Gem::all();
        $selectedGem = BoxGem::first()->gem_id;
         
        $boxes = Box::all();
        $selectedBox = BoxGem::first()->box_id;
         



        
         

                return view('backend.box_gems.edit',compact(
         
        "gems","selectedGem"  
         ,"boxes","selectedBox"  

         )
        )->with('box_gem', $box_gem);
    }


    /**
    * Update the specified BoxGem in storage.
    *
    * @param UpdateBoxGemRequest $request
    *
    * @param BoxGem $box_gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    */
    public function update(UpdateBoxGem  $request, BoxGem $box_gem)
    {
        $this->box_gemRepository->update($box_gem, $request->all());


       

    return redirect()->route('admin.box_gem.index')->withFlashSuccess(__('alerts.frontend.box_gem.updated'));

    }

    /**
    * Remove the specified BoxGem from storage.
    *
    * @param BoxGem $box_gem
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function destroy(BoxGem $box_gem)
    {
        $this->box_gemRepository->delete($box_gem);
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.box_gem.deleted'));
    }

}