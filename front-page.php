<!-- GET header -->
<?php get_header(); ?>



<section class="section__type-hero" id="home" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/Blog.svg' ); height: 80vh; width: 100%;">
       
            <!-- START .uk-container -->
            <div class='uk-container'>
                <!-- START .hero__type-content  -->
                <div
                    class="hero__type-content uk-flex-middle uk-overlay-panel  uk-container uk-position-relative uk-overlay-background uk-width-1-1@m uk-flex-middle uk-text-center uk-margin-auto uk-margin-auto-bottm">
                    <h1 class="uk-visible@m"><?php the_title( );?>
                    <h4><?php// the_content();?>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie nisl in sapien vestibulum ornare. Ut at neque semper, dapibus sem sed, mattis orci. Vivamus porttitor lacus vel fringilla interdum.                </h4>
                    </h1>
                    <a href="" class="hero__content-button">Go to our Blog!!</a>
                   

                </div>
                <!--END .hero__type-content-->
        </div>
        <!-- END .uk-container -->

    </section>
    <!--END .section__type-hero-->

<!-- GET footer -->
<?php get_footer(); ?>