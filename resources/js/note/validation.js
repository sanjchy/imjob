$("#noteAddForm").validate({
    rules: {
        note: {
            required: true,
            minlength: 5,
            maxlength: 255
        }
    },
    errorElement: "small",
    errorClass: "text-danger font-weight-bold"
});
