<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Order_ItemRequest extends FormRequest
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
            'order_id' => 'required',
            'menu_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'order_id.required' => 'Uzupełnij pole ID zamówienia',
            'menu_id.required' => 'Uzupełnij pole ID Menu',
        ];
    }
}
