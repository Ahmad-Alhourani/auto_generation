<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.gems.table.name') }}</th>
                <th>{{ __('labels.backend.gems.table.create_at') }}</th>
                <th>{{ __('labels.backend.gems.table.updated_at') }}</th>
                <th>{{ __('labels.backend.gems.table.description') }}</th>
                <th>{{ __('labels.backend.gems.table.is_deleted') }}</th>
                <th>{{ __('labels.backend.gems.table.radius') }}</th>
                         
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($gems as $gem)
        <tr>
            
                <td>{{  $gem->name }}</td>  
                <td>{{  $gem->create_at }}</td>  
                <td>{{  $gem->updated_at }}</td>  
                <td>{{  $gem->description }}</td>  
                <td>{{  $gem->is_deleted }}</td>  
                <td>{{  $gem->radius }}</td>  
                      

               <td>{!! $gem->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>