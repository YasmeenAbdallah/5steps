<!-- GET header -->
<?php get_header();?>
<?php
while (have_posts(  ))
{
the_post(  );
$the_parent=wp_get_post_parent_id(get_the_ID());
?>
   <article class="uk-article uk-container uk-margin-large">
    <h1 class="uk-article-title"><?php the_title();?></h1>
    <a href="<?php site_url( '/blog')?>"> back to our blog home </a>
    <p class="uk-article-meta">Written by <?php echo  get_the_author_posts_link(  );?> oN <?php the_time('n.j.y');?> IN <?php  foreach((get_the_category()) as $category){
       ?>
       <a href="<?php esc_url( get_category_link( $category->term_id ) ) ?>"> <?php echo $category->name;?></a>
      <?php 
        }
    ?>
    
</p>
    <p class="uk-article-lead"><?php the_content(  );?></p>
    
</article>
<?php
}
?>
<!--Get footer -->
<?php get_footer(  );?>
