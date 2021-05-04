<?php get_header(); ?>
<section id="container">
    <section id="loop">
        <?php if (is_category()) : ?>
        <h1 class="title"><?php the_category(', '); ?></h1>
        <?php endif; ?>
        <?php get_template_part('loop'); ?>
    </section>
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>