/**
 * Created by nateTheAverage on 4/23/2015.
 */

// BossPOS Object Editing initializations bosspos.js
// =================================================================
// Require bootbox.js
// -----------------------------------------------------------------
//
// =================================================================


/*
 * A method to initiate edit buttons on editable objects
 */
function open_edit_window(object)
{
    var interfaceObject = object['id'];
    bootbox.dialog({
        className: "modal-primary",
        title: "Editor",
        message: '<div class="row">  ' +
        '<div class="col-md-12"> ' +
        '<iframe name="myframe" src="http://bosspos1.5/elementEditor/' + interfaceObject + '" height="800" width="100%">Your browser does not support frames.</iframe>' +
        '</div>  </div>'
    });
}



window.closeModal = function(){
    $('.modal-primary').modal('hide');
};