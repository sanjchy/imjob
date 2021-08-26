ClassicEditor = require("@ckeditor/ckeditor5-build-classic");
conf = [
    {
        name: "basicstyles",
        items: ["Bold", "Italic", "Underline", "Strike"]
    },
    {
        name: "paragraph",
        items: [
            "NumberedList",
            "BulletedList",
            "Outdent",
            "Indent",
            "Blockquote",
            "JustifyLeft",
            "JustifyCenter",
            "JustifyRight",
            "JustifyBlock",
            "Language"
        ]
    },
    { name: "links", items: ["Link", "Unlink", "Anchor"] },
    "/",
    { name: "styles", items: ["Styles", "Format", "Font", "FontSize"] },

    { name: "colors", items: ["TextColor", "BGColor"] },
    { name: "tools", items: ["Maximize", "ShowBlocks"] }
];
CKEDITOR.editorConfiguration = conf;

var path = window.location.pathname;
var page = path.split("/");
if (page[1] === "job") {
    CKEDITOR.replace("warning", {
        toolbar: conf
    });
    CKEDITOR.replace("position", {
        toolbar: conf
    });
    CKEDITOR.replace("lookingFor", {
        toolbar: conf
    });
    CKEDITOR.replace("whatDoYouGet", {
        toolbar: conf
    });
    CKEDITOR.replace("description", {
        toolbar: conf
    });
    CKEDITOR.replace("Notes", {
        toolbar: conf
    });
    setInterval(function() {
        const warning = CKEDITOR.instances.warning.getData();
        const position = CKEDITOR.instances.position.getData();
        const lookingFor = CKEDITOR.instances.lookingFor.getData();
        const whatDoYouGet = CKEDITOR.instances.whatDoYouGet.getData();
        const jobDescription = CKEDITOR.instances.description.getData();
        const Notes = CKEDITOR.instances.Notes.getData();
        $("#warningPreview").html(warning);
        $("#positionPreview").html(position);
        $("#lookingForPreview").html(lookingFor);
        $("#whatDoYouGetPreview").html(whatDoYouGet);
        $("#jobDescriptionPreview").html(jobDescription);
        $("#NotesPreview").html(Notes);
    }, 1000);
}
