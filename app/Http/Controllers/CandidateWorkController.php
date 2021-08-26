<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Company;
use Illuminate\Http\Request;

class CandidateWorkController extends Controller
{
    public function update(Request $request)
    {
        $work = new Work();
        $work = Work::findOrFail($request->id);
        $work->fill($request->all());
        $work->save();
        return response()->json([
            "status" => "success",
            "message" => "Work updated!",
            "type" => "info",
            "data" => $work
        ]);
    }

    public function destroy(Work $work)
    {
        $work->delete();
        return response()->json([
            "status" => "success",
            "message" => "Deleted!",
            "type" => "danger"
        ]);
    }
}
