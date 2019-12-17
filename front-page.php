<?php
/**
 * The template for displaying homepage
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package archanelandscape
 */

get_header();?>

    
    <div class="uk-section uk-flex uk-flex-center">
        
        <div class="uk-width-2-3@m uk-text-center">
    
            <?php
                if(have_posts()) :
    
                    while(have_posts()) : the_post();
    
                        the_content();
    
                    endwhile;
    
                else :?>
    
                    Sorry there are no posts.
    
            <?php endif;?>
    
        </div>

    </div>
    
    
    <section class="page-links uk-margin-remove-top">
        
            
            <div class="uk-grid" uk-grid>
                
                
                <?php // get pages 
                    
                    if( $blocks = get_field('front_page_blocks') ){
                        
                        
                        foreach( $blocks as $block ){
                            
                            $img = $block['block_image']['sizes']['front_page_block'];
                            
                            echo '<div class="uk-width-1-2@s">';
                            
                            
                                echo '<div class="block-image uk-flex uk-flex-center uk-flex-middle" style="background-image: url('.$img.')"><h2>'.$block['block_title'].'</h2></div>';
                                
                                echo '<div class="block-content">'.$block['block_content'].'</div>';
                                
                                
                            echo '</div>';
                            
                        }
                    };?>
                    
            </div>
                
        
    
    </section>
    
    
    
    <?php if( $quotes = get_field('quotes') ): ;?>
    
    
        <?php 
            foreach( $quotes as $quote ){
                
                echo '
                    <section class="page-quote uk-section">
                        <blockquote>
                            '.$quote['quote_copy'].'
                            <p class="quote-author">'.$quote['quote_author'].'</p>
                            
                        </blockquote>
                    </section>';
                
                
                
            };?>
    
        
        
        
    
    
    
    
    <?php endif ;?>
    

<?php get_footer();?>

