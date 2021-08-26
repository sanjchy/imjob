<div class="col-xl-3 col-lg-3 col-md-3">
    <div class="container-fluid shadow-sm bg-white border p-1">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="note-tab" data-toggle="tab" href="#note" role="tab"
                            aria-controls="note" aria-selected="true">Note</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="file-tab" data-toggle="tab" href="#file" role="tab" aria-controls="file"
                            aria-selected="false">File</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-1" id="note" role="tabpanel" aria-labelledby="note-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    @include('job.inc.components.AddNote')
                                    <a href="" class="float-right text-decoration-none" data-toggle="modal" data-target="#AddNote">
                                        <i class="fi-rr-file-add fa-2x mr-2 other-data"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @include('notes/components/job/notesContainer')
                    </div>
                    <div class="tab-pane fade p-1" id="file" role="tabpanel" aria-labelledby="file-tab">
                        <div class="container-fluid">
                            <div class=" row">
                                <div class="col-12">
                                    @include('job.inc.components.addFile')
                                    <a class="float-right" data-toggle="modal" data-target="#addFile">
                                        <i class="fi-rr-file-add fa-2x mr-2 other-data"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($job->files as $file)
                                <div class="col-lg-12 col-xl-12">
                                    <div class="file-man-box">
                                        @can('delete', $file)
                                        <form action="{{ route('file.destroy',$file->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a>
                                                <span class="p-0 m-0 rounded-circle float-right other-data"
                                                    onclick="$(this).closest('form').submit();">
                                                    <i class="fi-rr-cross-circle fa-lg"></i>
                                                </span>
                                            </a>
                                        </form>
                                        @endcan
                                        <div class="file-img-box">
                                            <img src="{{ asset('storage/icons/png/'.$file->extension.'.png') }}"
                                                alt="icon">
                                        </div>
                                        <form action="{{ route('file.download',$file->id) }}" method="POST">
                                            @csrf
                                            @method('post')
                                            <a class="file-download text-secondary"
                                                onclick="$(this).closest('form').submit();">
                                                <i class="fi-rr-download other-data"></i>
                                            </a>
                                        </form>
                                        <div class="file-man-title">
                                            <small class="mb-0 text-truncate">{{ $file->originalName }}</small>
                                            <p class="mb-0"><small>{{ round($file->size / 1024,2    ) }} kb</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
