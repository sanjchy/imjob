<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

    public function update(Request $request, School $school)
    {
        if ($school) {
            $school->fill($request->all())->save();
            return response()->json([
                "status" => "success",
                "type" => "success",
                "message" => "Updated!",
                "data" => $school
            ]);
        }
        return response()->json([
            "status" => "error",
            "type" => "danger",
            "message" => "Something went wrong please try again!",
        ]);
    }

    public function destroy(School $school)
    {
        $school->delete();
        return response()->json([
            "status" => "success",
            "type" => "success",
            "message" => "Deleted!"
        ]);
    }
}
