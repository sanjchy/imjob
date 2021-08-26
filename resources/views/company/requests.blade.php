@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        @if (session()->has('companyDeleted'))
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger" role="alert">
                    {{ session('companyDeleted') }}
                </div>
            </div>
        @endif
        <div class="row p-1 d-flex justify-content-center">
            <div class="card shadow-none">
                <div class="card-header">
                    <h4 class="mb-0 pb-0">
                        Company Requests
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover text-center text-nowrap table-bordered table-responsive datatable">
                        <thead class="bg-light">
                            <tr>
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Industry</th>
                                <th>Size</th>
                                <th>Jobs</th>
                                <th><i class="fa fa-globe text-danger"></i></th>
                                <th><i class="fa fa-phone text-success"></i> </th>
                                <th>Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr id="company{{ $company->id }}">
                                    <td><a href="{{ route('company.show', $company->id) }}"
                                            class="text-primary">{{ ucwords($company->name) }}</a></td>
                                    <td>{{ ucwords($company->country) }}</td>
                                    <td>{{ ucwords($company->city) }}</td>
                                    <td>{{ ucwords($company->address) }}</td>
                                    <td><span class="">{{ ucwords($company->industry) }}</span></td>
                                    <td class="text-success">{{ $company->size }}</td>
                                    <td><strong class="font-weight-bold">{{ $company->jobs->count() }}</strong>
                                    </td>
                                    <td><a href="http://{{ $company->website }}" class="text-primary"
                                            target="_blank">{{ $company->website }}</a>
                                    </td>
                                    <td><a href="tel:{{ $company->phone }}">{{ $company->phone }}</a></td>
                                    <td><a id="approveCompany" class="btn btn-sm btn-outline-success p-1 m-0"
                                            onclick="approveCompany({{ $company->id }})">Approve</a></td>
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
    <script src="{{ asset('js/dashboard/approveCompany.js') }}" defer></script>
@endsection
