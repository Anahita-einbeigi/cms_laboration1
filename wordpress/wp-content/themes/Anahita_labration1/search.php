<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
    <?php wp_body_open(); ?>
</head>

<body>
    <div id="wrap">
        <?php get_header(); ?>

        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div id="primary" class="col-xs-12 col-md-9">

                            <?php
                            $search_term = strtolower(get_search_query());
                            $found = false;

                            if ($search_term === 'blogg') : 
                                ?>
                                <h1>Blogg</h1>
                                <?php
                                if (have_posts()) :
                                    while (have_posts()) : the_post(); ?>
                                        <article>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php echo the_post_thumbnail_url('785x523'); ?>" />
                                            <?php endif; ?>

                                            <h2 class="title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>

                                            <ul class="meta">
                                                <li>
                                                    <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                                                </li>
                                                <li>
                                                    <i class="fa fa-user"></i> <?php echo get_the_author_posts_link(); ?>
                                                </li>
                                                <li>
                                                    <i class="fa fa-tag"></i> <?php echo get_the_category_list(', '); ?>
                                                </li>
                                            </ul>

                                            <p><?php the_excerpt(); ?></p>
                                        </article>
                                    <?php endwhile;
                                    rewind_posts();
                                else : ?>
                                    <p>Inga blogginlägg hittades.</p>
                                <?php endif;

                            else :
                                if (have_posts()) :
                                    while (have_posts()) : the_post();
                                        if (stristr(get_the_title(), $search_term)) {
                                            $found = true;
                                            ?>
                                            <h2 class="title">
                                                <a href="<?php the_permalink(); ?>"></a>
                                            </h2>
                                            <p><?php the_content(); ?></p>
                                            <?php
                                            break;
                                        }
                                    endwhile;
                                    rewind_posts();
                                endif;

                                if (!$found) :
                                    if (have_posts()) :
                                        while (have_posts()) : the_post(); ?>
                                            <article>
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <img src="<?php echo the_post_thumbnail_url(); ?>" />
                                                <?php endif; ?>

                                                <h2 class="title">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h2>

                                                <ul class="meta">
                                                    <li>
                                                        <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-user"></i> <?php echo get_the_author_posts_link(); ?>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-tag"></i> <?php echo get_the_category_list(', '); ?>
                                                    </li>
                                                </ul>

                                                <p><?php the_excerpt(); ?></p>
                                            </article>
                                        <?php endwhile;
                                    else : ?>
                                        <p>Inget innehåll hittades på denna sida.</p>
                                    <?php endif;
                                endif;
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php get_footer(); ?>
    </div>

    <?php wp_footer(); ?>

</body>

</html>
