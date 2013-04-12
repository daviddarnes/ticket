<?php theme_include('header'); ?>
<header>
	<h1><?php echo page_title(); ?></h1>
</header>
<article class="page-<?php echo page_id(); ?>">
	<?php echo page_content(); ?>
</article>
<hr/>
<small><?php echo site_name() . substr(str_replace("/", " / ", base_url()), 0, -3) . " / " . str_replace("/", " / ", page_slug()) // or page_url(); ?></small>
<?php theme_include('footer'); ?>


