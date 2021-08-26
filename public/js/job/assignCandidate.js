function assignCandidate(job, candidate) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var _token = $("input[name='_token']").val();
    $.ajax({
        type: "POST",
        url: "/recruitment",
        data: { _token: _token, job_id: job, candidate_id: candidate },
        success: function(data) {
            $("#candidate" + data.candidate).hide(300);
            $("#assignedCandidatesTable").html(data.candidatesTable);
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
        }
    });
}
