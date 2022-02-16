
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
            <p>ceci est un emplacement d'un article</p>
            <?php endwhile; else: ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>