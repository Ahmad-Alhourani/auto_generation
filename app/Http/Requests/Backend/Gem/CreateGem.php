<?php
  namespace App\Http\Requests\Backend\Gem;
  
  use Illuminate\Foundation\Http\FormRequest;
  use Illuminate\Support\Facades\Gate;
  use Illuminate\Validation\Rule;

  class CreateGem extends FormRequest{

        /**
        * Determine if the user is authorized to make this request.
        *
        * @return bool
        */

        public function authorize()
        {
            return true;
            //   return Gate::allows('admin.gem.edit', $this->gem);
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
            //'create_at'=> [ ],
            //'updated_at'=> [ ],
            //'description'=> [ ],
            //'is_deleted'=> [ ],
            //'radius'=> [ ],

           
           //'players' => ['sometimes', 'array'],
           //'levels' => ['sometimes', 'array'],
           //'boxes' => ['sometimes', 'array'],

            ];
        }

}