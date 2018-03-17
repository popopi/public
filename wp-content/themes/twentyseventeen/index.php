<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main>
  <div class="main-slider">
    <?php query_posts('showposts=3'); 
      if (have_posts()) : 
      while (have_posts()) : 
      the_post(); ?>
    <li>
      <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail(); ?>
        <div class="main-slider-content">
          <div class="main-slider-content__inner">
            <p class="main-slider-date"><?php the_time('Y/m/d'); ?></p>
            <p class="main-slider-ttl"><?php the_title(); ?></p>
            <ul class="tag-lst">
            <?php $posttags = get_the_tags();
              if ($posttags) {
                foreach($posttags as $tag) {
                echo '<li>' . $tag->name . '</li>';
                }
              } ?>
            </ul>
          </div>
        </div>
      </a>
    </li>
    <?php
    endwhile;
    endif;
    ?>
  </div>
</main>
<?php get_template_part('/banner/top-banner'); ?>
<div class="wrap">
  <h2 class="hdg-lv1"><span class="hdg-main">読ム</span><span class="hdg-txt">カテゴリーから選択</span></h2>

	<div id="primary" class="content-area">
		<div class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content_top', get_post_format() );

				endwhile;
			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>
            <div class="content-more">
              <a href="#" class="content-more_lnk">
                もっと見る
              </a>
          </div>
          <?php get_template_part('/banner/middle-banner'); ?>
		</div><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
