
// registration.js
// ====================================================================
// Initialize Employee registration wizard
//

$(document).ready(function() {


    // DROPZONE
    // =================================================================
    // Require Dropzone
    // http://www.dropzonejs.com/
    // =================================================================

    Dropzone.options.demoDropzone = { // The camelized version of the ID of the form element
        // The configuration we've talked about above

        autoProcessQueue: false,
        headers: {"profileId" : document.getElementById("profileId").getAttributeNode("value").value},
        //uploadMultiple: true,
        //parallelUploads: 25,
        //maxFiles: 25,

        // The setting up of the dropzone
        init: function() {
            var myDropzone = this;
            //  Here's the change from enyo's tutorial...
            //  $("#submit-all").click(function (e) {
            //  e.preventDefault();
            //  e.stopPropagation();
            //  myDropzone.processQueue();
            //
            //}
            //    );

        }

    }



});




