<?php

/*
Link JS scripts and CSS stylesheets to your page.
*/

add_action('wp_enqueue_scripts',function()
{
	//Enqueue different files depending upon the page.
	//Pages are identified by the page title.
	//Replace 'page-1' with your actual page title.
	if(is_page('page-1'))
	{
		//Enqueue a single JS script file.
		wp_enqueue_script(
			//The identifier of the script being enqueued.
			'unique-script-identifier',
			//The location of the script file in the filesystem.
			'script-location',
			//Any dependencies required by the script.
			['identifiers','of','dependencies'],
			//Script version.
			null,
			//Script will be added at footer. YES/NO?
			true
		);
		//Replace all occurrences of 'X' in the script with 'Y'.
		wp_localize_script('unique-script-identifier','X','Y');
	
		/*
		Repeat for other script files.
		*/

		//Enqueue a single CSS stylesheet.
		wp_enqueue_style(
			//The identifier of the stylesheet being enqueued.
			'unique-stylesheet-identifier',
			//The location of the stylesheet file in the filesystem.
			'stylesheet-location',
			//Any dependencies required by the stylesheet.
			['identifiers','of','dependencies'],
			//Stylesheet version.
			null,
			//Stylesheet will be added at footer. YES/NO?
			true
		);

		/*
		Repeat for other stylesheets.
		*/

	}

	/*
	Repeat for other pages.
	*/

});

?>
