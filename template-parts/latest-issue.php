<section id="editor-picks">
    <div class="container mt-5 pb-5">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="bg-light-gray">
                     <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            </div>
            </div>
            <div class="col-md-8 mt-md-0 mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="heading d-flex">
                            <h3 class="me-2">
                            <?php
                        // Get the Latest Issue Section Name from Customizer
                        $latest_issue_section_name = get_theme_mod('latest_issue_section_name', 'Latest Issue');
                        echo esc_html($latest_issue_section_name);
                        ?>
                    </h3>
                            <hr class="border-divider flex-grow-1 border-2 opacity-100 mt-4" style="
    color: #7BA0A5;"/>
                        </div>
                    </div>
                    <?php
            // Get the selected category from the Customizer
            $latest_issue_selected_category = get_theme_mod('latest_issue_selected_category', '');

            // Query to get posts from the selected category
            $latest_issue_query = new WP_Query(array(
                'posts_per_page' => 1,
                'cat' => $latest_issue_selected_category,
            ));

            if ($latest_issue_query->have_posts()) :
                while ($latest_issue_query->have_posts()) :
                    $latest_issue_query->the_post();
            ?>
                            <div class="col-12">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'alt' => get_the_title())); ?>
                                    </a>
                                <?php endif; ?>
                                <div class="mt-4">
                                    <?php
                                    $categories = get_the_category();
                                    if ($categories) {
                                        $category_links = array_map(function ($category) {
                                            return '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="category text-muted text-decoration-none">' . esc_html(strtoupper($category->name)) . '</a>';
                                        }, $categories);
                                        $category_list = implode(', ', $category_links);
                                    } else {
                                        $category_list = esc_html__('Uncategorized', 'ohmag');
                                    }
                                    echo $category_list;
                                    ?>
                                    <h4 class="title mt-4"><a href="<?php the_permalink(); ?>" class="text-decoration-none text-black"><?php the_title(); ?></a></h4>
                                </div>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No latest issue posts found.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
