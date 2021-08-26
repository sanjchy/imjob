<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\GuestCompanyRequest;
use App\Models\Offer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('language');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function candidates()
    {
        return view('pages.candidates');
    }

    public function offers(Request $request)
    {
        session()->flash('covid', true);
        $jobs = Offer::paginate(5);
        return view('pages.jobs')->with("jobs", $jobs)->with("request", $request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function offer($lang, Request $request, Offer $job)
    {
        $request->language = $lang;
        $request->job = $job->id;
        return view('pages.jobOffer')->with("job", $job)->with("request", $request);
    }

    public function employers()
    {
        return view('pages.employers');
    }

    public function send()
    {
        return view('pages.send');
    }
    /**
     * View for company insert from frontend
     *
     * @return View
     */
    public function companyDataSend()
    {
        return view('pages.company_data_send');
    }

    public function candidateDataSend()
    {
        return view('pages.candidate_data_send');
    }

    public function jobRequestForm(Request $request)
    {
        return view("pages.companyJobRequest");
    }

    public function candidateDataSubmit(Request $request)
    {
        return response($request);
    }

    public function companyDataSubmit(GuestCompanyRequest $request)
    {
        $company = new Company();
        $company->fill($request->all());
        $contact = new Contact();
        $contact->name = $request->first_name . ' ' . $request->last_name;
        $contact->email = $request->referentEmail;
        $contact->role = $request->referentRole;
        $contact->phone = $request->referentPhone;
        return response()->json([
            'company' => $company,
            'contact' => $contact
        ]);
    }

    public function privacy()
    {
        return view('pages.privacy');
    }
}
