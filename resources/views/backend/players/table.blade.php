<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.players.table.name') }}</th>
                <th>{{ __('labels.backend.players.table.token') }}</th>
                <th>{{ __('labels.backend.players.table.type') }}</th>
                <th>{{ __('labels.backend.players.table.birth_date') }}</th>
                      
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($players as $player)
        <tr>
            
                <td>{{  $player->name }}</td>  
                <td>{{  $player->token }}</td>  
                <td>{{  $player->type }}</td>  
                <td>{{  $player->birth_date }}</td>  
                    

               <td>{!! $player->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>