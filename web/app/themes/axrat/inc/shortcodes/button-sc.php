<?php

function fh_button_shortcode( $atts ) {

    $a = shortcode_atts( array(
        'text' => '',
        'link' => '/',
        'new_window' => false,
    ), $atts );

    return '<a class="f-button  href="'.$a['link'].'"'.($a['new_window'] ? ' target="_blank"' : '').'>'.$a['text'].'</a>';
}
add_shortcode( 'fh_button', 'fh_button_shortcode' );


