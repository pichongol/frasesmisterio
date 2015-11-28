/*---------------------------------------------------------------------------*/
/*  Menu mobile
/*---------------------------------------------------------------------------*/

jQuery(function($){
	$('.menu-mobil').click(function(){
		$('.section-right-header').slideToggle('slow');
	});

	$(window).resize(function(){
        var w = $(window).width();
        
        if(w >= 761) {
            $('.section-right-header').removeAttr('style');
        }  
    });
});

/*---------------------------------------------------------------------------*/
/*  Form controls
/*---------------------------------------------------------------------------*/

jQuery(function($){

	// control gender
	$('.test-form .btnselect-left').click(function(){
        if (!$(this).hasClass('selected')) {
            $(this).addClass('selected');
        };
        $('.test-form .btnselect-right').removeClass('selected');
    });

    $('.test-form .btnselect-right').click(function(){
        if (!$(this).hasClass('selected')) {
            $(this).addClass('selected');
        };
        $('.test-form .btnselect-left').removeClass('selected');
    });
});