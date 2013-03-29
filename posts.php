<?php theme_include('header'); ?>
<?php if(has_posts()): ?>
	<?php while(posts()): ?>
		<h2>
			<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
		</h2>
		<p><?php article_description(); ?></p>
	<?php endwhile; ?>

	<?php if(has_pagination()): ?>
	<nav class="pagination">
		<?php echo posts_prev(); ?>
		<?php echo posts_next(); ?>
	</nav>
	<?php endif; ?>

<?php endif; ?>
<?php theme_include('footer'); ?>