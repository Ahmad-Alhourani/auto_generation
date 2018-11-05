<div class="row mt-4 mb-4">
    <div class="col">
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_items.item_id'))->class('col-md-2 form-control-label')->for('item_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="item_id">
                        @if  ($items->count())
                        @foreach($items as $temp)
                                <option value="{{ $temp->id }}" {{ $selectedItem == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_items.box_id'))->class('col-md-2 form-control-label')->for('box_id') }}
            <div class="col-md-10">
                
                    <select class="form-control m-bot15" name="box_id">
                        @if  ($boxes->count())
                        @foreach($boxes as $temp)
                                <option value="{{ $temp->id }}" {{ $selectedBox == $temp->id ? 'selected="selected"' : '' }}>{{ $temp->name }}</option>
                        @endforeach
                        @endif
                    </select>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_items.create_at'))->class('col-md-2 form-control-label')->for('create_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('create_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.box_items.create_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_items.updated_at'))->class('col-md-2 form-control-label')->for('updated_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('updated_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.box_items.updated_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.box_items.deleted_at'))->class('col-md-2 form-control-label')->for('deleted_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('deleted_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.box_items.deleted_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->