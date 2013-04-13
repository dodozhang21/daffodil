/**
 * Functions on load
 */
var navigation = null;
jQuery(window).load(function() {
	
	// the back to top link
	jQuery("a[href='#top']").click(function() {
	  jQuery("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});
	
	loadBasedOnMoreDisplay();
}); // end of DOM ready

jQuery(window).resize(function() {
	loadBasedOnMoreDisplay();
}); // end of window resize

function loadBasedOnMoreDisplay() {
	// is it mobile?
	var mobile = false;

	if(jQuery('#more').css('display') == 'block') {
		mobile = true;
	}

	if(mobile) {
		if(navigation == null) {
			navigation = jQuery("#nav-menu-wrapper ul").tinyNav({active: 'current_page_item'});
		}
	}
}