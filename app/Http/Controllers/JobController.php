<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Offer;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        return view('job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $job = new Job();
        $job->user_id = Auth::user()->id;
        $job->company_id = $request->company;
        $job->fill($request->all())->save();
        $job->save();
        Storage::makeDirectory('public/job/' . $job->id);
        return response()->json([
            'success' => true,
            'message'   => 'Job successfully posted!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('job.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('job.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $job->fill($request->all())->save();
        return redirect("job/" . $job->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        if ($job->company->approved === 1 && $job->recruitments->count() == 0) {
            $job->delete();
            Session::flash('message', 'Job deleted!');
            Session::flash('type', 'alert-danger');
            Recruitment::where("job_id", $job->id)->update(["deleted_at" => Carbon::now()]);
            Offer::where("job_id", $job->id)->delete();
            return response()->json([
                "success" => true,
                "message" => "Job deleted!",
                "type" => "success"
            ]);
        }
        Session::flash('message', 'There is an active Recruitment Process for this Job so you can\'t delete it!');
        Session::flash('type', 'alert-danger');
        return response()->json([
            "success" => false,
            "message" => "<strong>Candidates</strong> are assigned to this <strong>Job</strong> so you can't delete it!",
            "type" => "danger"
        ]);
    }

    public function total()
    {
        return response()->json([
            "total" => Job::all()->count()
        ]);
    }
}
