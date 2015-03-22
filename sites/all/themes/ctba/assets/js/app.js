jQuery(document).ready(function($) {

// A.1. User Interaction
	
	//A.1.1 Show/Hide element
	

	$(".reveal").click(function(e) {
		var target = $(this).attr('href');
		if ($(target).css('display') === 'none') {
		  $('.reveal-body').fadeOut(50);
		  $(target).fadeIn(100);
		}
		else {
		  $(target).fadeOut(50);
		}
		e.preventDefault();
	  });

	
	//A.1.1 End
	
	//A.1.2 Show/Hide element for mobile
	
	$(".mobi-reveal").click(function(e) {
		var target = $(this).attr('href');
		if ($(target).css('display') === 'none') {
		  $(target).fadeIn(130);
		}
		else {
		  $(target).fadeOut(130);
		}
		e.preventDefault();
	  });
	
	//A.1.2 End
	
// A.1. End
	
// A.2. Random Image
    
/* Random Image Generator START */
var totalImages = 4;

var RandomNum = Math.floor( Math.random() * totalImages);

	$(document).ready(function(){
		$('#top').attr("style","background-image:url('http://localhost/KD/ctba.co.za/website/6_root/sites/all/themes/ctba/assets/images/random-bg/OUT"+RandomNum+".png')");
	});

/* Random Image Generator END */

    
    
// A.2. End
	
	
});