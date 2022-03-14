<?php get_header();?>

<!-- START RIGHT SECTION -->
<div class="right-content">
    <!-- START EMAILS SECTION -->
    <div class="email-list">
        <p>Welcome to my blog. Subscribe and get my latest blog post in your inbox.</p>
        <div class="email-input">
            <input type="email" class="email" placeholder="Enter email">
            <input type="submit" class="submit" value="Submit">
        </div>
    </div>
    <!-- END EMAILS SECTION -->
    <!-- START BLOG SECTION -->
    <div class="blog">
        <?php
        // Load template post-content in front-page
        get_template_part('post','content');
        ?>
    </div>
    <!-- END BLOG SECTION -->
</div>
</div>


<?php get_footer();?>