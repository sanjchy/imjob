function candidateAddNote(id) {
    var form = $("#candidateNoteAddForm" + id);
    form.submit(function(event) {
        event.preventDefault();
    });
    console.log(form);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $.ajax({
        type: "post",
        url: "/note",
        data: form.serialize(),
        success: function(data) {
            if (data.status == "success") {
                $("#AddNote").modal("hide");
                $("#notesContainer").append(data.view);
                $.notify(
                    {
                        // options
                        message: data.message
                    },
                    {
                        // settings
                        title: "Saved",
                        type: data.type
                    }
                );
            } else {
                $.notify(
                    {
                        // options
                        message: data.message
                    },
                    {
                        // settings
                        title: data.type,
                        type: data.type
                    }
                );
            }
        }
    });
}
function deleteCandidateNote(id) {
    var form = $("#candidateNoteForm" + id);
    form.submit(function(event) {
        event.preventDefault();
    });
    console.log(form);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $.ajax({
        type: "post",
        url: "/note/" + id,
        data: form.serialize(),
        success: function(data) {
            if (data.status == "success") {
                $("#candidateNote" + id).hide(500);
                console.log($("#candidateNote" + id));
                $.notify(
                    {
                        // options
                        message: data.message
                    },
                    {
                        // settings
                        title: "Saved",
                        type: data.type
                    }
                );
            } else {
                $.notify(
                    {
                        // options
                        message: data.message
                    },
                    {
                        // settings
                        title: data.type,
                        type: data.type
                    }
                );
            }
        }
    });
}
