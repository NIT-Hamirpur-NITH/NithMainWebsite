
$(document).ready(function() {


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

    $('.pop').popover({
        container: 'body'
    });

    $('.tree-toggle').click(function () {
        if ($(this).parent().children('ul.tree').is(":visible")) {
            $(this).parent().children('ul.tree').slideToggle(300);
        } else {
            $('ul.tree').slideUp(200);
            $(this).parent().children('ul.tree').slideToggle(300);
        }
    });

    $('.nav.nav-list.tree li.active').parent().parent().children('.tree-toggle').click();

    $('.students .panel-heading').click(function() {
        if ($(this).parent().children('.years').is(":visible")) {
            $(this).parent().children('.years').slideToggle(300);
        } else {
            $('.years').slideUp(300);
            $('.years .table-responsive').slideUp();
            $(this).parent().children('.years').slideToggle(300);
        }
    });

    $('.years h3').click(function() {
        if ($(this).parent().children('.table-responsive').is(":visible")) {
            $(this).parent().children('.table-responsive').slideToggle(300);
        } else {
            $('.students .table-responsive').slideUp();
            $(this).parent().children('.table-responsive').slideToggle(300);
        }
    });

    $('.data-fly .hide-content').css({
        display: 'none'
    });

    $('.hide-title button').click(function() {
        if ($(this).parent().parent().children('.hide-content').is(":visible")) {
            $(this).parent().parent().children('.hide-content').slideToggle(300);
        } else {
            $('.data-fly .hide-content').slideUp();
            $(this).parent().parent().children('.hide-content').slideToggle(300);
        }
    });

});
