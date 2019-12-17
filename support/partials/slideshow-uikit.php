<?php 
    
/**
 * Slider code for UiKit and custom fields    
 */
?>

<?php 
    
    if( $slider = get_field('slide') ): ;?>

        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="autoplay: false; max-height: 580; min-height: 180">
            
            <ul class="uk-slideshow-items uk-text-center">
    
            <?php 
        	    foreach( $slider as $slide )
        	    {
                    echo '<li class="slide">
                            
                            <img src="'.$slide['image']['url'].'" alt="'.$slide['image']['alt'].'" />';
                                    
                            if( $slide['caption'] )
                            {   
                                echo '<div class="uk-width-1-1 uk-position-center  uk-text-center uk-overlay caption-wrapper">';
                                echo '<div class="caption-copy" uk-scrollspy="cls: uk-animation-slide-bottom">'.$slide['caption'].'</div>';
                                echo '</div>';
                            };
                            
                    echo '</li>';
                    
                };?>
        
            </ul>
    
            <a class="uk-position-center-left uk-position-small uk-hidden-hover prev-pag" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover next-pag" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            
        </div>
        
    <?php elseif(has_post_thumbnail()): ;?>
        
        
        
        
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>
        
    
        <?php // reduce header and remove title if sing-projects page 
            
            
            if( is_single() ):;?>
               <div class="banner project-banner" style="background-image: url(<?php echo $image[0];?>)"></div> 	
                	
            <?php else:;?>
            
                <div class="banner" style="background-image: url(<?php echo $image[0];?>)">
                    <div class="uk-width-1-1 uk-position-absolute uk-position-center caption-wrapper  uk-text-center uk-overlay ">
                        <div class="caption-copy" uk-scrollspy="cls: uk-animation-slide-bottom"><p><?php the_title() ;?></p></div>
                    </div>
                </div>

            
            
            
            <?php endif ;?>
            
            
            
        
        
        
    
    
    
    
    
        
    
    <?php endif ;?>
    
    
    