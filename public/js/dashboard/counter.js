setInterval(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $.ajax({
        type: "post",
        data: {},
        url: "/company/total",
        success: function(data) {
            $("#companiesTotal").html(data.total);
        }
    });

    $.ajax({
        type: "post",
        data: {},
        url: "/job/total",
        success: function(data) {
            $("#jobsTotal").html(data.total);
        }
    });
    $.ajax({
        type: "post",
        data: {},
        url: "/candidate/total",
        success: function(data) {
            $("#candidatesTotal").html(data.total);
        }
    });
    $.ajax({
        type: "post",
        data: {},
        url: "/candidate/totalRequests",
        success: function(data) {
            $("#candidatesTotalRequests").html(data.total);
        }
    });
    $.ajax({
        type: "post",
        data: {},
        url: "/company/totalRequests",
        success: function(data) {
            $("#companiesTotalRequests").html(data.total);
        }
    });
}, 2000);
