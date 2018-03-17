<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article class="entry-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-header">
    <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
      <div class="post-thumbnail">
        <a href="<?php the_permalink(); ?>">
		  <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
          <div class="entry-content">
            <p class="entry-content_date"><?php the_time('Y/m/d'); ?></p>
            <p class="entry-content_ttl"><?php the_title(); ?></p>
          </div>
		</a>
      </div><!-- .post-thumbnail -->
    <ul class="tag-lst">
    <?php $posttags = get_the_tags();
              if ($posttags) {
                foreach($posttags as $tag) {
                echo '<li>' . $tag->name . '</li>';
                }
              } ?>
    </ul>
	<?php endif; ?>
  </div><!-- .entry-header -->
</article><!-- #post-## -->