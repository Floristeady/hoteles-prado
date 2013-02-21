/*
	Site-specific scripts 
*/


/*----------- Flexslider -----------*/
$(function() {

	$('#home-slideshow').flexslider({
        animation: "slide",
        slideshow: false,
        controlNav: true,
        directionNav: true,
		keyboardNav: true,
		pauseOnAction: true,
		pauseOnHover: false,	 				
		animationLoop: true,
		selector: ".slides > .slide",
      });

}); 