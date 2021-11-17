$(document).ready(function() {

	$(".clickable").click(function(e) {
		e.preventDefault();
		window.location = $(this).find('a').attr('href');
		console.log('clik');
	});
	
	$('.single-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true
	});

	 $('.slider-for').slick({
		centerMode: true,
		centerPadding: '100px',
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.slider-nav',
		variableWidth: true,
		dots: false,
		arrows: true,
		focusOnSelect: true,
		swipeToSlide: true,
		infinite: true,
	});
	$('.slider-nav').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  centerMode: true,
	  centerPadding: '25%',
	  asNavFor: '.slider-for',
	  dots: false,
	  arrows: true,
	  focusOnSelect: true,
	  swipeToSlide: true,
	  infinite: true,
	});	 
	
	$('.slidertrip').slick({
		centerMode: false,
		slidesToShow: 3.5,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		swipeToSlide: true,
		infinite: false,
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
	
	$(".menu-toggle-btn").click(function(e) {
		if($(".mobile__menu--container").hasClass('mobile-active')){
			$(".mobile__menu--container").removeClass('mobile-active');
			setTimeout(
				function() 
				{
					$(".mobile__menu--container--before").removeClass('mobile-active');
				}, 100);
		} else{
			$(".mobile__menu--container--before").addClass('mobile-active');
		setTimeout(
			function() 
			{
				$(".mobile__menu--container").addClass('mobile-active');
			}, 150);
		}
		
        
    });
	$(".menu-toggle-btn").click(function(e) {
        $(".menu-toggle-btn").toggleClass('menu__btn--active')
    });
	$(".menu-toggle-btn").click(function(e) {
        $(".menu-toggle-btn").toggleClass('open')
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

	$('.nav-prev').on('mouseover', function() {
		$('.prev-title').addClass('activePostNavPrev');
	});

	$('.nav-prev').on('mouseleave', function() {
		$('.prev-title').removeClass('activePostNavPrev');
	});

	$('.nav-next-span').on('mouseover', function() {
		$('.next-title').addClass('activePostNavNext');
	});

	$('.nav-next-span').on('mouseleave', function() {
		$('.next-title').removeClass('activePostNavNext');
	});
});

