
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
            ?>

    </section>
    <!--END .section__type-hero-->
    

