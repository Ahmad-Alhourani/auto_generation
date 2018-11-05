<?php

    namespace App\Http\Controllers\Backend\Level;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use \Illuminate\Http\Response;
    use App\Http\Requests\Backend\Level\CreateLevel;
    use App\Http\Requests\Backend\Level\UpdateLevel;
    use App\Repositories\Backend\LevelRepository;
    use Prettus\Repository\Criteria\RequestCriteria;
    //use XLabTechs\AdminListing\Facades\AdminListing;
    use App\Models\Level;
    
    use App\Models\Gem;
    use App\Models\LevelGem;

class LevelController extends Controller
{
    /** @var levelRepository */
    private $levelRepository;


    public function __construct(LevelRepository $levelRepo)
    {
    $this->levelRepository = $levelRepo;
    }


    /**
    * Display a listing of the Level.
    *
    * @param  Request $request
    * @return Response | \Illuminate\View\View|Response
    */

    public function index(Request $request)
    {
        $this-> levelRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> levelRepository 
         ->paginate(25);
        

        return view('backend.levels.index')->with('levels', $data);
    }

    


    
    /*
    * many to many
    */
    
        

    public function gem(Request $request,$foriegn_id)
        {
        $this-> levelRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> levelRepository
        
        ->paginate(25);

        foreach ($data as $key => $items) {
        $temp2 = [];
        $level_gems =LevelGem::where('level_id', '=', $items->id)->get();
        foreach ($level_gems as $item2) {
        array_push($temp2, $item2->gem_id);
        }
        if (!in_array($foriegn_id, $temp2)) {
        unset($data[$key]);
        }
        }

        $part=count($data);

         


       return view('backend.levels.index' )
        ->with(['levels'=> $data,'part'=>$part]);
    } 



    


    /**
    * Show the form for creating a new Level.
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function create()
    {
        
        
       

        return view('backend.levels.create' );
    }

    /**
    * Store a newly created Level in storage.
    *
    * @param CreateLevelRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateLevel $request)
    {
        $obj=$this-> levelRepository->create($request->only( [ "name","order","description","is_deleted","visible_radius",]));
        

        return redirect()->route('admin.level.index')->withFlashSuccess(__('alerts.frontend.level.saved'));
    }

    /**
    * Display the specified Level.
    *
    * @param Level $level
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function show(Level $level)
    {
        return view('backend.levels.show')->with('level', $level);
    }


    /**
    * Show the form for editing the specified Level.
    *
    * @param Level $level
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function edit(Level $level)
    {
        



         
         

                return view('backend.levels.edit'
        )->with('level', $level);
    }


    /**
    * Update the specified Level in storage.
    *
    * @param UpdateLevelRequest $request
    *
    * @param Level $level
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    */
    public function update(UpdateLevel  $request, Level $level)
    {
        $this->levelRepository->update($level, $request->all());


        

    return redirect()->route('admin.level.index')->withFlashSuccess(__('alerts.frontend.level.updated'));

    }

    /**
    * Remove the specified Level from storage.
    *
    * @param Level $level
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function destroy(Level $level)
    {
        $this->levelRepository->delete($level);
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.level.deleted'));
    }

}