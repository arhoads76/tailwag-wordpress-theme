<?php get_header(); ?>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-center mb-12"><?php echo is_home() ? 'Latest Posts' : get_the_archive_title(); ?></h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part('template-parts/content-post', get_post_format());
                endwhile;
            else :
                echo '<p class="text-center text-gray-600">No posts found.</p>';
            endif;
            ?>
        </div>

        <!-- Pagination -->
        <div class="mt-12 text-center">
            <?php the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => 'Previous',
                'next_text' => 'Next',
            )); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
