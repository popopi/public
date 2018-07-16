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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119542316-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119542316-1');
    </script>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="/popoi_wp/wp-content/themes/twentyseventeen/assets/images/favicon.ico">
    <?php if(is_home()): ?>
      <!-- トップページ -->
      <title>POPOIPOIPOS | おすすめ漫画、アニメ、アプリを、暇人のあなたへ</title>
      <meta property="og:title" content="POPOIPOIPOS | おすすめ漫画、アニメ、アプリを、暇人のあなたへ">
      <meta property="og:url" content="https://popoipoiposu.com/">
      <meta property="og:image" content="https://popoipoiposu.com/popoi_wp/wp-content/themes/twentyseventeen/assets/images/og.png">
    <?php elseif(is_page()): ?>
      <!-- 固定ページ -->
      <title>POPOIPOIPOS | おすすめ漫画、アニメ、アプリを、暇人のあなたへ</title>
      <meta property="og:title" content="POPOIPOIPOS | おすすめ漫画、アニメ、アプリを、暇人のあなたへ">
      <?php echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n"; ?>
      <meta property="og:image" content="https://popoipoiposu.com/popoi_wp/wp-content/themes/twentyseventeen/assets/images/og.png">
    <?php elseif(is_single()): ?>
      <!-- 投稿ページ -->
      <title>POPOIPOIPOS | <?php the_title_attribute(); ?></title>
      <meta property="og:title" content="POPOIPOIPOS | <?php the_title_attribute(); ?>">
      <?php echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n"; ?>
      <?php echo '<meta property="og:image" content="'; the_post_thumbnail_url( 'full' ); echo '">';echo "\n"; ?>
    <?php elseif(is_category()): ?>
      <!-- カテゴリーページ -->
      <title>POPOIPOIPOS | 検索</title>
      <meta property="og:title" content="POPOIPOIPOS | 検索">
      <meta property="og:image" content="https://popoipoiposu.com/popoi_wp/wp-content/themes/twentyseventeen/assets/images/og.png">
    <?php elseif(is_month()): ?>
      <!-- 月別ページ -->
      <title>POPOIPOIPOS | 月別</title>
      <meta property="og:title" content="POPOIPOIPOS | 月別">
      <meta property="og:image" content="https://popoipoiposu.com/popoi_wp/wp-content/themes/twentyseventeen/assets/images/og.png">
    <?php elseif(is_year()): ?>
      <!-- 年別ページ -->
      <title>POPOIPOIPOS | 年別</title>
      <meta property="og:title" content="POPOIPOIPOS | 年別">
      <meta property="og:image" content="https://popoipoiposu.com/popoi_wp/wp-content/themes/twentyseventeen/assets/images/og.png">
    <?php elseif(is_search()): ?>
      <!-- 検索結果ページ -->
      <title>POPOIPOIPOS | 検索結果</title>
      <meta property="og:title" content="POPOIPOIPOS | 検索結果">
      <meta property="og:image" content="https://popoipoiposu.com/popoi_wp/wp-content/themes/twentyseventeen/assets/images/og.png">
    <?php else: ?>
      <!-- それ以外ページ -->
      <title>POPOIPOIPOS | おすすめ漫画、アニメ、アプリを、暇人のあなたへ</title>
      <meta property="og:title" content="POPOIPOIPOS | おすすめ漫画、アニメ、アプリを、暇人のあなたへ">
      <meta property="og:image" content="https://popoipoiposu.com/popoi_wp/wp-content/themes/twentyseventeen/assets/images/og.png">
    <?php endif; ?>
      <meta name="description" content="POPOIPOIPOS（ポポイポイポス）は、20代がおくる、漫画、アニメ、アプリの紹介、レビューメディアサイトになります。通勤時間、寝る前などの暇な時間を漫画、アプリ、アニメ、動画を見て過ごしているあなたへ。おすすめしたい様々な作品を本サイトで紹介、レビューしていきます。是非、本サイトを参考に新たな作品と出会い、暇な時間を有意義に使ってください！">
      <meta name="keywords" content="マンガ,アニメ,アプリ,おすすめ,レビュー,評価,ランキング,ブログ">
      <meta name="author" content="popoipoiposu">
      <meta property="og:site_name" content="POPOIPOIPOSU">
      <meta property="og:description" content="POPOIPOIPOS（ポポイポイポス）は、20代がおくる、漫画、アニメ、アプリの紹介、レビューメディアサイトになります。通勤時間、寝る前などの暇な時間を漫画、アプリ、アニメ、動画を見て過ごしているあなたへ。おすすめしたい様々な作品を本サイトで紹介、レビューしていきます。是非、本サイトを参考に新たな作品と出会い、暇な時間を有意義に使ってください！">
      <meta property="og:type" content="website">
      <link rel="canonical" href="https://popoipoiposu.com/">
      <link rel="stylesheet" href="/popoi_wp/wp-content/themes/twentyseventeen/assets/css/common.css?201806172">
      <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
      <script type="text/javascript" src="/popoi_wp/wp-content/themes/twentyseventeen/assets/js/jquery.js"></script>
      <script type="text/javascript" src="/popoi_wp/wp-content/themes/twentyseventeen/assets/js/common.js?20180617"></script>
  </head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <header class="header">
    <div class="header-logo">
      <a href="/"><img src="/popoi_wp/wp-content/themes/twentyseventeen/assets/images/popoi-logo.png" alt="popoipoiposu"></a>
    </div>
    <div class="header-search sp-hide">
      <form role="search" method="get" class="search-form" action="https://popoipoiposu.com/">
        <label for="search-form-5a9b7d77d76cf">
          <span class="screen-reader-text">キーワード / タグで検索</span>
        </label>
        <input type="search" id="search-form-5a9b7d77d76cf" class="search-field" placeholder="キーワード / タグで検索" value="" name="s">
        <button type="submit" class="btn-search">
          <img src="/popoi_wp/wp-content/themes/twentyseventeen/assets/images/icon-search.png" class="icon icon-search" aria-hidden="true" role="img">
          <span class="screen-reader-text">Search</span>
        </button>
      </form>
    </div>
    <div class="header-search-btn pc-hide">
      <img src="/popoi_wp/wp-content/themes/twentyseventeen/assets/images/icon-search.png" class="icon icon-search" aria-hidden="true" role="img">
    </div>
  </header>
  <div class="header-search js-sp-search pc-hide">
    <form role="search" method="get" class="search-form" action="https://popoipoiposu.com/">
      <label for="search-form-5a9b7d77d76cf">
        <span class="screen-reader-text">キーワード / タグで検索</span>
      </label>
      <input type="search" id="search-form-5a9b7d77d76cf" class="search-field" placeholder="キーワード / タグで検索" value="" name="s">
      <button type="submit" class="btn-search">
        <img src="/popoi_wp/wp-content/themes/twentyseventeen/assets/images/icon-search.png" class="icon icon-search" aria-hidden="true" role="img">
        <span class="screen-reader-text">Search</span>
      </button>
    </form>
  </div>
  <div class="site-content-contain">
    <div id="content" class="site-content">
