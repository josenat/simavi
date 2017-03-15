$(document).ready(function(){



	jQuery.browser = {};
	jQuery.browser.mozilla = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase());
	jQuery.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase());
	jQuery.browser.opera = /opera/.test(navigator.userAgent.toLowerCase());
	jQuery.browser.msie = /msie/.test(navigator.userAgent.toLowerCase());



	if($.browser.mozilla == true){  
				
		$('.izquierda').html('');
		$('.footer').html('');

		return false;
		
			
	}

	/*
	if($.browser.msie){
					
	     //codigo
				
	}
			

	if($.browser.webkit || $.browser.safari){

				
	     //codigo
	}				

				
	if($.browser.opera){
					
	     //codigo

	}

	*/

});









/*
		$('.footer').html("<p class='navbar-fixed-bottom navbar-inverse'>"+                
        		"Iglesia Maranatha Puerto Ordaz - Ciudad Guayana - Estado Bolívar <br>"+ 
                "<?php echo 'Copyright &copy ' . date('Y',time()) . ' Simavi Software.'; ?>"+
                "<a class='mbr-footer__link text-gray' href='#'>Terminos de Uso</a>  |  "+
                "<a class='mbr-footer__link text-gray' href='#'>Política de Privacidad</a>"+
      			"</p>");		 
*/