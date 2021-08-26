<div class="tab-pane" id="notes">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <a class="float-right" data-toggle="modal" data-target="#AddNote">
                    <i class="fi-rr-file-add other-data fa-2x"></i>
                </a>
                @include('candidate.inc.modals.addNote')
            </div>
        </div>
        <style>
            #notesContainer {
                min-height: 70vh;
                max-height: 70vh;
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
        <div class="row" id="notesContainer" data-selector="candidate" data-id="{{ $candidate->id }}"
            style="max-height: 70vh;overflow-y:scroll;">
        </div>
    </div>
</div>
