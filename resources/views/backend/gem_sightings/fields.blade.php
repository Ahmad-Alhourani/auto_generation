<div class="row mt-4 mb-4">
    <div class="col">
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.gem_id'))->class('col-md-2 form-control-label')->for('gem_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="gem_id">
                        @if  ($gems->count())
                        @foreach($gems as $temp)
                                <option value="{{ $temp->id }}" {{ $selectedGem == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.player_id'))->class('col-md-2 form-control-label')->for('player_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="player_id">
                        @if  ($players->count())
                        @foreach($players as $temp)
                                <option value="{{ $temp->id }}" {{ $selectedPlayer == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.founded_at'))->class('col-md-2 form-control-label')->for('founded_at') }}
            <div class="col-md-10">
                
                        {{ html()->text('founded_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gem_sightings.founded_at'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.lat'))->class('col-md-2 form-control-label')->for('lat') }}
            <div class="col-md-10">
                
                    <input name="lat" step="any" type="number" value="{{ isset($gem_sighting->lat)?$gem_sighting->lat: 0 }}" class="form-control" id="numberField"  min ="8"   max ="10"  required   >
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.lng'))->class('col-md-2 form-control-label')->for('lng') }}
            <div class="col-md-10">
                
                    <input name="lng" step="any" type="number" value="{{ isset($gem_sighting->lng)?$gem_sighting->lng: 0 }}" class="form-control" id="numberField"  min ="8"   max ="11"  required   >
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.create_at'))->class('col-md-2 form-control-label')->for('create_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('create_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gem_sightings.create_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.updated_at'))->class('col-md-2 form-control-label')->for('updated_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('updated_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gem_sightings.updated_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gem_sightings.deleted_at'))->class('col-md-2 form-control-label')->for('deleted_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('deleted_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gem_sightings.deleted_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->