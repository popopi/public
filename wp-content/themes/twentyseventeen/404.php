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


<div class="wrap">
	<div id="primary" class="content-area clearfix">
		<div class="site-main js-comic" role="main">
          <p class="not-found_ttl">ページが見つかりませんでした</p>
          <p class="not-found_txt">お探しのページは見つかりませんでした。<br>一度<a href="/">トップページ</a>に戻り、もう一度お試しください</p>
          <?php get_template_part('/banner/bottom-banner'); ?>
		</div><!-- #main -->
        <?php get_template_part('/banner/side-banner'); ?>
	</div><!-- #primary -->
</div><!-- .wrap -->
<main>
  <ul class="main-slider">
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
            <ul class="tag-lst sp-hide">
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
  </ul>
</main>

<?php get_footer();
