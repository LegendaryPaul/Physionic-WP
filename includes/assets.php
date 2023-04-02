<?php

function physionic__assets(){

    wp_enqueue_style('phy-style', get_template_directory_uri(). '/css/style.css', microtime());
}

add_action('wp_enqueue_scripts', 'physionic__assets');