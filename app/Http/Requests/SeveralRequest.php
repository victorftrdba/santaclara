<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeveralRequest extends FormRequest
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
            'date' => ['required'],
            'hour' => ['required'],
            'quantity' => ['required'],
            'value' => ['required'],
            'payment_method' => ['required'],
            'type' => ['required'],
            'who_receives' => ['required'],
            'observations' => ['nullable'],
        ];
    }

    public function messages()
    {
        return [
            'date.required' => 'Data é obrigatório.',
            'date.date' => 'Data precisa ser no formato de uma data.',
            'quantity.required' => 'A quantidade é obrigatória.',
            'quantity.numeric' => 'A quantidade precisa ser numérica.',
            'value.required' => 'Valor cobrado é obrigatório.',
            'value.numeric' => 'Valor cobrado precisa ser numérico.',
            'payment_method.required' => 'Método de pagamento é obrigatório.',
            'type.required' => 'O tipo é obrigatório',
            'who_receives.required' => 'Quem recebeu é obrigatório.',
        ];
    }
}