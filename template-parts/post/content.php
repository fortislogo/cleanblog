<?php
/**
 * Template part for displaying posts
 *
 
 */

?>

<?php if ( is_single() ) { ?>

<?php the_content(); ?>

<?php } else { ?>

<div class="post-preview">
	
    	<a href="<?php echo esc_url( get_permalink() ); ?>">
    	<h2 class="post-title">
        	<?php the_title(); ?>
        </h2>
        
        <h3 class="post-subtitle">
        	<?php echo get_field('subtitle'); ?>	
        </h3>
        </a>
        
        
        <p class="post-meta">Posted by <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php echo get_the_author() ?></a> on <?php echo get_the_date(); ?></p>
</div>

<hr>

<?php } ?>
