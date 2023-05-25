<?php

register_nav_menu('top-menu', 'Menu Top');

add_theme_support( 'post-thumbnails' );

register_sidebar(array(
	'name' => __( 'Right Sidebar' ),
	'id' => 'right-sidebar',
	'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
	'before_widget' => '<div class="sidebar">',
	'after_widget'  => '</div>',
	'before_title'  => '<div class="header"><h6><span class="widget-title">',
	'after_title'   => '</span></h6></div>'
));