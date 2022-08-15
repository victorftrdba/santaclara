<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpenseRequest extends FormRequest
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
            'expense_date' => ['required'],
            'type' => ['required'],
            'provider_name' => ['required'],
            'code' => ['required'],
            'value' => ['required'],
            'discount' => ['required'],
            'total' => ['required'],
            'payment_date' => ['required'],
            'source_account' => ['required'],
            'source_account_type' => ['required'],
            "unity_id" => ['required', "exists:unities,id"],
            'observations' => ['nullable'],
        ];
    }

    public function messages()
    {
        return [
            'expense_date.required' => 'Data da despesa é obrigatória.',
            'type.required' => 'Tipo de Despesa é obrigatória.',
            'provider_name.required' => 'Nome do Fornecedor é obrigatório.',
            'code.required' => 'Código é obrigatório.',
            'value.required' => 'Valor cobrado é obrigatório.',
            'discount.required' => 'Desconto é obrigatório.',
            'total.required' => 'Total é obrigatório.',
            'payment_date.required' => 'Data do Pagamento é obrigatório.',
            'source_account.required' => 'Conta fonte é obrigatória.',
            'source_account_type.required' => 'Tipo da conta fonte é obrigatório.',
            'unity_id.required' => 'Unidade é obrigatória.',
            'unity_id.exists' => 'A unidade selecionada é inválida.',
        ];
    }
}