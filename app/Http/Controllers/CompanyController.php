<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Notifications\CompanyAdded;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    use Notifiable;

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
        $companies = Company::where('approved', true)->get();
        return view('company.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create', ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $contact = new Contact();
        $company = new Company();
        $company->fill($request->all())->save();
        $company->approved = true;
        $company->user_id = Auth::user()->id;
        $company->save();
        Storage::makeDirectory('public/company/' . $company->id);

        $contact->company_id = $company->id;
        $contact->user_id = Auth::user()->id;
        $contact->name = $request->referent;
        $contact->role = $request->referentRole;
        $contact->phone = $request->referentPhone;
        $contact->email = $request->referentEmail;
        // $contact->fill($request->all());
        $contact->save();
        Storage::makeDirectory('public/contact/' . $contact->id);
        // $contact->notify(new CompanyAdded());
        return redirect('company/' . $company->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('company.show', ['company' => $company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {

        $company->fill($request->all())->save();

        Session::flash('companyUpdated', 'Company successfully updated!');

        return redirect('company/' . $company->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        if ($company->jobs->count() > 0) {
            Session::flash('message', 'Company has active Jobs!');
            Session::flash('type', 'alert-danger');

            return back();
        }
        $company->delete();
        $company->contacts()->delete();
        $company->notes()->delete();
        Session::flash('companyDeleted', 'Company deleted!');
        return redirect('company');
    }

    public function companyRequests()
    {
        $companies = Company::where('approved', 0)->get();
        return view('company.requests', compact('companies'));
    }

    public function approve(Request $request)
    {
        $company = Company::find($request->id);
        if (!empty($company)) {
            $company->approved = true;
            $company->user_id = Auth::user()->id;
            $company->save();
            return response()->json([
                "status" => "success",
                "message" => "Company approved!",
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

    public function total()
    {
        return response()->json([
            "total" => Company::where("approved", 1)->count()
        ]);
    }

    public function totalRequests()
    {
        return response()->json([
            "total" => Company::where("approved", 0)->count()
        ]);
    }

    public function signature(Request $request)
    {
        return response()->json([
            "signature" =>  URL::temporarySignedRoute(
                'company-job-request',
                now()->addHours(24),
                [
                    "language" => $request->language,
                    'company' => $request->company,
                ]
            )
        ]);
    }

    public function sendJobRequestMail(Request $request)
    {
        // sender > env.email
        // Recepient $request->contact
        //  Subject Job Request
        //  Name
        // Text
        // URL
    }
}
