<article <?php post_class('entry-article'); ?> id="post-<?php the_ID(); ?>">
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
   <?php the_tags('<ul class="tag-lst"><li>','</li><li>','</li></ul>'); ?>
	<?php endif; ?>
  </div><!-- .entry-header -->
</article><!-- #post-## -->