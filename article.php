<?php theme_include('header'); ?>
<header>
	<h1><?php echo article_title(); ?></h1>
</header>
<?php $image = article_custom_field('image');
if ( !empty($image) ) : ?>
	<img src="<?php echo $image; ?>" alt="<?php echo article_title(); ?>" />
<?php endif; ?>
<article class="article-<?php echo article_id(); ?>">
	<?php echo article_markdown(); // article_html(); ?>
</article>
<footer>
	This article was <?php echo article_status(); ?> <time datetime="<?php echo article_time(); ?>"><?php echo article_date(); ?></time>
	<small>Filed under <?php echo category_title(); ?></small>
	<div class="author-<?php echo article_author_id(); ?>">
		<h3>Written by <?php echo article_author(); ?></h3>
		<p><?php echo article_author_bio(); ?></p>
	</div>
	<?php if(comments_open()): ?>
		<div class="comments">
			<h3>Comments (total <?php echo article_total_comments(); ?>)</h3>
			<?php if(has_comments()): ?>
			<ul>
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment id-<?php echo comment_id(); ?>">
					<h4><?php echo comment_name(); ?></h4>
					<time datetime="<?php echo comment_time(); ?>"><?php echo comment_date(); ?></time>
					<div class="content">
						<?php echo comment_text(); ?>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			<form class="comment-form" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>
				<p class="name">
					<label for="name">Your name:</label>
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>
				<p class="email">
					<label for="email">Your email address:</label>
					<?php echo comment_form_input_email("placeholder=\"Your email (won't be published)\""); ?>
				</p>
				<p class="textarea">
					<label for="text">Your comment:</label>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>
				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>
		</div>
	<?php endif; ?>
</footer>
<?php theme_include('footer'); ?>