<?php
	// Template for for the 404 error page

	theme_include('header'); // Pull in header.php
?>
<header>
	<h1>Page not found</h1>
</header>
<article>
	<p>
		Oh dear, <code>/<?php echo current_url(); // The url in the address bar, minus the base_url(); ?></code> wasn't found.

		Try the <a href="<?php echo base_url(); // Root url of the install, aka homepage ?>" title="<?php echo site_name(); ?>">homepage</a>

		or try <a href="/search" title="search">searching</a>.
	</p>
</article>
<hr/>
<?php
	theme_include('footer');  // Pull in footer.php
?>