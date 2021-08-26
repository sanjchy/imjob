<div class="tab-pane" id="files">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    @include('candidate.inc.modals.addFile')
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <a class="float-right" data-toggle="modal" data-target="#addFile">
                                    <i class="fi-rr-file-add other-data fa-2x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #filesContainer {
                        min-height: 70vh;
                        max-height: 70vh;
                        overflow-y: scroll;
                    }

                    #filesContainer::-webkit-scrollbar {
                        width: 1em;
                    }

                    #filesContainer::-webkit-scrollbar-track {
                        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                    }

                    #filesContainer::-webkit-scrollbar-thumb {
                        background-color: darkgrey;
                        outline: 1px solid #dee5eb;
                    }
                </style>
                <div class="row" id="filesContainer">
                    @if (!$candidate->files)
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 alert alert-danger">No Files Attached</div>
                    @endif
                    @foreach ($candidate->files as $file)
                    <div class="col-lg-4 col-xl-4">
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
                                <img src="{{ asset('storage/icons/png/'.$file->extension.'.png') }}" alt="icon">
                            </div>
                            <form action="{{ route('file.download',$file->id) }}" method="POST">
                                @csrf
                                @method('post')
                                <a class="file-download text-secondary" onclick="$(this).closest('form').submit();">
                                    <i class="fi-rr-download other-data"></i>
                                </a>
                            </form>
                            <div class="file-man-title">
                                <small class="mb-0 text-truncate">{{ $file->originalName }}</small>
                                <p class="mb-0"><small>{{ round($file->size / 1024,2    ) }} kb</small></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- end col -->
        </div>

        <!-- end row -->
    </div>
    <!-- container -->
</div>
