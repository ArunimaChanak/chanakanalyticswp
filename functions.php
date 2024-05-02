<?php
include(get_template_directory(). '/includes/all-function.php');

function custom_archive_title( $title ) {
    if ( is_post_type_archive( 'blog' ) ) {
        $title = 'Blog - Chanak Analytics';
    }
    elseif ( is_post_type_archive( 'casestudy' ) ) {
        $title = 'Case study - Chanak Analytics';
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'custom_archive_title' );

function custom_archive_description( $description ) {
    if ( is_post_type_archive( 'blog' ) ) {
        $description = 'Read all of our blog posts on various topics';
    }
    elseif ( is_post_type_archive( 'casestudy' ) ) {
        $description = 'Read all of our blog posts on various topics';
    }
    return $description;
}
add_filter( 'pre_get_document_description', 'custom_archive_description' );


?>