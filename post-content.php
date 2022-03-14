<?php 
/**
 * Template Name: Blog Posts
 *
 */
// get blog posts

?>

<?php if(have_posts()):?>
    <?php while(have_posts()): the_post();?>
    <?php
        // Load template post-content in front-page
        get_template_part('card','post');
    ?>
    <?php endwhile;?>
    <!-- START NEXT BUTTUON -->
    <?php global $wp_query;
        if ($wp_query->max_num_pages > 1) : ?>
            <div class="btnNext">
                <button  id="load-more">More Article <i class="fa-solid fa-circle-chevron-down"></i></button>
            </div>
        <?php endif; ?>
    <!-- END NEXT BUTTON -->
<?php else:?>
<?php echo wordwrap('Sorry, No posts were found');?>
<?php endif;?>

