<section id="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                                <?php if (has_post_thumbnail()): ?>
                    <?php $thumbnail_attributes = array(
                        'class' => 'img-fluid main extra-class', // Add your extra class here
                        'style' => 'height: 100%;', // Set the height to 100%
                        'alt' => get_the_title()
                    ); ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', $thumbnail_attributes); ?>
                </a>
                                <?php endif; ?>

            </div>
            <div class="col-lg-6 col-12">
            <span class="category text-muted d-block pt-lg-0 pt-4">
                <?php
                $categories = get_the_category();
                $category_names = array();
                foreach ($categories as $category) {
                    $category_names[] = esc_html($category->name);
                }
                echo implode(', ', $category_names);
                ?>
            </span>


            <a href="<?php the_permalink(); ?>" style="text-decoration: none" >
                <h1><?php the_title(); ?></h1>
            </a>              
            <hr class="mt-5 border-black border-2 opacity-100" />
                <div class="row">
                    <?php
                    $related_posts = new WP_Query(array(
                        'posts_per_page' => 4,
                        'post__not_in' => array(get_the_ID()),
                        'category__in' => wp_get_post_categories(get_the_ID()),
                    ));
                    if ($related_posts->have_posts()):
                        while ($related_posts->have_posts()):
                            $related_posts->the_post();
                    ?>
                            <div class="col-6 mt-4">
                                <a href="<?php the_permalink(); ?>" class="d-lg-flex d-block text-decoration-none">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('', array('class' => 'img-fluid', 'style' => 'width: 140px !important; height: 135px !important;', 'alt' => get_the_title())); ?>
                                    <?php endif; ?>
                                    <div class="ps-lg-3">
                                        <span class="category text-muted d-block pt-lg-0 pt-4">
                                                <?php
                                                $categories = get_the_category();
                                                $category_names = array();
                                                foreach ($categories as $category) {
                                                    $category_names[] = esc_html($category->name);
                                                }
                                                echo implode(', ', $category_names);
                                                ?>
                                            </span>


                                        <h5 class="pt-2 text-black"><?php the_title(); ?></h5>
                                    </div>
                                </a>
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