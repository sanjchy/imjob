export default function deletejob(job) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    $.ajax({
        url: "job/" + job,
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
            $("job" + job).hide();
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
