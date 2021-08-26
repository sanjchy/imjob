<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Work;
use App\Models\School;
use App\Models\Skills;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Language;
use App\Models\Software;
use App\Models\Candidate;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CandidateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\GuestCompanyRequest;
use App\Http\Requests\GuestCandidateRequest;
use App\Models\RecruitmentProcess;
use Symfony\Contracts\EventDispatcher\Event;

class GuestRequestController extends Controller
{

    public function __construct()
    {
        $this->middleware('language');
    }
    public function companyShow()
    {
        return view('pages.company_data_send');
    }

    public function companyStore(GuestCompanyRequest $request)
    {
        $contact = new Contact();
        $company = new Company();
        $company->fill($request->all());
        $company->approved = false;
        $company->save();
        $request->session()->flash('companyAdded', 'Request sent successfully!');
        Storage::makeDirectory('public/company/' . $company->id);
        $contact->company_id = $company->id;
        $contact->user_id = Auth::user()->id ?? 0;
        $contact->name = $request->first_name . " " . $request->last_name;
        $contact->role = $request->referentRole;
        $contact->phone = $request->referentPhone;
        $contact->email = $request->referentEmail;
        $contact->save();
        Storage::makeDirectory('public/contact/' . $contact->id);
        return response()->json([
            "success" => true
        ]);
    }

    public function candidateShow()
    {
        return view('pages.candidate_data_send');
    }

    public function candidateStore(GuestCandidateRequest $request)
    {

        $candidate = new Candidate();
        $candidate->fill($request->all());
        $candidate->approved = false;
        $candidate->user_id = Auth::user()->id ?? 0;
        // Check if image is in form to put name into database
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $candidate->image = $imageName;
        }
        // Check if cv is in form to put name into database
        if ($request->hasFile('cv') && $request->file('cv')->isValid()) {
            $cv = $request->file('cv');
            $cvName = uniqid() . '.' . $cv->getClientOriginalExtension();
            $candidate->cv = $cvName;
        }
        $candidate->save();
        // Store candidate software
        for ($id = 0; $id < count($request->software); $id++) {
            $software = new Software();
            $software->software = $request->software[$id];
            $software->level =  $request->softwareKnowledgeLevel[$id];
            $software->candidate_id = $candidate->id;
            $software->save();
        }
        // Store candidate languages
        for ($id = 0; $id < count($request->language); $id++) {
            $language = new Language();
            $language->language = $request->language[$id];
            $language->level =  $request->languageLevel[$id];
            $language->candidate_id = $candidate->id;
            $language->save();
        }
        // store candidate skills
        $skill = new Skills();
        $skill->skill = $request->professionalSkills;
        $skill->level =  "Medium";
        $skill->candidate_id = $candidate->id;
        $skill->save();
        // store candidate work experience
        for ($id = 0; $id < count($request->companyName); $id++) {
            $work = new Work();
            $work->fill([
                'companyName' => $request->companyName[$id],
                'candidate_id' => $candidate->id,
                'companyCountry' => $request->companyCountry[$id],
                'companyCity' => $request->companyCity[$id],
                'position' => $request->position[$id],
                'tasks' => $request->tasks[$id],
                'from' => $request->from[$id],
                'till' => $request->till[$id],
            ]);
            // $work->user_id = Auth::user()->id;
            $work->save();
        }
        // Store candidate education
        for ($id = 0; $id < count($request->schoolName); $id++) {
            $education = new School();
            $education->fill([
                'schoolName' => $request->schoolName[$id],
                'candidate_id' => $candidate->id,
                'graduated' => $request->graduated[$id],
                'qualification' => $request->qualification[$id],
                'schoolCity' => $request->schoolCity[$id],
                'schoolCountry' => $request->schoolCountry[$id],
            ]);
            // $education->user_id = Auth::user()->id;
            $education->save();
        }
        // Create folder for image
        Storage::makeDirectory('/public/candidate_image/' . $candidate->id);
        // Create folder for CV
        Storage::makeDirectory('/public/candidate_cv/' . $candidate->id);

        // Upload image into filesystem
        if ($request->hasFile('image')) {
            $path = public_path('/storage/candidate_image/' . $candidate->id);
            $image->move($path, $imageName);
        }
        // Upload cv into filesystem
        if ($request->hasFile('cv')) {
            $path = public_path('/storage/candidate_cv/' . $candidate->id);
            $cv->move($path, $cvName);
        }
        if ($request->has("job_id")) {
            $job = Job::find($request->job_id);
            if ($job) {
                $recruitment = new Recruitment();
                $recruitment->job_id = $request->job_id;
                $recruitment->status = "Requested!";
                $recruitment->candidate_id = $candidate->id;
            }
        }
        if ($request->has("job_id")) {
            $job = Job::find($request->job_id);
            if ($job) {
                $recruitment = new Recruitment();
                $recruitment->job_id = $request->job_id;
                $recruitment->status = "Requested!";
                $recruitment->candidate_id = $candidate->id;
                $recruitment->save();
                $process = new RecruitmentProcess();
                $process->recruitment_id = $recruitment->id;
                $process->user_id = 2;
                $process->status = $recruitment->status;
                $process->save();
            }
        }
        Session::flash('candidateAdded', 'Request sent successfully!');
        return response()->json([
            "success" => true
        ]);
    }
}
