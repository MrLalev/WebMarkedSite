jQuery(document).ready(function($) {
	$.getJSON( "../site.json", function( data ) {
        if (data.contactImg != "") {
            $('#contact-image').attr('src', '/' + data.contactImg);
        }
		$('#contact-content').append(data.contactContent);
        if (data.homeImg != "") {
            $('#home-image').attr('src', '/' + data.homeImg);
        }
        $('#home-content').append(data.homeContent);
        $('#logo-Menu').text(data.menuLogo);
	});
});