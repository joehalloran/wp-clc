$(function() {
  	
	////// FILTERS #############

  	// Cache all items in top level scope
  	$items = $('.clc_teacher_cpd, .in_school_cpd, .pupil_workshop, .resource');
  	// Cache initial length to display counter for #select-all 
  	allItems = $items.length;

  	// if there are items set the initial results display
  	if ($items) {
  		$('#filter-results').text(allItems);
  	}

  	// Create filters list in top level scope
	filters = [];
	// Set initial filter list
	$('.cpt-filter').each( function() {
		$catValue = $(this).data( 'filter' );
		if (($(this).is(':checked'))) {
    		// if checked add to filter list.
        	filters.push($catValue);

    	}
	});
	// Cache full filter list for #select-all
	fullFilterList = filters;


	// ON CLICK ON FILTER
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
		// Run 'show or hide' on items
		hideShowItems();
	});

	// ON CLICK SELECT ALL
	$('#select-all').on('click', function( event ) {
		event.preventDefault();
		// check all filters
		$('.cpt-filter').each( function() {
			$(this).prop( "checked", true );	
		});
		// show all items
		$items.fadeIn();
		// reset filter list and results display
		filters = fullFilterList;
		$('#filter-results').text(allItems);
	});

	// ON CLICK CLEAR ALL
	$('#clear-all').on('click', function( event ) {
		event.preventDefault();
		// uncheck all filters
		$('.cpt-filter').each( function() {
			$(this).prop( "checked", false );
		});
		// hide all items
		$items.fadeOut();
		// reset filter list and results display
		filters = [];
		$('#filter-results').text(0);
	});
	
	function hideShowItems() {

		// hide all items
		$items.hide();
		// declare results counter
		var resultsCounter = 0;
		// Loop through each item.
	  	$items.each( function() {
			
	  		// Get the category data for each CPD item
	  		var categoryList =  $(this).data('category');

	  		// Loop through selected filters
	 		for (i = 0; i < filters.length; i++) {

	 			// If filter in category list show CPD item
		 		if ( categoryList.indexOf(filters[i]) !== -1 ) {
		 			resultsCounter++;
		 			$(this).fadeIn(200);
		 			break;
		 		} 

			}

		});

		$('#filter-results').text(resultsCounter);
		
	}

	//// END FILTERS ############ 
});