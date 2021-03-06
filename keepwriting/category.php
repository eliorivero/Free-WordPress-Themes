<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage keepwriting
 * @since keepwriting 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
     <div class="post-meta"><span>Posted under <?php the_category(', '); ?> on <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></span></div>       
     <div class="entry">
       <?php the_content(); ?>
     </div>    
 </div> <!--post -->
  <?php wp_link_pages(); ?> 
 <?php endwhile;?>
 <?php endif; ?>


<div class="pageslist"><?php echo paginate_links(); ?></div>

<?php get_footer(); ?>