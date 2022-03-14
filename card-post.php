<!-- START CARD -->
<div class="card">
    <?php
    if(has_post_thumbnail()):?>
        <a href="<?php echo the_permalink() ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Blog">
        </a>
    <?php endif; ?>
    <div class="text">
        <h2><?php the_title();?></h2>
        <p>
            <?php echo get_the_excerpt();?>
        </p>
        <a href="<?php echo the_permalink() ?>">read more <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>
<!-- END CARD -->