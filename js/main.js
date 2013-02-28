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
		selector: ".slides > .slide"
      });
      
      $('#main-slideshow').flexslider({
        animation: "slide",
        slideshow: false,
        controlNav: true,
        directionNav: true,
		keyboardNav: true,
		pauseOnAction: true,
		pauseOnHover: false,	 				
		animationLoop: true,
		selector: ".slides > .slide"
      });

});

/*----------- Flexslider Carrusel -----------*/
$(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 140,
    itemMargin: 5,
    asNavFor: '#slider'
  });
   
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel",
    selector: ".slides > .slide"
  });
});


/*----------- Menu principal open mobile -----------*/
$(function() {

   $('#menu-primary')
      // test the menu to see if all items fit horizontally
      .bind('testfit', function(){
            var nav = $(this),
                items = nav.find('a');
         })
      
      // toggle the menu items' visiblity
      //.find('#menu-item-19 span')
      .find('a.btn-menu')
         .bind('click focus', function(){
            $(this).toggleClass('expanded');
            $('ul.menu-1').toggle();
         });   
   
   // ...and update the nav on window events
   $(window).bind('load resize orientationchange', function(){
      
   });

});

/*----------- Correction CSS -----------*/
$(function() {
	$('#list-hotels li:last-child').css("margin", "0");
});


/*----------- Fix Font -----------*/
$(document).ready(function(){

    $("a, h2, #menu-primary li span").ieffembedfix();

});





