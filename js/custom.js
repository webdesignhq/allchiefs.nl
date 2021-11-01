$(document).ready(function() {

	$(".clickable").click(function(e) {
		e.preventDefault();
		window.location = $(this).find('a').attr('href');
		console.log('clik');
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

	$(".insight").hover(function(e){
		let target = e.target.childNodes[1].innerHTML;
		console.log(target);
		$('#insights').css('background', `url(' ${ target } ') `);
	}, function(e){

	});

	$('.cat-list_item').first().trigger("click");

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
		  },
		  success: function(res) {
			$('#response').html(res);
		  }
		})
	  });
});

