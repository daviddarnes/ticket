<?php
	/* Template for for the 404 error page */

	theme_include('header'); // Pull in header.php
?>
<header>
	<h1><?php /* The title of the single post */ echo article_title(); ?></h1>
</header>
	<?php
		/*
			This is to show a custom field from an article.
			It will need to be created in the metadata section before it can be used in the post edit area.
			In this case the custom field will need to be called 'image' and be set as an image custom field in the dropdown for type.
		*/
		$image = article_custom_field('image'); // Applying a variable to the custom field, so it can be reused with ease
		if ( !empty($image) ) : // Check if the field is empty, if it is the process stops here
	?>
		<img src="<?php /* Echo the result, which in this case is the url of the image */ echo $image; ?>" alt="<?php /* Use the article title as the alt text */ echo article_title(); ?>" />
	<?php
		endif; // End of custom field
	?>
<article class="article-<?php echo article_id(); ?>">
	<?php echo article_markdown(); // article_html(); ?>
</article>
<footer>
	<small>Set to <?php echo article_status(); ?>, created <time datetime="<?php echo article_time(); ?>"><?php echo article_date(); ?></time> &amp; filed under <a href="<?php echo article_category_url(); ?>" title="<?php echo article_category(); ?>"><?php echo article_category(); ?></a>
	<br/><?php echo site_name() . substr(str_replace("/", " / ", base_url()), 0, -3) . " / " . str_replace("/", " / ", current_url()); // or full_url(); ?></small>
	<div class="author-<?php echo article_author_id(); ?>">
		<h3>Written by <?php echo article_author(); ?></h3>
		<p><?php echo article_author_bio(); ?></p>
	</div>
	<?php if(comments_open()): ?>
		<div class="comments">
			<h3><?php echo total_comments() . pluralise(total_comments(), ' Comment'); ?></h3>
			<?php if(comments_open() and has_comments()): ?>
			<ul>
				<?php while(comments()): ?>
				<li class="comment-<?php echo comment_id(); ?>">
					<h4><?php echo comment_name(); ?> says:</h4>
					<p><?php echo comment_text(); ?></p>
					<small><time datetime="<?php echo comment_time(); ?>"><?php echo comment_date(); ?></time></small>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			<form class="comment-form" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<h3>Leave a comment</h3>
				<?php echo comment_form_notifications(); ?>
				<p class="name">
					<label for="name">Your name:</label><?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>
				<p class="email">
					<label for="email">Your email address:</label><?php echo comment_form_input_email("placeholder=\"Your email (won't be published)\""); ?>
				</p>
				<p class="textarea">
					<label for="text">Your comment:</label><?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>
				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>
		</div>
	<?php endif; ?>
</footer>
<?php
	theme_include('footer');  // Pull in footer.php
?>