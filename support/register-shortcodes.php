<?php

/**
 * Utilily block
 * Usage  = [block class="{}"]
 */

function block_func($atts){
    
    $default = 'x1';
    
    $args = shortcode_atts( array(
        'class' => $default
        
    ), $atts );
    
    
    $class = $args['class'];
    
    return '<div class="'.$class.'"></div>';
    
    
}

add_shortcode( 'block', 'block_func');


/**
 * Quote
 */

function quote_func($atts){
    
    $id = 1;
    
    $args = shortcode_atts( array(
        'id' => $id
        
    ), $atts );
    
    
    $id = $args['id'] - 1;
    
    
    if( $arr = get_field('quotes') ){
        
            $content = '<section class="page-quote uk-section">';
            $content .= '<blockquote>';
            $content .= $arr[$id]['quote_copy'];
            $content .= '<p class="quote-author">'. $arr[$id]['quote_author'].'</p>';
            $content .= '</blockquote>';
            $content .= '</section>';
            
        return $content;
    }

    
        
}

add_shortcode('quote', 'quote_func');


/**
 * Adds a privacy link
 * Usage = [privacy text="{}" url="{}"]
 */

function privacy_func($atts){

    $text_default = 'Privacy';
    $url_default = '/privacy-policy';


    $args = shortcode_atts( array(
        'text' => $text_default,
        'url'  => $url_default
    ), $atts  );

    // Text
    $text = $args['text'];

    // URL
    $url = $args['url'];


    $privacy = '<a href="'.$url.'">'.$text.'</a>';

    return $privacy;
}

add_shortcode('privacy', 'privacy_func');




/**
 * Social list, includes all accounts in a UL with icons
 * Usage [social_list]
 */

function social_list_func($atts){

    if( $accounts = get_field('social_accounts', 'option') ):

        $list = '<ul class="social-list clear uk-align-right@s">';

        $social = explode("\n", $accounts);

        foreach( $social as $link )
        {
           $account = array_filter( explode('/', $link) );
           $account = str_ireplace( array('www.','.com','.co.uk'), '', $account[2]);
           $list .= '<li class="'.$account.'"><a href="'.$link.'" class="social_icons fade" target="_blank" uk-icon="icon: '.$account.'"></a></li>';

        };


        $list .= '</ul>';

        return $list;

    endif;
}

add_shortcode( 'social_list', 'social_list_func');




/**
 * social
 * Usage [social acnt="{instagram}"]
 * Accounts are added in the theme settings page, then select which account you want to print
 */

function social_func($atts) {


    if( $accounts = get_field('social_accounts', 'option') ):

        $args = shortcode_atts( array(
            'acnt' => ''
        ), $atts, 'social' );

        $social = explode("\n", $accounts);


        foreach( array_filter($social) as $link ){

            $account = array_filter( explode('/', $link) );

            $provider = str_ireplace( array('www.','.com'), '', $account[2]);

            $user = $account[3];

            if( trim($provider) == $args['acnt'] ) {

                return '<a href="'.$link.'" target="_blank">'.$user.'</a>';
            }
        }

    endif;
}

add_shortcode('social', 'social_func');




/**
 * Phone shortcode
 * Usage [phone icon="true/false"]
 */

function phone_func( $atts ) {
    $args = shortcode_atts( array(
        'icon' => ''
    ), $atts, 'phone' );

    $args['icon'] = filter_var( $args['icon'], FILTER_VALIDATE_BOOLEAN );

    if( $telephone = get_field('phone_number', 'option') ):


        if ( $args['icon']   )
        {
            $icon = '<span class="social-icon" uk-icon="phone"></span>';
            return $icon.$telephone;
        }
        else
        {
            return $telephone;
        }

    endif;
}

add_shortcode('phone', 'phone_func');




/**
 * email shortcode
 * Usage [email icon="true/false"]
 */

function email_func( $atts ) {
    $args = shortcode_atts( array(
        'icon' => ''
    ), $atts, 'email' );

    $args['icon'] = filter_var( $args['icon'], FILTER_VALIDATE_BOOLEAN );

    if( $email = get_field('email', 'option') );

    if ( $args['icon']   )
    {
        $icon = '<span class="social-icon" uk-icon="mail"></span>';
        return '<a href="mailto:'.$email.'">'.$icon.$email.'</a>';
    }
    else
    {
        return '<a href="mailto:'.$email.'">'.$email.'</a>';
    }
}

add_shortcode( 'email', 'email_func' );




/**
 * Button shortcode
 * usage: [button text="" page="{page name}" size=""]
 */


function button_func( $atts ){

    // defaults
    $_text = "Read More";
    $_page = "home";
    $_size = "";
    $_url  = "";

    $args = (shortcode_atts( array(
        'text' => $_text,
        'page' => $_page,
        'size' => $_size,
        'url'  => $_url
    ), $atts ) );

    // get attrs
    $text = $args['text'];
    $page = $args['page'];
    $size = $args['size'];
    $url  = $args['url'];
    
    
    if( $url ){
        return '<a href="'.$url.'" class="button '.$size.'" target="_blank">'.$text.'</a>';    
    }else{
        return '<a href="'.get_bloginfo('url').'/'.$page.'/" class="button '.$size.'">'.$text.'</a>';
    }


}

add_shortcode( 'button', 'button_func');




/**
 * column shortcode, adds a sinbgle column
 * usage [column align="" width=""]
 *
 */

function column_func( $atts, $content = null ) {

    $content = preg_replace('#^<\/p>|<p>$#', '', $content);

    // defaults
    $_align = '';
    $_width = '';

    $args = (shortcode_atts( array(
        'align' => $_align,
        'width' => $_width
    ), $atts ) );


    // get attrs
    if( $args['align'] ){
        $align = 'align'.$args['align'];
    }

    if( $args['width'] ){
        $width = 'style="width:'.$args['width'].'px"';
    }


    return '<div class="page-column '.$align.'" '.$width.' >'.
            do_shortcode($content).
            '</div>';
}

add_shortcode( 'columns', 'column_func' );







