<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookmakerFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
      public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'             => 'required',
            'cep'              => 'required',
            'number'           => 'required'
        ];
    }

    public function messages(){

        return [
          'name.required'             => 'O campo Nome é obrigatório.',
          'cep.required'              => 'O campo CEP é obrigatório.',
          'number.required'            => 'O campo Número é obrigatório.'
        ];
    }
}

