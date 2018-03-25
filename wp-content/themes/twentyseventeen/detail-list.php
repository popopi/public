<?php
/**
 * Template Name: 記事一覧 */
?>
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

<?php get_template_part('/banner/top-banner'); ?>
<div class="wrap list_article">
  <div id="primary" class="content-area clearfix">
	<div class="site-main js-comic" role="main">
			<?php query_posts('showposts=-1'); 
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
          <div class="list_article_pager"></div>
          <?php get_template_part('/banner/middle-banner'); ?>
          <?php get_template_part('/inc/content-search-bot'); ?>
          <?php get_template_part('/banner/bottom-banner'); ?>
		</div><!-- #main -->
        <?php get_template_part('/banner/side-banner'); ?>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();