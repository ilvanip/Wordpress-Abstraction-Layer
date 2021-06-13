(function($)
{
	$.ajax({
		type: 'POST',
		//This is a placeholder for the file path pointing to the PHP file that handles Ajax in Wordpress.
		//The file is replaced when this script file is enqueued.
		url: ADMIN_AJAX,
		data: {
			//The Ajax hook corresponding to this action is named 'wp_ajax_actionId'
			action:'actionId',
			//Stuff all the values in.
			key1:value1,
			key2:value2,
			key3:value3,
			/*
			Repeat for other keys.
			*/
			keyN:valueN,
		},
		//How must the data be returned?
		dataType: 'text',
		//What to do on success and error of the Ajax call?
		//Replace these with your functions.
		success:function(response){console.log('success');},
		error:function(error){console.log('error');},
	});

	/*
	Other ajax calls come here.
	Note that the urls of each must be unique.
	.
	.
	.
	*/

	/*
	Add other functions here.
	.
	.
	.
	*/

}(jQuery));
