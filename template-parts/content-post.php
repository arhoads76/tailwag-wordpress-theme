<article class="post mb-4 p-4 bg-white rounded shadow">

    <h2 class="post-title text-2xl font-bold mb-2">
        <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:text-blue-800"><?php the_title(); ?></a>
    </h2>

    <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="w-full h-64 object-cover">
    <?php endif; ?>

    <div class="post-meta text-sm text-gray-600 mb-2">
        <span>By <?php the_author(); ?> on <?php the_date(); ?></span>
    </div>

    <div class="post-content">
        <?php the_excerpt(); ?>
    </div>

</article>
