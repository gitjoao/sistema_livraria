<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookFormRequest extends FormRequest
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
            'title'             => 'required',
            'price'             => 'required',
            'id_author'         => 'required',
            'id_bookmaker'      => 'required'
        ];
    }

    public function messages(){

        return [
          'title.required'             => 'O campo Título é obrigatório.',
          'price.required'             => 'O campo Preço é obrigatório.',
          'id_author.required'         => 'O campo Autor é obrigatório.',
          'id_bookmaker.required'      => 'O campo Editora é obrigatório.'
        ];
    }
}
