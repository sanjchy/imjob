$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$(".company-save").click(function (e) {
    e.preventDefault();

    var _token = $("input[name='_token']").val();

    $.ajax({
        type: "POST",
        url: "/company",
        data: { _token: _token },
        success: function (data) {
            console.log(data.success);

        },
    });
});
