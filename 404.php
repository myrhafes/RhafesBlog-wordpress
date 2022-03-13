<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 */

get_header(); ?>

    <div class="right-content">
        <div class="content404">
            <h2>Page Not Found</h2>
            <div class="image404">
                <img src="<?php bloginfo('template_directory');?>/Assets/images/404.png" alt="">
            </div>
            <a href="<?php echo get_home_url(); ?>">Back To Home Page!</a>
        </div>
    </div>
</div>
