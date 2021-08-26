function approveUser(id) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $.ajax({
        type: "POST",
        url: "/approve/" + id,
        data: {
            id: id
        },
        success: function(data) {
            if (data.status == true) {
                $("#user" + data.user).hide(1000);
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
                        title: "Error",
                        type: data.type
                    }
                );
            }
        }
    });
}
