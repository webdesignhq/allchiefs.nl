$(document).ready(function() {
	// $('.se-pre-con').css("display", "block");
  
	// $('body').css("opacity", "0");
  
	// setTimeout(
  	// function() 
  	// {	
    	// $('.se-pre-con').fadeOut("slow");
		// $('body').css("opacity", "1")
  	// }, 2000);
	
	
	 $('.slider-for').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.slider-nav',
	  centerMode: true,
	});
	$('.slider-nav').slick({
	  slidesToShow: 1.5,
	  slidesToScroll: 1,
	  asNavFor: '.slider-for',
	  dots: false,
	  arrows: false,
	  centerMode: true,
	  focusOnSelect: true,
	  swipeToSlide: true,
	});	 
});