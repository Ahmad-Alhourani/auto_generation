<?php

    namespace App\Http\Controllers\Backend\Box;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use \Illuminate\Http\Response;
    use App\Http\Requests\Backend\Box\CreateBox;
    use App\Http\Requests\Backend\Box\UpdateBox;
    use App\Repositories\Backend\BoxRepository;
    use Prettus\Repository\Criteria\RequestCriteria;
    //use XLabTechs\AdminListing\Facades\AdminListing;
    use App\Models\Box;
    
    use App\Models\Gem;
    use App\Models\BoxGem;
    use App\Models\Player;
    use App\Models\BoxSigting;
    use App\Models\Items;
    use App\Models\BoxItem;

class BoxController extends Controller
{
    /** @var boxRepository */
    private $boxRepository;


    public function __construct(BoxRepository $boxRepo)
    {
    $this->boxRepository = $boxRepo;
    }


    /**
    * Display a listing of the Box.
    *
    * @param  Request $request
    * @return Response | \Illuminate\View\View|Response
    */

    public function index(Request $request)
    {
        $this-> boxRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> boxRepository 
         ->paginate(25);
        

        return view('backend.boxes.index')->with('boxes', $data);
    }

    


    
    /*
    * many to many
    */
    
        

    public function gem(Request $request,$foriegn_id)
        {
        $this-> boxRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> boxRepository
        
        ->paginate(25);

        foreach ($data as $key => $items) {
        $temp2 = [];
        $box_gems =BoxGem::where('box_id', '=', $items->id)->get();
        foreach ($box_gems as $item2) {
        array_push($temp2, $item2->gem_id);
        }
        if (!in_array($foriegn_id, $temp2)) {
        unset($data[$key]);
        }
        }

        $part=count($data);

         


       return view('backend.boxes.index' )
        ->with(['boxes'=> $data,'part'=>$part]);
    } 
        

    public function player(Request $request,$foriegn_id)
        {
        $this-> boxRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> boxRepository
        
        ->paginate(25);

        foreach ($data as $key => $items) {
        $temp2 = [];
        $box_sigtings =BoxSigting::where('box_id', '=', $items->id)->get();
        foreach ($box_sigtings as $item2) {
        array_push($temp2, $item2->player_id);
        }
        if (!in_array($foriegn_id, $temp2)) {
        unset($data[$key]);
        }
        }

        $part=count($data);

         


       return view('backend.boxes.index' )
        ->with(['boxes'=> $data,'part'=>$part]);
    } 
        

    public function item(Request $request,$foriegn_id)
        {
        $this-> boxRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> boxRepository
        
        ->paginate(25);

        foreach ($data as $key => $items) {
        $temp2 = [];
        $box_items =BoxItem::where('box_id', '=', $items->id)->get();
        foreach ($box_items as $item2) {
        array_push($temp2, $item2->item_id);
        }
        if (!in_array($foriegn_id, $temp2)) {
        unset($data[$key]);
        }
        }

        $part=count($data);

         


       return view('backend.boxes.index' )
        ->with(['boxes'=> $data,'part'=>$part]);
    } 



    


    /**
    * Show the form for creating a new Box.
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function create()
    {
        
        
       

        return view('backend.boxes.create' );
    }

    /**
    * Store a newly created Box in storage.
    *
    * @param CreateBoxRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateBox $request)
    {
        $obj=$this-> boxRepository->create($request->only( [ "name","description","clickable_radius",]));
        

        return redirect()->route('admin.box.index')->withFlashSuccess(__('alerts.frontend.box.saved'));
    }

    /**
    * Display the specified Box.
    *
    * @param Box $box
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function show(Box $box)
    {
        return view('backend.boxes.show')->with('box', $box);
    }


    /**
    * Show the form for editing the specified Box.
    *
    * @param Box $box
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function edit(Box $box)
    {
        



           
         

                return view('backend.boxes.edit'
        )->with('box', $box);
    }


    /**
    * Update the specified Box in storage.
    *
    * @param UpdateBoxRequest $request
    *
    * @param Box $box
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    */
    public function update(UpdateBox  $request, Box $box)
    {
        $this->boxRepository->update($box, $request->all());


          

    return redirect()->route('admin.box.index')->withFlashSuccess(__('alerts.frontend.box.updated'));

    }

    /**
    * Remove the specified Box from storage.
    *
    * @param Box $box
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function destroy(Box $box)
    {
        $this->boxRepository->delete($box);
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.box.deleted'));
    }

}