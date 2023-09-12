<?php function custom_theme_customize_register($wp_customize) {
   // Create a new Customizer section for homepage customization
   $wp_customize->add_section('homepage_sections', array(
       'title' => 'Homepage Sections',
       'priority' => 30, // Adjust the priority as needed
   ));

   // Function to fetch categories as choices for the Customizer control
   function get_categories_as_choices() {
       $categories = get_categories();
       $category_choices = array();

       foreach ($categories as $category) {
           $category_choices[$category->term_id] = $category->name;
       }

       return $category_choices;
   }

   // Latest News Section Name Setting
   $wp_customize->add_setting('latest_news_section_name', array(
       'default' => 'Latest News',
       'sanitize_callback' => 'sanitize_text_field',
   ));

   // Latest News Section Name Control
   $wp_customize->add_control('latest_news_section_name', array(
       'label' => 'Latest News Section Name',
       'section' => 'homepage_sections',
       'type' => 'text',
   ));

   // Latest News Category Selection Setting
   $wp_customize->add_setting('latest_news_selected_category', array(
       'default' => '',
       'sanitize_callback' => 'absint',
   ));

   // Latest News Category Selection Control
   $wp_customize->add_control('latest_news_selected_category', array(
       'label' => 'Select Category for Latest News',
       'section' => 'homepage_sections',
       'type' => 'select',
       'choices' => get_categories_as_choices(),
   ));

  // Editor pick Section Name Setting
   $wp_customize->add_setting('ediotrs_pick_section_name', array(
       'default' => 'ediotrs pick',
       'sanitize_callback' => 'sanitize_text_field',
   ));

   // Editor pick Section Name Control
   $wp_customize->add_control('ediotrs_pick_section_name', array(
       'label' => 'Editor pick  Section Name',
       'section' => 'homepage_sections',
       'type' => 'text',
   ));

   // Editor pick Category Selection Setting
   $wp_customize->add_setting('ediotrs_pick_selected_category', array(
       'default' => '',
       'sanitize_callback' => 'absint',
   ));

   // Editor pick Category Selection Control
   $wp_customize->add_control('ediotrs_pick_selected_category', array(
       'label' => 'Select Category for ediotrs pick',
       'section' => 'homepage_sections',
       'type' => 'select',
       'choices' => get_categories_as_choices(),
   ));
  

// industry 
$wp_customize->add_setting('industry_section_name', array(
       'default' => 'industry',
       'sanitize_callback' => 'sanitize_text_field',
   ));

   // industry News Section Name Control
   $wp_customize->add_control('industry_section_name', array(
       'label' => 'Industry  Section Name',
       'section' => 'homepage_sections',
       'type' => 'text',
   ));

   // industry News Category Selection Setting
   $wp_customize->add_setting('industry_selected_category', array(
       'default' => '',
       'sanitize_callback' => 'absint',
   ));

   // industry News Category Selection Control
   $wp_customize->add_control('industry_selected_category', array(
       'label' => 'Select Category for Industry',
       'section' => 'homepage_sections',
       'type' => 'select',
       'choices' => get_categories_as_choices(),
   ));
// Recently 
$wp_customize->add_setting('recently_section_name', array(
       'default' => 'recently',
       'sanitize_callback' => 'sanitize_text_field',
   ));

   // Recently  Section Name Control
   $wp_customize->add_control('recently_section_name', array(
       'label' => ' Recently  Section Name',
       'section' => 'homepage_sections',
       'type' => 'text',
   ));

   // Recently  Category Selection Setting
   $wp_customize->add_setting('recently_selected_category', array(
       'default' => '',
       'sanitize_callback' => 'absint',
   ));

   //  Recently Category Selection Control
   $wp_customize->add_control('recently_selected_category', array(
       'label' => 'Select Category for recently',
       'section' => 'homepage_sections',
       'type' => 'select',
       'choices' => get_categories_as_choices(),
   ));

// Latest Issue Section Name Setting
$wp_customize->add_setting('latest_issue_section_name', array(
    'default' => 'recently',
    'sanitize_callback' => 'sanitize_text_field',
));

// Latest Issue Section Name Control
$wp_customize->add_control('latest_issue_section_name', array(
    'label' => 'Latest Issue Section Name',
    'section' => 'homepage_sections',
    'type' => 'text',
));

// Latest Issue Selection Setting
$wp_customize->add_setting('latest_issue_selected_category', array(
    'default' => '',
    'sanitize_callback' => 'absint',
));

// Latest Issue Selection Control
$wp_customize->add_control('latest_issue_selected_category', array(
    'label' => 'Select Category for Latest Issue',
    'section' => 'homepage_sections',
    'type' => 'select',
    'choices' => get_categories_as_choices(),
));



}

add_action('customize_register', 'custom_theme_customize_register');




