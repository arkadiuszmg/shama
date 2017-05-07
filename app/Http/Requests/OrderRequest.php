<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Uzupełnij pole Imię i nazwisko',
            'address.required' => 'Uzupełnij pole adres',
            'phone.required' => 'Uzupełnij pole telefon',
        ];
    }
}
