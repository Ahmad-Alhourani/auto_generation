<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.box_sightings.table.player_id') }}</th>
                <th>{{ __('labels.backend.box_sightings.table.box_id') }}</th>
                <th>{{ __('labels.backend.box_sightings.table.lat') }}</th>
                <th>{{ __('labels.backend.box_sightings.table.lng') }}</th>
                <th>{{ __('labels.backend.box_sightings.table.create_at') }}</th>
                <th>{{ __('labels.backend.box_sightings.table.updated_at') }}</th>
                <th>{{ __('labels.backend.box_sightings.table.deleted_at') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($box_sightings as $box_sighting)
        <tr>
            
                <td>{!! $box_sighting->player->name !!}</td> 
                <td>{!! $box_sighting->box->name !!}</td> 
                <td>{{  $box_sighting->lat }}</td>  
                <td>{{  $box_sighting->lng }}</td>  
                <td>{{  $box_sighting->create_at }}</td>  
                <td>{{  $box_sighting->updated_at }}</td>  
                <td>{{  $box_sighting->deleted_at }}</td>  
                

               <td>{!! $box_sighting->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>