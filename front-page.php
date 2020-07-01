<!-- GET header -->
<?php get_header(); ?>

<!--START .section__type-hero-->
    <section class="section__type-hero uk-container uk-margin-large" >
       <!-- START .hero__background  -->
    <div class="uk-flex-middle" uk-grid>
      <!-- START .hero__type-img -->
    <div class="uk-width-1-3@m">
       
        <img src="<?php echo get_template_directory_uri(); ?>/images/working.png" width="100%" height="" alt="" />
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
<section class='section__type-about uk-container uk-margin-large '>
 <hr class="uk-grid-divider">

            <div class="uk-grid " data-uk-grid-margin->

                <div class="uk-width-1-2@m">
                    <img width="660" height="400" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNjYwcHgiIGhlaWdodD0iNDAwcHgiIHZpZXdCb3g9IjAgMCA2NjAgNDAwIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA2NjAgNDAwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IGZpbGw9IiNGNUY1RjUiIHdpZHRoPSI2NjAiIGhlaWdodD0iNDAwIi8+DQo8ZyBvcGFjaXR5PSIwLjciPg0KCTxwYXRoIGZpbGw9IiNEOEQ4RDgiIGQ9Ik0yNTguMTg0LDE0My41djExM2gxNDMuNjMydi0xMTNIMjU4LjE4NHogTTM5MC4yNDQsMjQ0LjI0N0gyNzAuNDM3di04OC40OTRoMTE5LjgwOEwzOTAuMjQ0LDI0NC4yNDcNCgkJTDM5MC4yNDQsMjQ0LjI0N3oiLz4NCgk8cG9seWdvbiBmaWxsPSIjRDhEOEQ4IiBwb2ludHM9IjI3Ni44ODEsMjM0LjcxNyAzMDEuNTcyLDIwOC43NjQgMzEwLjgyNCwyMTIuNzY4IDM0MC4wMTYsMTgxLjY4OCAzNTEuNTA1LDE5NS40MzQgDQoJCTM1Ni42ODksMTkyLjMwMyAzODQuNzQ2LDIzNC43MTcgCSIvPg0KCTxjaXJjbGUgZmlsbD0iI0Q4RDhEOCIgY3g9IjMwNS40MDUiIGN5PSIxNzguMjU3IiByPSIxMC43ODciLz4NCjwvZz4NCjwvc3ZnPg0K" alt="">
                </div>

                <div class="uk-width-1-2@m">
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
                    <a class="uk-button uk-button-primary " href="#">view all the blog posts</a>
                  </div>
                  </div>

            </div>
  <hr class="uk-grid-divider">
</section>
<!-- END .section__type-about -->


<!-- GET footer -->
<?php get_footer(); ?>