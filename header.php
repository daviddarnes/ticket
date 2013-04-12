<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php if(is_article()): echo article_title(); else: echo page_title("Page can't be found"); endif; ?> - <?php echo site_name(); ?>
		</title>
		<link href="<?php echo theme_url('assets/style.css'); ?>" media="screen" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="<?php echo theme_url('assets/favicon.ico'); ?>">
		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body>
		<div class="logo"><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></div>
		<section>
			<?php if(has_menu_items()) : ?>
			<nav>
				<?php while(menu_items()): ?>
					<a <?php echo (menu_active() ? 'class="active"' : ''); ?> id="menu-item-<?php echo menu_id(); ?>" href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
				<?php endwhile; ?>
			</nav>
			<?php endif; ?>