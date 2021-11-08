$(document).ready(function() {

	$(".clickable").click(function(e) {
		e.preventDefault();
		window.location = $(this).find('a').attr('href');
		console.log('clik');
	});

	 $('.slider-for').slick({
		centerMode: true,
		centerPadding: '60px',
		slidesToShow: 3.5,
		slidesToScroll: 1,
		asNavFor: '.slider-nav',
		dots: false,
		arrows: true,
		focusOnSelect: true,
		swipeToSlide: true,
		infinite: true,
	});
	$('.slider-nav').slick({
	  centerMode: true,
	  slidesToShow: 2,
	  slidesToScroll: 1,
	  asNavFor: '.slider-for',
	  dots: false,
	  arrows: true,
	  focusOnSelect: true,
	  swipeToSlide: true,
	  infinite: true,
	});	 
	

	$('.case__slider').slick({
		centerMode: false,
		slidesToShow: 3.5,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		swipeToSlide: true,
		infinite: false,
	});

		var $slider = $('.case__slider');
		var $progressBar = $('.progress');
		var $progressBarLabel = $( '.slider__label' );
		
		$slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
		  var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
		  
		  $progressBar
			.css('background-size', calc + '% 100%')
			.attr('aria-valuenow', calc );
		  
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

	$(".insight").hover(function(e){
		let target = e.target.childNodes[1].innerHTML;
		console.log(target);
		$('#insights').css('background', `url(' ${ target } ') `);
	}, function(e){

	});

	$('.cat-list_item').on('click', function() {
		$('.cat-list_item').removeClass('active');
		$(this).addClass('active');
	  
		$.ajax({
		  type: 'POST',
		  url: '/allchiefs.nl/wp-admin/admin-ajax.php',
		  dataType: 'html',
		  data: {
			action: 'filter_projects',
			category: $(this).data('slug'),
			type: $(this).data('type'),
			content: $(this).data('content'),
		  },
		  success: function(res) {
			$('#response').html(res);
		  }
		})
	  });
});

