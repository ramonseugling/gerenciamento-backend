<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreUpdateFuncionarioRequest extends FormRequest
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
            'login' => 'regex:/^[a-zA-Z]+$/u',
            'nome' => 'regex:/^[a-zA-Z]+$/u'
        ];
    }

    public function messages()
    {
        return [
            'login.regex' => 'Não é permitido acentuação e caracteres especiais no login!',
            'nome.regex' => 'Não é permitido acentuação e caracteres especiais no nome!'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            'status' => false
        ], 400));
    }
}
