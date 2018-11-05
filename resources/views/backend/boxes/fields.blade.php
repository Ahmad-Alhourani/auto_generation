<div class="row mt-4 mb-4">
    <div class="col">
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.boxes.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.boxes.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.boxes.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
                
                        {{ html()->text('description')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.boxes.description'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.boxes.clickable_radius'))->class('col-md-2 form-control-label')->for('clickable_radius') }}
            <div class="col-md-10">
                
                    <input name="clickable_radius" type="number" value="{{ isset($box->clickable_radius)?$box->clickable_radius:  0 }}" class="form-control" id="numberField"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.boxes.create_at'))->class('col-md-2 form-control-label')->for('create_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('create_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.boxes.create_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.boxes.updated_at'))->class('col-md-2 form-control-label')->for('updated_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('updated_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.boxes.updated_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.boxes.deleted_at'))->class('col-md-2 form-control-label')->for('deleted_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('deleted_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.boxes.deleted_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
                



    </div><!--col-->
</div><!--row-->