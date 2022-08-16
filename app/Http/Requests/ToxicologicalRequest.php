<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToxicologicalRequest extends FormRequest
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
            "date_exam" => ["required", "date_format:Y-m-d"],
            "cod_exam" => ["required"],
            "time_exam" => ["required", "regex:/\d\d:\d\d/"],
            "indicated_by" => ["required", "string"],
            "client_name" => ["required", "min:3"],
            "cpf" => ["required", "min:11", "max:14"],
            "birth_date" => ["required", "date_format:Y-m-d"],
            "gender" => ["required", "string"],
            "email" => ["required", "email"],
            "cell" => ["required_if:not_cell,"],
            "zipcode" => ["required"],
            "address" => ["required"],
            "complement" => ["nullable"],
            "number" => ["required"],
            "district" => ["required"],
            "state" => ["required", "in:AC,AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO,EX"],
            "city" => ["required"],
            "unity_id" => ["required", "exists:unities,id"],
            "laboratory" => ["required"],
            "uses_psychoactive_substances" => ['required', 'in:1,0'],
            "examVoucher" => ['required', 'in:1,0'],
        ];
    }

    public function messages()
    {
        return [
            'date_exam.required' => 'A data de exame é obrigatória.',
            "cod_exam.required" => 'O código do exame é obrigatório.',
            "time_exam.required" => 'A hora do exame é obrigatória.',
            "indicated_by.required" => 'O indicador por é obrigatório',
            "client_name.required" => 'O nome do cliente é obrigatório.',
            "cpf.required" => 'O CPF é obrigatório.',
            "birth_date.required" => 'A data de nascimento é obrigatória.',
            "gender.required" => 'O gênero é obrigatório.',
            "email.required" => 'O e-mail é obrigatório.',
            "cell.required_if" => 'O celular é obrigatório quando o campo Não possui celular não estiver marcado.',
            "zipcode.required" => 'O CEP é obrigatório.',
            "address.required" => 'O endereço é obrigatório.',
            "number.required" => 'O número do endereço é obrigatório.',
            "district.required" => 'O bairro é obrigatório',
            "state.required" => 'O estado é obrigatório.',
            "state.in" => 'Selecione um estado válido.',
            "unity_id.exists" => 'Selecione uma unidade válida.',
            "city.required" => 'A cidade é obrigatória.',
            "unity.required" => 'A unidade é obrigatória.',
            "laboratory.required" => 'O laboratório é obrigatório.',
            "uses_psychoactive_substances.required" => 'A pergunta Faz uso de alguma substância psicoativa? é obrigatória.',
            "uses_psychoactive_substances.in" => 'A resposta para a pergunta Faz uso de alguma substância psicoativa? deve ser Sim ou Não.',
            "examVoucher.required" => 'A pergunta O condutor possui vale-exame? é obrigatória.',
            "examVoucher.in" => 'A resposta para a pergunta O condutor possui vale-exame? deve ser Sim ou Não.',
        ];
    }
}
