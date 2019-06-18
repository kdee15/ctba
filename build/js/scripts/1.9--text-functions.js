// JAVASCRIPT LAYER [APP.JS]  =========================================================================================

// A. SCROLL FUNCTIONS ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function initTextFunctions() {

  // A.1. FIXTURE WIDGET FIELD TEXT -----------------------

  $('.sp-event-list th.data-time').text('Time');
  $('.sp-event-list th.data-day').text('Div');

  $('.sp-event-list th.data-league').text('Div');

	
	
  $('.single-sp_event .sp-section-content-details .sp-event-details th:nth-child(5)').text('No');

  // A.1. END ---------------------------------------------
	
  // A.2. REORDER FIXTURE DATA ----------------------------
	
	var rows = jQuery('.sp-event-list tbody  tr').get();

    rows.sort(function(a, b) {

        var A = jQuery(a).children('.data-spec').eq(1).text().toUpperCase();
        var B = jQuery(b).children('.data-spec').eq(1).text().toUpperCase();
			
        var A2 = jQuery(a).children('.data-specs').eq(1).text().toUpperCase();
        var B2 = jQuery(b).children('.data-specs').eq(1).text().toUpperCase();

        if(A < B) {
        	return -1;
        }

        if(A > B) {
        	return 1;
        }

        if(A2 < B2) {
        	return -1;
        }

        if(A2 > B2) {
        	return 1;
        }

        return 0;

    });

    jQuery.each(rows, function(index, row) {
        jQuery('.sp-event-list').children('tbody').append(row);
    });
	
  // A.2. END ---------------------------------------------

}
    

// A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++