<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:clientes',
            'telefone' => 'required|max:11'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório.',
            'email.required' => 'O campo Email é obrigatório.',
            'email.email' => 'O campo Email deve ser um endereço de e-mail válido.',
            'email.unique' => 'O Email já está em uso.',
            'telefone.required' => 'O campo Telefone é obrigatório.',
        ];
    }
}
