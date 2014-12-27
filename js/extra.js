jQuery(function( $ ) {

	// LOOK AND AWESOMEN3SS
  var color = $(".post-frame").attr('data-color');
  $('.inner-frame').each (function() {
    $(this).addClass(color);
  });
  console.log(color);


  $(".content-area").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      lazyLoad: true,
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

});