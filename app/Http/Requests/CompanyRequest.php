<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'industry' => 'max:255',
            'phone' => 'max:255',
            'country' => 'required|min:1|max:255',
            'city' => 'required|min:1|max:255',
            'website' => 'max:255',
            'size' => 'required|min:1|max:255',
            'about' => 'required|min:1|max:1500',
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>  'The company name is required!',
        ];
    }
}
