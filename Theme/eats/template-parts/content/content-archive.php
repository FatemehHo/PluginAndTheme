<img class="col-lg-8 col-sm-12 img-responsive"
     src="<?php echo get_template_directory_uri(); ?>/images/sandwich.png">
<div class="col-lg-4 col-sm-12">
    <p class="text-muted"><?php echo get_the_date('F j, Y'); ?> by <?php the_author_posts_link() ?></p>
    <h2><a href="<?php the_permalink() ?>"><u><?php the_title(); ?></u></a></h2>
    <?php the_content(); ?>
    <a href="#" class="read-more">
        <u>read more</u>
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#CC4B00">
            <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
        </svg>
    </a>
</div>