<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function index()
    {
        return view('files.index');
    }

    public function store(Request $request)
    {
        request()->validate([
            'file'  => 'required|mimes:doc,docx,pdf,txt,jpg,png|max:6000',
        ]);

        if ($files = $request->file('file')) {
            //store file into document folder
            $file = $request->file->store('public/documents');

            //store your file into database
            $document = new File();
            $document->fill($request->all());
            $document->file = $file;
            $document->originalName = $files->getClientOriginalName();
            $document->size = $request->file('file')->getSize();
            $document->extension = $files->getClientOriginalExtension();
            $document->user_id = Auth::user()->id;
            $document->save();
            Session::flash('fileAdded',  $document->originalName . ' successfully <strong>saved</strong> in Database!');
            // return response()->json([
            //     "success" => true,
            //     "file" => $document
            // ]);
            return redirect()->back();
        }

        return response()->json([
            "success" => false,
            "file" => ''
        ]);
    }

    public function destroy(File $file)
    {
        Storage::delete($file->file);
        $file->delete();
        Session::flash('fileDeleted', 'File deleted!');
        return redirect()->back();
    }

    public function download(File $file)
    {
        // return $file;
        return Storage::download($file->file);
    }
}
