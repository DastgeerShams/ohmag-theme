<?php
/*
latest news
*/
?>
<section id="industry">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="heading d-flex">
                    <?php
                    // Get the Section Name from Customizer
                    $industry_section_name = get_theme_mod('industry_section_name', 'Industry');
                    ?>
                    <h3 class="me-2"><?php echo esc_html($industry_section_name); ?></h3>
                    <hr class="border-divider flex-grow-1 border-2 opacity-100 mt-4" style="
    color: #7BA0A5;" />
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            // Get the selected category ID from Customizer
            $industry_selected_category = get_theme_mod('industry_selected_category', '');

            // Custom WP Query to fetch industry-related posts based on the selected category
            $industry_posts_query = new WP_Query(array(
                'posts_per_page' => 2, // Limit to 2 posts
                'category__in' => array($industry_selected_category), // Filter by selected category
                // You can add additional query parameters here to refine your selection.
            ));

            if ($industry_posts_query->have_posts()) :
                while ($industry_posts_query->have_posts()) : $industry_posts_query->the_post();
                    $categories = get_the_category();
            ?>
                    <div class="col-md-6">
                        <div class="horizontal-item">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'alt' => get_the_title())); ?>
                            <?php endif; ?>
                            <div class="mt-4">
                                <?php
                                // Capitalize and format category names
                                $category_names = array_map(function ($category) {
                                    return strtoupper($category->name);
                                }, $categories);
                                $category_list = implode(', ', $category_names);
                                ?>
                                <span class="category text-muted"><?php echo $category_list; ?></span>
                                <h3 class="title mt-3"><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>
