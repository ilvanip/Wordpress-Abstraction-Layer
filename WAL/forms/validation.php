<?php
/*
Once the form has been submitted, the first thing to do is to perform validation.
This file contains all the validaton logic necessary.

CONTACT FORM 7.

Validating submitted input.
*/


//Our validation function which acts as the filter.
//'result' is the result of the validation.
//'tag' is the current form tag (form field) being validated.
function validationFilter($result,$tag)
{
	//Global wordpress object for database operations.
	global $wpdb;
	//Get the name attribute of the tag element.
	$tagname=$tag->name;
	//Get the data in that field.
	$data=$_POST[$tagname];
	//Perform different actions depending on the actual tag name.
	//Different tag names are given to differentiate between the various forms.
	switch($tagname)
	{
		//Tag 1 of form 1 (replace 'tag1-1' with the actual tag name).
		case 'tag1-1':
			//Validate '$data' here.
			//Assume that the input is invalid.
			$error_msg="Your error message here.";
			$result->invalidate($tag,$error_msg);
			break;
		//Tag 2 of form 1 (replace 'tag2-1' with the actual tag name).
		case 'tag2-1':
			//Validate '$data' here.
			//Assume that the input is valid.
			//So do nothing.
			break;
		/*
		Repeat for every tag in every form only if and only if
			that particular tag needs validation.
		*/
	}
	//Validation result must be returned at the end.
	return $result;
}

//In Contact Form 7, filters are applied to tags based on the tag types.
//Select the tag types we want to apply validtation filters to.
$_all_filters=[
	//Mandatory emails.
	'email*',
	//Mandatory telepone numbers.
	'tel*',
	//Mandatory text fields.
	'text*',
];
//Attach the above validation filter to each tag type.
foreach($_all_filters as $filter)
	add_filter("wpcf7_validate_${filter}",'validationFilter',10,3);

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
