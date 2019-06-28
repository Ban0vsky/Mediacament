<?php
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
    function wpdocs_custom_excerpt_length( $length ) {
        return 20;
    }