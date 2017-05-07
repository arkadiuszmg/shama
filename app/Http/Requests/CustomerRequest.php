<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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

        public
        function messages()
        {
            return [
                'name.required' => 'Uzupełnij pole nazwa klienta',
                'address.required' => 'Uzupełnij pole adres klienta',
                'phone.required' => 'Uzupełnij pole telefon do klienta',
            ];
        }

}
