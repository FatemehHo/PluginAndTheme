<?php get_header(); ?>

<section>
    <div class="container-fluid">
        <div class="row">

            <?php
            if (have_posts()) {

                // Load posts loop
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content/content');
                }

            }
            ?>

        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
