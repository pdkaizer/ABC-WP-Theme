<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage ABC
 * @since ABC 1.0
 */
?>

<div class="col-1" id="sidebar">
	<a href="http://www.nmwa.org/"><img src="<?php bloginfo('template_url'); ?>/images/nmwa-logo.png" alt="National Museum of Womens Art" border="0" class="drop-shadow" /></a>
	
	<div class="search">
		<form  class="search-form" method="get" action="<?php bloginfo('home'); ?>" />
			<label>search site</label>
			<input type="text" value="" name="s" id="s" /><input type="submit" alt="Search" class="btn" />
		</form>
	</div>
	
	<div class="clearfix">
		<ul id="curriculum-sidebar-nav">
			<li><a href="/curriculum#lessons">Lessons</a></li>
			<li><a href="/curriculum/book-instructions">Book Instructions</a></li>
			<li><a href="/curriculum/artists">Artists' Biographies and Images</a></li>
			<li><a href="/curriculum/vocabulary">Vocabulary</a></li>
		</ul>
	</div>
	
	<div class="clearfix">
		<ul id="sidebar-nav">
			<li><strong><a href="/contact">contact</a></strong></li>
			<li><a href="/partners">partners/credits</a></li>
			<li><a href="/privacy">policy/terms</a></li>
			<li><a href="http://www.facebook.com/womeninthearts"><img src="<?php bloginfo('template_url'); ?>/images/facebook-32x32.png" width="32" height="32" alt="Facebook" /></a> <a href="http://twitter.com/#!/womeninthearts"><img src="<?php bloginfo('template_url'); ?>/images/twitter-32x32.png" width="32" height="32" alt="Twitter" /></a></li>
		</ul>
	</div>
	
	
</div>

