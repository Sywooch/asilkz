$(function(){
	
	$('.slider1').mobilyslider();
	
	$('.slider2').mobilyslider({
		transition: 'horizontal',
		animationSpeed: 500,
		autoplay: true,
		autoplaySpeed: 5000,
		pauseOnHover: true,
		bullets: false
	});
	
	$('.slider3').mobilyslider({
		transition: 'fade',
		animationSpeed: 800,
		bullets: true,
		arrowsHide: false
	});
	
	
});
