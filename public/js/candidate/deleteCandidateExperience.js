function deleteCandidateExperience(id) {
    console.log(id);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "DELETE",
        url: "/work/" + id,
        data: {
            id: id,
        },
        success: function (data) {
            if (data.status == "success") {
                $("#deleteCandidateWorkExperience" + id).modal("hide");
                $("#work" + id).hide();
                console.log($("#work" + id));
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
