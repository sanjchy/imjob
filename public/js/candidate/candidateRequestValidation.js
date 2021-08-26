$("#candidateRequest").validate({
    submitHandler: function(form) {
        form.submit();
    },
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
        phone: {
            required: true
        },
        address: {
            required: true
        },
        city: {
            required: true
        },
        country: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        gender: {
            required: true
        },
        image: {
            required: true,
            extenstion: "jpg|jpeg|png"
        },
        cv: {
            required: true,
            extenstion: "pdf|docx"
        },
        birthday: {
            required: true,
            date: true
        },
        citizenship: {
            required: true
        },
        // Education
        "schoolName[]": {
            required: true
        },
        "qualification[]": {
            required: true
        },
        "graduated[]": {
            required: true,
            date: true
        },
        "schoolCity[]": {
            required: true
        },
        "schoolCountry[]": {
            required: true
        },
        // Work Experience
        "from[]": {
            required: true,
            date: true
        },
        "till[]": {
            required: true,
            date: true
        },
        "position[]": {
            required: true
        },
        "companyName[]": {
            required: true
        },
        "companyCity[]": {
            required: true
        },
        "companyCountry[]": {
            required: true
        },
        "tasks[]": {
            required: true
        },
        "professionalSkills[]": {
            required: true
        },
        language: {
            required: true
        },
        languageLevel: {
            required: true
        },
        software: {
            required: true
        },
        softwareKnowledgeLevel: {
            required: true
        },
        drivingLicence: {
            required: true
        },
        availableFrom: {
            required: true,
            date: true
        },
        message: {
            required: true,
            minlength: 10,
            maxlength: 200
        },
        terms: {
            required: true
        }
    },
    errorElement: "small",
    errorClass: "text-danger font-weight-bold"
});
