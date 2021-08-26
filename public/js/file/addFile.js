$(document).ready(function (e) {
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('#addFileForm').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
    type:'POST',
    url: "/file",
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    success: (data) => {
        this.reset();
        $('#addFile').modal('hide');
        $.notify(
                {
                    // options
                    message: 'File added!',
                },
                {
                    // settings
                    title: "Saved",
                }
        );
        window.location.reload();
    },
        error: (data) => {
            console.log(data);
            var response = JSON.parse(data.responseText);
            $('#errorFileUpload').removeClass('d-none');
            $('#fileModalInput').addClass('is-invalid');
            $('#AddFileFormSaveButton').removeClass('btn-primary');
            $('#AddFileFormSaveButton').addClass('btn-danger');
            $('#errorFileUpload').html(response.errors.file);
    }
    });
});
});
