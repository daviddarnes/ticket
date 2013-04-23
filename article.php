<?php
	// Template for for articles

	theme_include('header'); // Pull in header.php
?>

<header>
	<h1><?php echo article_title(); // The title of the single post ?></h1>
</header>

<article class="article-<?php echo article_id(); ?>">
	
		<?php
			/*
				This is to show a custom field from an article.
				It will need to be created in the metadata section before it can be used in the post edit area.
				In this case the custom field will need to be called 'image' and be set as an image custom field in the dropdown for type.
			*/
			$image = article_custom_field('image'); // Applying a variable to the custom field, so it can be reused with ease
			if ( !empty($image) ) : // Check if the field is empty, if it is the process stops here
		?>
		<figure>
			<img src="<?php echo $image; // Echo the result, which in this case is the url of the image ?>" width="440" alt="<?php echo article_title(); ?>" />
		</figure>
		<?php
			endif; // End of custom field
		?>

	<?php echo article_markdown(); // or article_html(); ?>
</article>

<hr/>

<section>
	<small>
		Set to <?php echo article_status(); // Published or Archived, Draft status mean it won't be shown ?>, created <time datetime="<?php echo date(DATE_W3C, article_time()); // YYYY-MM-DDThh:mm:ss+TZD ?>"><?php echo article_date(); // Dth Month, YYYY ?></time> &amp; filed under <a href="<?php echo article_category_url(); ?>" title="<?php echo article_category(); ?>"><?php echo article_category(); ?></a>
		<br/>
		<?php
		// Breadcrumb using site_name(), base_url() and current_url()
		echo site_name() . substr(str_replace("/", " &raquo; ", base_url()), 0, -2) . " " . str_replace("/", " &raquo; ", current_url()); // or full_url(); ?>
	</small>
	<div class="author-<?php echo article_author_id(); ?>">
		<h3>Written by <?php echo article_author(); ?></h3>
		<p><?php echo article_author_bio(); // Author info is all taken from the user info in the admin ?></p>
	</div>
	<?php if(comments_open()): // If comments has been ticked on the post ?>
		<div class="comments">
			<h3><?php echo total_comments() . pluralise(total_comments(), ' Comment'); // Turns word 'Comment' into 'Comments' if there's more than 1 comment, see functions.php ?></h3>
			<?php if(comments_open() and has_comments()): // Similar way to the post loop ?>
			<ul>
				<?php while(comments()): ?>
				<li class="comment-<?php echo comment_id(); ?>">
					<h4><?php echo comment_name(); ?> says:</h4>
					<p><?php echo comment_text(); ?></p>
					<small><time datetime="<?php echo comment_time(); // YYYY-MM-DDThh:mm:ss+TZD ?>"><?php echo comment_date(); // Dth Month, YYYY ?></time></small>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			<form class="comment-form" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<h3>Leave a comment</h3>
				<?php echo comment_form_notifications(); // Produces a note for the commenter if he's filled a field in wrong or has suceeded ?>
				<p>
					<label for="name">Your name:</label><?php echo comment_form_input_name('placeholder="Your name"'); // Places input field, placeholder option can be passed in ?>
				</p>
				<p>
					<label for="email">Your email address:</label><?php echo comment_form_input_email("placeholder=\"Your email (won't be published)\""); ?>
				</p>
				<p>
					<label for="text">Your comment:</label><?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>
				<p>
					<?php echo comment_form_button(); ?>
				</p>
			</form>
		</div>
	<?php endif; ?>
</section>

<?php
	theme_include('footer'); // Pull in footer.php
?>