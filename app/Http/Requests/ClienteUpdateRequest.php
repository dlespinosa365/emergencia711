<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;
use Illuminate\Validation\Rule;


class ClienteUpdateRequest extends FormRequest
{

    //protected $redirectRoute = 'socios';

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
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required|',
            'cedula' => 'required|numeric|digits:8',
            'fecha_nac' => 'required|date|before:today',
            'solar' => 'required|numeric',
            'manzana' => 'required|numeric',
            'calles' => 'required',

            'celular' => 'required|numeric',
            'telefono' => 'nullable|numeric',
            'entrecalles' => 'nullable',

        ];
    }


}
