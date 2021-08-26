$(document).on("click","#editCandidateEducation",function() {
    var id = $(this).data("id");
    editCandidateEducation(id);
    console.log(id);
    });
function editCandidateEducation(id) {
    var form = $("#editCandidateEducationForm" + id);
    form.submit(function (event) {
        event.preventDefault();
    });
    console.log(form);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "PUT",
        url: "/school/" + id,
        data: form.serialize(),
        success: function (data) {
            if (data.status == "success") {
                $("#editCandidateEducationModal" + id).modal("hide");
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
                $("#qualification" + id)
                    .html(data.data.qualification)
                    .addClass("text-success");
                $("#schoolName" + id)
                    .html(data.data.schoolName)
                    .addClass("text-success");
                $("#schoolCity" + id)
                    .html(data.data.schoolCity)
                    .addClass("text-success");
                $("#schoolCountry" + id)
                    .html(data.data.schoolCountry)
                    .addClass("text-success");
                $("#graduated" + id)
                    .html(data.data.graduated)
                    .addClass("text-success");
            } else {
                $.notify(
                    {
                        // options
                        message: data.message,
                    },
                    {
                        // settings
                        title: data.type,
                        type: data.type,
                    }
                );
            }
        },
    });
}
