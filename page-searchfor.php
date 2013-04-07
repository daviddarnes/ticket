<?php theme_include('header'); ?>
<header>
	<h1><?php echo page_title(); ?></h1>
</header>
<article>
	<form id="search" action="<?php echo search_url(); ?>" method="post">
		<label for="term">Search:</label>
		<input type="search" id="term" name="term" placeholder="To search, type and hit enter&hellip;" value="<?php echo search_term(); ?>">
		<input type="submit" value="Search">
	</form>
</article>
<footer>
</footer>
<?php theme_include('footer'); ?>