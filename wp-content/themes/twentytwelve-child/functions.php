<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
// copyright in footer
function auto_copyright($year = 'auto'){ ?>
   <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
   <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
   <?php if(intval($year) < date('Y')){ echo intval($year) . '&#8202;–&#8202;' . date('Y'); } ?>
   <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
<?php }

// header text widget area
// function wpb_widgets_init() {

// 	register_sidebar( array(
// 		'name'          => 'Custom Header Widget Area',
// 		'id'            => 'custom-header-widget',
// 		'before_widget' => '<div class="chw-widget">',
// 		'after_widget'  => '</div>',
// 		'before_title'  => '<h2 class="chw-title">',
// 		'after_title'   => '</h2>',
// 	) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );
?>