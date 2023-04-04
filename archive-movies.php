<?php
/**
 * The template for displaying Moviee
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package q-agent
 */

 get_header();
 $args = array( 'post_type' => 'movies', 'posts_per_page' => 10 );
 $the_query = new WP_Query( $args ); 
 $valuemeta = get_post_meta( $post->ID, 'movie_title', true );
 ?>
 <main>
 <div class="container">
             <h1>Dicunt doctus labores quo et, no quo blandit necessitatibus</h1>
             <p>Usu suas conclusionemque eu, eu facilis insolens eum. Te usu sanctus offendit, diam aliquid in vim</p>
         </div>
         <hr>
 <div class="news container">
 <?php if ( $the_query->have_posts() ) : ?>
 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
 <artice class='article-blog'>
 <img class='news-img' src="<?php echo get_the_post_thumbnail();?>"
                 <h3><?php the_title(); ?></h3>
                 <p><?php echo $valuemeta; ?></p>
 <?php endwhile;
 wp_reset_postdata(); ?>
 </article>

 <?php else:  ?>
 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
 </div>
 </main>
 <?php
 get_footer();?>