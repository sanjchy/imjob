<div class="modal fade" id="recruitmentProcess{{ $recruitment->id }}" tabindex="-1" role="dialog"
    aria-labelledby="recruitmentProcess{{ $recruitment->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded">
            <div class="container-fluid px-0">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Recruitment Process
                        </h4>
                    </div>
                    <div class="card-body">
                        <ul class="timeline">
                            @foreach ($recruitment->recruitmentProcess as $process)
                            <li>
                                @switch(ucwords($process->status))
                                @case("Assigned")
                                <div class="timeline-badge text-success shadow-sm">
                                    <i class="fa fa-check text-success fa-lg align-middle"></i>
                                </div>
                                @break
                                @case("Deleted!")
                                <div class="timeline-badge badge-danger shadow-sm">
                                    <i class="fa fa-trash text-danger fa-lg align-middle"></i>
                                </div>
                                @break
                                @default
                                <div class="timeline-badge text-secondary shadow-sm">
                                    <i class="fas fa-ellipsis-h text-white fa-lg align-middle"></i>
                                </div>
                                @endswitch
                                <div class="card timeline-panel p-0 shadow-none">
                                    <div class="m-0 shadow-none">
                                        <div class="card-header bg-white">
                                            <h6 class="timeline-title">
                                                <a href="{{ route("user.show",$process->user->id) }}">
                                                    {{ ucwords($process->user->name) }}
                                                </a>
                                            </h6>
                                            <p class="p-0 m-0">
                                                <small class="text-muted">
                                                    <i class="fa fa-clock"></i>
                                                    {{ $process->created_at->format("d.m.Y H:m") }}
                                                </small>
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            @if (ucwords($process->status) == "Assigned")
                                            <p class="text-success">
                                                {{ ucwords($process->status) }}
                                            </p>
                                            @elseif(ucwords($process->status) == "Deleted!")
                                            <p class="text-danger font-weight-bold">
                                                {{ ucwords($process->status) }}
                                            </p>
                                            @else
                                            <p class="">
                                                {{ ucwords($process->status) }}
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
