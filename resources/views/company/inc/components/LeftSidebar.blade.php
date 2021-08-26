<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
    <div class="container-fluid border p-0 rounded">
        @if (session()->has('message'))
        <div class="alert alert-dismissable {{ session('type') }} shadow-sm mb-0">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span>{!! session('message') !!}</span>
        </div>
        @endif
        <div class="row border m-0 p-1">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-between">
                @if ($company->user_id)
                <p class="p-1 m-0 other-data">Added by <span>
                        <a href="{{ route('user.show', $company->user->id) }}"
                            class="text-dark font-weight-bold">{{ $company->user->name }}</a>
                        <span class="font-italic">{{ $company->created_at->format('d.m.Y') }}</span>
                    </span>
                </p>
                @endif
                <div class="actions d-flex justify-content-between p-1">
                    @can('update', $company)
                    <a href="{{ route('company.edit',$company->id) }}" class="mx-1 pt-1">
                        <i class="fi-rr-edit fa-lg other-data mx-1"></i>
                    </a>
                    @endcan
                    @can('delete', $company)
                    <!-- Button trigger modal -->
                    <a data-toggle="modal" data-target="#deleteCompany" class="mx-1 pt-1">
                        <i class="fi-rr-cross-circle fa-lg other-data mx-1"></i>
                    </a>
                    <!-- Modal -->
                    @include('company/inc/DeleteCompany')
                    @endcan
                </div>
            </div>
        </div>
        <div class="container-fluid p-1 bg-white">
            <div class="row px-3">
                @include('company.inc.components.CompanyInformation')
            </div>
        </div>
        <div class="container-fluid p-1 bg-white">
            <div class="row px-3">
                @include('company.inc.components.ContactInformation')
            </div>
        </div>
        <div class="container-fluid p-1">
            <div class="row px-3">
                @include('company.inc.components.JobsPosted')
            </div>
        </div>
    </div>
</div>
