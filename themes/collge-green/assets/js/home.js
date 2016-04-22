var map;
$(document).ready(function() {

    /* ======= Flexslider ======= */
    $('.flexslider').flexslider({
        animation: "fade"
    });

    /**
     * Clamp things
     */
    $('.event-clamp').each(function(i, element) {
        $clamp(element, {clamp: 3});
    });

    $('#events-carousel, #activities-carousel').on('slid.bs.carousel', function() {
        $('.event-clamp').each(function(i, element) {
            $clamp(element, {clamp: 3});
        });
    });

    $('.news-clamp').each(function(i, element) {
        $clamp(element, {clamp: 2});
    });

    $('#news-carousel').on('slid.bs.carousel', function() {
        $('.news-clamp').each(function(i, element) {
            $clamp(element, {clamp: 2});
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



    /* ======= Carousels ======= */
    $('#news-carousel').carousel({interval: false});
    $('#events-carousel').carousel({interval: false});
    // $('#videos-carousel').carousel({interval: false});
    // $('#testimonials-carousel').carousel({interval: 6000, pause: "hover"});
    // $('#awards-carousel').carousel({interval: false});
    //

    /* ======= Flickr PhotoStream ======= */
    // $('#flickr-photos').jflickrfeed({
    //     limit: 12,
    //     qstrings: {
    //     id: '32104790@N02' /* Use idGettr.com to find the flickr user id */
    //     },
    //     itemTemplate:
    //         '<li>' +
    //         '<a rel="prettyPhoto[flickr]" href="{{image}}" title="{{title}}">' +
    //         	'<img src="{{image_s}}" alt="{{title}}" />' +
    //         '</a>' +
    //         '</li>'
	//
    // }, function(data) {
    // 	$('#flickr-photos a').prettyPhoto();
    // });

    /* ======= Pretty Photo ======= */
    // http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/
    // $('a.prettyphoto').prettyPhoto();
    
    $( '#ri-grid' ).gridrotator( {
            rows    : 2,
            columns   : 4,
            animType  : 'fadeInOut',
            preventClick    : true,
            animSpeed : 1000,
            animEasingOut   : 'linear',
            animEasingIn    : 'linear',
            interval  : 3000,
            step    : 1,
            w1024     : {
              rows  : 2,
              columns : 4
            },
            w768      : {
              rows  : 2,
              columns : 4
            },
            w480      : {
              rows  : 2,
              columns : 4
            },
            w320      : {
              rows  : 2,
              columns : 4
            },
            w240      : {
              rows  : 2,
              columns : 4
            }
        } );

    /* ======= Twitter Bootstrap hover dropdown ======= */

    // apply dropdownHover to all elements with the data-hover="dropdown" attribute
    $('[data-hover="dropdown"]').dropdownHover();

    /* Nested Sub-Menus mobile fix */

    $('li.dropdown-submenu > a.trigger').on('click', function(e) {
        var current=$(this).next();
		current.toggle();
		e.stopPropagation();
		e.preventDefault();
		if (current.is(':visible')) {
    		$(this).closest('li.dropdown-submenu').siblings().find('ul.dropdown-menu').hide();
		}
    });


    /* ======= Style Switcher ======= */

    // $('#config-trigger').on('click', function(e) {
    //     var $panel = $('#config-panel');
    //     var panelVisible = $('#config-panel').is(':visible');
    //     if (panelVisible) {
    //         $panel.hide();
    //     } else {
    //         $panel.show();
    //     }
    //     e.preventDefault();
    // });
    //
    // $('#config-close').on('click', function(e) {
    //     e.preventDefault();
    //     $('#config-panel').hide();
    // });
    //
    //
    // $('#color-options a').on('click', function(e) {
    //     var $styleSheet = $(this).attr('data-style');
    //     var $logoImage = $(this).attr('data-logo');
	// 	$('#theme-style').attr('href', $styleSheet);
	// 	$('#logo').attr('src', $logoImage);
	//
	// 	var $listItem = $(this).closest('li');
	// 	$listItem.addClass('active');
	// 	$listItem.siblings().removeClass('active');
	//
	// 	e.preventDefault();
	//
	// });
	//


});
