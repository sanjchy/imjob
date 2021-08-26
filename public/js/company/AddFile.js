$(document).ready(function(e) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    $(".file-save").click(function(e) {
        console.log("Save button clicked");
        $("#fileAddForm").submit(function(event) {
            console.log("Form submitted!");
        });
    });
});
