<h2 class="hdg-lv1"><span class="hdg-main">探ス</span><span class="hdg-txt">タグから選択</span></h2>
  <form role="search" method="get" class="search-form pc-hide" action="https://popoipoiposu.com/">
    <label for="search-form-5a9b7d77d76cf">
    </label>
    <input type="search" id="search-form-5a9b7d77d76cf" class="search-field" placeholder="" value="" name="s">
    <button type="submit" class="btn-search">
      <img src="/popoi_wp/wp-content/themes/twentyseventeen/assets/images/icon-search.png" class="icon icon-search" aria-hidden="true" role="img">
      <span class="screen-reader-text">Search</span>
    </button>
  </form>
<ul class="tag-lst lst_bot">
  <?php
    $posttags = get_tags();
    if ($posttags) {
    foreach($posttags as $tag) {
      echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a>'. "</li>";
      }
    }
  ?>
</ul>