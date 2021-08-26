export default function deleteNote(id) {
    $.ajax({
        url: "/note/" + id,
        type: "post",
        success: function (data) {
            $("#note" + id).hide(1000);
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
        }
    });
}
