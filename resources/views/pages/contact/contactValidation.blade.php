<script>
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
        messages: {
            name: {
                required: "@lang('guest_company_request.required')"
            },
            surname: {
                required: "@lang('guest_company_request.required')"
            },
            email: {
                required: "@lang('guest_company_request.required')",
                email: "@lang('guest_company_request.email')",
            },
            phone: {
                required: "@lang('guest_candidate_request.required')"
            },
            message: {
                required: "@lang('guest_company_request.required')",
                minlength: "@lang('guest_company_request.min10')",
                maxlength: "@lang('guest_company_request.max500')",
            },
            checkbox: {
                required: "@lang('guest_company_request.required')",
            }
        },
        errorElement: "small",
        errorClass: "text-danger font-weight-bold"
    });

</script>
