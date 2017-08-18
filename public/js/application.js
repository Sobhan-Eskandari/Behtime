/**
 * Created by sobhaneskandari on 7/18/17.
 */
$("body").on("click", ".modal-dialog", function(e) {
    if ($(e.target).hasClass('modal-dialog')) {
        var hidePopup = $(e.target.parentElement).attr('id');
        $('#' + hidePopup).modal('hide');
    }
});
