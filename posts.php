<?php theme_include('header'); ?>
<header>
	<h1><?php echo page_title(); ?></h1>
</header>

<?php if(has_posts()): ?>
	<?php while(posts()): ?>
		<article>
			<h2>
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			</h2>
			<p><?php echo article_description(); ?></p>
		</article>
	<?php endwhile; ?>

	<?php if(has_pagination()): ?>
	<nav class="pagination">
		<?php echo posts_prev(); ?>
		<?php echo posts_next(); ?>
	</nav>
	<?php endif; ?>

<?php endif; ?>
<?php theme_include('footer'); ?>