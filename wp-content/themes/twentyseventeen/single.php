<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
?>

<div class="wrap detail">
  <div id="primary" class="content-area clearfix">
	<div class="site-main">
      <p class="detail-date"><?php the_time('Y/m/d'); ?></p>
      <ul class="tag-lst lst_detail">
        <?php
          $posttags = get_tags();
            if ($posttags) {
              foreach($posttags as $tag) {
              echo '<li><a href="'. get_tag_link($tag->term_id) .'">' .   $tag->name . '</a>'. "</li>";
            }
          }
        ?>
      </ul>
      <?php get_template_part('/inc/btn'); ?>
      <h1 class="hdg"><?php echo get_the_title(); ?></h1> 
      <?php get_template_part('/banner/top-banner'); ?>
      <?php if ( have_posts() ) : ?>
        <?php while( have_posts() ) : the_post(); ?>
            <div class="detail-content"><?php the_content(); ?></div>
        <?php endwhile;?>
      <?php endif; ?>
      <?php get_template_part('/banner/middle-banner'); ?>
      <?php get_template_part('/inc/related-detail'); ?>
      <?php get_template_part('/banner/bottom-banner'); ?>
      <?php get_template_part('/inc/content-search-bot'); ?>
    </div>
    <?php get_template_part('/banner/side-banner'); ?>
  </div><!-- #primary -->
</div>
</div><!-- .wrap -->

<?php get_footer();
