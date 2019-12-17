<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package archanelandscape
 */
?>

<div class="uk-width-1-4@m uk-flex-first">
    <aside id="secondary" class="widget-area">
        
        
        <?php
            
            
            global $post;
            
            if( get_post_type() == 'projects' ){
                $postid = 9;
                $args = array(
                    //'child_of'  => $postid,
                    'title_li'  => '',
                    'post_type' => 'projects'
                ); 
                
            }else{
                $postid = $post->post_parent;
                
                $args = array(
                    'child_of' => $postid,
                    'title_li' => ''
                ); 
            }
            
            
            
            
            
            
            
            
            
            
            ?>
            
        <?php if( $postid > 0 ): ;?>
                    
        
            <nav class="side-nav">
                
                <ul>
                    <li class="side-nav-title"><?php echo get_the_title($postid) ;?></li>
                    <?php  wp_list_pages( $args ); ;?>
                </ul>
            </nav>
            
        <?php endif ;?>
        
        
        
        
    	<?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #secondary -->
</div>