<!-- GET header -->
<?php get_header(); ?>

<!--START .section__type-hero-->
    <section class="section__type-hero uk-container uk-margin-large" >
       <!-- START .hero__background  -->
    <div class="uk-flex-middle" uk-grid>
      <!-- START .hero__type-img -->
    <div class="uk-width-1-3@m">
       
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero1.png" width="100%" height="" alt="" />
    </div>
    <!-- END .hero__type-img -->
    <!-- START .hero__type-content -->
    <div class="uk-width-2-3@m uk-flex-first hero__type-content">
         <h1>Welcome to our Blog! we hope you have good time with us! :)</h1>
         <a href="" class="hero__content-button">Get a free Quote</a>

    </div>
    <!-- END .hero__type-content -->
</div>
</section>
<!--END .section__type-hero-->

<!-- START .section__type-about -->
<section class='section__type-about uk-margin-large '>

            <div class="uk-grid " data-uk-grid-margin >

                <div class="uk-width-1-2@m uk-padding-large"  >
 <img src="<?php echo get_template_directory_uri(); ?>/images/working.png" width="100%" height="" alt="" />                </div>

                <div class="uk-width-1-2@m uk-padding-large" style="background-color:  #CEE2E3;">
                    <h1>from our blog </h1>
                    <?php 
                    $homepage=new WP_Query(array(
                      'posts_per_page'=>2
                    ));
                    while($homepage->have_posts()){
                      $homepage->the_post();
                    
                    ?>
        
                    <p class="uk-article-meta">Written by <?php echo  get_the_author_posts_link(  );?> oN <?php the_time('M.d');?></p>
                    <h4><span uk-icon="icon:history; ratio:2 " class=" uk-icon-button  uk-margin-right"></span><a href="<?php the_permalink(  );?>"><?php the_title( );?></a></h4>
                    <p><?php echo wp_trim_words( get_the_content(),18 )?>... <a href="<?php the_permalink(  );?>">read more </a>
                  
                  </p>
                    <?php
                    } wp_reset_postdata(  );
                    ?>
                    <div class="uk-text-center">
                    <a class="uk-button uk-button-primary " href="<?php echo site_url( '/?page_id=156' );?>">view all the blog posts</a>
                  </div>
                  </div>

            </div>
  <!--<hr class="uk-grid-divider">-->
</section>
<!-- END .section__type-about -->


<!-- GET footer -->
<?php get_footer(); ?>