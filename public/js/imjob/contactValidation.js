$("#contactUS").validate({
    rules: {
        name: {
            required: true
        },
        surname: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true
        },
        message: {
            required: true,
            minlength: 10,
            maxlength: 500
        },
        checkbox: {
            required: true
        }
    },
    errorElement: "small",
    errorClass: "text-danger font-weight-bold"
});
