$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
});

$("#noteAddForm").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "/note",
        data: $("#noteAddForm").serialize(),
        success: function(data) {
            $("#AddNote").modal("hide");
            $('input[type="text"],textarea').val("");
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
            $("#notesContainer").prepend(data.html);
        }
    });
});
