<?php if (have_posts()) : ?>
<div id="content">
    <?php while (have_posts()) :
            the_post(); ?>
    <article <?php post_class();
                        ?>>
        <header>



            <?php
                    if (is_singular()) : ?>
            <h1> <?php
                                the_title(); ?> </h1>
            <?php
                        the_post_thumbnail('products'); ?>
            <?php else : ?>
            <h1><a href=" <?php the_permalink(); ?> ">
                    <?php

                                the_title(); ?> </a></h1>
            <?php
                        the_post_thumbnail('products'); ?>
            <?php endif; ?>
            <p class="post-data"> Publié le
                <?php the_time('d/m/Y'); ?> par
                <?php the_author(); ?> dans la catégorie
                <?php the_category(', '); ?>
            </p>
        </header>
        <?php if (is_singular()) : ?>
        <?php the_content(); ?>
        <?php
                    comments_template(); ?>
        <?php else : ?>
        <?php the_excerpt();
                    ?>
        <?php endif; ?>
    </article>
    <?php endwhile; ?>
    <?php if (paginate_links()) : ?>
    <div id="pagination"><?php echo paginate_links(); ?> </div>
    <?php endif; ?>
</div>
<?php else : ?>
<p> Il n'y a pas d'articles </p>
<?php endif; ?>
</div>