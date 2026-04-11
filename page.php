<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-green-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-4"><?php the_title(); ?></h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <article class="bg-white p-8 rounded-lg shadow-md">
                <div class="prose max-w-none">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>