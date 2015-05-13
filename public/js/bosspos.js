

/*
 * A method to initiate edit buttons on editable objects
 */
function open_file_upload_window(file)
{
    bootbox.dialog({
        className: "modal-primary",
        title: "Profile Picture",
        message: '<div class="row">  ' +
        '<div class="col-md-12" > ' +
        '<iframe name="profilePictureFrame" src="http://bosspos1.5/upload/' + file + '" height="375" width="100%">Your browser does not support frames.</iframe>' +
        '</div>  </div>'
    });
}


