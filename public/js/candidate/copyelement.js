function attach_delete() {
    $(".delete").off();
    $(".delete").click(function() {
        $(this)
            .closest(".repeater-row-education")
            .hide("slow", function() {
                $(this).remove();
            });
        if ($(".repeater-row-education").length < 4) {
            $(".add-one-education").prop("disabled", true);
        } else {
            $(".add-one-education").prop("disabled", false);
        }
    });
}

function deleteLanguage() {
    $(".delete-language").off();
    $(".delete-language").click(function() {
        $(this)
            .closest(".repeater-row-language")
            .hide("slow", function() {
                $(this).remove();
            });
        if ($(".repeater-row-language").length <= 4) {
            $(".add-one-language").prop("disabled", false);
        } else {
            $(".add-one-language").prop("disabled", true);
        }
    });
}

function deleteSoftware() {
    $(".delete-software").off();
    $(".delete-software").click(function() {
        $(this)
            .closest(".repeater-row-software")
            .hide("slow", function() {
                $(this).remove();
            });
        if ($(".repeater-row-software").length < 4) {
            $(".add-one-software").prop("disabled", false);
        } else {
            $(".add-one-software").prop("disabled", true);
        }
    });
}

function deleteSkill() {
    $(".delete-skill").off();
    $(".delete-skill").click(function() {
        $(this)
            .closest(".repeater-row-skill")
            .hide("slow", function() {
                $(this).remove();
            });
        if ($(".repeater-row-skill").length <= 4) {
            $(".add-one-skill").prop("disabled", false);
        } else {
            $(".add-one-skill").prop("disabled", true);
        }
    });
}

function deleteExperience() {
    $(".delete-experience").off();
    $(".delete-experience").click(function() {
        $(this)
            .closest(".repeater-row-experience")
            .hide("slow", function() {
                $(this).remove();
            });
        if ($(".repeater-row-experience").length <= 4) {
            $(".add-one-experience").prop("disabled", false);
        } else {
            $(".add-one-experience").prop("disabled", true);
        }
    });
}

//Clone the hidden element and shows it
$(".add-one-education").click(function() {
    $element = $(".repeater-row-education")
        .first()
        .clone()
        .removeClass("d-none");
    $element.find("input").val("");
    $element.find("small .error").text("");
    $element.find(".delete-icon").show("slow", function() {
        $(this).removeClass("d-none");
    });
    $element
        .appendTo(".dynamic-stuff-education")
        .hide()
        .show("normal");
    attach_delete();
    $(".yearpicker").flatpickr({
        plugins: [
            new monthSelectPlugin({
                shorthand: true, //defaults to false
                dateFormat: "F Y", //defaults to "F Y"
                altFormat: "F Y", //defaults to "F Y"
                theme: "light" // defaults to "light"
            })
        ]
    });
    if ($(".repeater-row-education").length === 4) {
        $(".add-one-education").prop("disabled", true);
    } else {
        $(".add-one-education").show();
    }
});

$(".add-one-experience").click(function() {
    $element = $(".repeater-row-experience")
        .first()
        .clone()
        .removeClass("d-none");
    $element
        .appendTo(".dynamic-stuff-experience")
        .hide()
        .show("normal");
    $element.find("input").val("");
    $element.find("small .error").text("");
    $element.find(".delete-icon").show("slow", function() {
        $(this).removeClass("d-none");
    });
    deleteExperience();
    $(".monthpicker").flatpickr({
        plugins: [
            new monthSelectPlugin({
                shorthand: true, //defaults to false
                dateFormat: "F Y", //defaults to "F Y"
                altFormat: "F Y", //defaults to "F Y"
                theme: "light" // defaults to "light"
            })
        ]
    });
    if ($(".repeater-row-experience").length < 4) {
        $(".add-one-experience").prop("disabled", false);
    } else {
        $(".add-one-experience").prop("disabled", true);
    }
});

$(".add-one-language").click(function() {
    $element = $(".repeater-row-language")
        .first()
        .clone()
        .removeClass("d-none");
    $element
        .appendTo(".dynamic-stuff-language")
        .hide()
        .show("normal");
    $element.find("input").val("");
    $element.find("small .error").text("");
    $element.find(".delete-icon").show("slow", function() {
        $(this).removeClass("d-none");
    });
    if ($(".repeater-row-language").length < 4) {
        $(".add-one-language").prop("disabled", false);
    } else {
        $(".add-one-language").prop("disabled", true);
    }
    deleteLanguage();
});

$(".add-one-software").click(function() {
    $element = $(".repeater-row-software")
        .first()
        .clone()
        .removeClass("d-none");
    $element
        .appendTo(".dynamic-stuff-software")
        .hide()
        .show("normal");
    $element.find("input").val("");
    $element.find("small .error").text("");
    $element.find(".delete-icon").show("slow", function() {
        $(this).removeClass("d-none");
    });
    if ($(".repeater-row-software").length < 4) {
        $(".add-one-software").prop("disabled", false);
    } else {
        $(".add-one-software").prop("disabled", true);
    }
    deleteSoftware();
});

$(".add-one-skill").click(function() {
    $element = $(".repeater-row-skill")
        .first()
        .clone()
        .appendTo(".dynamic-stuff-skill");
    $element.find("input").val("");
    $(".delete-skill").first();
    $element.find("input").val("");
    $element.find("small .error").text("");
    $element.find(".delete-icon").removeClass("d-none");
    $element
        .appendTo(".dynamic-stuff-skill")
        .hide()
        .show("normal");
    deleteSkill();
    if ($(".repeater-row-skill").length < 4) {
        $(".add-one-skill").prop("disabled", false);
    } else {
        $(".add-one-skill").prop("disabled", true);
    }
});
