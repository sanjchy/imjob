<div class="col-xl-3 col-lg-3 col-md-3">
    <div class="container-fluid shadow-sm bg-white border p-1">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active nav-pill" id="note-tab" data-toggle="tab" href="#note" role="tab"
                            aria-controls="note" aria-selected="true">Note</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-pill" id="file-tab" data-toggle="tab" href="#file" role="tab"
                            aria-controls="file" aria-selected="false">File</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-1" id="note" role="tabpanel" aria-labelledby="note-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    @include('company.inc.components.modals.AddNote')
                                    <a class="float-right" data-toggle="modal" data-target="#AddNote">
                                        <i class="fi-rr-file-add fa-2x mr-2 other-data"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <style>
                            #notesContainer {
                                min-height: 80vh;
                                max-height: 80vh;
                                overflow-y: scroll;
                            }

                            #notesContainer::-webkit-scrollbar {
                                width: 1em;
                            }

                            #notesContainer::-webkit-scrollbar-track {
                                box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                            }

                            #notesContainer::-webkit-scrollbar-thumb {
                                background-color: darkgrey;
                                outline: 1px solid #dee5eb;
                            }

                        </style>
                        @include('notes/components/company/notesContainer')
                    </div>
                    <div class="tab-pane fade p-1" id="file" role="tabpanel" aria-labelledby="file-tab">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    @include('company.inc.components.modals/addFile')
                                    <a class="float-right" data-toggle="modal" data-target="#addFile">
                                        <i class="fi-rr-file-add fa-2x mr-2 other-data"></i>
                                    </a>
                                </div>
                            </div>
                            @include('company.inc.filesContainer')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
