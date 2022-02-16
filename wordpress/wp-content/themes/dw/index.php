
<?php get_header(); ?>

<main class="layout">
    <section class="layout__intro">
        <h2 class="layout__title">Introduction</h2>
        <p class="layout__txt">Bienvenue sur mon super site.</p>
    </section>

    <section class="layout__latest">
        <h2 class="latest__title">nos dernieres nouvelles</h2>
        <div class="latest__container">
            <!--liste de derniere article -->
            <!--un message qui dit qu'il y'a pas de d'article -->
            <?php if(have_posts()): while (have_posts()) : the_post(); ?>
                <article class="post">
                    <a href="<?= get_the_permalink();?>" class="post__link">titre de l'article"  <?= get_the_title(); ?>"</a>
                    <div class="post__card">
                        <header class="post__head">
                            <h3 class="post_title"><?= get_the_title();?> <time class="post__date" datetime="#"> <?= get_the_date('c'); ?>" <?= get_the_date('c'); ?>" </time> </h3>
                            <p class="post-meta">publié par le <?= get_the_author(); ?></p>
                        </header>
                        <figure class="post__fig">
                            <?= get_the_post_thumbnail(null, 'thumbnail', ['class'=> 'post__thumb', 'id' => 'test']) ?>
                        </figure>
                        <div class="post_excerpt" >
                            <?= get_the_excerpt(); ?>
                        </div>
                    </div>
                </article>
            <?php endwhile; else: ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>