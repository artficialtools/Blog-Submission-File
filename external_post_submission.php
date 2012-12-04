<?php
	/*
	 * HOW TO SUBMIT A WORDPRESS BLOG POST FROM EXTERNAL SERVER 
	  =========================================================
	 
	 * Author: Destiny
	 * Date: 02/12/12
	 * URI: http://github/
	 	 
	 * This form will accept a blog Body, Title and URL image and insert it into a Wordpress Blog Post while storing the Image in WP Media
	 * On successful submission, the form will return a POST->ID.
	 * This form has no CSS and is for demonstration purposes only.
	*/
?>

<form action="" method="post">

<!-- POST TITLE FIELD -->
<label for="post-title">Post Title: </label>
<input type="text" name="post_title" placeholder="Post Title"><br/>

<!-- IMAGE URL -->
<label for="post_image_url">Post Image</label>
<input type="url" name="post_image_url" placeholder="Post Image"><br/>

<!-- POST BODY -->
<label for="post_content">Post Content: </label>
<textarea></textarea>

</form>