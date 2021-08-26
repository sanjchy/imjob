<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestCandidateRequest extends FormRequest
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
            'firstName' => 'required|max:200',
            'address'   => 'required|max:200',
            'phone' => 'required|max:200',
            'lastName'  => 'required|max:200',
            'city'  => 'required|max:200',
            'email' => 'required|email|max:200',
            'gender'    => 'required|alpha|max:200',
            'country'   => 'required|max:200',
            'birthday'  => 'required|max:200',
            'image' => 'image|mimes:png,jpg',
            // 'cv'    => 'file|mimes:pdf',
            'citizenship'   => 'required|max:200',
            'schoolName.*'    => 'required|max:200',
            'qualification.*' => 'required|max:200',
            'graduated.*' => 'required|max:200',
            'schoolCity.*'    => 'required|max:200',
            'schoolCountry.*' => 'required|max:200',
            'professionalSkills.*'    => 'required|max:65000',
            'professionalSkillsLevel.*'   => 'required|max:200',
            'companyName.*'   => 'required|max:200',
            'position.*'  => 'required|max:200',
            'from'  => 'required|max:200',
            'till'  => 'required|max:200',
            'companyCountry.*'  => 'required|max:200',
            'companyCity.*'   => 'required|max:200',
            'tasks.*' => 'required|max:200',
            'language.*'  => 'required|max:200',
            'languageLevel.*' => 'required|max:200',
            'software.*'  => 'required|max:200',
            'softwareKnowledgeLevel.*'  =>  'required|max:200',
            'message' =>  'required|max:2000',
            'terms'  =>  'required|max:200',
            'drivingLicence'   => 'required|max:200',
            'availableFrom' => 'required|max:200',
            'terms' => 'accepted|max:200'
        ];
    }

    public function messages()
    {
        return [
            'firstName' => __('guest_candidate_request.name'),
            'lastName' => __('guest_candidate_request.lastName'),
            'address' => __('guest_candidate_request.address'),
            'phone' => __('guest_candidate_request.phone'),
            'email' => __('guest_candidate_request.email'),
            'city'  => __('guest_candidate_request.city'),
            'gender' => __('guest_candidate_request.gender'),
            'country'   => __('guest_candidate_request.country'),
            'birthday'  => __('guest_candidate_request.birthday'),
            'image' => __('guest_candidate_request.image'),
            'cv' => __('guest_candidate_request.availableFrom'),
            'citizenship' => __('guest_candidate_request.citizenship'),
            'schoolName.*' => __('guest_candidate_request.schoolName.*'),
            'qualification.*' => __('guest_candidate_request.qualification.*'),
            'graduated.*' => __('guest_candidate_request.graduated.*'),
            'schoolCity.*' => __('guest_candidate_request.schoolCity.*'),
            'schoolCountry.*' => __('guest_candidate_request.country'),
            'professionalSkills.*' => __('guest_candidate_request.professionalSkills.*'),
            'professionalSkillsLevel.*' => __('guest_candidate_request.professionalSkillsLevel.*'),
            'companyName.*'   => __('guest_candidate_request.companyName'),
            'position.*'  => __('guest_candidate_request.position.*'),
            'from'  => __('guest_candidate_request.from'),
            'till'  => __('guest_candidate_request.till'),
            'companyCountry.*' => __('guest_candidate_request.companyCountry.*'),
            'companyCity.*' => __('guest_candidate_request.companyCountry.*'),
            'tasks.*' => __('guest_candidate_request.tasks.*'),
            'language.*'  => __('guest_candidate_request.language.*'),
            'languageLevel.*' => __('guest_candidate_request.languageLevel.*'),
            'software.*'  => __('guest_candidate_request.software.*'),
            'softwareKnowledgeLevel.*'  => __('guest_candidate_request.softwareKnowledgeLevel.*'),
            'message' => __('guest_candidate_request.message'),
            'terms'  => __('guest_candidate_request.terms'),
            'drivingLicence'   => __('guest_candidate_request.drivingLicence'),
            'availableFrom' => __('guest_candidate_request.availableFrom'),
            'terms' => __('guest_candidate_request.terms'),
        ];
    }
}
