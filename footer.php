<?php // Footer include ?>
			<?php if(is_postspage()) : // If the page is showing the postsÉ ?>
				<hr/>
				<small><a href="<?php echo rss_url(); ?>" title="RSS feed">RSS</a></small>
			<?php elseif(is_homepage()) : // If the page is set to the homepageÉ ?>
				<hr/>
				<small><a href="<?php echo current_url(); ?>" title="Page link">URL</a></small>
			<?php endif; ?>
		</section>
	</body>
</html>