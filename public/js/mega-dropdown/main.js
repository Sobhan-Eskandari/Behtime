jQuery(document).ready(function($){
	//open/close mega-navigation

    $('#closeModal').click(function(e) {
        $('#signupModal').modal('toggle');
    });
    $('#closeLogin').click(function(e) {
        $('#loginModal').modal('toggle');
    });

	$('.cd-dropdown-trigger').on('click', function(event){
		event.preventDefault();
		toggleNav();
	});

	//close meganavigation
	$('.cd-dropdown .cd-close').on('click', function(event){
		event.preventDefault();
		toggleNav();
	});

	//on mobile - open submenu
	$('.has-children').children('a').on('click', function(event){
		//prevent default clicking on direct children of .has-children 
		event.preventDefault();
		var selected = $(this);
		selected.next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('move-out');
	});

    var indexOfMenu = 0;
	$("#megaMenu .col-auto").mouseenter(function () {
		console.log($(this).index());
		indexOfMenu = $(this).index();
        // $("#megaMenu-detail").find(indexOfMenu).addClass('fade-in is-active').removeClass('fade-out');
		$("#megaMenu-detail-row").removeClass('l-hidden fade-out').addClass('fade-in is-active');
        $("#menu-products").addClass('is-active');
        $("#megaMenu-detail").find("#"+indexOfMenu).addClass('fade-in is-active').removeClass('fade-out');
        $("#megaMenu-detail-col").removeClass('fade-out l-noneDisplayed').addClass('l-displayed');
    });


    $("#megaMenu .col-auto").mouseleave(function () {
        console.log($(this).index());
        var indexOfMenu = "#" + $(this).index();
        // $("#megaMenu-detail").find(indexOfMenu).removeClass('is-active fade-in').addClass('fade-out is-hidden');
        // $("#megaMenu-detail-row").removeClass('is-active fade-in').addClass('fade-out l-hidden');
        // $("#megaMenu-detail-col").addClass('l-noneDisplayed').removeClass('l-displayed');
        $("#megaMenu-detail").find("#"+indexOfMenu).removeClass('fade-in is-active').addClass('fade-out');

    });

    $('#megaMenu').mouseleave(function(e) {
        if (e.offsetX < 0 || e.offsetX > $(this).width()) {
            $("#megaMenu-detail-col").addClass('l-noneDisplayed').removeClass('l-displayed');
        }
        if (e.offsetY < 0 || e.offsetY > $(this).width()) {
            $("#megaMenu-detail-col").addClass('l-noneDisplayed').removeClass('l-displayed');
        }
    });

    $("#megaMenu-detail-row").mouseleave(function () {
		// $("#megaMenu-detail-row").removeClass('is-active fade-in').addClass('fade-out l-hidden');
		$("#megaMenu-detail-col").addClass('l-noneDisplayed').removeClass('l-displayed');
		$("#megaMenu-detail").find("#"+indexOfMenu).removeClass('fade-in is-active').addClass('fade-out');
    });

    $("#menu-products").hover(function () {
        $("#megaMenu-detail").find("#"+indexOfMenu).addClass('fade-in is-active').removeClass('fade-out');
        $("#megaMenu-detail").find("#"+(indexOfMenu+7)).removeClass('fade-in is-active').addClass('fade-out');
    });

    $("#menu-stores").hover(function () {
        $("#megaMenu-detail").find("#"+indexOfMenu).removeClass('fade-in is-active').addClass('fade-out');
        $("#megaMenu-detail").find("#"+(indexOfMenu+7)).addClass('fade-in is-active').removeClass('fade-out');
    });

	//on desktop - differentiate between a user trying to hover over a dropdown item vs trying to navigate into a submenu's contents
	var submenuDirection = ( !$('.cd-dropdown-wrapper').hasClass('open-to-left') ) ? 'right' : 'left';
	$('.cd-dropdown-content').menuAim({
        activate: function(row) {
        	$(row).children().addClass('is-active').removeClass('fade-out');
        	// $("#megaMenu-detail").find('.cd-secondary-dropdown').addClass('fade-in is-active').removeClass('fade-out');
        	if( $('.cd-dropdown-content .fade-in').length == 0 ) $(row).children('ul').addClass('fade-in');
        },
        deactivate: function(row) {
        	$(row).children().removeClass('is-active');
        	if( $('li.has-children:hover').length == 0 || $('li.has-children:hover').is($(row)) ) {
        		$('.cd-dropdown-content').find('.fade-in').removeClass('fade-in');
        		$(row).children('ul').addClass('fade-out')
        	}
        },
        exitMenu: function() {
        	$('.cd-dropdown-content').find('.is-active').removeClass('is-active');
        	return true;
        },
        submenuDirection: submenuDirection,
    });

	//submenu items - go back link
	$('.go-back').on('click', function(){
		var selected = $(this),
			visibleNav = $(this).parent('ul').parent('.has-children').parent('ul');
		selected.parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('move-out');
	}); 

	function toggleNav(){
		var navIsVisible = ( !$('.cd-dropdown').hasClass('dropdown-is-active') ) ? true : false;
		$('.cd-dropdown').toggleClass('dropdown-is-active', navIsVisible);
		$('.cd-dropdown-trigger').toggleClass('dropdown-is-active', navIsVisible);
		if( !navIsVisible ) {
			$('.cd-dropdown').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('.has-children ul').addClass('is-hidden');
				$('.move-out').removeClass('move-out');
				$('.is-active').removeClass('is-active');
			});	
		}
	}

	//IE9 placeholder fallback
	//credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
	if(!Modernizr.input.placeholder){
		$('[placeholder]').focus(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
		  	}
		}).blur(function() {
		 	var input = $(this);
		  	if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.val(input.attr('placeholder'));
		  	}
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
		  	$(this).find('[placeholder]').each(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
			 		input.val('');
				}
		  	})
		});
	}
});