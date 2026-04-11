<article class="post p-4 bg-white rounded shadow">

    <h1 class="post-title text-3xl font-bold mb-2"><?php the_title(); ?></h1>

    <div class="post-meta text-sm text-gray-600 mb-4">
        <span>By <?php the_author(); ?> on <?php the_date(); ?> in <?php the_category(', '); ?></span>
    </div>

    <div class="post-content prose max-w-none">
        <?php the_content(); ?>
    </div>

</article>