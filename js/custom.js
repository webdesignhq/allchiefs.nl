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
		arrows: false,
		focusOnSelect: true,
		swipeToSlide: true,
		infinite: true,
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 1,
			  }
			}
		]
	});
	$('.slider-nav').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  centerMode: true,
	  centerPadding: '25%',
	  asNavFor: '.slider-for',
	  dots: false,
	  arrows: false,
	  focusOnSelect: true,
	  swipeToSlide: true,
	  infinite: true,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			centerPadding: '10%;'
		  }
		}
	]
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

	$(".menu-item a").click(function(e) {
		e.preventDefault();
		if($(".mobile__menu--container").hasClass('mobile-active')){
			$(".mobile__menu--container").removeClass('mobile-active');
			setTimeout(
				function() 
				{
					$(".mobile__menu--container--before").removeClass('mobile-active');
				}, 100);
			let link = $(this).attr('href');	
			console.log(link);
			window.location.href= link;	
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
	
	$(function() {

  var boxSustainability = new TimelineMax();
   
	boxSustainability.from('.box-sustainability',1,{
		x: 150
	})  
  
  var boxFitforfuture = new TimelineMax();
   
	boxFitforfuture.from('.box-fit-for-future',1,{
		x: 150
	})  
	
 var boxData = new TimelineMax();
   
	boxData.from('.box-data',1,{
		x: 150
	})  
  

	var controller = new ScrollMagic.Controller();

	var pinPeopleBox = new ScrollMagic.Scene({
				triggerElement: '#sec-people',
				triggerHook: .1
			})
			.setPin('.box-people')
		
			.addTo(controller);

	var pinSustainabiltyBox = new ScrollMagic.Scene({
				triggerElement: '#sec-sustainability',
				triggerHook: .1
			})
			.setPin('.box-sustainability')
		
		.setTween(boxSustainability)
			.addTo(controller);


	var pinFitForfutureBox = new ScrollMagic.Scene({
				triggerElement: '#sec-fit-for-future',
				triggerHook: .1
			})
			.setPin('.box-fit-for-future')
		
		.setTween(boxFitforfuture)
			.addTo(controller);
	
	var pinData = new ScrollMagic.Scene({
				triggerElement: '#sec-data',
				triggerHook: .1
			})
			.setPin('.box-data')
		
		.setTween(boxData)
			.addTo(controller);

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

