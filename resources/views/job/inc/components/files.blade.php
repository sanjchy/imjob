<div class="tab-pane fade p-1 shadow-sm" id="file" role="tabpanel" aria-labelledby="file-tab">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('job.inc.components.addFile')
                <a class="btn btn-sm btn-outline-success float-right" data-toggle="modal" data-target="#addFile">
                    Add File
                </a>
            </div>
        </div>

        <div class="row">
            @foreach ($job->files as $file)
            <div class="col-lg-12 col-xl-12 p-1">
                <div class="file-man-box">
                    @can('delete', $file)
                    <form action="{{ route('file.destroy',$file->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn p-0 m-0 rounded-circle file-close text-danger" role="button" type="submit"><i
                                class="fa fa-times-circle"></i></button>
                    </form>
                    @endcan
                    <div class="file-img-box"><img src="{{ asset('storage/icons/png/'.$file->extension.'.png') }}"
                            alt="icon">
                    </div>
                    <form action="{{ route('file.download',$file->id) }}" method="post">
                        @csrf
                        @method('POST')
                        <a class="file-download text-secondary" onclick="$(this).closest('form').submit();"><i
                                class="fa fa-download"></i></a>
                    </form>
                    <div class="file-man-title">
                        <small class="mb-0 text-nowrap">{{ $file->originalName }}</small>
                        <p class="mb-0"><small>{{ round($file->size / 1024,2    ) }} kb</small></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
