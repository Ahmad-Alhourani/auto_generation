<?php

    namespace App\Http\Controllers\Backend\BoxItem;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use \Illuminate\Http\Response;
    use App\Http\Requests\Backend\BoxItem\CreateBoxItem;
    use App\Http\Requests\Backend\BoxItem\UpdateBoxItem;
    use App\Repositories\Backend\BoxItemRepository;
    use Prettus\Repository\Criteria\RequestCriteria;
    //use XLabTechs\AdminListing\Facades\AdminListing;
    use App\Models\BoxItem;
    
    use App\Models\Item;
    use App\Models\Box;

class BoxItemController extends Controller
{
    /** @var box_itemRepository */
    private $box_itemRepository;


    public function __construct(BoxItemRepository $box_itemRepo)
    {
    $this->box_itemRepository = $box_itemRepo;
    }


    /**
    * Display a listing of the BoxItem.
    *
    * @param  Request $request
    * @return Response | \Illuminate\View\View|Response
    */

    public function index(Request $request)
    {
        $this-> box_itemRepository->pushCriteria(new RequestCriteria($request));
        $data=$this-> box_itemRepository 
         ->with( "item","box" )
         ->paginate(25);
        

        return view('backend.box_items.index')->with('box_items', $data);
    }

    


    



    

    public function item(Request $request,$parent_id)
    {
    $data=$this-> box_itemRepository
    
        ->with(
            "item","box")
    
    ->getPaginated(25,['item_id'=>$parent_id]);

  
    

 return view('backend.box_items.index' )
        ->with(['box_items'=> $data,'part'=>$part]);


    return view('backend.box_items.index')
    ->with('box_items',$data);
    }


    public function box(Request $request,$parent_id)
    {
    $data=$this-> box_itemRepository
    
        ->with(
            "item","box")
    
    ->getPaginated(25,['box_id'=>$parent_id]);

  
    

 return view('backend.box_items.index' )
        ->with(['box_items'=> $data,'part'=>$part]);


    return view('backend.box_items.index')
    ->with('box_items',$data);
    }



    /**
    * Show the form for creating a new BoxItem.
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function create()
    {
        
        $items = Item::all();
        $selectedItem = Item::first()?Item::first()->_id:0;
           
        $boxes = Box::all();
        $selectedBox = Box::first()?Box::first()->_id:0;
           
        
       

        return view('backend.box_items.create' ,compact(
        
        "items","selectedItem"
        
         ,"boxes","selectedBox"
        ));
    }

    /**
    * Store a newly created BoxItem in storage.
    *
    * @param CreateBoxItemRequest $request
    *
    * @return Response | \Illuminate\View\View|Response
    */
    public function store(CreateBoxItem $request)
    {
        $obj=$this-> box_itemRepository->create($request->only( [ "item_id","box_id",]));
        

        return redirect()->route('admin.box_item.index')->withFlashSuccess(__('alerts.frontend.box_item.saved'));
    }

    /**
    * Display the specified BoxItem.
    *
    * @param BoxItem $box_item
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function show(BoxItem $box_item)
    {
        return view('backend.box_items.show')->with('box_item', $box_item);
    }


    /**
    * Show the form for editing the specified BoxItem.
    *
    * @param BoxItem $box_item
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function edit(BoxItem $box_item)
    {
        
        $items = Item::all();
        $selectedItem = BoxItem::first()->item_id;
         
        $boxes = Box::all();
        $selectedBox = BoxItem::first()->box_id;
         



        
         

                return view('backend.box_items.edit',compact(
         
        "items","selectedItem"  
         ,"boxes","selectedBox"  

         )
        )->with('box_item', $box_item);
    }


    /**
    * Update the specified BoxItem in storage.
    *
    * @param UpdateBoxItemRequest $request
    *
    * @param BoxItem $box_item
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    */
    public function update(UpdateBoxItem  $request, BoxItem $box_item)
    {
        $this->box_itemRepository->update($box_item, $request->all());


       

    return redirect()->route('admin.box_item.index')->withFlashSuccess(__('alerts.frontend.box_item.updated'));

    }

    /**
    * Remove the specified BoxItem from storage.
    *
    * @param BoxItem $box_item
    * @return \Illuminate\View\View|Response
    * @internal param int $id
    *
    */
    public function destroy(BoxItem $box_item)
    {
        $this->box_itemRepository->delete($box_item);
        return redirect()->back()->withFlashSuccess(__('alerts.frontend.box_item.deleted'));
    }

}