<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.items.table.name') }}</th>
                <th>{{ __('labels.backend.items.table.description') }}</th>
                <th>{{ __('labels.backend.items.table.clickable_radius') }}</th>
                <th>{{ __('labels.backend.items.table.create_at') }}</th>
                <th>{{ __('labels.backend.items.table.updated_at') }}</th>
                <th>{{ __('labels.backend.items.table.deleted_at') }}</th>
                   
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
        <tr>
            
                <td>{{  $item->name }}</td>  
                <td>{{  $item->description }}</td>  
                <td>{{  $item->clickable_radius }}</td>  
                <td>{{  $item->create_at }}</td>  
                <td>{{  $item->updated_at }}</td>  
                <td>{{  $item->deleted_at }}</td>  
                  

               <td>{!! $item->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>