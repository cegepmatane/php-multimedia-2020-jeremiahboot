<?php get_header(); ?>
<section id="container">
    <section id="loop">
        <h1 class="title"> Recherche pour "
            <?php the_search_query(); ?> "
        </h1>
        <?php get_template_part('loop'); ?>
    </section>
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>