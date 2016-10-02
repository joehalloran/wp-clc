$(function() {
  	
	////// Filters 

  	// Cache all cpd items in top level scope
  	$items = $('.clc_teacher_cpd, .in_school_cpd, .pupil_workshop, .resource');

  	// Create filters list in top level scope
	filters = [];  


	$('.cpt-filter').on('click', function() {

    	$catValue = $(this).data( 'filter' );

    	if (($(this).is(':checked'))) {
    		// if checked add to filter list.
        	filters.push($catValue);
    	} else {
    		// if unchecked remove from filters
        	filters = $.grep(filters, function(value){
	        	return value != ($catValue);
	        });
		}
		
		// Run 'show or hide' on Cpd items
		hideShowItems();
	});

	//
	$('#select-all').on('click', function( event ) {
		event.preventDefault();
		$('.cpt-filter').each( function() {
			$(this).prop( "checked", true );
		});
		$items.fadeIn();
	});

	$('#clear-all').on('click', function( event ) {
		event.preventDefault();
		$('.cpt-filter').each( function() {
			$(this).prop( "checked", false );
		});
		$items.fadeOut();
	});
	
	function hideShowItems() {

		// hide all items
		$items.hide();

		// Loop through each item.
	  	$items.each( function() {

			
	  		// Get the category data for each CPD item
	  		var categoryList =  $(this).data('category');

	  		// Loop through selected filters
	 		for (i = 0; i < filters.length; i++) {

	 			// If filter in category list show CPD item
		 		if ( categoryList.indexOf(filters[i]) !== -1 ) {
		 			$(this).delay(200).fadeIn();
		 		} 
			}

		});
	}

	//// End filters  
});