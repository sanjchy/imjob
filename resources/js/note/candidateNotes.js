$(document).ready(function () {
    var selector = $("#notesContainer").data("selector");
    if (selector !== undefined) {
        var id = $("#notesContainer").data("id");
        var interval = 5000;
        if (selector == "candidate") {
            interval = 1000;
        }
        notes(selector, id, interval);
    }
});
function notes(selector, id, time) {
    var timer = time;
    var interval = setInterval(function () {
        $.ajax({
            url: "/notes",
            data: {
                selector: selector,
                id: id
            },
            type: "post",
            dataType: "json",
            success: function (response) {
                $("#notesContainer").html(response.html);
                if (response.html == "") {
                    clearInterval(interval);
                }
            }
        });
    }, time);
}
