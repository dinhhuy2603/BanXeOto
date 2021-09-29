<?php 
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Menu chính' ));
}
add_action( 'init', 'register_my_menu' );
// Đưa trình soạn thảo về phiên bản cũ 
add_filter('use_block_editor_for_post', '__return_false');
?>