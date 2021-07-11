# WAL - The WordPress Abstraction Layer
> A template to achieve the most basic functionality of a WordPress site.

#### I have noticed some some important functionality that exists for both WordPress and non-WordPress applications.
#### I have also found that documentation, correct examples and explanation of how various actions are achieved in WordPress is rather sparse.
#### This repository is an attempt to abstract all of those details away from the beginner and provides an easy template that can be adapted to quickly get something "up and running".

# Disclaimer regarding the use of this repository:
#### This repository is not the be-all and end-all of WordPress. There may be better resources and documentation elsewhere and you are free to refer to those as well.
#### The code examples provided are incomplete and cannot be used as-is as this is just a template. You will have to fill in the blanks yourself.

# How to use this repository to setup a basic WordPress site:
- ### Select your theme from the WordPress theme directory ('wordpress-5.6-0/apps/wordpress/htdocs/wp-content/themes/'), say theme 'twentytwenty'.
- ### Enter the theme directory ('wordpress-5.6-0/apps/wordpress/htdocs/wp-content/themes/twentytwenty/').
- ### Append the contents of the 'functions.php' provided in this repo to that available in the theme directory.
- ### Copy the 'WAL/' directory into the theme directory.
- ### At this stage, you will have setup a framework of functions all your applications pages can use.
- ### Create your site pages using the WordPress editor or using PHP template files.
- ### Fill in the blanks in the various PHP files provided inside the 'WAL/' directory depending on your use case. The instructions for filling in the blanks are provided in their respective PHP files.

# The 'WAL/' directory contains the framework some of the various functions one may use in a WordPress site.

- ### Navigating the 'WAL/' directory:

|File/Directory|Purpose|
|-|-|
|bootstrap.php|The PHP file that includes other PHP files and serves as an entry point into the 'WAL/' directory. If you want to include any PHP file from this directory, add it here.|
|common-functions.php|Common functions and/or variables used in the other function files come here.|
|CSS-JS.php|WordPress functions to link scripts and stylesheets to your pages.|
|forms/|WordPress functions for form handling (currently for the Contact Form 7 Plugin).|
|ajax/|WordPress functions for AJAX handling (requires jQuery to be present).|

- ### Navigating the 'WAL/forms' directory:
|File/Directory|Purpose|
|-|-|
|database-actions.php|Plugin code to handle logging of form data into the database.|
|pagination.php|Plugin code to handle population of form fields from arrays or the database.|
|validation.php|Plugin code to handle validation of form fields.|
|forms/|WordPress functions for form handling (currently for the Contact Form 7 Plugin).|

- ### Navigating the 'WAL/ajax' directory:
|File/Directory|Purpose|
|-|-|
|ajax.js|JavaScript code to for Ajax requests.|
|JS.php|WordPress code to link 'ajax.js' to your page (this is given separately for clarity and can be included in 'WAL/CSS-JS.php').|
|ajax.php|WordPress code to handle Ajax requests.|
