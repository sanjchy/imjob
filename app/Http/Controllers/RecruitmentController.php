<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Candidate;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use App\Models\RecruitmentProcess;
use Illuminate\Support\Facades\Auth;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruitments = Recruitment::all()->where("verified", 1);
        return view('recruitment.index')->with('recruitments', $recruitments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recruitment = new Recruitment();
        if (!$recruitment->where('candidate_id', $request->candidate_id)->where('job_id', $request->job_id)->first()) {
            $recruitment->fill($request->all());
            $recruitment->user_id = Auth::user()->id;
            $recruitment->status = 'assigned';
            $recruitment->verified = 1;
            $save = $recruitment->save();
            if ($save) {
                // recruiitment process add to database
                $this->saveProcess($recruitment);
                $candidate = Candidate::findOrFail($request->candidate_id);
                $job = Job::findOrFail($request->job_id);
                $candidatesTable = view("job.inc.components.assignedCandidatesTable")->with("job", $job)->render();
                $jobsTable = view("candidate.inc.components.assignedJobsTable")->with("candidate", $candidate)->render();
                if ($request->ajax()) {
                    return response()->json([
                        'success' => true,
                        "job" => $request->job_id,
                        "candidate" => $request->candidate_id,
                        'message' => 'Candidate Assigned!',
                        'type' => 'success',
                        "candidatesTable" => $candidatesTable,
                        "jobsTable" => $jobsTable
                    ]);
                }
                return redirect()->back();
            }
        }
        if ($request->ajax()) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!',
                'type' => 'danger',
            ]);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function show(Recruitment $recruitment)
    {
        return view('recruitment.show')->with([
            "recruitment" => $recruitment,
            "candidate" => $recruitment->candidate,
            "job" => $recruitment->job,
            "company" => $recruitment->job->company,
            "recruitmentProcess" => $recruitment->recruitmentProcess,
            // "recruitmentProcessComments" => $recruitment->recruitmentProcessComments,
            "notes" => $recruitment->notes
        ]);
        // return response()->json([
        //     "recruitment" => [
        //         "user" => $recruitment->user,
        //         "candidate" => $recruitment->candidate,
        //         "job" => $recruitment->job,
        //         "process" =>    [
        //             "status" => $recruitment->recruitmentProcess,
        //             "comments" => "RECRUITMENT PROCCESS COMMENTS"
        //         ],
        //         "notes" => $recruitment->notes
        //     ]
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruitment $recruitment)
    {
        $all = Recruitment::all();
        return response()->json([
            "recruitments" => $all
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruitment $recruitment)
    {
        //  Recruitment process
        $recruitment->status = $request->status;
        $recruitment->user_id = Auth::user()->id;
        $save = $recruitment->save();
        if ($save) {

            $this->saveProcess($recruitment);

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => "Status Updated!",
                    'type' => "success",
                    'status' => $recruitment->status,
                    'id' => $recruitment->id
                ]);
            }
            return redirect()->back();
        }

        return response()->json([
            'success' => false,
            'message' => "Something was wrong, please try again!",
            'type' => "danger",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruitment  $recruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Recruitment $recruitment)
    {
        if ($recruitment->verified == 0) {
            $recruitment->delete();
            return response()->json([
                "success" => true,
                "message" => "Deleted",
                "type" => "danger",
                "id" => $recruitment->id
            ]);
        }
        $recruitment->status = "Deleted!";
        $recruitment->user_id = Auth::user()->id;
        $recruitment->save();

        $this->saveProcess($recruitment);

        return response()->json([
            "success" => true,
            "message" => "Deleted",
            "type" => "danger",
            "id" => $recruitment->id
        ]);
    }

    private function saveProcess($recruitment)
    {
        $process = new RecruitmentProcess();
        $process->recruitment_id = $recruitment->id;
        $process->user_id = $recruitment->user_id;
        $process->status = $recruitment->status;
        $process->save();
    }
}
