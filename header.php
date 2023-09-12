<?php

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf8">

<head>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css"> 

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

<body>
    <?php wp_head()?>
    <!-- top bar -->
    <section id="topbar">
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-4 col-6 pt-4">
                    <div class="menu-icon">
                        <input class="menu-icon__cheeckbox" type="checkbox" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation" />
                        <div class="humburger">
                            <span class="menu-line"></span>
                            <span class="menu-line"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="main-logo d-flex justify-content-lg-center justify-content-end align-items-center">
                        <!--Adding logo-->
                        <?php the_custom_logo() ?>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-12 text-end text-uppercase">Sign Up <i class="icon fa-solid fa-chevron-down"></i></div> -->
                <div class="col-md-4 col-12 pt-4 d-lg-block d-none text-end">
    <div class="btn-group">
        <?php
        if (is_user_logged_in()) {
            // Display a "Sign Out" link if the user is logged in
            echo '<a href="' . wp_logout_url() . '" class="text-decoration-none text-uppercase text-black">Sign Out</a>';
        } else {
            // Display "Sign Up" and "Sign In" links if the user is not logged in
            echo '<a href="' . wp_registration_url() . '" class="text-decoration-none text-uppercase text-black">Sign Up</a>';
            echo '<button type="button" class="btn btn-link dropdown-toggle p-0 text-decoration-none text-black" data-bs-toggle="dropdown" aria-expanded="false"></button>';
            echo '<ul class="dropdown-menu text-uppercase">';
            echo '<li><a class="dropdown-item" href="' . wp_login_url() . '">Sign In</a></li>';
            echo '</ul>';
        }
        ?>
    </div>
</div>


                       
                    </div>
                </div>
        </section>

  
   <nav class="container navbar navbar-expand-lg border-top border-bottom border-black">
    <!-- Navbar content here -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        if (has_nav_menu('primary-menu')) {
            // Display the Primary Menu if it exists
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'menu_class' => 'navbar-nav mx-auto mb-2 mb-lg-0 text-uppercase',
            ));
        } else {
            // Display the Category Menu if the Primary Menu is not selected
            wp_nav_menu(array(
                'theme_location' => 'category-menu',
                'menu_class' => 'navbar-nav mx-auto mb-2 mb-lg-0 text-uppercase', // Adjust alignment as needed
            ));
        }
        ?>
    </div>
</nav>
<section class="ad">
        <div class="container my-4">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light-gray ads-txt"> <br>  <br>  <br> </div>
                </div>
            </div>
        </div>
    </section>
