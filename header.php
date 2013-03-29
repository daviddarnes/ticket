<!DOCTYPE html>
<html>
	<head>
		<title>Ticket</title>
		<link href="<?php echo theme_url('style.css'); ?>" media="screen" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<section>
			<?php if(has_menu_items()) : ?>
			<nav>
				<?php while(menu_items()): ?>
					<a <?php echo (menu_active() ? 'class="active"' : ''); ?> href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
						<?php echo menu_name(); ?>
					</a>
				<?php endwhile; ?>
			</nav>
			<?php endif; ?>