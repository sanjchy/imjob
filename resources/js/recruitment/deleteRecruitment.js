function deleteRecruitment(id) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    $.ajax({
        type: "DELETE",
        url: "/recruitment/" + id,
        success: function(data) {
            $.notify(
                {
                    message: data.message
                },
                {
                    title: "Saved",
                    type: data.type
                }
            );
            $("#recruitment" + data.id).fadeOut(500);
        }
    });
}
