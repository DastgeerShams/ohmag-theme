<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <!-- Sidebar-1 -->
            <div class="ad bg-light-gray mb-5">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
            <div class="ad bg-light-gray mb-5">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
        </div>
        <div class="col-md-8">
            <!-- Main Content -->
            <?php while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div class="fs-5 mt-4 text-muted">
                    <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>

                </div>
                <div class="mt-4">
                    <?php
                    // Display post author and date
                    printf(
                        '<div class="d-flex justify-content-between mt-3">' .
                        '<div class="author text-muted">' .
                        '<span class="name d-block">By %s</span>' .
                        '<span class="date d-block">%s</span>' .
                        '</div>',
                        get_the_author(),
                        get_the_date('M j, Y')
                    );

                    // Display social icons (replace '#' with actual links)
                    ?>
                    <div class="social">
                        <ul class="d-flex flex-row justify-content-md-end justify-content-center list-style-none">
                            <li class="ps-2">
                                <a href="#" class="circle"><i class="fa-brands fa-facebook-f icon fs-6"></i></a>
                            </li>
                            <li class="ps-2">
                                <a href="#" class="circle"><i class="fa-brands fa-twitter circle icon fs-6"></i></a>
                            </li>
                            <li class="ps-2">
                                <a href="#" class="circle"><i class="fa-brands fa-linkedin-in icon fs-6"></i></a>
                            </li>
                            <li class="ps-2">
                                <a href="#" class="circle"><i class="fa-brands fa-whatsapp icon fs-6"></i></a>
                            </li>
                            <li class="ps-2">
                                <a href="#" class="circle"><i class="fa-solid fa-envelope icon fs-6"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="fs-5 mt-4 text-muted">
                    <?php the_content(); ?>
                </div>
                <?php endwhile; // End the loop ?>
                
               
            </div>
                
                
            
            <!-- Related Posts -->
            <section class="related mt-5">
                    <div class="heading d-flex">
                        <h3 class="me-2">You might also like</h3>
                        <hr class="border-primary flex-grow-1 border-2 opacity-100 mt-4" />
                    </div>
                    <div class="row">
                        <?php
                        // Fetch related posts based on the current post's category
                        $related_posts = new WP_Query(array(
                            'category__in' => wp_get_post_categories(get_the_ID()),
                            'post__not_in' => array(get_the_ID()),
                            'posts_per_page' => 4,
                            'orderby' => 'rand', // You can change this to order by date, etc.
                        ));

                        if ($related_posts->have_posts()) :
                            while ($related_posts->have_posts()) : $related_posts->the_post();
                        ?>
                                <div class="col-lg-3 col-md-6 col-12 mt-4">
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('large', array(
                                                'class' => 'img-fluid',
                                                'style' => 'width: 140px !important; height: 135px !important;',
                                            ));
                                        }
                                        ?>
                                        <span class="category d-block text-muted pt-3">
                                            <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)) {
                                                echo esc_html($categories[0]->name);
                                            }
                                            ?>
                                        </span>
                                        <h5 class="pt-2 text-black"><?php the_title(); ?></h5>
                                    </a>
                                </div>
                        <?php
                            endwhile;
                            wp_reset_postdata(); // Reset post data query
                        endif;
                        ?>
                    </div>
                
                
            </section>
        </div>
        <div class="col-md-2">
            <!-- Sidebar-2 -->
            <div>
                <?php dynamic_sidebar('sidebar-2'); ?>
            </div>

        </div>
    </div>
</div>
<?php get_template_part('bottom-top'); ?>

<?php get_footer(); ?>
