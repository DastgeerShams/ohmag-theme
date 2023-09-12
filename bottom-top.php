<?php
/*
Silence is GOLD*/
?>
<section id="recently">
    <div class="container mt-5">
        <div class="row border-top border-2 border-primary opacity-100">

            <?php
            // Define the query to retrieve recent posts from all categories
            $args = array(
                'post_type' => 'post',      // Specify the post type as 'post'
                'posts_per_page' => 6,     // Number of posts to display
                'order' => 'DESC',         // Display in descending order (most recent first)
            );

            $query = new WP_Query($args);

            // Loop through the recent posts
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $category = get_the_category(); // Get the post category
                    $image_url = get_the_post_thumbnail_url(); // Get the post's featured image URL
                    ?>

                    <div class="col-lg-4 col-md-6 col-12 mt-5">
                        <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                            <img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>" class="img-fluid" />
                            <div class="category d-block text-muted pt-3"><?php echo $category[0]->name; ?></div>
                            <h4 class="pt-3 text-black"><?php the_title(); ?></h4>
                        </a>
                    </div>

                <?php
                }
                wp_reset_postdata(); // Reset the post data
            } else {
                echo "No recent posts found.";
            }
            ?>
        </div>
    </div>
</section>
