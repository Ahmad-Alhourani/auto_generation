<?php
  namespace App\Http\Requests\Backend\Player;
  
  use Illuminate\Foundation\Http\FormRequest;
  use Illuminate\Support\Facades\Gate;
  use Illuminate\Validation\Rule;


  class UpdatePlayer extends FormRequest{

        /**
        * Determine if the user is authorized to make this request.
        *
        * @return bool
        */

        public function authorize()
        {
            return true;
            //   return Gate::allows('admin.player.edit', $this->player);
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
            //'token'=> [ ],
            //'type'=> [ ],
            //'birth_date'=> [ ],

           
           //'gems' => ['sometimes', 'array'],
           //'boxes' => ['sometimes', 'array'],

            ];
        }

}