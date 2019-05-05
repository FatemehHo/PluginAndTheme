<img class="col-lg-8 col-sm-12 img-responsive"
     src="<?php echo get_template_directory_uri(); ?>/images/sandwich.png">
<div class="col-lg-4 col-sm-12">
    <p class="text-muted"><?php echo get_the_date('F j, Y'); ?></p>
    <h1><u><?php the_title(); ?></u></h1>
    <?php the_content(); ?>
</div>