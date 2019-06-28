<?php
    add_shortcode('lienYT', 'add_youtubeLink');
    function add_youtubeLink( $atts ) {
        $atts =  shortcode_atts(
                array(
                'url' => '',
                'align' => 'center',
                'size' => '100',
                ),
                $atts
                );
    
        if (!empty($atts['url'])) {
            return '<figure class="align'.$atts['align'].'"><iframe width="'.$atts['size'].'%" height="'.($atts['size']*4+100).'" src="'.$atts['url'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></figure>';
        }
        else {
            return 'No url set';
        }
    }