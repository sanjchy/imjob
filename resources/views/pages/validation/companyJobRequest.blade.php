<script>
    $("#companyJobRequestForm").validate({
        submitHandler: function (form, event) {
            console.log("submitted!");
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                }
            });
            $.ajax({
                type: "POST",
                url: "/job",
                data: $("#companyJobRequestForm").serialize(),
                success: function (data) {
                    $("#companyJobRequestForm").trigger("reset");
                    $("#CompanyJobPosted").removeClass("d-none");
                    setTimeout(function () {
                        $("#CompanyJobPosted").addClass("d-none");
                    }, 5000);
                    $("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                }
            });
        },
        ignore: [],
        rules: {
            requiredProfession: {
                required: true,
                minlength: 2,
                maxlength: 200
            },
            openings: {
                required: true,
            },
            placeOfWork: {
                required: true,
                maxlength: 200
            },
            salary: {
                required: true,
                maxlength: 200
            },
            workingHours: {
                required: true,
                maxlength: 200
            },
            shifts: {
                required: true,
                maxlength: 200
            },
            corporateInsertion: {
                required: true,
            },
            avaliableNow: {
                // required: true,
                // maxlength: 200
            },
            availabilityDate: {
                // required: false,
            },
            jobDescription: {
                required: true,
                maxlength: 5000
            },
            accomodations: {
                required: true,
                maxlength: 200
            },
            accomodationsPays: {
                required: true,
                maxlength: 200
            },
            accomodationsCosts: {
                required: true,
                maxlength: 200
            },
            contractDetails: {
                required: true,
                maxlength: 200
            },
            fixedTerm: {
                // required: true,
                // minlength: 2,
                // maxlength: 200
            },
            partTime: {
                // required: true,
                // minlength: 2,
                // maxlength: 200
            },
            additionalJobInformation: {
                required: true,
                maxlength: 5000
            },
            candidateQualification: {
                required: true,
                maxlength: 200
            },
            candidateAge: {
                required: true,
                maxlength: 200
            },
            candidateEducation: {
                required: true,
                maxlength: 200
            },
            candidateWorkExperience: {
                required: true,
                maxlength: 200
            },
            candidateLanguage: {
                required: true,
                maxlength: 200
            },
            candidateOtherLanguage: {
                required: true,
                maxlength: 200
            },
            candidateComputerSkills: {
                required: true,
                maxlength: 200
            },
            candidateDrivingLicence: {
                required: true,
                maxlength: 200
            },
            candidateMeansOfTransport: {
                required: true,
                maxlength: 200
            },
            descriptionOfStaffRequest: {
                required: true,
                maxlength: 5000
            },
            terms: {
                required: true
            }
        },
        messages: {
            requiredProfession: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            openings: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            placeOfWork: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            salary: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            workingHours: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            shifts: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')",
            },
            comrporateInsertion: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            avaliableNow: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            availabilityDate: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            jobDescription: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            accomodations: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            accomodationsPays: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            accomodationsCosts: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            contractDetails: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            fixedTerm: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            partTime: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            additionalJobInformation: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            candidateQualification: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            candidateAge: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            candidateEducation: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            candidateWorkExperience: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            candidateLanguage: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            candidateOtherLanguage: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            candidateComputerSkills: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            candidateDrivingLicence: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            candidateMeansOfTransport: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            descriptionOfStaffRequest: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            },
            terms: {
                required: "@lang('guest_candidate_request.required')",
                minlength: "@lang('guest_candidate_request.min2')",
                maxlength: "@lang('guest_candidate_request.max')"
            }
        },
        errorElement: "small",
        errorClass: "text-danger font-weight-bold"
    });

</script>
