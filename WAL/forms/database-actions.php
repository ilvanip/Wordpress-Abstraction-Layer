<?php
/*
After validating the submitted form,
	the next important action is logging the results to the database.
As validation has been done at this stage, we can insert the data directly.

CONTACT FORM 7.

Redirecting the form data into our databases.

*/

add_action('wpcf7_before_send_mail',function($contact_form)
{
	//Global wordpress object for database operations.
	global $wpdb;
	//Get current form instance.
	$wpcf7=WPCF7_ContactForm::get_current();
	//Get whatever we submitted (note that this has already been validated).
	$submission=WPCF7_Submission::get_instance();
	/*
	Once we have got our submission, we have to retrieve the data from it.
	We do this as:
		$submission->get_posted_data(<tag-name>);
	This will give the value of the form tag (field) whose name property is <tag-name>.
	*/
	//Do different things depending on which form it is.
	//Forms are identified by the form title.
	//The form title is set in the Contact Form 7 Editor from the Wordpress Dashboard.
	//Form titles must be unique.
	switch($wpcf7->title())
	{
		//Form 1 (replace 'title1' with the actual title).
		case "title1":
			//Retrieve the submitted data from the submission object.
			$name=$submission->get_posted_data("username");
			$age=$submission->get_posted_data("age");
			//Do something with $name and $age here.
			break;

		/*
		Repeat for other forms.
		*/

		//Form 2 (replace 'title2' with the actual title).
		case "title2":
			//Do something else here.
			break;
		//Form 3 (replace 'title3' with the actual title).
		case "title3":
			//Do something else here.
			break;
	}
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
