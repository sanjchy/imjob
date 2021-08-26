export default function deleteCandidate(candidate) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    $.ajax({
        url: "candidate/" + candidate,
        type: "DELETE",
        success: function (data) {
            $.notify(
                {
                    // options
                    message: data.message
                },
                {
                    // settings
                    title: "Deleted",
                    type: data.type
                }
            );
        },
        error: function (data) {
            $.notify(
                {
                    // options
                    message: data.message
                },
                {
                    // settings
                    title: "Error",
                    type: data.type
                }
            );
        }
    });
}
