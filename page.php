<?php
	// Template for for Pages

	theme_include('header'); // Pull in header.php
?>

<header>
	<h1><?php echo page_title(); ?></h1>
</header>

<article class="page-<?php echo page_id(); ?>">
	<?php echo page_content(); ?>
</article>

<hr/>

<small>
	<?php // Breadcrumb using site_name(), base_url() and page_slug()
	echo site_name() . substr(str_replace("/", " &raquo; ", base_url()), 0, -2) . " " . str_replace("/", " &raquo; ", page_slug()) // or page_url();?>
</small>

<?php
	theme_include('footer');  // Pull in footer.php
?>