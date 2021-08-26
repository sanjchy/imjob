$(document).ready(function($) {
    bsCustomFileInput.init();

    $(".copyelement").click(function(e) {
        e.preventDefault();

        $copyclass = $(this).data("copyclass");
        $("." + $copyclass + " .row")
            .first()
            .clone(true)
            .find("input:text")
            .val("")
            .end()
            .find(".delete-row-div")
            .removeClass("d-none")
            .end()
            .find("input, select")
            .prop("required", true)
            .end()
            .removeClass("d-none")
            .insertBefore(
                $(this)
                    .parent()
                    .parent()
            );
        // $('.' + $copyclass + ' .row').first().clone().find("input:text").val("").end().appendTo('.' + $copyclass);

        // $('#' + $copyclass + '_count').val($('.' + $copyclass + ' .row').length);

        // if ($('.' + $copyclass + ' .row').length == $(this).data('max')) {
        //   $(this).attr('disabled', true);
        // }
        updateAmount($copyclass);

        updateRequired($copyclass);
        getRequiredFields();
    });

    $(".delete-row").click(function(e) {
        e.preventDefault();
        // console.log('test')

        $rowclass = $(this).data("rowclass");
        $(this)
            .parents(".repeater-item")
            .remove();
        updateAmount($rowclass);
        updateRequired($rowclass);
        getRequiredFields();
    });

    function updateAmount($classname) {
        $("#" + $classname + "_count").val(
            $("." + $classname + " .row.repeater-item").length
        );

        if (
            $("." + $classname + " .row.repeater-item").length ==
            $("." + $classname + " .copyelement").data("max")
        ) {
            $("." + $classname + " .copyelement").attr("disabled", true);
        } else {
            $("." + $classname + " .copyelement").attr("disabled", false);
        }
    }

    function updateRequired($theclass) {
        if ($theclass == "computerknowledge_row") {
            if ($("#computerknowledge_row_count").val() == "1") {
                $(".computerknowledge_row .row")
                    .first()
                    .find("input, select")
                    .prop("required", false);
            } else {
                $(".computerknowledge_row .row")
                    .first()
                    .find("input, select")
                    .prop("required", true);
            }
        }
    }

    $("#consentcheck").change(function() {
        $("#form_submit")
            .attr("disabled", !this.checked)
            .parent()
            .toggleClass("isdisabled", !this.checked);
    });

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
    $(".datepicker").flatpickr({
        dateFormat: "d-m-Y"
    });

    getRequiredFields();

    function getRequiredFields() {
        $requiredfields = $(
            ".specialform form input,.specialform form textarea,.specialform form select"
        ).filter("[required]:visible");
        console.log($requiredfields);
    }
    $(".specialform form").submit(function(e) {
        if (!$form_testing) {
            $(
                ".specialform form input,.specialform form textarea,.specialform form select"
            )
                .removeClass("is-invalid")
                .parent()
                .removeClass("parent-is-invalid");
            $requiredfields.each(function(index, element) {
                // element == this
                if ($(element).val() == "") {
                    $(".form-error").slideDown();
                    $(element).addClass("is-invalid");
                    $(element)
                        .parent()
                        .addClass("parent-is-invalid");
                    e.preventDefault();
                }
            });
        }
    });
    $requiredfields.on("change paste keyup", function(e) {
        $(this).removeClass("is-invalid");
        $(this)
            .parent()
            .removeClass("parent-is-invalid");
    });
}, jQuery);

// (function() {
//   'use strict';
//   window.addEventListener('load', function() {
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.getElementsByClassName('needs-validation');
//     // Loop over them and prevent submission
//     var validation = Array.prototype.filter.call(forms, function(form) {
//       form.addEventListener('submit', function(event) {
//         if (form.checkValidity() === false) {
//           event.preventDefault();
//           event.stopPropagation();
//         }
//         form.classList.add('was-validated');
//       }, false);
//     });
//   }, false);
// })();
