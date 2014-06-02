<?php
/*
Template Name: Artist Bios
*/

get_header(); ?>

<?php get_sidebar('curriculum'); ?>

<div class="col-2" id="primary">

<div id="interior">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<h2><?php the_title(); ?></h2>				

						<?php the_content(); ?>

<?php endwhile; ?>

<hr />

<?php wp_reset_query(); ?>
<h3>Narrative</h3>
<?php 
    query_posts(array( 
        'post_type' => 'artists',
		'meta_key' => 'category',
		'meta_value' => 'Narrative'
    ) );  
?>

<?php while (have_posts()) : the_post(); ?>

<div class="lessons clearfix">	
	<div class="artist-image">
		<?php the_post_thumbnail(); ?>
	</div>
	
	<div class="artist-content">
		<h3><?php the_content(); ?></h3>
		
		<?php if(get_field('bio_pdf')) { ?>
		<a href="<?php the_field('bio_pdf'); ?>">Download the Bio</a>	
		<?php } ?>
		<br />
		<?php if(get_field('image_pdf')) { ?>
		<a href="<?php the_field('image_pdf'); ?>">Download the image</a>	
		<?php } ?>
		
	</div>

</div>

<?php endwhile;?>

<hr />

<?php wp_reset_query(); ?>
<h3>Portrait</h3>
<?php 
    query_posts(array( 
        'post_type' => 'artists',
		'meta_key' => 'category',
		'meta_value' => 'Portrait'
    ) );  
?>

<?php while (have_posts()) : the_post(); ?>

<div class="lessons clearfix" id="Portrait">	
	<div class="artist-image">
		<?php the_post_thumbnail(); ?>
	</div>
	
	<div class="artist-content">
		<h3><?php the_content(); ?></h3>
		
		<?php if(get_field('bio_pdf')) { ?>
		<a href="<?php the_field('bio_pdf'); ?>">Download the Bio</a>	
		<?php } ?>
		<br />
		<?php if(get_field('image_pdf')) { ?>
		<a href="<?php the_field('image_pdf'); ?>">Download the image</a>	
		<?php } ?>
		
	</div>

</div>

<?php endwhile;?>

<hr />

<?php wp_reset_query(); ?>
<h3>Landscape/Still-Life</h3>
<?php 
    query_posts(array( 
        'post_type' => 'artists',
		'meta_key' => 'category',
		'meta_value' => 'Landscape/Still-Life'
    ) );  
?>

<?php while (have_posts()) : the_post(); ?>

<div class="lessons clearfix" id="Landscape/Still-Life">	
	<div class="artist-image">
		<?php the_post_thumbnail(); ?>
	</div>
	
	<div class="artist-content">
		<h3><?php the_content(); ?></h3>
		
		<?php if(get_field('bio_pdf')) { ?>
		<a href="<?php the_field('bio_pdf'); ?>">Download the Bio</a>	
		<?php } ?>
		<br />
		<?php if(get_field('image_pdf')) { ?>
		<a href="<?php the_field('image_pdf'); ?>">Download the image</a>	
		<?php } ?>
		
	</div>

</div>

<?php endwhile;?>

<hr />

<?php wp_reset_query(); ?>
<h3>Abstraction</h3>
<?php 
    query_posts(array( 
        'post_type' => 'artists',
		'meta_key' => 'category',
		'meta_value' => 'Abstraction'
    ) );  
?>

<?php while (have_posts()) : the_post(); ?>

<div class="lessons clearfix" id="Abstraction">	
	<div class="artist-image">
		<?php the_post_thumbnail(); ?>
	</div>
	
	<div class="artist-content">
		<h3><?php the_content(); ?></h3>
		
		<?php if(get_field('bio_pdf')) { ?>
		<a href="<?php the_field('bio_pdf'); ?>">Download the Bio</a>	
		<?php } ?>
		<br />
		<?php if(get_field('image_pdf')) { ?>
		<a href="<?php the_field('image_pdf'); ?>">Download the image</a>	
		<?php } ?>
		
	</div>

</div>

<?php endwhile;?>

<hr />

<?php wp_reset_query(); ?>
<h3>Sculpture</h3>
<?php 
    query_posts(array( 
        'post_type' => 'artists',
		'meta_key' => 'category',
		'meta_value' => 'Sculpture'
    ) );  
?>

<?php while (have_posts()) : the_post(); ?>

<div class="lessons clearfix" id="Sculpture">	
	<div class="artist-image">
		<?php the_post_thumbnail(); ?>
	</div>
	
	<div class="artist-content">
		<h3><?php the_content(); ?></h3>
		
		<?php if(get_field('bio_pdf')) { ?>
		<a href="<?php the_field('bio_pdf'); ?>">Download the Bio</a>	
		<?php } ?>
		<br />
		<?php if(get_field('image_pdf')) { ?>
		<a href="<?php the_field('image_pdf'); ?>">Download the image</a>	
		<?php } ?>
		
	</div>

</div>

<?php endwhile;?>

<hr />

<?php wp_reset_query(); ?>
<h3>Artists' Books</h3>
<?php 
    query_posts(array( 
        'post_type' => 'artists',
		'meta_key' => 'category',
		'meta_value' => 'Artist Books'
    ) );  
?>

<?php while (have_posts()) : the_post(); ?>

<div class="lessons clearfix" id="Artist-Books">	
	<div class="artist-image">
		<?php if(get_field('image_pdf')) { ?>
		<a href="<?php the_field('image_pdf'); ?>"><?php the_post_thumbnail(); ?></a>	
		<?php } ?>
	</div>
	
	<div class="artist-content">
		<h3><?php the_content(); ?></h3>
		
		<?php if(get_field('bio_pdf')) { ?>
		<a href="<?php the_field('bio_pdf'); ?>">Download the Bio</a>	
		<?php } ?>
		<br />
		<?php if(get_field('image_pdf')) { ?>
		<a href="<?php the_field('image_pdf'); ?>">Download the image</a>	
		<?php } ?>
		
	</div>

</div>

<?php endwhile;?>

</div>

<?php get_sidebar ('right'); ?>

<?php get_footer(); ?>