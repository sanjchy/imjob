<div class="alert alert-info text-break">
    <p>
        {{ $note->note }}
    </p>
    <div class="float-right">
        <form action="{{ route('note.destroy',$note->id) }}" method="post">
            @csrf
            <button class="btn btn-sm btn-outline-danger fa fa-trash">
            </button>
        </form>
    </div>
</div>
