<?php 
    if ( is_home() || is_front_page() ) {
    	get_template_part( 'template-parts/header/header' );
    }
    else {
    	get_template_part( 'template-parts/header/small-header' );
    }
?>