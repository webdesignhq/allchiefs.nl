$(document).ready(function() {
	// $('.se-pre-con').css("display", "block");
  
	// $('body').css("opacity", "0");
  
	// setTimeout(
  	// function() 
  	// {	
    	// $('.se-pre-con').fadeOut("slow");
		// $('body').css("opacity", "1")
  	// }, 2000);
	
	$(".clickable").click(function(e) {
		e.preventDefault();
		window.location = $(this).find('a').attr('href');
	});
	
	
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
	
	$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('.header').addClass('sticky-header');
    }
    else {
        $('.header').removeClass('sticky-header');
    }
	
	});
	
	$(".menu-toggle").click(function(e) {
        $(".mobile__menu--container").toggleClass('mobile-active')
    });
	
});

