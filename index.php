<!-- GET header -->
<?php get_header();?>
<!--START .section__type-hero-->
    <section class="section__type-hero uk-container" >
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
<!-- START .section__type-posts -->
<section class='section__type-posts uk-margin-large'>
<?php
while (have_posts(  ))
{
the_post(  );?>
<article class="uk-article uk-container ">
    <h1 class="uk-article-title"><a href="<?php the_permalink(  );?>"><?php the_title();?></a> </h1>
     <p class="uk-article-meta">Written by <?php echo  get_the_author_posts_link(  );?> on <?php the_time('n.j.y');?> IN <?php echo get_the_category()
        ?></p>
     <p class="uk-article-lead"><?php the_excerpt(  );?></p>
       
           <button class="uk-button uk-button-link uk-button-small">
          <a href="<?php get_permalink( );?>"> continue reading &raquo;</a></button>
          <hr class="uk-article-divider">
     </article>
<?php
}
echo paginate_links( );
?>
</section>
<!-- END .section__type-posts -->
<!--Get Footer -->
<?php get_footer(  );?>