$(function() {			
	
	$('.lightphoto').lightGallery({
		loop: true,
	    fourceAutoply: false,
	    autoplay: false,
	    thumbnail: false,
	    pager: $(window).width() >= 768 ? true : false,
	    speed: 400,
	    scale: 1,
	    keypress: true,
	    mode: 'lg-slide',
	    cssEasing: 'cubic-bezier(0.25, 0, 0.25, 1)'
	});
	
});