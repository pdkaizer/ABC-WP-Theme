<?php
/*
Template Name: Books
*/

get_header(); ?>

<?php get_sidebar('curriculum'); ?>

<div class="col-2" id="primary">

<div id="interior">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<h2><?php the_title(); ?></h2>				

						<?php the_content(); ?>

<?php endwhile; ?>

<?php wp_reset_query(); ?>

<?php 
    query_posts(array( 
        'post_type' => 'books', 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
	
<div>	
	<ul id="book-list">
	    <li>
		<?php the_post_thumbnail(); ?><br />
		<?php if(get_field('book_pdf')) { ?>
		<a href="<?php the_field('book_pdf'); ?>"><?php the_title(); ?></a>	
		<?php } ?></a>
		</li>
	</ul>
</div>	
	
<?php endwhile;?>

</div>

<?php get_sidebar ('right'); ?>

<?php get_footer(); ?>

