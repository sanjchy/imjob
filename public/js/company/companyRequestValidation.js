$("#companyRequest").validate({
    rules: {
        name: {
            required: true
        },
        address: {
            required: true
        },
        website: {
            required: true,
            url: true
        },
        industry: {
            required: true
        },
        city: {
            required: true
        },
        phone: {
            required: true
        },
        size: {
            required: true,
            digits: true
        },
        country: {
            required: true
        },
        first_name: {
            required: true
        },
        last_name: {
            required: true
        },
        referentRole: {
            required: true
        },
        referentEmail: {
            required: true
        },
        referentPhone: {
            required: true
        },
        about: {
            required: true
        },
        terms: {
            required: true
        }
    },
    errorElement: "small",
    errorClass: "text-danger font-weight-bold"
});
