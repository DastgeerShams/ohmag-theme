<section id="latest-news">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <?php
                // Get the section name from the Customizer
                $latest_news_section_name = get_theme_mod('latest_news_section_name', 'Latest News');
                ?>
                <div class="heading d-flex">
                    <h3 class="me-2"><?php echo esc_html($latest_news_section_name); ?></h3>
                    <hr class="border-divider flex-grow-1 border-2 opacity-100 mt-4" style="
    color: #7BA0A5;"/>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <?php
            // Get the selected category from the Customizer
            $latest_news_selected_category = get_theme_mod('latest_news_selected_category', '');

            // Query to get posts from the selected category
            $latest_news_query = new WP_Query(array(
                'posts_per_page' => 1,
                'cat' => $latest_news_selected_category,
            ));

            if ($latest_news_query->have_posts()) :
                while ($latest_news_query->have_posts()) :
                    $latest_news_query->the_post();
            ?>
                    <div class="col-lg-6 col-12">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid" />
                            </a>
                        <?php endif; ?>
                        <div class="mt-4">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                foreach ($categories as $category) {
                                    $category_link = get_category_link($category->term_id);
                                    $category_name = ucwords($category->name); // Capitalize category name
                            ?>
                                    <a href="<?php echo esc_url($category_link); ?>" class="category text-muted text-decoration-none"><?php echo esc_html($category_name); ?></a>
                            <?php
                                }
                            }
                            ?>
                            <h4 class="mt-4"><a href="<?php the_permalink(); ?>" class="text-decoration-none text-black"><?php the_title(); ?></a></h4>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

            <div class="col-lg-6 col-12 mt-lg-0 mt-5">
                <div class="row">
                     <?php
            // Get the selected category from the Customizer
            $latest_news_selected_category = get_theme_mod('latest_news_selected_category', '');

            // Query to get posts from the selected category
            $latest_news_query = new WP_Query(array(
                'posts_per_page' => 3,
                'cat' => $latest_news_selected_category,
            ));

            if ($latest_news_query->have_posts()) :
                while ($latest_news_query->have_posts()) :
                    $latest_news_query->the_post();
            ?>
                            <div class="col-12 mt-2">
                                <div class="d-md-flex d-block">
                                    <div>
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) {
                                            foreach ($categories as $category) {
                                                $category_link = get_category_link($category->term_id);
                                                $category_name = ucwords($category->name); // Capitalize category name
                                        ?>
                                                <a href="<?php echo esc_url($category_link); ?>" class="category text-muted text-decoration-none"><?php echo esc_html($category_name); ?></a>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <h5 class="mt-4"><a href="<?php the_permalink(); ?>" class="text-decoration-none text-black"><?php the_title(); ?></a></h5>
                                    </div>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="width: 160px !important; height: 110px !important;" />
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <hr />
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
