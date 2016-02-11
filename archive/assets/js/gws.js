/*
##
##	Create a GWS namespace
##
*/

var GWS = GWS || {};

/*
##
##	Rotate images in website banner
##
*/

GWS.bannerRotate = {

	init: function() {

		$('#cycle').cycle({ 
			fx: 'fade', 
			speed: 5000,
			timeout: 10000
		});
	
	}

};

/*
##
##	Open specified links in new window
##
*/

GWS.externalLink = {

	init: function() {
	
		$("a[rel='external']").click(function(event){
		
			event.preventDefault();
		
			var url = $(this).attr("href");
			window.open(url);
		
		});		
		
	}

};

GWS.orbitSlider = {

	init: function() {
		if ($("#featured").length) {
			$("#featured").flexslider();
		}
	}

};

$(document).ready(function() {
	GWS.bannerRotate.init();
	GWS.externalLink.init();
	GWS.orbitSlider.init();
});


