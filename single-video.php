<?php
/**
 * The Template for displaying single video posts.
 *
 * @package WordPress
 * @subpackage ABC
 * @since ABC 1.0
 *
 * @package WordPress
 * @subpackage ABC
 * @since ABC 1.0
 */

get_header(); ?>

<?php get_sidebar(); ?>

<div class="col-2" id="primary">

<div id="interior">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


						<h2 class="orange"><?php the_title(); ?></h2>			

						<?php the_content(); ?>
						
						<?php if(get_field('video')) { ?>
							<object classid="clsid:02bf25d5-8c17-4b23-bc80-d3488abddc6b" width="420" height="336" codebase="http://www.apple.com/qtactivex/qtplugin.cab">
							<param name="src" value="<?php the_field('video'); ?>">
							<param name="autoplay" value="false">
							<param name="controller" value="true">
							<embed src="<?php the_field('video'); ?>" controller="true" height="336" width="420" cache="true"
							</embed></object>
						<?php } ?>
						
<p>Quicktime is required to view these clips and may be downloaded for <a href="http://www.apple.com/quicktime/">free here</a>.</p>

<h4 class="orange"><a href="/multimedia">Return to multimedia listing</a></h4>

<br /><br />

<?php endwhile; ?>

</div>
	
<?php get_sidebar ('right'); ?>

<?php get_footer(); ?>