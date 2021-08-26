function deleteCandidateEducation(id) {
    var form = $("#deleteCandidateEducationForm" + id);
    form.submit(function (event) {
        event.preventDefault();
    });
    console.log(id);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "DELETE",
        url: "/school/" + id,
        data: form.serialize(),
        success: function (data) {
            if (data.status == "success") {
                $("#deleteCandidateEducationModal" + id).modal("hide");
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
                $("#candidateEducation" + id).hide();
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
