@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('candidateAdded'))
    <div class="row justify-content-center">
        <div class="alert alert-success">{{ session('candidateAdded') }}</div>
    </div>
    @endif
    <div class="card">
        <div class="card-header alert alert-info">
            <h3>Add Candidate</h3>
        </div>
        <div class="card-body pt-1">
            <form method="POST" enctype="multipart/form-data" action="{{'/candidate' }}" id="candidateCreateForm">
                @csrf
                @include('candidate.create.personal')
                @include('candidate.create.education')
                <!-- skills -->
                <!-- skills clone -->
                @include('candidate.create.skills')
                <!-- Skills clone end -->
                <!-- Experience Clone -->
                {{-- <!-- Experience clone end --> --}}
                @include('candidate.create.experience')
                <!-- Language clone -->
                @include('candidate.create.language')
                <!-- Computer Knowledge clone -->
                @include('candidate.create.software')
                @include('candidate.create.other')
                @include('candidate.create.button')
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset("js/candidate/copyelement.js") }}"></script>
<script src="{{ asset("js/candidate/createCandidateValidation.js") }}"></script>
@endsection
