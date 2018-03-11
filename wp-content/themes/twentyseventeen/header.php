<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(is_home()): ?>
      <!-- トップページ -->
      <title>POPOIPOIPOSU</title>
    <?php elseif(is_page()): ?>
      <!-- 固定ページ -->
      <title>POPOIPOIPOSU</title>
    <?php elseif(is_single()): ?>
      <!-- 投稿ページ -->
      <title>POPOIPOIPOSU | <?php the_title_attribute(); ?></title>
    <?php elseif(is_category()): ?>
      <!-- カテゴリーページ -->
      <title>POPOIPOIPOSU</title>
    <?php elseif(is_month()): ?>
      <!-- 月別ページ -->
      <title>POPOIPOIPOSU</title>
    <?php elseif(is_year()): ?>
      <!-- 年別ページ -->
      <title>POPOIPOIPOSU</title>
    <?php elseif(is_search()): ?>
      <!-- 検索結果ページ -->
      <title>POPOIPOIPOSU</title>
    <?php else: ?>
      <!-- それ以外ページ -->
      <title>POPOIPOIPOSU</title>
    <?php endif; ?>
    
      <link rel="stylesheet" href="/wp-content/themes/twentyseventeen/assets/css/common.css">
      <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
      <script type="text/javascript" src="/wp-content/themes/twentyseventeen/assets/js/jquery.js"></script>
      <script type="text/javascript" src="/wp-content/themes/twentyseventeen/assets/js/common.js"></script>
  </head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <header class="header">
    <div class="header-logo">
      <a href="/"><img src="/wp-content/themes/twentyseventeen/assets/images/popoi-logo.png" alt="popoipoiposu"></a>
    </div>
    <div class="header-search">
      <form role="search" method="get" class="search-form" action="http://popoipoiposu.local/">
        <label for="search-form-5a9b7d77d76cf">
          <span class="screen-reader-text">キーワード / タグで検索</span>
        </label>
        <input type="search" id="search-form-5a9b7d77d76cf" class="search-field" placeholder="キーワード / タグで検索" value="" name="s">
        <button type="submit" class="btn-search">
          <svg class="icon icon-search" aria-hidden="true" role="img"><use href="#icon-search" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-search"></use></svg>
          <span class="screen-reader-text">Search</span>
        </button>
      </form>
    </div>
  </header>
	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
