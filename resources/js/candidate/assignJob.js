export function assignJobToCandidate(candidate, job) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    $.ajax({
        url: "/recruitment",
        type: "post",
        data: {
            candidate_id: candidate,
            job_id: job
        },
        success: function(data) {
            $("#job" + data.job).hide(300);
            console.log(data.html);
            $("#assignedJobsTable").html(data.jobsTable);
        }
    });
}
