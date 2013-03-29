<?php theme_include('header'); ?>
<header>
	<h1><?php echo article_title(); ?></h1>
</header>
<article>
	<?php echo article_html(); ?>
</article>
<footer>
	<time datetime="<?php echo article_time(); ?>"><?php echo article_date(); ?></time>
	<small>Filed under <?php echo category_title(); ?></small>
</footer>
<?php theme_include('footer'); ?>