(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
jQuery(function(){


	jQuery("#target_new_project_list").validate({
		submitHandler: function(){
			var postData = jQuery("#target_new_project_list").serialize();
			console.log(postData);
		}
	})



	jQuery("#target_new_project_list").validate({
        submitHandler: function () {
            var postdata = "action=my_project_action&param=savedata&" + jQuery('#target_new_project_list').serialize();
            jQuery.post(data.ajax_url, postdata, function (response) {
                console.log(response);
                var data = jQuery.parseJSON(response);
                if (data.status == 1) {
                    jQuery.notifyBar({
                        cssClass: "success",
                        html: data.message
                    });
                }
            })

        }
    });


});

let table = new DataTable('#project_list');


})( jQuery );
