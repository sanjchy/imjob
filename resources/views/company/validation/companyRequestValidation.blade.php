<script>
    $("#companyRequest").validate({
        submitHandler: function (form,event) {
            event.preventDefault();
            $.ajaxSetup({
            headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
            });
            var location = window.location.pathname;
            var data = $(form).serialize();
            var language = location.split("/");
            data.language = language[1];
            $.ajax({
                url: location,
                type: "POST",
                data: data,
                cache: false,
                processData: true,
                success: function (data) {
                    $("#CompanyRegistered").removeClass("d-none");
                    form.reset();
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                }
            });
            return false;
        },
        rules: {
            name: {
                required: true,
                minlength: 5,
                maxlength: 255
            },
            address: {
                required: true
            },
            website: {
                required: true,
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
                required: true,
                email: true
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
        messages: {
            name: {
                required: "@lang('guest_company_request.required')",
                minlength: "@lang('guest_company_request.min2')",
                maxlength: "@lang('guest_company_request.max')",
            },
            address: {
                required: "@lang('guest_company_request.required')",
            },
            website: {
                required: "@lang('guest_company_request.required')",
                url: "@lang('guest_company_request.web')",
            },
            industry: {
                required: "@lang('guest_company_request.required')",
            },
            city: {
                required: "@lang('guest_company_request.required')",
            },
            phone: {
                required: "@lang('guest_company_request.required')",
            },
            size: {
                required: "@lang('guest_company_request.required')",
                digits: "@lang('guest_company_request.digits')",
            },
            country: {
                required: "@lang('guest_company_request.required')",
            },
            first_name: {
                required: "@lang('guest_company_request.required')",
            },
            last_name: {
                required: "@lang('guest_company_request.required')",
            },
            referentRole: {
                required: "@lang('guest_company_request.required')",
            },
            referentEmail: {
                required: "@lang('guest_company_request.required')",
                email: "@lang('guest_company_request.email')"
            },
            referentPhone: {
                required: "@lang('guest_company_request.required')",
            },
            about: {
                required: "@lang('guest_company_request.required')",
            },
            terms: {
                required: "@lang('guest_company_request.required')",
            }
        },
        validClass: "success",
        errorElement: "small",
        errorClass: "text-danger font-weight-bold"
    });

</script>
