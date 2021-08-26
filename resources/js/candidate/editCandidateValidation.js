$("#editCandidateForm").validate({
    ignore: [],
    rules: {
        firstName: {
            required: true,
            minlength: 2,
            maxlength: 200
        },
        lastName: {
            required: true,
            minlength: 2,
            maxlength: 200
        },
        address: {
            required: true,
            minlength: 2,
            maxlength: 200
        },
        phone: {
            required: true,
            maxlength: 200

        },
        city: {
            required: true,
            maxlength: 200

        },
        country: {
            required: true,
            maxlength: 200

        },
        email: {
            required: true,
            email: true,
            maxlength: 200

        },
        gender: {
            required: true,
            maxlength: 200

        },
        // image: {
        //     required: true,
        //     extension: "png|jpg|jpeg",
        // },
        cv: {
            // required: true,
            // extension: 'pdf|docx'
        },
        birthday: {
            required: true,
            maxlength: 200

        },
        citizenship: {
            required: true,
            maxlength: 200

        },
        availableFrom: {
            required: true,
            maxlength: 200

        },
        message: {
            required: true,
            minlength: 10,
            maxlength: 2000
        },
    },
    errorElement: "small",
    errorClass: "text-danger font-weight-bold"
});
