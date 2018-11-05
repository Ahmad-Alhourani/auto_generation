<?php

 namespace App\Models\Traits\Attribute;

/**
 * Trait LevelAttribute.
 */
trait LevelAttribute
{
    /**
     * @return string  level
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.level.edit', $this).'" class="btn btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.edit').'"></i></a>';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        return '<a href="'.route('admin.level.destroy', $this).'"
			 data-method="delete"
			 data-trans-button-cancel="'.__('buttons.general.cancel').'"
			 data-trans-button-confirm="'.__('buttons.general.crud.delete').'"
			 data-trans-title="'.__('strings.backend.general.are_you_sure').'"
			 class="btn btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.delete').'"></i></a> ';
    }



    
    
        /**
        * @return  string
        */
        public function getGemsButtonAttribute()
        {
          return '<a href="' . route('admin.gem.level', $this) . ' " class="dropdown-item">' . __('Gems') . '</a> ';
        }


    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {

      return '<div
       class="btn-group btn-group-sm" level="group" aria-label="Level Actions">
			  '.$this->edit_button.'
			  '.$this->delete_button.'

        <div class="btn-group" role="group">
        <button id="userActions" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
        </button>
            <div class="dropdown-menu" aria-labelledby="userActions">
            
                  '. $this->gems_button . '      
               </div>
        </div>
</div>
';
    }
}