<!-- GET header -->
<?php get_header();?>
<!--START .section__type-hero-->
    <section >
    
     <!-- START .hero__background  -->
  <div class="section__type-hero uk-flex-middle uk-flex-center" uk-grid>
    <!-- START .hero__type-content -->
        <div class="hero__type-content">
          <h1>Welcome to our Blog!</h1>
          <a href="" class="hero__content-button">Get a free Quote</a>
        </div>
    <!-- END .hero__type-content -->
    <!-- START .hero__type-img -->
        <div class=" uk-margin-left">
       <img src="<?php echo get_template_directory_uri(); ?>/images/working.png" width="100%" height="" alt="" />  
             </div>
           <!-- END .hero__type-img -->                 
           </div>
</section>
<?php
while (have_posts(  ))
{
the_post(  );?>
<article class="uk-article uk-container ">
    <h1 class="uk-article-title"><a href="<?php the_permalink(  );?>"></a> <?php the_title();?></h1>
     <p class="uk-article-meta">Written by <?php echo  get_the_author_posts_link(  );?> on <?php the_time('n.j.y');?> IN <?php foreach((get_the_category()) as $category){
        echo $category->name."<br>";
        echo category_description($category);
        }?></p>
     <p class="uk-article-lead"><?php the_excerpt(  );?></p>
       
           <button class="uk-button uk-button-link uk-button-small">
          <a href="<?php get_permalink( );?>"> continue reading &raquo;</a></button>
          <hr class="uk-article-divider">
     </article>
<?php
}
echo paginate_links( );
?>
</div>
<!--Get Footer -->
<?php get_footer(  );?>