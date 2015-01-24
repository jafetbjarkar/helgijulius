jQuery(function( $ ) {

	// LOOK AND AWESOMEN3SS
  // var color = $(".post-frame").attr('data-color');
  // $('.inner-frame').each (function() {
  //   $(this).addClass(color);
  // });
  // console.log(color);

  function checkActivePageNo() {
  	var pageNumber = $('.owl-page.active').find('.owl-numbers').text();
  	//console.log(pageNumber);
  	return pageNumber;
  }
  function updateColorTheme() {
  	//console.log('updateColorTheme()');
  	var pageNo = checkActivePageNo() - 1;
  	var posts = $('.post');
  	var thePost = posts[pageNo];
  	var color = $(thePost).attr('data-color');
  	
  	$('body').removeClass('black');
  	$('body').removeClass('white');
  	$('body').addClass(color);
  }


  // $('.owl-controls').click(function(){
  // 	updateColorTheme();
  // });
  $('body').click(function(){
  	
  		updateColorTheme();
  	
  	
  });
  // $('body').mouseup(function(){
  	
  // 		updateColorTheme();
  	
  	
  // });

  
	// $('.owl-controls').ondrag(function(){
 //  	updateColorTheme();
 //  });
	// $('.owl-wrapper[style]').change(function(){
	// 	updateColorTheme();
	// });

  updateColorTheme();


  $(".content-area").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 200,
      paginationSpeed : 200,
      rewindSpeed : 300,
      singleItem : true, // Each slide fits to screen
      lazyLoad : true,
      paginationNumbers : true,
      mouseDrag : false,
      touchDrag: false,
      //scrollPerPage: true,

      //rewindNav : false,
      //pagination : false,
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });


  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus();
  });

});