<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            //'requiredProfession' => 'required|unique:companies|max:255',
            // 'address' => 'required|max:255',
            // 'industry' => 'required|min:1|max:255',
            // 'phone' => 'required|min:1|max:255',
            // 'country' => 'required|min:1|max:255',
            // 'city' => 'required|min:1|max:255',
            // 'website' => 'required|min:1|max:255',
            // 'size' => 'required|min:1|max:255',
            // 'about' => 'required|min:1|max:255',
        ];
    }
}
