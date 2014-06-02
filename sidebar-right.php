<div id="interior-content-right">
	<a href="/teachers-connect"><img src="<?php bloginfo('template_url'); ?>/images/interior-blog-mast2.png" class="drop-shadow" alt="Blog Mast" /></a>
	
	<div id="right-sidebar-content">
		
		<div class="right-sidebar">
			<?php $temp_query = $wp_query; ?>
		    <?php query_posts('category_name=Teachers Connect&showposts=2'); ?>
			<?php while (have_posts()) : the_post(); ?>
		  	<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?> 
			<hr />
		    <?php endwhile; ?>
		</div>
		
	</div>
</div>