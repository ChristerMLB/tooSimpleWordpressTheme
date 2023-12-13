<?php
if ( function_exists('register_sidebar') )
    register_sidebar( array('name' => "sidebar1", 'id' => "sidebar1") );
	register_sidebar( array('name' => "footerbar1", 'id' => "footerbar1") );
?>
<?php add_theme_support( 'automatic-feed-links' ) ?>
<?php if ( ! isset( $content_width ) ) 
    $content_width = 1200; ?>