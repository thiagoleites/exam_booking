<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePessoaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'agente_id'       => 'required|integer',
            'unidade_id'      => 'required|integer',
            'nome'            => 'required|string|max:255',
            'cpf'             => 'required|string|max:14',
            'nome_mae'        => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'telefone'        => 'required|string|max:15',
            'status'          => 'required|string|max:1',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required'            => 'O campo nome é obrigatório',
            'nome.string'              => 'O campo nome deve ser uma string',
            'nome.max'                 => 'O campo nome deve ter no máximo 255 caracteres',
            'cpf.required'             => 'O campo cpf é obrigatório',
            'cpf.string'               => 'O campo cpf deve ser uma string',
            'cpf.max'                  => 'O campo cpf deve ter no máximo 14 caracteres',
            'nome_mae.required'        => 'O campo nome da mãe é obrigatório',
            'nome_mae.string'          => 'O campo nome da mãe deve ser uma string',
            'nome_mae.max'             => 'O campo nome da mãe deve ter no máximo 255 caracteres',
            'data_nascimento.required' => 'O campo data de nascimento é obrigatório',
            'data_nascimento.date'     => 'O campo data de nascimento deve ser uma data',
            'telefone.required'        => 'O campo telefone é obrigatório',
            'telefone.string'          => 'O campo telefone deve ser uma string',
            'telefone.max'             => 'O campo telefone deve ter no máximo 15 caracteres',
            'status.required'          => 'O campo status é obrigatório',
            'status.string'            => 'O campo status deve ser uma string',
            'status.max'               => 'O campo status deve ter no máximo 1 caracteres',
        ];
    }
}
