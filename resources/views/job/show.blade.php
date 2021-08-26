@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/job/job.css') }}">
<link rel="stylesheet" href="{{ asset('css/job/information.css') }}">
<link rel="stylesheet" href="{{ asset('css/files/index.css') }}">
@endsection
@section('content')
<div class="container-fluid px-lg-5 px-sm-0">
    <div class="row px-lg-5 px-sm-0">
        @include('job.inc.LeftSidebar')
        @include('job.inc.RightSidebar')
    </div>
</div>
@endsection
@section('scripts')
<script>
    $("#assignedCandidatesDatatable").DataTable();
</script>
<script src="{{ asset("js/job/assignCandidate.js") }}"></script>
<script src="{{ asset("js/recruitment/updateRecruitment.js") }}"></script>
<script src="{{ asset("js/recruitment/deleteRecruitment.js") }}"></script>
<script src="{{ asset("js/note/validation.js") }}"></script>
@endsection
