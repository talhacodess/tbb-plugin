
<?php
//Action Hook
function tbb_plugin_footer_text(){
    echo "All rights reserved by Talha Bashir &copy; 2025";
}

add_action( 'wp_footer','tbb_plugin_footer_text',20);

//OG tag action hook

function tbb_og_tag(){
    if(is_singular('post')){
        $title = get_the_title();
        $excerpt = get_the_excerpt();
        echo '<meta property="og:title" content="'.$title.'" />';
        echo '<meta property="og:description" content="'.$excerpt.'" />';

    }
}
add_action('wp_head','tbb_og_tag');

//Filter Hook

function tbb_post_title($title){
    $emoji = '😃';
   if (is_singular( 'post' )) {
     return $title . $emoji;
   } elseif(is_home()) {

    $emoji_two = '😝';
    return $title . $emoji_two;

    
   }else{
    return $title;
   }
   

}
add_filter( 'the_title', 'tbb_post_title', 20 );

//for content

function tbb_post_content($title){
    $text = "<h6>Overview</h6>";
   if (is_singular( 'post' )) {
     return $text.  $title ;
   } 
    return $title;
 

}
add_filter( 'the_content', 'tbb_post_content', 20 );


function tbb_excerpt_length($excerpt){
    return 5;
}
add_filter( "excerpt_length", 'tbb_excerpt_length', 20 );