$(function() {

	$('.flexslider').flexslider({
        animation: "fade"
    });

    var custom = $('.notices ul').mCustomScrollbar({
    	theme: 'minimal-dark',
    	scrollInertia: 100,
    	scrollButtons: {
    		enable: true
    	}

    });
    

    /**
     * Clamp things
     */
    $('.event-clamp').each(function(i, element) {
        $clamp(element, {clamp: 2});
    });

    $('#events-carousel, #activities-carousel').on('slid.bs.carousel', function() {
        $('.event-clamp').each(function(i, element) {
            $clamp(element, {clamp: 3});
        });
    });

    /**
     * tooltip
     */
     $('[data-toggle="popover"]').popover({
         placement : 'top',
         trigger: 'hover',
         container: 'body'
     });



});

