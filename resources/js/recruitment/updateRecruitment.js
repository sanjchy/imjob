export default function updateRecruitment(event, recruitment) {
    event.preventDefault();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var _token = $("input[name='_token']").val();
    $.ajax({
        type: "PUT",
        url: "/recruitment/" + recruitment,
        data: {
            _token: $("input[name=_token]").val(),
            status: $(".candidateStatusFormField" + recruitment).val()
        },
        success: function (data) {
            $(".candidateRecruitmentStatus" + data.id).html(data.status);
            $("#assignedCandidate" + data.id).trigger("reset");
            $.notify(
                {
                    message: data.message
                },
                {
                    title: "Saved",
                    type: data.type
                }
            );
        }
    });
}
