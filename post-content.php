<?php 
/**
 * Template Name: Blog Posts
 * 
 */
// get blog posts

?>

<?php if(have_posts()):?>
<?php while(have_posts()): the_post();?>
    <!-- START CARD -->
    <div class="card">
        <!-- <img src="<?php bloginfo('template_directory');?>/Assets/images/blog-img.jfif" alt="Blog"> -->
        <?php
        if(has_post_thumbnail()):?>
            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Blog">
        <?php endif; ?>
        <div class="text">
            <h2><?php the_title();?></h2>
            <p>
                <?php echo get_the_excerpt();?>
            </p>
        </div>
    </div>
    <!-- END CARD -->
<?php endwhile;?>
<?php else:?>
<?php echo wordwrap('Sorry, No posts were found');?>
<?php endif;?>

