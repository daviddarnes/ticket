<?php theme_include('header'); ?>
<header>
	<h1>Page not found</h1>
</header>
<article>
	<p>Oh dear, <code>/<?php echo current_url(); ?></code> wasn't found. Try the <a href="<?php echo base_url(); ?>">homepage</a> or try <a href="/search">searching</a>.</p>
</article>
<footer>
</footer>
<?php theme_include('footer'); ?>