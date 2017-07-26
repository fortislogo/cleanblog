<?php
/**
 * The template for displaying all pages
 *
 
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

         	<?php

         	if (is_front_page()) 
         	{ 
         		$args = array('post_type' => 'post', 'posts_per_page' => 4);

         		$args['paged'] =  get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;

         		$the_query = new WP_Query($args);

         		// Pagination fix
				$temp_query = $wp_query;
				$wp_query   = NULL;
				$wp_query   = $the_query;

				if ( $the_query->have_posts() ) 
				{
	
					while ( $the_query->have_posts() ) 
					{
						$the_query->the_post();

						get_template_part( 'template-parts/post/content', get_post_format() );

					}
	
					
					wp_reset_postdata();	
					
					// Reset main query object
					$wp_query = NULL;
					$wp_query = $temp_query;

					?>

					<ul class="pager">
						<li class="next">
                    		<?php next_posts_link( 'Older Posts &rarr;', $the_query->max_num_pages ); ?>
                    	</li>
                	</ul>
					<?php

				} 
				else 
				{
					
					
				}

         	} 
         	else
         	{	
				while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				endwhile; // End of the loop.
			}
				
			?>  	
                
        </div>
    </div>
</div>

<hr>

<?php get_footer();
