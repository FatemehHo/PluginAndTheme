<?php get_header(); ?>

    <section>
        <div class="container-fluid">
            <div class="row">
                <img class="col-lg-8 col-sm-12 img-responsive"
                     src="<?php echo get_template_directory_uri(); ?>/images/sandwich.png">
                <div class="col-lg-4 col-sm-12">
                    <p class="text-muted"><?php echo current_time('F j, Y'); ?></p>
                    <h1><u>Meet your new favorite lunch</u></h1>
                    <p>Lunch, the abraviation for luncheon, is a meal typicalyeaten at midday. During the 20th century,
                        the meaning gradualy narrowed to a small or mid-sized meal eaten at midday.</p>
                    <a href="#" class="read-more">
                        <u>read more</u>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#CC4B00">
                            <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    </main>

<?php get_footer(); ?>