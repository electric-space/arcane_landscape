<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package archanelandscape
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/fvu7hdu.css">

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<script>
    //removes no-js class and adds visible class to fade page up
    var el = document.body.parentNode, bdy = document.body;
    bdy.classList.add('hidden'); el.classList.remove('no-js'); el.classList.add('js');
</script>

    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'archanelandscape' ); ?></a>


    
    <?php if( !has_post_thumbnail() && !is_front_page() )  $nobanner = 'nobanner' ;?>
    
    <header id="masthead" class="site-header <?php echo $nobanner ;?>">
        
        <div class="uk-container-expand uk-position-absolute uk-position-z-index uk-width-1-1 uk-padding-small">

            <div class="uk-grid uk-flex uk-flex-middle" uk-grid uk-scrollspy="cls:uk-animation-fade">

                <div class="uk-width-1-3">

                    <div class="site-branding uk-flex uk-flex-middle">

                        <?php the_custom_logo();?>

                    </div><!-- .site-branding -->
                    
                </div>

                <div class="uk-width-2-3">
                    <nav id="site-navigation" class="main-navigation uk-flex  uk-flex-middle uk-flex-right">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'container'      => '',
                            'menu_class'     => 'menu  uk-visible@m'
                        ) );
                        ?>

                        <?php get_template_part('support/partials/mobilemenu') ;?>


                    </nav><!-- #site-navigation -->
                </div>

            </div>
        
        </div>
            
        <?php get_template_part('support/partials/slideshow-uikit') ;?>


    </header><!-- #masthead -->








    <?php
        /**
         * Adds a container over the whole page, so restricts the width.
         * Turn off in Theme Settings so we can add full-width stripes.
         */

        if( get_field('stripe', 'options') ):?> 
            <div class="uk-container uk-container   ">
                <div class="page-wrapper">
                    <main id="main" class="site-main <?php if( !is_front_page() ) echo 'inner-page' ;?>">
                        <div class="uk-grid" uk-grid>

        <?php else: ;?>

             <main id="main" class="site-main full-width">

        <?php endif;

    ;?>





