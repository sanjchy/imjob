<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // needs validation
        $contact = new Contact();

        $contact->fill($request->all());
        $contact->user_id = Auth::user()->id;
        $saved = $contact->save();
        if ($saved) {
            Storage::makeDirectory('public/contact/' . $contact->id);
            return back();
            // return response()->json(['success' => true ]);
        }
        return response()->json([
            'success' => false
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        // needs validation
        $contact->fill($request->all())->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        // needs validation
        $contact->delete();
        return back();
    }
}
