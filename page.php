<?php
	// Template for for Pages

	theme_include('header'); // Pull in header.php
?>

<header>
	<h1><?php echo page_title(); ?></h1>
</header>

<article class="page-<?php echo page_id(); ?>">
	
		<?php
			/*
				This is to show a custom field from a page.
				It will need to be created in the metadata section before it can be used in the page edit area.
				In this case the custom field will need to be called 'image' and be set as an image custom field in the dropdown for type.
			*/
			$image = page_custom_field('image'); // Applying a variable to the custom field, so it can be reused with ease
			if ( !empty($image) ) : // Check if the field is empty, if it is the process stops here
		?>
		<figure>
			<img src="<?php echo $image; // Echo the result, which in this case is the url of the image ?>" width="440" alt="<?php echo page_title(); ?>" />
		</figure>
		<?php
			endif; // End of custom field
		?>

	<?php echo page_content(); ?>
</article>

<hr/>

<small>
	<?php // Breadcrumb using site_name(), base_url() and page_slug()
	echo site_name() . substr(str_replace("/", " &raquo; ", base_url()), 0, -2) . " " . str_replace("/", " &raquo; ", page_slug()) // or page_url(); ?>
</small>

<?php
	theme_include('footer'); // Pull in footer.php
?>