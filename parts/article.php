<article id="article-<?php the_ID() ?>" class="<?php echo implode(get_post_class(),' ') ?>">

    <h1><?php the_title() ?></h1>

    <?php the_post_thumbnail() ?>

    <div>
        <?php the_content() ?>
    </div>

</article>