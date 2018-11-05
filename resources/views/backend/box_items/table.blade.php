<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.box_items.table.item_id') }}</th>
                <th>{{ __('labels.backend.box_items.table.box_id') }}</th>
                <th>{{ __('labels.backend.box_items.table.create_at') }}</th>
                <th>{{ __('labels.backend.box_items.table.updated_at') }}</th>
                <th>{{ __('labels.backend.box_items.table.deleted_at') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($box_items as $box_item)
        <tr>
            
                <td>{!! $box_item->item->name !!}</td> 
                <td>{!! $box_item->box->name !!}</td> 
                <td>{{  $box_item->create_at }}</td>  
                <td>{{  $box_item->updated_at }}</td>  
                <td>{{  $box_item->deleted_at }}</td>  
                

               <td>{!! $box_item->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>