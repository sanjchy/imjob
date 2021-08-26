@extends('layouts.app')

@section('content')
<div class="container-fluid m-2">
    @if (session()->has('companyUpdated'))
    <div class="row">
        <div class="alert alert-success">{{ session('companyUpdated') }}</div>
    </div>
    @endif
    <div class="row">
        <!-- left column -->
        <div class="col-md-8 bg-white h-100 mb-5">
            <div class="row bg-light shadow-sm rounded py-3">
                <div class="col-md-12">
                    <a href="/company/{{ $company->id }}" title="" class="badge badge-info ml-2 rounded p-2"><span>ID -
                            {{ $company->id }}</span></a>
                    <!-- Large modal -->
                    <form action="/company/{{ $company->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="float-right shadow-sm btn btn-sm btn-outline-danger text-danger mx-1"
                            type="submit">
                            <span>Delete</span>
                        </button>
                    </form>
                    <a class="float-right shadow-sm btn btn-sm btn-outline-info text-info mx-1"
                        href="/company/{{ $company->id }}/edit"> <span>Edit</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="container-fluid p-0">
                        <div class="row pt-3 pb-3">
                            <div class="col-sm-2 col-md-2 col-lg-2 text-center px-0 mx-0">
                                <span>
                                    <i class="fa fa-building fa-3x text-warning rounded-circle shadow-sm p-3"></i>
                                </span>
                            </div>
                            <div class="col-sm-10 col-md-10 col-sm-10 my-1">
                                <h5 class="d-inline-block h4 mx-2">{{ ucwords($company->name)}}</h5>
                                <span
                                    class="badge badge-success p-2 rounded float-right">{{ ucwords($company->industry) }}</span>
                                <address>
                                    <i class="fa fa-location-arrow mx-2 shadow-sm bg-light text-success"></i>
                                    <span class="text-dark">{{ ucwords($company->city) }}</span>
                                    <span class="text-dark"> - {{ ucwords($company->country)}}</span>
                                </address>
                                <blockquote class="card-blockquote px-3 py-1">
                                    <p class="blockquote-reverse">{{ $company->about }}</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-light shadow-sm border-top border-light">
                <div class="col-md-12">
                    <div class="container-fluid pl-0 pr-0">
                        <div class="row px-0 mx-0 my-1 py-1">
                            <div class="col-md-6 pt-1 pb-1">
                                <span style="font-size: 0.94em;" class="text-left border-secondary">
                                    <strong class="text-dark">Contact</strong>
                                </span>
                                <a href="#" class="text-success rounded shadow-sm p-0 ml-1" data-toggle="modal"
                                    data-target=".contactAdd" role="button">
                                    <i class="fa fa-plus mt-1 mb-1"></i>
                                </a>
                                @include('modals.contactAdd')
                            </div>
                            <div class="col-md-6 pt-1 pb-1">
                                <span style="font-size: 0.94em;" class="text-right border-secondary float-right mx-1">
                                    <i class="fa-vc fa fa-refresh text-warning mx-1"></i>
                                    <span class="text-dark">{{ date_format($company->updated_at, 'd.m.Y h:m') }}
                                    </span>
                                </span>
                                <span style="font-size: 0.94em;" class="text-right border-secondary float-right mx-1">
                                    <i class="fa-vc fa fa-user-circle text-primary mx-1"></i>
                                    <span class="text-dark">
                                        <a href="/user/show/{{ $company->user->id }}"
                                            class="text-dark">{{ $company->user->username }}</a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border">
                <div class="col-md-6 pr-0 pl-0 bg-white border-top">
                    <div class="container-fluid pr-0 pl-0">
                        <div class="card">
                            <h5 class="card-header">Featured</h5>
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <dl class="row pl-0 pr-0 ml-0 mr-0 p-2">
                            <dt class="col-md-5 p-1 mb-1 text-truncate">Website</dt>
                            <dd class="col-md-7 p-1 mb-1 text-truncate">
                                <span>
                                    <a href="http://{{ $company->website }}" target="_blank">{{ $company->website }}</a>
                                </span>
                            </dd>
                            <!-- Skills -->
                            <dt class="col-md-5 p-1 mb-1 text-truncate">Company Industry</dt>
                            <dd class="col-md-7 p-1 text-truncate mb-1">
                                <span class="badge badge-warning p-1"><?=@$company->industry?></span>
                            </dd>
                            <dt class="col-md-5 p-1 mb-1 text-truncate">Company Phone</dt>
                            <dd class="col-md-7 p-1 text-truncate mb-1">
                                <span><?=@$company->phone?></span>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="col-md-6 pr-0 pl-0 bg-white border-top">
                    <div class="container-fluid pr-0 pl-0">
                        <dl class="row pl-0 pr-0 ml-0 mr-0 p-2">
                            <dt class="col-md-5 p-1 mb-1 text-truncate">Full Address</dt>
                            <dd class="col-md-7 p-1 mb-1 text-truncate ">
                                <span><?=@ucwords($company->address) . ', ' . @ucwords($company->city) . ',' . @ucwords($company->companyCountry)?></span>
                            </dd>
                            <dt class="col-md-5 p-1 mb-1 text-truncate">Company Size</dt>
                            <dd class="col-md-7 p-1 text-truncate mb-1">
                                <span class="badge badge-warning">
                                    <?=@$company->size?>
                                </span>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pl-0 pr-0">
                    <ul class="nav nav-tabs m-0 bg-light">
                        <li class="nav-item mt-2 bg-outline-success rounded shadow-sm">
                            <a href="#assignedopenJobs" class="nav-link text-dark active" data-toggle="tab">Open
                                Jobs</a>
                        </li>
                    </ul>
                    <div class="tab-content bg-white shadow-sm rounded p-2">
                        <div class="tab-pane fade show active" id="assignedopenJobs">
                            <div class="container-fluid m-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="float-right shadow-sm btn btn-sm btn-outline-success text-success mx-1 mb-2"
                                            data-toggle="modal" data-target=".companyAddjob" role="button"
                                            data-toggle="tooltip" title="Assign Job"><span class="">Add Job</span></a>
                                    </div>
                                </div>
                                <!-- ACompany Active Jobs -->
                                <?php foreach ($company->jobs as $job): ?>
                                <div class="container-fluid">
                                    <div class="row p-2 border-left bg-light border-info shadow-sm mb-3"
                                        style="border-width: 0.3em !important">
                                        <div class="col-xs-1 col-sm-2 col-md-1">
                                            <div class="" style="font-size: 2em;"><i
                                                    class="fa fa-suitcase text-warning rounded-circle border border-light shadow-sm"></i>
                                            </div>
                                        </div>
                                        <div class="col-xs-3 col-sm-2 col-md-3 mt-1 ml-3 text-left">
                                            <span class=""><a href="/job/show/<?=@$job->id?>"
                                                    class="text-dark"><?=@$job->requiredProfession?></a></span><br>
                                            <span>
                                                <i class="fa fa-location-arrow text-success"></i>
                                                <?=@$job->placeOfWork?>
                                            </span>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-2 mt-1">
                                            <span>Contact</span><br>
                                            <span><a href="/Contact/show/<?=@$job->company->contact->first()->id?>"
                                                    class="text-dark small"><?=@$job->company->contact->first()->name?></a></span>
                                        </div>
                                        <div class="col-xs-2 col-sm-2 col-md-2 mt-1 text-truncate">
                                            <span>Owner</span><br>
                                            <i class="fa fa-user-circle-o text-primary"></i>
                                            <span><a href="/User/show/<?=@$job->user->id?>"
                                                    class="text-dark small text-truncate"><?=@$job->user->username?></a></span>
                                        </div>
                                        <div class="col-xs-3 col-sm-2 col-md-3 mt-1 text-center ml-2">
                                            <span class="float-left">Status <br><span>
                                                    <a class="<?=(isset($job->status) && $job->status == 'closed') ? 'text-danger' : 'text-success'?> jobStatusUpdateButton"
                                                        data-toggle="modal" data-target=".jobStatusModal" role="button"
                                                        id="<?=$job->id?>"><span
                                                            id="job<?=$job->id?>"><?=@ucwords($job->status)?></a></span></span>
                                            </span>
                                            <span class="float-right">Description<br>
                                                <span>
                                                    <i class="fa fa-sticky-note-o shadow-sm text-info"
                                                        data-toggle="modal" data-target=".jobDescription"
                                                        data-description="<?=@$job->jobDescription ?>"
                                                        role="button"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="row mt-3 pt-3 pb-2 border-top border-info">
                                                <div class="col-md-4">
                                                    <strong class="mt-1">Candidates in Pipeline
                                                        <span><?=@$job->candidates->count()?></span></strong>
                                                </div>
                                                <div class="col-md-4">
                                                    <strong class="mt-1">Placed
                                                        <span><?=@$job->candidate()->count()?></span></strong>
                                                </div>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <?php foreach ($job->candidates as $candidate): ?>
                                                    <div class="col-sm-3 col-md-3 col-lg-3 p-0 my-1 pr-1">
                                                        <div class="card p-0 my-1">
                                                            <div class="card-body p-0">
                                                                <h6 class="card-title p-1">
                                                                    <?php if (is_file(ROOT.'public'.DS.'storage'.DS.'candidates'.DS.$candidate->id.DS.'images'.DS.$candidate->image)): ?>
                                                                    <img src="<?=DS.'public'.DS.'storage'.DS.'candidates'.DS.$candidate->id.DS.'images'.DS.$candidate->image ?>"
                                                                        alt="" class="img-thumbnail"
                                                                        style="max-width: 5rem;max-height: 5rem;">
                                                                    <?php else: ?>
                                                                    <img src="<?=DS.'public'.DS.'storage'.DS.'candidates'.DS.'default.jpg' ?>"
                                                                        alt="" class="img-thumbnail"
                                                                        style="max-width: 5rem;max-height: 5rem;">
                                                                    <?php endif ?>
                                                                    <?=@$candidate->candidateFirstName .' '. $candidate->candidateLastName ?>
                                                                </h6>
                                                                <span class="px-2">
                                                                    Citizenship:
                                                                    &nbsp;<?=@ucwords($candidate->candidateCitizenship)?>
                                                                </span>
                                                                <br>
                                                                <span class="px-2">
                                                                    Birthday: <?=@$candidate->candidateBirthday ?>
                                                                </span>
                                                                <br>
                                                                <span class="px-2">
                                                                    Gender: &nbsp;<i
                                                                        class="fa fa-<?=@strtolower($candidate->candidateGender)?>"></i>
                                                                </span>
                                                                <br>
                                                                <small
                                                                    class="btn btn-sm btn-outline-success float-right m-1 py-0"
                                                                    data-toggle="modal"
                                                                    data-target=".candidateRecruitmentStatus"
                                                                    role="button" data-job_id="<?=@$job->id?>"
                                                                    data-candidate_id="<?=@$candidate->id ?>"
                                                                    data-status="<?=\app\models\Recruitment::where('job_id','=',$job->id)->where('candidate_id','=', $candidate->id)->first()->status ?>">
                                                                    <small
                                                                        id="<?=@$candidate->id?>"><?=\app\models\Recruitment::where('job_id','=',$job->id)->where('candidate_id','=', $candidate->id)->first()->status ?></small>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- right column -->
        <div class="col-md-4">
            <div class="row ml-2 bg-light rounded">
                <div class="col-md-12 shadow-sm border-bottom">
                    <div class="container-fluid p-0 m-0">
                        <div class="row text-center pt-3 pb-3 ml-1">
                            <a class="shadow-sm  btn btn-sm btn-outline-success mx-1" id="modal-221164"
                                href="#modal-container-221164" role="button" data-toggle="modal"
                                title="Add Note"><span>Add Note</span>
                            </a>
                            <a class="shadow-sm  btn btn-sm btn-outline-info mx-1" id="addFileModal" href="#addFile"
                                role="button" data-toggle="modal" title="Add Note"><span>Add File</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ml-2 rounded">
                <div class="col-md-12 pl-0 pr-0">
                    <ul class="nav nav-tabs m-0 bg-light">
                        <li class="nav-item mt-2 bg-outline-success rounded shadow-sm">
                            <a href="#note" class="nav-link text-dark active" data-toggle="tab">Note</a>
                        </li>
                        <li class="nav-item mt-2 bg-outline-success rounded shadow-sm">
                            <a href="#files" class="nav-link text-dark" data-toggle="tab">Files</a>
                        </li>
                    </ul>
                    <div class="tab-content bg-white shadow-sm rounded p-2" style="min-height: 50vh">
                        <div class="tab-pane fade show active" id="note">
                            <div class="container-fluid pr-0 pl-0">
                                <div class="row pl-0 pr-0">
                                    <?php foreach ($company->notes()->with('user')->orderBy('id', 'desc')->get() as $note): ?>
                                    <div class="col-sm-10 col-md-10 col-lg-10 offset-1">
                                        <div class="card alert-message alert-message-info shadow-sm py-1">
                                            <div class="card-body px-0 pt-0">
                                                <div class="mb-3">
                                                    <p class="lead d-block">
                                                        {{ $note->note }}
                                                    </p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <div class="">
                                                            <span>
                                                                <strong>Added on:</strong>
                                                                {{ date("d.m.Y,"$note->created_at) }}
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span>
                                                                <strong>Added by:</strong>
                                                            </span>
                                                            <span class="card-subtitle mb-2 text-muted my-1">
                                                                <a href="/user/show/{{ $note->user->id }}">
                                                                    {{ $note->user->username }}
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <?php if ($_SESSION['uid'] == $note->user->id): ?>
                                                    <div class="">
                                                        <a class="btn btn-sm btn-outline-danger"
                                                            href="/note/delete/<?=@$note->id ?>">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
