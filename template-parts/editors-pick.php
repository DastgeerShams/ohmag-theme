<?php
/*
editor's pick
*/
?>
<section id="editor-picks">
    <div class="container mt-5 pb-5">
        <div class="row">
            <div class="col-12">
                <div class="heading d-flex">
                    <?php
                    // Get the Section Name from Customizer
                    $editor_picks_section_name = get_theme_mod('ediotrs_pick_section_name', 'Editor\'s Picks');
                    ?>
                    <h3 class="me-2"><?php echo esc_html($editor_picks_section_name); ?></h3>
                    <hr class="border-divider flex-grow-1 border-2 opacity-100 mt-4" style="
    color: #7BA0A5;">
                </div>
            </div>
        </div>

        <?php
        // Get the selected category ID from Customizer
        $editor_picks_selected_category = get_theme_mod('ediotrs_pick_selected_category', '');

        // Custom WP Query to fetch the editor's picks posts based on the selected category
        $editor_picks_query = new WP_Query(array(
            'posts_per_page' => 1, // Limit to 1 post for the main Editor's Pick
            'category__in' => array($editor_picks_selected_category), // Filter by selected category
            // You can add additional query parameters here to refine your selection.
        ));

        if ($editor_picks_query->have_posts()) :
            while ($editor_picks_query->have_posts()) : $editor_picks_query->the_post();
        ?>
                <div class="row mt-4 justify-content-end">
                    <div class="col-7">
                        <?php
                        $categories = get_the_category();
                        $category_names = array_map(function ($category) {
                            return strtoupper($category->name);
                        }, $categories);
                        $category_list = implode(', ', $category_names);
                        ?>
                        <a href="<?php the_permalink(); ?>" class="category text-muted fs-4 text-decoration-none"><?php echo $category_list; ?></a>
                        <h2 class="title mt-3 fs-1 edih1" style="color: #5f9ea0;"><a href="<?php the_permalink(); ?>" class="text-decoration-none" style="color:#5f9ea0;"><?php the_title(); ?></a></h2>
                    </div>
                </div>

        <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>

        <div class="row mt-4 pb-5">
            <?php
            // Custom WP Query to fetch additional Editor's Pick posts (3 in this example)
            $additional_editor_picks_query = new WP_Query(array(
                'posts_per_page' => 3, // Adjust the number of posts you want to display
                'offset' => 1, // Skip the first post displayed above
                'category__in' => array($editor_picks_selected_category), // Filter by selected category
                // You can add additional query parameters here to refine your selection.
            ));

            if ($additional_editor_picks_query->have_posts()) :
                while ($additional_editor_picks_query->have_posts()) : $additional_editor_picks_query->the_post();
            ?>
                    <div class="col-md-4 col-12">
                        <?php
                        $categories = get_the_category();
                        $category_names = array_map(function ($category) {
                            return strtoupper($category->name);
                        }, $categories);
                        $category_list = implode(', ', $category_names);
                        ?>
                        <a href="<?php the_permalink(); ?>" class="category text-muted text-decoration-none"><?php echo $category_list; ?></a>
                        <h3 class="mt-3 fs-2"><a href="<?php the_permalink(); ?>" class="text-decoration-none text-black"><?php the_title(); ?></a></h3>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

    </div>
</section>
