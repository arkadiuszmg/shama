<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
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
            'phone' => 'required|min:9|max:9',
            'city_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> 'Uzupełnij pole nazwa restauracji',
            'address.required'=> 'Uzupełnij pole adres restauracji',
            'phone.required'=> 'Uzupełnij pole telefon do restauracji',
            'phone.min'=> 'Uzupełnij pole telefon - 9 cyfr',
            'phone.max'=> 'Uzupełnij pole telefon - 9 cyfr',
            'city_id.required'=> 'Uzupełnij pole id miasta z którego jest restauracja',
        ];
    }
}
