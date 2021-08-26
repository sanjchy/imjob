<div class="modal fade" id="deleteCompany" tabindex="-1" role="dialog" aria-labelledby="deleteCompany"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCompany"><span class="text-danger">Delete</span> {{ $company->name }}
                </h5>
            </div>
            <div class="modal-body">
                Are you sure you want to <span class="text-danger">delete</span> {{ $company->name }}
            </div>
            <div class="modal-footer">
                <form action="/company/{{ $company->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    @if (Auth::user()->role == "SuperAdmin")
                    <button class="btn btn-danger shadow-sm mx-1" type="submit">Delete</button>
                    @else
                    <small class="text-danger text-center">
                        Only SuperAdmin can delete Company.
                    </small>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
