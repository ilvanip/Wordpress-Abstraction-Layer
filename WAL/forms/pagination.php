<?php
/*
One of the most important methods of poplating form select lists,
	dropdowns and checkbox arrays is doing so from the database.
Contact form has functionality to populate such tags from arrays.
Hence, we have to make such arrays come from our database.

CONTACT FORM 7

Pagination of form elements from arrays.

*/

//The 'options' parameter contains the options specified in the tag.
//They are set during form tag creation in the Contact Form 7 Editor in the Wordpress Dashboard.
//While creating a form field that needs to be filled in from an array, the 'data' option
//	of that field is set with an identifier.
//We select the array to populate that field on the basis of the identifier set in the data option of that tag.
add_filter('wpcf7_form_tag_data_option',function($n,$options,$args)
{
	//The array to return.
	//This array has the contents of the form element.
	$array=[];
	//Fill up the array in different ways depending upon the identifier.
	//The array can be populated from a database also.
	if(in_array('identifier1',$options))
	{
		//Populate array with something.
		$array=[1,2,3,4,5];
	}
	else if(in_array('identifier2',$options))
	{
		//Populate array with something else.
		$array=["apple","banana","mango","orange"];
	}

	/*
	Repeat as much as necessary.
	*/

	//Return the array if it is not empty.
	//Otherwise return $n;
	return empty($array)?$n:$array;
},10,3);

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
