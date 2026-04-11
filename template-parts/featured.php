<section class="featured-section py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6 text-center">Featured Rescue Graduate</h2>
        <div class="max-w-4xl mx-auto">
            <?php
            // Query for latest post in 'rescue-graduates' category or latest post
            $featured_query = new WP_Query(array(
                'posts_per_page' => 1,
                'post_status' => 'publish',
                'category_name' => 'rescue-graduates' // Assuming category exists
            ));

            if ($featured_query->have_posts()) {
                while ($featured_query->have_posts()) {
                    $featured_query->the_post();
                    ?>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="w-full h-64 object-cover">
                        <?php endif; ?>
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold mb-2"><?php the_title(); ?></h3>
                            <p class="text-gray-600 mb-4"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                            <a href="<?php the_permalink(); ?>" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">View Rescue Graduate</a>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } else {
                // Fallback if no posts
                ?>
                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <h3 class="text-2xl font-semibold mb-2">Cotton and Swab</h3>
                    <p class="text-gray-600 mb-4">Our latest rescue graduates! These adorable animals have found their forever homes thanks to your support.</p>
                    <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">View Rescue Graduate</a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>