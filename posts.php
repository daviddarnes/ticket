<?php
	// Template for for the Posts page

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

<?php // Normal loop for posts
	if(has_posts()): // If there are any posts found...
	?>
	<?php while(posts()): // While you have those posts found... ?>
		<article>
			<h2>
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			</h2>
			<p><?php echo article_description(); ?></p>
		</article>
	<?php endwhile; // End of while ?>
<?php endif; // End of if and and loop ?>

<aside>
	<h3>Categories</h3>
	<ul>
	<?php while(categories()): // Loops through all categories ?>
		<li>
			<a class="cat-<?php echo category_id(); ?>" href="<?php echo category_url(); ?>" title="<?php echo category_title(); ?>"><?php echo category_title(); ?></a>
		</li>
	<?php endwhile; ?>
	</ul>
</aside>

<aside>
	<h3>Statistics</h3>
	<ul>
		<li><?php echo total_posts() . pluralise(total_posts(), ' Post'); ?> in total</li>
		<li><?php echo total_categories() . pluralise_cat(total_categories(), ' Categor'); ?> in total</li>
	</ul>
</aside>

<?php if(has_pagination()): // Displays if amount of posts exceeds the chosen Posts per page option, Admin > Extend > Site Metadata ?>
<nav class="pagination">
	<?php echo posts_prev(); ?>
	<?php echo posts_next(); ?>
</nav>
<?php endif; ?>

<?php
	theme_include('footer'); // Pull in footer.php
?>