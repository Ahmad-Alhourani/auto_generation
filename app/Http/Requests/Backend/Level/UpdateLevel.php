<?php
  namespace App\Http\Requests\Backend\Level;
  
  use Illuminate\Foundation\Http\FormRequest;
  use Illuminate\Support\Facades\Gate;
  use Illuminate\Validation\Rule;


  class UpdateLevel extends FormRequest{

        /**
        * Determine if the user is authorized to make this request.
        *
        * @return bool
        */

        public function authorize()
        {
            return true;
            //   return Gate::allows('admin.level.edit', $this->level);
        }

        /**
        * Get the validation rules that apply to the request.
        *
        * @return array
        */

        public function rules()
        {
            return [
            //'name'=> [ ],
            //'order'=> [ ],
            //'create_at'=> [ ],
            //'updated_at'=> [ ],
            //'deleted_at'=> [ ],
            //'description'=> [ ],
            //'is_deleted'=> [ ],
            //'visible_radius'=> [ ],

           
           //'gems' => ['sometimes', 'array'],

            ];
        }

}