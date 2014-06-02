<?php
/**
 * The homepage left sidebar
 *
 * @package WordPress
 * @subpackage ABC
 * @since ABC 1.0
 */
?>


	<div class="col-1" id="sidebar">
		<img src="<?php bloginfo('template_url'); ?>/images/nmwa-logo.png" alt="National Museum of Womens Art" class="drop-shadow" />
		
		<div class="search">
			<form class="search-form">
				<label>search site</label>
				<input type="text" name="some_name" value="" id="some_name" /><input type="submit" alt="Search" class="btn" />
			</form>
		</div>
		
		<div class="clearfix">
			<ul id="sidebar-nav">
				<li><strong><a href="/contact">contact</a></strong></li>
				<li><a href="/partners">partners/credits</a></li>
				<li><a href="/policy">policy/terms</a></li>
				<li><a href="http://facebook.com"><img src="<?php bloginfo('template_url'); ?>/images/facebook-32x32.png" width="32" height="32" alt="Facebook 32x32" /></a></li>
			</ul>
		</div>
		
		
	</div>