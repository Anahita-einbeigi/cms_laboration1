<aside class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <label>Sök efter:</label>
            <li id="search-2" class="widget widget_search">
                <?php get_search_form(); ?>
            </li>
        </ul>

        <ul role="navigation">
            <li class="widget">
                <h2>Sidor</h2>
                <?php
                wp_nav_menu([
                    'theme_location' => 'sidebar', 
                    'container' => false,
                    'menu_class' => 'sidebar-menu',
                ]);
                ?>
            </li>

            <li class="widget">
                <h2>Arkiv</h2>
                <ul>
                    <?php
                    wp_get_archives(array(
                        'type' => 'monthly',
                        'show_post_count' => false,
                    ));
                    ?>
                </ul>
            </li>

            <li id="categories-2" class="widget widget_categories">
                <h2 class="widgettitle">Kategorier</h2>
                <ul>
                    <?php
                    wp_list_categories(array(
                        'title_li' => '', 
                        'show_count' => true, 
                    ));
                    ?>
                </ul>
            </li>
        </ul>
    </div>
</aside>
