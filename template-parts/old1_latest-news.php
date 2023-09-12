<section id="latest-news">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <label for="category-select">Select Category:</label>
                <select id="category-select" name="category-select">
                    <option value="all">All Categories</option>
                    <?php
                    $categories = get_categories(); // Get all available categories
                    foreach ($categories as $category) {
                        echo '<option value="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</option>';
                    }
                    ?>
                </select>
                <button id="category-submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <div class="row mt-4" id="latest-news-content">
            <!-- The content will be loaded here via Ajax -->
        </div>
    </div>
</section>

<script>
    document.getElementById('category-submit').addEventListener('click', function () {
        const selectedCategory = document.getElementById('category-select').value;

        // Send an Ajax request to retrieve posts based on the selected category
        jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'get_latest_news', // Custom action hook
                category_id: selectedCategory
            },
            success: function (response) {
                jQuery('#latest-news-content').html(response);
            }
        });
    });
</script>
