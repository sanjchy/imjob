<div class="col-lg-4 col-xl-4">
    <div class="file-man-box">
        @can('delete', $file)
        <form action="{{ route('file.destroy',$file->id) }}" method="post">
            @csrf
            @method('DELETE')
            <a>
                <span class="p-0 m-0 rounded-circle float-right other-data" onclick="$(this).closest('form').submit();">
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
