<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class GuestCompanyRequest extends FormRequest
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
            'name' => 'required|min:4|max:255|filled',
            'address' => 'required|max:255|filled',
            'industry' => 'required|min:2|max:255|filled',
            'phone' => 'min:6|max:255|filled',
            'country' => 'required|min:1|max:255|filled',
            'city' => 'required|min:1|max:255|filled',
            'website' => 'max:255',
            'size' => 'required|max:200',
            'about' => 'required|min:1|max:1500',
            'first_name' => 'required|min:3|max:255|filled',
            'last_name' => 'required|min:3|max:255|filled',
            'referentEmail' => 'required|min:3|max:255|email',
            'referentPhone' => 'required|min:3|max:255',
            'referentRole' => 'required|min:3|max:255|filled',
            'terms' => 'accepted'
        ];
    }
}
