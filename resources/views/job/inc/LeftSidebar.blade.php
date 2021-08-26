<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
    <div class="container-fluid border p-0 rounded">
        @if (session()->has('message'))
        <div class="alert alert-dismissable {{ session('type') }} shadow-sm mb-0">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span>{!! session('message') !!}</span>
        </div>
        @endif
        <div class="row border m-0 p-1 bg-light">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-between">
                @if ($job->user_id)
                <p class="p-1 m-0 other-data">Added by <span>
                        <a href="{{ route('user.show', $job->user->id) }}"
                            class="text-dark font-weight-bold">{{ $job->user->name }}</a>
                        <span class="font-italic">{{ $job->created_at->format('d.m.Y') }}</span>
                    </span>
                </p>
                @endif
                <div class="actions d-flex justify-content-between p-1">
                    @include('job/modals/displayJob')
                    <a href="#" data-toggle="modal" data-target="#displayJob" class="mx-1 pt-1 text-decoration-none">
                        <i class="fi-rr-document-signed fa-lg other-data mx-1"></i>
                    </a>
                    @can('update', $job)
                    <a href="{{ route('job.edit',$job->id) }}" class="mx-1 pt-1 text-decoration-none">
                        <i class="fi-rr-edit fa-lg other-data mx-1"></i>
                    </a>
                    @endcan
                    @can('delete', $job)
                    <!-- Button trigger modal -->
                    <a href="" data-toggle="modal" data-target="#deleteJob" class="mx-1 pt-1 text-decoration-none">
                        <i class="fi-rr-cross-circle fa-lg other-data mx-1"></i>
                    </a>
                    <!-- Modal -->
                    @include('job/inc/components/DeleteJob')
                    @endcan
                </div>
            </div>
        </div>
        <div class="container-fluid p-1 bg-white">
            <div class="row px-3">
                @include('job.inc.components.jobInformation')
            </div>
        </div>
    </div>
</div>
