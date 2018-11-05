<?php
  namespace App\Http\Requests\Backend\BoxSighting;
  
  use Illuminate\Foundation\Http\FormRequest;
  use Illuminate\Support\Facades\Gate;
  use Illuminate\Validation\Rule;

  class CreateBoxSighting extends FormRequest{

        /**
        * Determine if the user is authorized to make this request.
        *
        * @return bool
        */

        public function authorize()
        {
            return true;
            //   return Gate::allows('admin.box_sighting.edit', $this->boxsighting);
        }

        /**
        * Get the validation rules that apply to the request.
        *
        * @return array
        */

        public function rules()
        {
            return [
            //'player_id'=> [ ],
            //'box_id'=> [ ],
            //'lat'=> [ ],
            //'lng'=> [ ],
            //'create_at'=> [ ],
            //'updated_at'=> [ ],
            //'deleted_at'=> [ ],

           

            ];
        }

}