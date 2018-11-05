<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.level_gems.table.gem_id') }}</th>
                <th>{{ __('labels.backend.level_gems.table.level_id') }}</th>
                <th>{{ __('labels.backend.level_gems.table.create_at') }}</th>
                <th>{{ __('labels.backend.level_gems.table.updated_at') }}</th>
                <th>{{ __('labels.backend.level_gems.table.deleted_at') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($level_gems as $level_gem)
        <tr>
            
                <td>{!! $level_gem->gem->name !!}</td> 
                <td>{!! $level_gem->level->name !!}</td> 
                <td>{{  $level_gem->create_at }}</td>  
                <td>{{  $level_gem->updated_at }}</td>  
                <td>{{  $level_gem->deleted_at }}</td>  
                

               <td>{!! $level_gem->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>