@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container-fluid">
    <div class="row p-1 d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0 pb-0">
                    Registered Users
                </h4>
            </div>
            <div class="card-body">
                <table id="candidateDatatable"
                    class="table table-hover text-center text-nowrap table-bordered table-sm">
                    <thead class="">
                        <tr>
                            <th colspan="4" class="font-weight-bold">User Information</th>
                            <th colspan="2" class="font-weight-bold">Actions</th>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Register Date</th>
                            <th class="text-success">Approve</th>
                            <th class="text-danger">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr id="user{{ $user->id }}">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format("d.m.Y h:m") }}</td>
                            <td>
                                <a onclick="approveUser({{ $user->id }})" class="btn btn-sm btn-outline-success">
                                    Approve
                                </a>
                            </td>
                            <td>
                                <a onclick="deleteUser({{ $user->id }})" class="btn btn-sm btn-outline-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/dashboard/approveUser.js') }}"></script>
<script src="{{ asset('js/dashboard/deleteUser.js') }}"></script>
@endsection
