<?php get_header(); ?>

<main class="hero">
    <div class="container">
        <h1><?php the_archive_title(); ?></h1>
        <p><?php the_archive_description(); ?></p>

        <?php if (have_posts()) : ?>
            <div class="post-list">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-item">
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        
                        <ul class="post-meta">
                            <li><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></li>
                            <li><i class="fa fa-user"></i> <?php echo get_the_author_posts_link(); ?></li>
                            <li><i class="fa fa-tag"></i> <?php echo get_the_category_list(', '); ?></li>
                        </ul>
                        
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php get_the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p>Inga inlägg hittades i detta arkiv.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
