<?php


add_theme_support("post_thumbnails");
set_post_thumbnail_size(800,480);
add_image_size("vignette",220,100,true);
function new_excerpt_length($length){

    return 20;


}
add_filter("excerpt_length","new_excerpt_length");

function creermenu(){

    register_nav_menus(array(
        "menu_pricipal"=>"Menu principal",
        "menu_footer"=>"Menu footer",
        "menu_sociaux"=>"Menu Sociaux",
    ));




}

