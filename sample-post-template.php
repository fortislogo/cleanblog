<?php 
/*
* Template Name: Sample Post
*/

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

         	<?php 

         		while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', 'post' );

				endwhile; // End of the loop.

         	?>    	
                
        </div>
    </div>
</div>

<hr>


<?php get_footer(); ?>