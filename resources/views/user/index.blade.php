@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/user/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/rightSidebar.css') }}">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('user.inc.leftSidebar')
        @include('user.inc.rightSidebar')
    </div>
</div>
@endsection
