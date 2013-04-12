			<?php if(is_postspage()) : ?>
				<hr/>
				<small><a href="<?php echo rss_url(); ?>" title="RSS feed">RSS</a></small>
			<?php elseif(is_homepage()) : ?>
				<hr/>
				<small><a href="<?php echo current_url(); ?>" title="Page link">URL</a></small>
			<?php endif; ?>
		</section>
	</body>
</html>