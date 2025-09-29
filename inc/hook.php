<?php
function tbb_plugin_footer_text(){
    echo "All rights reserved by Talha Bashir &copy; 2025";
}

add_action( 'wp_footer','tbb_plugin_footer_text',20);