$(document).ready(function() {
    var selector = $("#notesContainer").data("selector");
    var id = $("#notesContainer").data("id");
    notes(selector, id);
});
function notes(selector, id) {
    setInterval(function() {
        $.ajax({
            url: "/notes",
            data: {
                selector: selector,
                id: id
            },
            type: "post",
            dataType: "json",
            success: function(response) {
                $("#notesContainer").html(response.html);
            }
        });
    }, 2000);
}
