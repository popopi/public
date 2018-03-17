<?php
$banners = get_posts(array(
    'post_type' => 'banner',
    'post_status' => 'publish'
));
$image_id = get_field("topbanner-img",POSTID);
$image = wp_get_attachment_image_src($image_id,"banner");
the_field("banner_url",POSTID);
?>