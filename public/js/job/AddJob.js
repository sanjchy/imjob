$("#JobPostForm").validate({
    submitHandler: function(form) {
        // form.preventDefault();
        console.log("submitted!");
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });

        $(".job-save").click(function(e) {
            e.preventDefault();

            var _token = $("input[name='_token']").val();

            $.ajax({
                type: "POST",
                url: "/job",
                data: $("#JobPostForm").serialize(),
                success: function(data) {
                    $(".companyAddJob").modal("hide");
                    $.notify(
                        {
                            // options
                            message: data.message
                        },
                        {
                            // settings
                            title: "Saved",
                            type: "success"
                        }
                    );
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                }
            });
        });
    },
    rules: {
        requiredProfession: {
            required: true
        },
        openings: {
            required: true
        },
        placeOfWork: {
            required: true
        },
        salary: {
            required: true
        },
        workingHours: {
            required: true
        },
        jobDescription: {
            required: true
        },
        avaliableNow: {
            required: true
        },
        contractDetails: {
            required: true
        },
        availabilityDate: {
            required: false
        },
        shifts: {
            required: true
        },
        accomodations: {
            required: true
        },
        accomodationsCosts: {
            required: true
        },
        accomodationsPays: {
            required: true
        },
        corporateInsertion: {
            required: true
        },
        fixedTerm: {
            required: true
        },
        partTime: {
            required: true
        },
        additionalJobInformation: {
            required: true
        },
        candidateQualification: {
            required: true
        },
        candidateAge: {
            required: true
        },
        candidateEducation: {
            required: true
        },
        candidateWorkExperience: {
            required: true
        },
        language: {
            required: true
        },
        candidateOtherLanguage: {
            required: true
        },
        candidateComputerSkills: {
            required: true
        },
        candidateDrivingLicence: {
            required: true
        },
        candidateMeansOfTransport: {
            required: true
        },
        descriptionOfStaffRequest: {
            required: true
        }
    },
    errorElement: "small",
    errorClass: "text-danger font-weight-bold"
});
