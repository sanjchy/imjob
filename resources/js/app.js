/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
require("../../node_modules/jquery-validation/dist/jquery.validate");
require("../../node_modules/jquery-validation/dist/additional-methods");
require("./note/AddNote");
require("./note/candidateNotes");
require("./note/deleteNote");
require("./note/validation");
require("./job/updatePreview");
require("flatpickr-select");
require("./candidate/candidateAddNote");
require("./candidate/editCandidateValidation");
require("./candidate/candidateRequestValidation");
require("./candidate/candidateSendCV");
require("./candidate/copyelement");
require("./candidate/createCandidateValidation");
require("./candidate/deleteCandidateEducation");
require("./candidate/deleteCandidateExperience");
require("./candidate/editCandidateEducation");
require("./candidate/editCandidateExperience");
import deleteCandidate from "./candidate/deleteCandidate";
import deleteJob from "./job/deleteJob";

var dt = require("./datatable/datatable.min.js");
import counter from "./dashboard/counter";
import deleteNote from "./note/deleteNote";
$(function () {
    counter();
    $(document).on("click", ".deleteNote", function () {
        deleteNote($(this).data("id"));
    });
    $(document).on("click", ".deleteCandidate", function (event) {
        event.preventDefault();
        var candidate = $(this).data("candidate");
        console.log(candidate);
        deleteCandidate(candidate);
    });
    $(document).on("click", ".deleteJob", function (event) {
        event.preventDefault();
        var job = $(this).data("job");
        console.log(job);
        deleteJob(job);
    });
})
$(function () {
    $(function () {
        $(document).on("click", ".file-download", function () {
            var form = $(this).closest("form");
            form.submit();
        });
    });
    $(".datatable").dataTable();
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
        dateFormat: "d.m.Y"
    });
    $(".edit-candidate-date-picker").flatpickr({
        shorthand: true, //defaults to false
        dateFormat: "d.m.Y", //defaults to "F Y"
        altFormat: "d.m.Y", //defaults to "F Y"
        theme: "light" // defaults to "light"
    });
    $(".yearpicker").flatpickr({
        shorthand: true,
        dateFormat: "Y"
    });
});
