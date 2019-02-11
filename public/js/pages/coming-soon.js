(function ($) {

    'use strict';
	
    // ------------------------------------------------------- //
    // Countdown
    // ------------------------------------------------------ //
    $('#countdown').countdown('2018/12/24', function(event) {
	    var $this = $(this).html(event.strftime(''
			+ '<div class="counter">Previsão de liberação:<b> <span>%H</span>:<span>%M</span>:<span>%S</span></div><b>'
		));
	});

})(jQuery);