(function ($) {
	"use strict";
    
     $(window).on("elementor/frontend/init", function () {
		elementorFrontend.hooks.addAction( 'frontend/element_ready/global', function( $scope ) {
		$('body .bsk-tabs').removeClass('no-load'); 
		} );
			
    })
   


}(jQuery));	


