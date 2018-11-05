<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.box_gems.table.gem_id') }}</th>
                <th>{{ __('labels.backend.box_gems.table.box_id') }}</th>
                <th>{{ __('labels.backend.box_gems.table.create_at') }}</th>
                <th>{{ __('labels.backend.box_gems.table.updated_at') }}</th>
                <th>{{ __('labels.backend.box_gems.table.deleted_at') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($box_gems as $box_gem)
        <tr>
            
                <td>{!! $box_gem->gem->name !!}</td> 
                <td>{!! $box_gem->box->name !!}</td> 
                <td>{{  $box_gem->create_at }}</td>  
                <td>{{  $box_gem->updated_at }}</td>  
                <td>{{  $box_gem->deleted_at }}</td>  
                

               <td>{!! $box_gem->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>