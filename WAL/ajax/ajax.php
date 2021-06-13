<?php

/*
Add handlers for various Ajax calls.
*/
//Ajax handler for Ajax action named 'actionId'.
//The Ajax call comes from the JS file.
add_action('wp_ajax_actionId',function()
{
	//JSON decode everything in the $_POST array.
	//Now $_POST will contain data of the form 'keyI':'valueI'.
	foreach($_POST as $key=>$value)
		$_POST[$key]=json_decode($value);
	//Do something here.
	//Suppose these are the results of the operation.
	$results=[];
	//Echo the results as JSON.
	echo json_encode($results);
	//End ajax.
	wp_die();
});

/*
Repeat for other handlers.
*/


/*
Add other functions here.
.
.
.
.
.
.
.
.
.
.
*/



?>
