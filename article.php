<?php theme_include('header'); ?>
<header>
	<h1><?php echo article_title(); ?></h1>
</header>
<article>
	<?php echo article_html(); ?>
</article>
<footer>
	<time datetime="<?php echo article_time(); ?>"><?php echo article_date(); ?></time>
	<small>Filed under <?php echo category_title(); ?></small>
	<?php if(comments_open()): ?>
		<section class="comments">
			<?php if(has_comments()): ?>
			<ul>
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment id-<?php echo comment_id(); ?>">
					<h3><?php echo comment_name(); ?></h3>
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
		</section>
	<?php endif; ?>
</footer>
<?php theme_include('footer'); ?>