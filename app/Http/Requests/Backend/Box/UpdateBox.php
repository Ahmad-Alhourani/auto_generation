<?php
  namespace App\Http\Requests\Backend\Box;
  
  use Illuminate\Foundation\Http\FormRequest;
  use Illuminate\Support\Facades\Gate;
  use Illuminate\Validation\Rule;


  class UpdateBox extends FormRequest{

        /**
        * Determine if the user is authorized to make this request.
        *
        * @return bool
        */

        public function authorize()
        {
            return true;
            //   return Gate::allows('admin.box.edit', $this->box);
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
            //'description'=> [ ],
            //'clickable_radius'=> [ ],
            //'create_at'=> [ ],
            //'updated_at'=> [ ],
            //'deleted_at'=> [ ],

           
           //'gems' => ['sometimes', 'array'],
           //'players' => ['sometimes', 'array'],
           //'items' => ['sometimes', 'array'],

            ];
        }

}