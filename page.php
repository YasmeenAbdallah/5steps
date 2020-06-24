<!-- GET header -->
<?php get_header();?>

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
<?php
while (have_posts(  ))
{
the_post(  );

$the_parent=wp_get_post_parent_id(get_the_ID() );
if($the_parent){?>
   <article class="uk-article">
    <h1 class="uk-article-title"><?php the_title();?></h1>
    <a href="<?php get_permalink($the_parent )?>"> back to <?php echo get_the_title( $the_parent );?> </a>
    <p class="uk-article-meta">Written by Super User on 12 April 2012. Posted in Blog</p>
    <p class="uk-article-lead"><?php the_content(  );?></p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    <hr class="uk-article-divider">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

</article>
<div >
<ul>
<?php if ($the_parent){
    $findTheChild=$the_parent;
}
else{
    $findTheChild=get_the_ID();
}
 wp_list_pages( array(
    'title_li'=> NULL,
    'child_of'=>$findTheChild
 ) );
} 
?>
</ul>
</div>
<?php
}
?>