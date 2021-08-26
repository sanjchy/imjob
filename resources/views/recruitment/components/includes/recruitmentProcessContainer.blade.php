<style>
    #recruitmentProcessContainer {
        min-height: 80vh;
        max-height: 80vh;
        overflow-y: scroll;
    }

    #recruitmentProcessContainer::-webkit-scrollbar {
        width: 1em;
    }

    #recruitmentProcessContainer::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    #recruitmentProcessContainer::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        outline: 1px solid #dee5eb;
    }

</style>
<div class="container-fluid recruitmentProcessContainer p-0 m-0" id="recruitmentProcessContainer">
    @foreach ($recruitmentProcess as $process)
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-3" id="process{{ $process->id }}">
        <div class="card shadow-none">
            <div class="card-header p-2 m-0 d-flex justify-content-between">
                <div class="mx-1">
                    <p class="my-0 py-0 px-0 font-weight-bold">
                        <a href="{{ route('user.show', $process->user->id) }}"
                            class="text-dark">{{ ucwords($process->user->name) }}</a>
                    </p>
                    <small class="small text-muted font-italic">
                        Recruiter
                    </small>
                </div>
                <div class="mx-1">
                    <small class="d-block my-1 py-0 px-0 font-weight-bold">
                        {{ $process->created_at ? $process->created_at->format("d.m.Y") : "" }}
                    </small>
                    <small class="d-block mt-1 small text-muted font-italic">
                        Posted
                    </small>
                </div>
            </div>
            <div class="card-body">{{ $process->status }}</div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row p-2">
                        @foreach ($process->comments as $comment)
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div class="card shadow-none">
                                <div class="card-header p-2 m-0 d-flex justify-content-between">
                                    <div class="mx-1">
                                        <p class="my-0 py-0 px-0 font-weight-bold">
                                            <a href="{{ route('user.show', $comment->user->id) }}"
                                                class="text-dark">{{ ucwords($comment->user->name) }}</a>
                                        </p>
                                    </div>
                                    <div class="mx-1">
                                        <small class="d-block my-1 py-0 px-0 font-weight-bold">
                                            {{ $comment->created_at ? $comment->created_at->format("d.m.Y H:i") : "" }}
                                        </small>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>
                                        {{ $comment->comment }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a data-toggle="modal" data-target="#commentRecruitmentProcess{{ $process->id }}" class="float-right">
                    <i class="fi-rr-comment-alt other-data fa-lg"></i>
                </a>
                @include('recruitment.components.modals.commentRecruitmentProcess')
            </div>
        </div>
    </div>
    @endforeach
</div>
