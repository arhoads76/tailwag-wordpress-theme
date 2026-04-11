<article class="post mb-4 p-4 bg-white rounded shadow">

    <h2 class="post-title text-2xl font-bold mb-2">
        <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:text-blue-800"><?php the_title(); ?></a>
    </h2>

    <div class="post-meta text-sm text-gray-600 mb-2">
        <span>By <?php the_author(); ?> on <?php the_date(); ?></span>
    </div>

    <div class="post-content">
        <?php the_excerpt(); ?>
    </div>

</article>