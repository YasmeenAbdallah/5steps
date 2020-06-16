<?php
/*template name:hero
**
** @package FiveStes;
*/
?>

<!--START .section__type-hero-->
    <section class="section__type-hero uk-contianer">
     <?php $home_catquery = new WP_Query( array( 'category_name' => 'home' )); ?> 
     <!-- check if we have posts  -->
    <?php  if ( $home_catquery->have_posts() ): ?> 
    <?php while($home_catquery->have_posts()) : $home_catquery->the_post(); ?>
     <!-- START .hero__background  -->
   <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@s uk-text-center" uk-grid>
   
        <!-- START .hero__type-content -->
        <div class='hero__type-content'>
          <h1><?php the_title(); ?></h1>
          <a href="" class="hero__content-button">Get a free Quote</a>
        </div>
        <!-- END .hero__type-content -->
        
        <!-- START .hero__type-img -->
        <div class='hero__type-img'>
         <?php $hero_img= get_field('hero_img')['sizes']['large']; ?>
         <img src="<?php echo $hero_img;?>">
        </div>
        <!-- END .hero__type-img -->
       
                  
</div>
</div>
 <?php  
 //END wordpress loop
             endwhile;
             //END if condition
             endif; 
                wp_reset_postdata();
            ?>

    </section>
    <!--END .section__type-hero-->
    
<!-- START .section__type-about -->
<section class='section__type-about uk-container uk-margin-top'>
  <?php $liveHead_catquery = new WP_Query( array( 'category_name' => 'live header' ) ); ?> 
   <?php  if ( $liveHead_catquery->have_posts() ): ?> 
         
         <p><?php the_content(); ?></p>
   <?php 
   endif;?>

    
   <?php $live_catquery = new WP_Query( array( 'category_name' => 'live' ) ); ?> 
    <?php  if ( $live_catquery->have_posts() ): ?> 
    <!--START .uk-grid-->
    <div class="uk-flex uk-flex-column uk-child-width-1-1 uk-child-width-1-5@m "
                    uk-scrollspy="cls: uk-animation-slide-bottom; ">
                        
                    <!-- check if we have posts  -->
                        <?php while($live_catquery->have_posts()) : $live_catquery->the_post(); ?>
                  <!-- START .content__type-img  -->
                   <div class="content__type-img   uk-card-default uk-text-center">
                          <?php the_post_thumbnail(); ?>
                      </div>
                  <!-- END .content__type-img  -->
                        
                      <!-- START .content__type-information -->
                      <div class="content__type-information">
                          <p><?php the_content(); ?></p>
                         </div>
                         <!--END .content__type-information -->
                 <?php  
 //END wordpress loop
             endwhile;?>
                        </div>
                   
                    
    <!--END .uk-grid-->
    <?php
             //END if condition
             endif; 
              
            ?>

            </section>
<!-- END .section__type-about -->
