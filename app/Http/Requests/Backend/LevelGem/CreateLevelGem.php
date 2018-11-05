<?php
  namespace App\Http\Requests\Backend\LevelGem;
  
  use Illuminate\Foundation\Http\FormRequest;
  use Illuminate\Support\Facades\Gate;
  use Illuminate\Validation\Rule;

  class CreateLevelGem extends FormRequest{

        /**
        * Determine if the user is authorized to make this request.
        *
        * @return bool
        */

        public function authorize()
        {
            return true;
            //   return Gate::allows('admin.level_gem.edit', $this->levelgem);
        }

        /**
        * Get the validation rules that apply to the request.
        *
        * @return array
        */

        public function rules()
        {
            return [
            //'gem_id'=> [ ],
            //'level_id'=> [ ],
            //'create_at'=> [ ],
            //'updated_at'=> [ ],
            //'deleted_at'=> [ ],

           

            ];
        }

}