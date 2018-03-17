$(document).ready(function() {
	$('.card-container').click(function() {
    var modal = $(this).parent().find('.modal');
    $(modal).modal('show'); 
	});
});
