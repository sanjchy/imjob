<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Work;
use App\Models\School;
use App\Models\Skills;
use App\Models\Language;
use App\Models\Software;
use App\Models\Candidate;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CandidateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::where("approved", 1)->get();
        return view('candidate.index', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidateRequest $request)
    {
        $candidate = new Candidate();
        $candidate->fill($request->all());
        $candidate->approved = 1;
        $candidate->user_id = Auth::user()->id;
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
            if (!empty($request->software[$id])) {
                $software = new Software();
                $software->software = $request->software[$id];
                $software->level =  $request->softwareKnowledgeLevel[$id];
                $software->candidate_id = $candidate->id;
                $software->save();
            }
        }
        // Store candidate languages
        for ($id = 0; $id < count($request->language); $id++) {
            if (!empty($request->language[$id])) {
                $language = new Language();
                $language->language = $request->language[$id];
                $language->level =  $request->languageLevel[$id];
                $language->candidate_id = $candidate->id;
                $language->save();
            }
        }
        // store candidate skills
        for ($id = 0; $id < count($request->professionalSkills); $id++) {
            if (!empty($request->professionalSkills[$id])) {
                $skill = new Skills();
                $skill->skill = $request->professionalSkills[$id];
                $skill->level =  $request->professionalSkillsLevel[$id];
                $skill->candidate_id = $candidate->id;
                $skill->save();
            }
        }
        // store candidate work experience
        for ($id = 0; $id < count($request->companyName); $id++) {
            if (!empty($request->companyName[$id])) {
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
                $work->user_id = Auth::user()->id;
                $work->save();
            }
        }
        // Store candidate education
        for ($id = 0; $id < count($request->schoolName); $id++) {
            if (!empty($request->schoolName[$id])) {
                $education = new School();
                $education->fill([
                    'schoolName' => $request->schoolName[$id],
                    'candidate_id' => $candidate->id,
                    'graduated' => $request->graduated[$id],
                    'qualification' => $request->qualification[$id],
                    'schoolCity' => $request->schoolCity[$id],
                    'schoolCountry' => $request->schoolCountry[$id],
                ]);
                $education->user_id = Auth::user()->id;
                $education->save();
            }
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

        Session::flash('candidateAdded', 'Candidate successfully added!');
        return redirect()->route('candidate.show', ['candidate' => $candidate]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {

        return view('candidate.show')->with('candidate', $candidate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        return view('candidate.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Candidate $candidate)
    {
        // $candidate->image = $candidate->image;
        $candidate->fill($request->all());
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $candidate->image = $imageName;
            // Upload image into filesystem
            if ($request->hasFile('image')) {
                $path = public_path('/storage/candidate_image/' . $candidate->id);
                $image->move($path, $imageName);
            }
        } else {
            $candidate->image = $candidate->image;
        }
        $candidate->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Candidate $candidate)
    {
        if (Auth::user()->role == "SuperAdmin") {
            $candidate->delete();
            $candidate->recruitments()->delete();
            return response()->json([
                "success" => true,
                "message" => "Candidate deleted!",
                "type" => "success"
            ]);
        } else {
            if ($candidate->recruitments->count() > 0) {
                Session::flash('message', 'There is an active Recruitment Process for this Candidate so you can\'t delete it!');
                Session::flash('type', 'alert-danger');
                return response()->json([
                    "success" => false,
                    "message" => "There is an active Recruitment Process for this Candidate so you can't delete it!",
                    "type" => "danger"
                ]);
            }
            $candidate->delete();
            Recruitment::where("candidate_id", $candidate->id)->update(["deleted_at" => Carbon::now()]);
            Note::where("candidate_id", $candidate->id)->delete();
            return response()->json([
                "success" => true,
                "message" => "Candidate deleted!",
                "type" => "success"
            ]);
        }
    }

    public function candidateRequests()
    {
        $candidates = Candidate::where('approved', 0)->get();
        return view('candidate.requests', compact('candidates'));
    }

    public function approve(Request $request)
    {
        $candidate = Candidate::find($request->id);
        School::where("candidate_id", $candidate->id)->update(["user_id" =>  Auth::user()->id]);
        Work::where("candidate_id", $candidate->id)->update(["user_id" =>  Auth::user()->id]);
        Recruitment::where("candidate_id", $candidate->id)->update([
            "user_id" =>  Auth::user()->id,
            "verified" => 1
        ]);
        if (!empty($candidate)) {
            $candidate->approved = true;
            $candidate->user_id = Auth::user()->id;
            $candidate->save();
            return response()->json([
                "status" => "success",
                "message" => "Candidate approved!",
                "type" => "success"
            ]);
        } else {
            return response()->json([
                "status" => "error",
                "message" => "Something went wrong please try again!",
                "type" => "danger"
            ]);
        }
    }

    public function decline(Request $request)
    {
        $candidate = Candidate::find($request->id);
        School::where("candidate_id", $candidate->id)->update(["user_id" =>  Auth::user()->id]);
        Work::where("candidate_id", $candidate->id)->update(["user_id" =>  Auth::user()->id]);
        Recruitment::where("candidate_id", $candidate->id)->delete();
        if (!empty($candidate)) {
            $candidate->approved = true;
            $candidate->user_id = Auth::user()->id;
            $candidate->save();
            return response()->json([
                "status" => "danger",
                "message" => "Candidate declined!",
                "type" => "danger"
            ]);
        } else {
            return response()->json([
                "status" => "error",
                "message" => "Something went wrong please try again!",
                "type" => "danger"
            ]);
        }
    }

    public function total()
    {
        return response()->json([
            "total" => Candidate::where("approved", 1)->count()
        ]);
    }

    public function totalRequests()
    {
        return response()->json([
            "total" => Candidate::where("approved", 0)->count()
        ]);
    }
}
