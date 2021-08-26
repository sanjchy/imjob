<div class="container-fluid shadow-sm bg-white border p-1">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="process-tab" data-toggle="tab" href="#process" role="tab"
                        aria-controls="file" aria-selected="false">Process</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="note-tab" data-toggle="tab" href="#note" role="tab" aria-controls="note"
                        aria-selected="true">Note</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="file-tab" data-toggle="tab" href="#file" role="tab" aria-controls="file"
                        aria-selected="false">File</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active p-1" id="process" role="tabpanel" aria-labelledby="process-tab">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                @include('recruitment.components.modals.addRecruitmentProcess')
                                <a class="float-right" data-toggle="modal" data-target="#addRecruitmentProcess">
                                    <i class="fi-rr-file-add fa-2x mr-2 other-data"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @include('recruitment.components.includes.recruitmentProcessContainer')
                </div>
                <div class="tab-pane fade p-1" id="note" role="tabpanel" aria-labelledby="note-tab">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                @include('recruitment.components.includes.addNote')
                                <a class="float-right" data-toggle="modal" data-target="#AddNote">
                                    <i class="fi-rr-file-add fa-2x mr-2 other-data"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @include('notes/components/recruitment/notesContainer')
                </div>
                <div class="tab-pane fade p-1" id="file" role="tabpanel" aria-labelledby="file-tab">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                @include('recruitment.components.includes.addFile')
                                <a class="float-right" data-toggle="modal" data-target="#addFile">
                                    <i class="fi-rr-file-add fa-2x mr-2 other-data"></i>
                                </a>
                            </div>
                        </div>
                        @include('recruitment.components.includes.files')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
