function approveCompany(id) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "POST",
        url: "/company/approve",
        data: {
            id: id,
        },
        success: function (data) {
            if (data.status == "success") {
                $("#company" + id).hide();
                console.log(data);
                $.notify(
                    {
                        // options
                        message: data.message,
                    },
                    {
                        // settings
                        title: "Saved",
                        type: data.type,
                    }
                );
            } else {
                $.notify(
                    {
                        // options
                        message: data.message,
                    },
                    {
                        // settings
                        title: "Error",
                        type: data.type,
                    }
                );
            }
        },
    });
}
