<!-- Modal -->
<div class="modal fade" id="deleteContact{{ $contact->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title" id="exampleModalLabel"><strong class="text-danger">Delete
                    </strong>{{ $contact->name }} ?</h5>
            </div>
            <form action="{{ route('contact.destroy',$contact->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-sm btn-success mx-2" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-danger mx-2">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
