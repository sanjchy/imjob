<?php

namespace App\Http\Controllers;

use App\Models\RecruitmentProcessComment;
use Illuminate\Http\Request;

class RecruitmentProcessCommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new RecruitmentProcessComment();
        $comment->fill($request->all());
        $comment->save();
        return redirect()->back();
    }
}
