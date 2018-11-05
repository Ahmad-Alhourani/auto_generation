<?php
  namespace App\Http\Requests\Backend\GemSighting;
  
  use Illuminate\Foundation\Http\FormRequest;
  use Illuminate\Support\Facades\Gate;
  use Illuminate\Validation\Rule;


  class UpdateGemSighting extends FormRequest{

        /**
        * Determine if the user is authorized to make this request.
        *
        * @return bool
        */

        public function authorize()
        {
            return true;
            //   return Gate::allows('admin.gem_sighting.edit', $this->gemsighting);
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
            //'player_id'=> [ ],
            //'founded_at'=> [ ],
            //'lat'=> [ ],
            //'lng'=> [ ],
            //'create_at'=> [ ],
            //'updated_at'=> [ ],
            //'deleted_at'=> [ ],

           

            ];
        }

}