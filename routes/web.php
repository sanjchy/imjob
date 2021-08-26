<?php

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GuestRequestController;

Route::prefix('imjob_administrator')->group(function () {
    Auth::routes();
});
Route::middleware(['auth'])->group(function () {
    Route::post('/company/approve', [App\Http\Controllers\CompanyController::class, 'approve'])->name('company.approve');
    Route::post('/recruitmentProcessComment', [App\Http\Controllers\RecruitmentProcessCommentController::class, 'store'])->name('recruitmentProcessComment.store');

    Route::post('/candidate/approve', [App\Http\Controllers\CandidateController::class, 'approve'])->name('candidate.approve');
    Route::post('/candidate/decline', [App\Http\Controllers\CandidateController::class, 'decline'])->name('candidate.decline');
    Route::post('/company/total', [App\Http\Controllers\CompanyController::class, 'total'])->name('company.total');
    Route::post('/company/totalRequests', [App\Http\Controllers\CompanyController::class, 'totalRequests'])->name('company.totalRequests');
    Route::post('/job/total', [App\Http\Controllers\JobController::class, 'total'])->name('job.total');
    Route::post('/candidate/total', [App\Http\Controllers\CandidateController::class, 'total'])->name('candidate.total');
    Route::post('/candidate/totalRequests', [App\Http\Controllers\CandidateController::class, 'totalRequests'])->name('candidate.totalRequests');
    Route::get('/files', [App\Http\Controllers\FilesController::class, 'index'])->name('files');
    Route::post('/offer', [App\Http\Controllers\JobOfferController::class, 'store'])->name('offer-store');
    Route::post('/file', [App\Http\Controllers\FilesController::class, 'store'])->name('file-store');
    Route::delete('file/{file}', [App\Http\Controllers\FilesController::class, 'destroy'])->name('file.destroy');
    Route::post('file/{file}', [App\Http\Controllers\FilesController::class, 'download'])->name('file.download');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/candidate', 'CandidateController');
    Route::get('/candidate-requests', [App\Http\Controllers\CandidateController::class, 'candidateRequests'])->name('candidate_requests');
    Route::resource('/contact', 'ContactController');
    Route::resource('/recruitment', 'RecruitmentController');
    Route::resource('/job', 'JobController');
    Route::resource('/company', 'CompanyController');
    Route::get('/company/{company}/signature', 'CompanyController@signature')->name('company.signature');
    Route::get('/company-requests', [App\Http\Controllers\CompanyController::class, 'companyRequests'])->name('company_requests');
    Route::resource('/user', 'User');
    Route::post('/approve/{user}', [User::class, 'approve'])->name('approveUser');
    Route::resource('/school', 'SchoolController')->only(['destroy', 'update']);
    Route::resource('/work', 'CandidateWorkController')->only(['destroy', 'update']);
    Route::post('/note', [App\Http\Controllers\NoteController::class, 'store'])->name('note.post');
    Route::post('/notes', [App\Http\Controllers\NoteController::class, 'index'])->name('notes.index');
    Route::post('/note/{note}', [App\Http\Controllers\NoteController::class, 'destroy'])->name('note.destroy');
    Route::post('jobs', [App\Http\Controllers\JobController::class, 'jobs']);
    Route::post('/software', [App\Http\Controllers\SoftwareController::class, 'store'])->name("software.store");
    Route::post('/language', [App\Http\Controllers\LanguageController::class, 'store'])->name("language.store");
    Route::post('/skill', [App\Http\Controllers\SkillsController::class, 'store'])->name("skill.store");
    Route::post('/school', [App\Http\Controllers\SchoolController::class, 'store'])->name("school.store");
    Route::post('/work', [App\Http\Controllers\CandidateWorkController::class, 'store'])->name("work.store");
});

Route::post('/contact-us', [App\Http\Controllers\ContactUSController::class, 'contact'])->name('contact-us');
Route::redirect('/', '/en', 301);

Route::group(['prefix' => '{language}'], function () {
    Route::get('/company/job-request', [App\Http\Controllers\HomeController::class, 'jobRequestForm'])->name("company-job-request")->middleware("signed");
    Route::get('/job-offer/{job}', [App\Http\Controllers\HomeController::class, 'offer'])->name("job-offer");
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
    Route::get('/job-offers', [App\Http\Controllers\HomeController::class, 'offers'])->name('job-offers');
    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
    Route::get('/for-candidates', [App\Http\Controllers\HomeController::class, 'candidates'])->name('for-candidates');
    Route::get('/for-employers', [App\Http\Controllers\HomeController::class, 'employers'])->name('for-employers');
    Route::get('/send', [App\Http\Controllers\HomeController::class, 'send'])->name('send');
    Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy-policy');
    Route::get('/join-us', [GuestRequestController::class, 'companyShow'])->name('join-us');
    Route::get('/send-cv', [GuestRequestController::class, 'candidateShow'])->name('send-cv');
    Route::post('/join-us', [GuestRequestController::class, 'companyStore'])->name('join-us.store');
    Route::post('/send-cv', [GuestRequestController::class, 'candidateStore'])->name('candidate-cv.store');
});
