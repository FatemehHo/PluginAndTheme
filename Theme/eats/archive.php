<?php get_header(); ?>

<!-- Check if there are any posts to display -->
<?php if (have_posts()) : ?>

    <!-- The loop -->
    <?php while (have_posts()) : the_post(); ?>

        <section>
            <div class="container-fluid">
                <div class="row">

                    <?php get_template_part('template-parts/content/content', 'archive'); ?>

                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php else: ?>

    <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</main>

<?php get_footer(); ?>
