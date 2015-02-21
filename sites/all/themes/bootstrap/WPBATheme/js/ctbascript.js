jQuery(document).ready(function ($) {
	
   $(function() {
	   
	   /* random background generator START */
	   
    	var images = ['OUT01.png', 'OUT02.png', 'OUT03.png', 'OUT04.png'];
    	$('#background').css({'background-image': 'url(http://www.ctba.co.za/sites/all/themes/bootstrap/WPBATheme/img/random-bg/' + images[Math.floor(Math.random() * images.length)] + ')'});
		
		/* random background generator END */
		
   });
   
	
	/* show hide div START */
	
	var currentContent = '';	
	$(".showhide-link").on('click', function(){
		currentContent = $(this).attr('name');
		if($('#'+currentContent).hasClass('on')){
			$('#'+currentContent).hide(0);
			$('#'+currentContent).removeClass('on');			
		}else{
			hideAllContent();
			showCurrentContent(currentContent);
		}
	});

	function hideAllContent(){
		$('.showhide-body').hide();
		$('.showhide-body').removeClass('on');
	};
	
	function showCurrentContent(currentContentDiv){
		$('#'+currentContentDiv).addClass('on');
		$('#'+currentContentDiv).show(0,'left');
	};	

	/* show hide div END */
	
});