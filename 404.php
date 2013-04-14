<?php
	/* Template for for the 404 error page */

	theme_include('header'); // Pull in header.php
?>
<header>
	<h1>Page not found</h1>
</header>
<article>
	<p>
		Oh dear, <code>/<?php /* The slug of the page */ echo current_url(); ?></code> wasn't found.

		Try the <a href="<?php /* Link to the homepage */ echo base_url(); ?>" title="<?php /* Name of the site */ echo site_name(); ?>">homepage</a>

		or try <a href="/search" title="search">searching</a>.
	</p>
</article>
<hr/>
<?php
	theme_include('footer');  // Pull in footer.php
?>