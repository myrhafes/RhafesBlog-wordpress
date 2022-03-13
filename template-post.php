<?php get_header(); ?>
<?php
/**
 * Template Name: Post Page
 * Template Post Type: page, post
 */
?>
<div class="right-content">
    <div class="post-content">
        <?php if(have_posts()): while(have_posts()): the_post();?>
            <h1 class="title"><?php the_title();?></h1>
            <p class="image">
                <img src="<?php the_post_thumbnail_url();?>" alt="">
            </p>
            <?php the_content();?>
        <?php get_footer();?>
        <?php endwhile;
        endif; ?>
    </div>
</div>

<?php get_footer();?>