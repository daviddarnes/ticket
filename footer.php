<?php // Footer include ?>
			<footer>
				<?php if(is_postspage()) : // If the page is showing the postsÉ ?>
					<small><a href="<?php echo rss_url(); ?>" title="RSS feed">RSS</a></small>
				<?php elseif(is_homepage()) : // If the page is set to the homepageÉ ?>
					<small><a href="<?php echo current_url(); ?>" title="Page link">URL</a></small>
				<?php endif; ?>
					<small class="credit"><a href="https://github.com/daviddarnes/ticket" title="Ticket: GitHub">Ticket</a> for <a href="http://anchorcms.com" title="Anchor CMS Homepage">Anchor CMS</a>, Created by <a href="http://david.darn.es" title="David Darnes: Designer">David Darnes</a></small>
			</footer>
		</section>
	</body>
</html>