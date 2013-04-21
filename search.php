<?php
	// Template for for the Search page

	theme_include('header'); // Pull in header.php
?>

<header>
	<?php $term = search_term(); // Whatever the searcher is looking for, added to the variable term
		if (empty($term)) : // If nothing has been searched forÉ ?>
		<h1><?php echo page_title(); ?></h1>
	<?php else: // If something has been searched forÉ ?>
		<h1>Results for &ldquo;<?php echo search_term(); ?>&rdquo;</h1>
	<?php endif; // End of title ?>
</header>

<?php // Search results acts similar to the post loop
	if(has_search_results() and (!empty($term))) : // If there are results for the search and something has been searched forÉ ?>
	<article>
		<?php while(search_results()): // While you have those resultsÉ ?>
			<h2>
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			</h2>
		<?php endwhile; // End if while ?>
	</article>
	<?php if(has_pagination()): // Same as post.php pagination ?>
	<nav class="pagination">
		<div class="wrap">
			<?php echo search_prev(); ?>
			<?php echo search_next(); ?>
		</div>
	</nav>
	<?php endif; ?>

<?php else: // If there was no resultsÉ ?>
	<form id="search" action="<?php echo search_url(); ?>" method="post">
		<p>
			<label for="term">Search:</label><input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
		</p>
		<p>
			<input type="submit" value="Search">
		</p>
	</form>
	<?php if (!empty($term)) : // // If something has been searched for but nothing was foundÉ  ?>
		<p class="wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
	<?php endif; ?>
<?php endif; ?>

<hr/>

<?php
	theme_include('footer');  // Pull in footer.php
?>