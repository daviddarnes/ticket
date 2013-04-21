<?php theme_include('header'); ?>
<header>
	<h1><?php echo page_title(); ?></h1>
</header>

<?php // Normal loop for posts
	if(has_posts()): // If there are any posts foundÉ
	?>
	<?php while(posts()): // While you have those posts foundÉ ?>
		<article>
			<h2>
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			</h2>
			<p><?php echo article_description(); ?></p>
		</article>
	<?php endwhile; // End of while ?>
<?php endif; // End of if and and loop ?>
		<aside>
			<h3>Categories</h3>
			<ul>
			<?php while(categories()): // Loops through all categories ?>
				<li>
					<a class="cat-<?php echo category_id(); ?>" href="<?php echo category_url(); ?>" title="<?php echo category_title(); ?>"><?php echo category_title(); ?></a>
				</li>
			<?php endwhile; ?>
			</ul>
		</aside>
		<aside>
			<h3>Statistics</h3>
			<ul>
				<li><?php echo total_posts() . pluralise(total_posts(), ' Post'); ?> in total</li>
				<li><?php echo total_categories() . pluralise_cat(total_categories(), ' Categor'); ?> in total</li>
			</ul>
		</aside>
	<?php if(has_pagination()): // Displays if amount of posts exceeds the chosen Posts per page option, Admin > Extend > Site Metadata ?>
	<nav class="pagination">
		<?php echo posts_prev(); ?>
		<?php echo posts_next(); ?>
	</nav>
	<?php endif; ?>

<?php theme_include('footer'); ?>