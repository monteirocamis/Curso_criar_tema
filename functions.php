<?php 

function removeinline_adminbar_css_frontend() {
if ( has_filter( 'wp_head','_admin_bar_bump_cb' ) ){
    remove_filter( 'wp_head', '_admin_bar_bump_cb' );
    }
}

add_filter( 'wp_head', 'removeinline_adminbar_css_frontend', 1 );
