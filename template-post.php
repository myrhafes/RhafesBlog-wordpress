<?php get_header(); ?>
<?php
/**
 * Template Name: Post Page
 * Template Post Type: page, post
 */
?>
<div class="right-content">
    <?php if(have_posts()): while(have_posts()): the_post();?>
        <h1><?php the_title();?></h1>
        <p>
            <img src="<?php the_post_thumbnail_url();?>" alt="" style="width:100%; height:auto;">
        </p>
        <?php the_content();?>
    <?php get_footer();?>
    <?php endwhile;
    endif; ?>
</div>

<?php get_footer();?>