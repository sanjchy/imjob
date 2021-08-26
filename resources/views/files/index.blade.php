@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/files/index.css') }}">
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-1">
                @if (session()->has('fileDeleted'))
                <div class="alert alert-dismissable alert-danger shadow-sm mb-0">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span>{{ session('fileDeleted') }}</span>
                </div>
                @elseif(session()->has('fileAdded'))
                <div class="alert alert-dismissable alert-success shadow-sm mb-0">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span>{!! session('fileAdded') !!}</span>
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <a data-toggle="modal" data-target="#addFile" class="btn btn-sm btn-outline-success">Add File</a>
            @include('company.modals.addFile')
        </div>
        <div class="row">
            @foreach (\App\Models\File::where('company_id',
            NULL)->where('job_id',NULL)->where('candidate_id',NULL)->get() as
            $item)
            <div class="col-lg-2 col-xl-2 col-md-4 col-sm-4">
                <div class="file-man-box">
                    <form action="{{ route('file.destroy',$item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn p-0 m-0 rounded-circle file-close text-danger" role="button" type="submit"><i
                                class="fa fa-times-circle"></i></button>
                    </form>
                    <div class="file-img-box"><img src="{{ asset('storage/icons/png/'.$item->extension.'.png') }}"
                            alt="icon">
                    </div>
                    <form action="{{ route('file.download',$item->id) }}" method="POST">
                        @csrf
                        @method('post')
                        <a class="file-download text-secondary"><i class="fa fa-download"></i></a>
                    </form>
                    <div class="file-man-title">
                        <small class="mb-0 text-nowrap">{{ $item->originalName }}</small>
                        <p class="mb-0"><small>{{ round($item->size / 1024,2    ) }} kb</small></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
    $(document).on("click",".file-download",function(){
    var form = $(this).closest("form");
    console.log(form);
    form.submit();
    });
    });
</script>
@endsection
