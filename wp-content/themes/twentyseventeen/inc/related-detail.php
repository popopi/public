<?php
	$orig_post = $post;
	global $post;
	$tags = wp_get_post_tags($post->ID);

	if ($tags) {
		$tag_ids = array();

		foreach($tags as $individual_tag)
			$tag_ids[] = $individual_tag->term_id;
			$args = array(
			'tag__in' => $tag_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page'=>4, // 表示する関連記事の数
			'caller_get_posts'=>1,
			'orderby' => 'rand', // 過去記事に内部リンクできるので割と重要
		);

		$my_query = new wp_query( $args );
		?>

		<div class="detail-related">

		<?php
		while( $my_query->have_posts() ) {
			$my_query->the_post();

			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' );
			if ( !empty($thumb['0']) ) {
				$url = $thumb['0'];
			} ?>
        <article itemscope <?php post_class('entry-article'); ?> id="post-<?php the_ID(); ?>">
          <div class="entry-header">
            <?php if ( '' !== get_the_post_thumbnail() && is_single() ) : ?>
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

		<?php } // while文ここまで
		?>
		</div>

	<?php
	} // IF文ここまで

	$post = $orig_post;
	wp_reset_query();
?>