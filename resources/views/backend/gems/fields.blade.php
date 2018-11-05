<div class="row mt-4 mb-4">
    <div class="col">
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gems.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.create_at'))->class('col-md-2 form-control-label')->for('create_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('create_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gems.create_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.updated_at'))->class('col-md-2 form-control-label')->for('updated_at') }}
            <div class="col-md-10">
                
                        {{ html()->date('updated_at')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gems.updated_at'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
                
                        {{ html()->text('description')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.gems.description'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.is_deleted'))->class('col-md-2 form-control-label')->for('is_deleted') }}
            <div class="col-md-10">
                
                    <label class="switch switch-3d switch-primary">
                        {{ html()->checkbox('is_deleted', isset($gem->is_deleted)?$gem->is_deleted: true, '1')->class('switch-input') }}
                        <span class="switch-label"></span>
                        <span class="switch-handle"></span>
                    </label>
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.gems.radius'))->class('col-md-2 form-control-label')->for('radius') }}
            <div class="col-md-10">
                
                    <input name="radius" type="number" value="{{ isset($gem->radius)?$gem->radius:  0 }}" class="form-control" id="numberField"    required   >
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
                



    </div><!--col-->
</div><!--row-->