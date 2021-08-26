$(document).on("click", "#editCandidateExperience", function() {
    var id = $(this).data("id");
    editCandidateExperience(id);
    console.log(id);
});
function editCandidateExperience(id) {
    var form = $("#editCandidateWorkExperienceForm" + id);
    form.submit(function(event) {
        event.preventDefault();
    });
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $.ajax({
        type: "PUT",
        url: "/work/" + id,
        data: form.serialize(),
        success: function(data) {
            if (data.status == "success") {
                $("#editCandidateWorkExperience" + id).modal("hide");
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
                $("#workPosition" + id).html(data.data.position);
                $("#workCompanyName" + id).html(data.data.companyName);
                $("#workCompanyCity" + id).html(data.data.companyCity);
                $("#workCompanyCountry" + id).html(data.data.companyCountry);
                $("#workCompanyTasks" + id).html(data.data.tasks);
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
