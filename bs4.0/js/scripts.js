$(document).ready(function() {


	//MAIN NAVIGATION
	$('.main-nav li:has(ul)').addClass('has-subnav').each(function(){
		var $li = $(this)
		, $a = $('> a', $li);

		$a.on('mouseenter', function(){
			$li.addClass('active');
		});

		$li.on('mouseleave', function(){
			$li.removeClass('active');
		});
	});


	//RESPONSIVE NAV
	$('.nav-toggle').click(function(){
		$('.header-search-nav').slideToggle('fast');
		$(this).toggleClass('active');
	});

	//SCROLL TOP
	$('.go-top-link').click(function(e){

		e.preventDefault();

		$("html, body").animate(
			{scrollTop:0}, 1000, function() { 
		});
	});



	    
});
$(window).load(function() {
		
});
$(window).scroll(function() {


	var windowHeight = $(window).height();
	var windowScrollTop = $(window).scrollTop();

	if( windowScrollTop > 800){
		$('.go-top-link').addClass("active");
	} else{
		$('.go-top-link').removeClass("active");	
	}

	
});
$(window).resize(function() {
/*
	var windowWidth = $(window).width();

	if(windowWidth >= 800){
		$('.header-search-nav').show();
	} else{
		$('.header-search-nav').hide();
		$('.nav-toggle').removeClass('active');
	}
*/	
});