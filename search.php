<?php theme_include('header'); ?>
<header>
	<h1>Results for &ldquo;<?php echo search_term(); ?>&rdquo;</h1>
</header>
<?php if(has_search_results()): ?>
	<article>
		<?php while(search_results()): ?>
			<h2>
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			</h2>
		<?php endwhile; ?>
	</article>
	<?php if(has_pagination()): ?>
	<nav class="pagination">
		<div class="wrap">
			<?php echo search_prev(); ?>
			<?php echo search_next(); ?>
		</div>
	</nav>
	<?php endif; ?>

<?php else: ?>
	<article>
		<p class="wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
		<form id="search" action="<?php echo search_url(); ?>" method="post">
			<label for="term">Search:</label>
			<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
			<input type="submit" value="Search">
		</form>
	</article>
<?php endif; ?>
<footer>
</footer>
<?php theme_include('footer'); ?>