<?php get_header(); ?>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-4xl">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('template-parts/content-single', get_post_format()); ?>

        <?php endwhile; ?>

        <!-- Post Navigation -->
        <div class="mt-12 flex justify-between">
            <?php previous_post_link('%link', '← Previous Post'); ?>
            <?php next_post_link('%link', 'Next Post →'); ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>