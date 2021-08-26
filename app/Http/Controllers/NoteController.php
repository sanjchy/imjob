<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\NoteRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $notes = Note::where("{$request->selector}_id", $request->id)->get()->sortByDesc("id");
        $view = view("notes.notes", compact('notes'))->render();
        return response()->json([
            "success" => true,
            "html" => $view,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoteRequest $request)
    {
        $note = new Note();
        $note->fill($request->all());
        $note->user_id = Auth::user()->id;
        $note->save();
        if ($request->has("company_id")) {
            $view = view('notes.note')->with('note', $note)->render();
        } elseif ($request->has("job_id")) {
            $view = view('notes.note')->with('note', $note)->render();
        } elseif ($request->has("candidate_id")) {
            $view = view('notes.candidateNote')->with('note', $note)->render();
        } elseif ($request->has("recruitment_id")) {
            $view = view('notes.note')->with('note', $note)->render();
        }
        return response()->json([
            'success' => true,
            'status' => "success",
            'message' => 'Note added successfully!',
            'type'  => 'success',
            'html'  => $view
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Note $note)
    {
        $note->delete();
        if (!$request->ajax()) {
            Session::flash('note', true);
            Session::flash('type', 'danger');
            Session::flash('message', 'Note deleted!');
            return redirect()->back();
        }
        return response()->json([
            "status" => "success",
            "type" => "danger",
            "message" => "Note deleted!"
        ]);
    }
}
