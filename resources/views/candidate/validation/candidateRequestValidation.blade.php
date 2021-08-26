<script>
    $("#candidateRequest").validate({
        submitHandler: function (form, event) {
            event.preventDefault();
            var location = window.location.pathname;
            var token = $("input[name='_token']").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var formData = new FormData(form);
            $.ajax({
                url: location,
                type: "POST",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data.birthday);
                    $("#CandidateRegistered").removeClass("d-none");
                    form.reset();
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                }
            });
            return false;
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
            image: {
                required: true,
                extension: "png|jpg|jpeg",
            },
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
            // Education
            "schoolName[0]": {
                required: true,
                maxlength: 200

            },
            "qualification[0]": {
                required: true,
                maxlength: 200

            },
            "graduated[0]": {
                required: true,
                maxlength: 200

            },
            "schoolCity[0]": {
                required: true,
                maxlength: 200

            },
            "schoolCountry[]": {
                required: true,
                maxlength: 200

            },
            // Work Experience
            "from[]": {
                required: true,
                maxlength: 200

            },
            "till[]": {
                required: true,
                maxlength: 200

            },
            "position[]": {
                required: true,
                maxlength: 200

            },
            "companyName[]": {
                required: true,
                maxlength: 200

            },
            "companyCity[]": {
                required: true,
                maxlength: 200

            },
            "companyCountry[]": {
                required: true,
                maxlength: 200

            },
            "tasks[]": {
                required: true,
                maxlength: 200

            },
            professionalSkills: {
                required: true,
                maxlength: 2000

            },
            "language[]": {
                required: true,
                maxlength: 200

            },
            "languageLevel[]": {
                required: true,
                maxlength: 200

            },
            "software[]": {
                required: true,
                maxlength: 200

            },
            "softwareKnowledgeLevel[]": {
                required: true,
                maxlength: 200

            },
            drivingLicence: {
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
            terms: {
                required: true
            }
        },
        messages: {
            firstName: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')",
            },
            lastName: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')",
            },
            address: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')",
            },
            phone: {
                required: "@lang('guest_candidate_request.required')",
            },
            city: {
                required: "@lang('guest_candidate_request.required')",
            },
            country: {
                required: "@lang('guest_candidate_request.required')",
            },
            email: {
                required: "@lang('guest_candidate_request.required')",
                email: "@lang('guest_candidate_request.email')",
            },
            gender: {
                required: "@lang('guest_candidate_request.required')",
            },
            image: {
                required: "@lang('guest_candidate_request.required')",
                extension: "@lang('guest_candidate_request.image')",
            },
            cv: {
                required: "@lang('guest_candidate_request.required')",
                extension: "@lang('guest_candidate_request.pdf_docx')",
            },
            birthday: {
                required: "@lang('guest_candidate_request.required')",
                date: "@lang('guest_candidate_request.date')",
            },
            citizenship: {
                required: "@lang('guest_candidate_request.required')",
            },
            // Education
            "schoolName[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            "qualification[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            "graduated[]": {
                required: "@lang('guest_candidate_request.required')",
                date: "@lang('guest_candidate_request.date')",
            },
            "schoolCity[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            "schoolCountry[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            // Work Experience
            "from[]": {
                required: "@lang('guest_candidate_request.required')",
                date: "@lang('guest_candidate_request.date')",
            },
            "till[]": {
                required: "@lang('guest_candidate_request.required')",
                date: "@lang('guest_candidate_request.date')",
            },
            "position[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            "companyName[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            "companyCity[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            "companyCountry[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            "tasks[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            professionalSkills: {
                required: "@lang('guest_candidate_request.required')",
            },
            "language[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            "languageLevel[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            "software[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            "softwareKnowledgeLevel[]": {
                required: "@lang('guest_candidate_request.required')",
            },
            drivingLicence: {
                required: "@lang('guest_candidate_request.required')",

            },
            availableFrom: {
                required: "@lang('guest_candidate_request.required')",
                date: "@lang('guest_candidate_request.date')",
            },
            message: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min10')",
                maxlength: "@lang('guest_candidate_request.max')",
            },
            terms: {
                required: "@lang('guest_candidate_request.required')",
            }
        },
        errorElement: "small",
        errorClass: "text-danger font-weight-bold"
    });

</script>
