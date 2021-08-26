    @foreach ($notes as $note)
    <div class="{{ $note->candidate_id ? 'col-3' : 'col' }} my-3" id="note{{ $note->id }}">
        <div class="card shadow-none">
            <div class="card-header p-2 m-0 d-flex justify-content-between">
                <div class="mx-1">
                    <p class="my-0 py-0 px-0 font-weight-bold">
                        <a href="{{ route('user.show', $note->user->id) }}"
                            class="text-dark">{{ ucwords($note->user->name) }}</a>
                    </p>
                    <small class="small text-muted font-italic">
                        Author
                    </small>
                </div>
                @can('delete', $note)
                <span class="my-2 py-1 d-flex justify-content-between">
                    <i class="fi-rr-cross-circle other-data fa-lg px-1 deleteNote" data-id="{{ $note->id }}"></i>
                </span>
                @endcan
            </div>
            <div class="card-body">{{ $note->note }}</div>
            <div class="card-footer py-0 m-0">
                <small class="small text-muted font-italic">
                    Posted: &nbsp;
                </small>
                <small class="my-0 py-0 px-0">
                    {{ $note->created_at ? $note->created_at->format('d.m.Y') : '' }}
                </small>
            </div>
        </div>
    </div>
    @endforeach
