<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="wrap wrap-search_content">
  <?php if ( have_posts() ) : ?>
			<h2 class="wrap-search_ttl"><?php printf( __( '検索結果: %s', 'twentyseventeen' ), get_search_query() ); ?></h2>
		<?php else : ?>
            <h2 class="wrap-search_ttl"><?php printf( __( '検索結果: %s<br>記事が見つかりませんでした。', 'twentyseventeen' ), get_search_query() ); ?></h2>
  <?php endif; ?>
</div>
<?php get_template_part('/banner/top-banner'); ?>
<div class="wrap">

	<div id="primary" class="content-area clearfix">
		<div class="site-main content-archive" role="main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', 'excerpt' );

			endwhile; // End of the loop.

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else : ?>

			<p><?php _e( '検索キーワードに一致するものが見つかりませんでした。 別のキーワードで試してみてください。', 'twentyseventeen' ); ?></p>
          <form role="search" method="get" class="search-form" action="https://popoipoiposu.com/">
            <label for="search-form-5a9b7d77d76cf">
            </label>
            <input type="search" id="search-form-5a9b7d77d76cf" class="search-field" placeholder="別のキーワードで再検索する" value="" name="s">
            <button type="submit" class="btn-search">
              <img src="/popoi_wp/wp-content/themes/twentyseventeen/assets/images/icon-search.png" class="icon icon-search" aria-hidden="true" role="img">
              <span class="screen-reader-text">Search</span>
            </button>
          </form>
			<?php endif; ?>
        <?php get_template_part('/banner/middle-banner'); ?>
        <?php get_template_part('/inc/content-search-bot'); ?>
        <?php get_template_part('/banner/bottom-banner'); ?>
		</div><!-- #main -->
      <?php get_template_part('/banner/side-banner'); ?>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
