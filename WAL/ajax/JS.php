<?php

add_action('wp_enqueue_scripts',function()
{
	//The page where the Ajax call originates
	if(is_page('ajax-page'))
	{
		wp_enqueue_script(
			//The identifier.
			'js-ajax',
			//ajax.js is in the current directory.
			'ajax.js',
			//The Ajax depends on jQuery.
			//So use the Wordpress jQuery as a dependency.
			//Alternatively, you can enqueue your own jQuery.js file and use that.
			['jquery'],
			//No version for now.
			null,
			//Add script at footer.
			true
		);
		//Replace all occurrences of 'X' with 'Y' in the script.
		//Here, replace 'ADMIN_AJAX' in the JS file with 'admin_url("admin-ajax.php")'
		//As 'ADMIN_AJAX' is just a placeholder, you can set it to anything you like.
		//But that string must exist in the JS file being referred to.
		wp_localize_script('js-ajax','ADMIN_AJAX',admin_url("admin-ajax.php"));
	}
});



?>