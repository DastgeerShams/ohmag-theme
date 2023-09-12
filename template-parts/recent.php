<?php

/*
Recenet Post will display here
*/


?>
   <section id="recently">
    <div class="container mt-5">
        <div class="row ">
            <div class="col-12">
                <div class="heading d-flex">
                    <?php
                    // Get the Section Name from Customizer
                    $recently_section_name = get_theme_mod('recently_section_name', 'Recently');
                    ?>
                    <h3 class="me-2"><?php echo esc_html($recently_section_name); ?></h3>
                    <hr class="border-divider flex-grow-1 border-2 opacity-100 mt-4" style="color: #7BA0A5;" />
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            // Custom WP Query to fetch recently posts based on selected category
            $recently_selected_category = get_theme_mod('recently_selected_category', ''); // Get selected category from Customizer
            $recently_posts_query_args = array(
                'posts_per_page' => 9, // You can adjust the number of posts to display
            );

            if (!empty($recently_selected_category)) {
                $recently_posts_query_args['category__in'] = array($recently_selected_category);
            }

            $recently_posts_query = new WP_Query($recently_posts_query_args);

            if ($recently_posts_query->have_posts()) :
                while ($recently_posts_query->have_posts()) : $recently_posts_query->the_post();
                    $categories = get_the_category();
            ?>
                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <a href="<?php the_permalink(); ?>" class="d-flex text-decoration-none">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>" class="img-fluid" style="width: 150px !important; height: 145px !important;" />
                            <?php endif; ?>
                            <div class="ps-3">
                                <div class="category text-muted">
                                    <?php
                                    $formatted_categories = array_map(function ($category) {
                                        return esc_html(ucwords($category->name));
                                    }, $categories);
                                    echo implode(', ', $formatted_categories);
                                    ?>
                                </div>
                                <h4 class="pt-3 text-black"><?php the_title(); ?></h4>
                            </div>
                        </a>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            else :
            ?>
                <div class="col-12 mt-5">
                    <p>No posts found in the selected category.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
