<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
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
            'firstName' => 'required',
            'address'   => 'required',
            'phone' => 'required',
            'lastName'  => 'required',
            'city'  => 'required',
            'email' => 'required',
            'gender'    => 'required',
            'country'   => 'required',
            'birthday'  => 'required',
            'image' => 'image|max:2048',
            'cv'    => 'file|mimes:pdf,docx',
            'citizenship'   => 'required',
            'schoolName'    => 'required',
            'qualification' => 'required',
            'graduated' => 'required',
            'schoolCity'    => 'required',
            'schoolCountry' => 'required',
            'professionalSkills'    => 'required',
            'professionalSkillsLevel'   => 'required',
            'companyName'   => 'required',
            'position'  => 'required',
            'from'  => 'required',
            'till'  => 'required',
            'companyCountry'    => 'required',
            'companyCity'   => 'required',
            'tasks' => 'required',
            'language'  => 'required',
            'languageLevel' => 'required',
            'software'  => 'required',
            'softwareKnowledgeLevel'  =>  'required',
            'message' =>  'required',
            'terms'  =>  'required',
            'drivingLicence'   => 'required',
            'availableFrom' => 'required',
        ];
    }
}
