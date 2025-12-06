<?php

/*--------------------------------------------------------------
# PANEL: THEME SETTINGS
--------------------------------------------------------------*/
new \Kirki\Panel(
    'theme_settings_panel',
    [
        'priority'    => 10,
        'title'       => esc_html__('Theme Settings', 'kirki'),
        'description' => esc_html__('Modify header and footer settings.', 'kirki'),
    ]
);



/*--------------------------------------------------------------
# SECTION 1: TOP HEADER BAR
# (Address, Email, Social Icons)
--------------------------------------------------------------*/
new \Kirki\Section(
    'top_header_bar',
    [
        'title'    => esc_html__('Top Header Bar', 'kirki'),
        'panel'    => 'theme_settings_panel',
        'priority' => 5,
    ]
);

// Address Field
new \Kirki\Field\Text([
    'settings' => 'top_header_address',
    'label'    => 'Address',
    'section'  => 'top_header_bar',
    'default'  => 'The queens walk, TSV 3456'
]);

// Address URL
new \Kirki\Field\URL([
    'settings' => 'top_header_address_url',
    'label'    => 'Address URL',
    'section'  => 'top_header_bar',
    'default'  => '#'
]);

// Email Field
new \Kirki\Field\Text([
    'settings' => 'top_header_email',
    'label'    => 'Email',
    'section'  => 'top_header_bar',
    'default'  => 'needhelp@mail.com'
]);

// Facebook URL
new \Kirki\Field\URL([
    'settings' => 'facebook_url',
    'label'    => 'Facebook URL',
    'section'  => 'top_header_bar',
    'default'  => '',
]);

// Instagram URL
new \Kirki\Field\URL([
    'settings' => 'instagram_url',
    'label'    => 'Instagram URL',
    'section'  => 'top_header_bar',
    'default'  => '',
]);

// Twitter URL
new \Kirki\Field\URL([
    'settings' => 'twitter_url',
    'label'    => 'Twitter (X) URL',
    'section'  => 'top_header_bar',
    'default'  => '',
]);

// Pinterest URL
new \Kirki\Field\URL([
    'settings' => 'pinterest_url',
    'label'    => 'Pinterest URL',
    'section'  => 'top_header_bar',
    'default'  => '',
]);




/*--------------------------------------------------------------
# SECTION 2: MAIN HEADER
# (Logo, Sticky Logo, Button, Search Toggle)
--------------------------------------------------------------*/
new \Kirki\Section(
    'main_header',
    [
        'title'    => __('Main Header', 'kirki'),
        'panel'    => 'theme_settings_panel',
        'priority' => 10,
    ]
);

// Header Logo
new \Kirki\Field\Image([
    'settings' => 'header_logo',
    'label'    => 'Header Logo',
    'section'  => 'main_header',
]);

// Sticky Logo
new \Kirki\Field\Image([
    'settings' => 'sticky_logo',
    'label'    => 'Sticky Logo',
    'section'  => 'main_header',
]);

// Button Text
new \Kirki\Field\Text([
    'settings' => 'header_button_text',
    'label'    => 'Button Text',
    'section'  => 'main_header',
    'default'  => 'Explore More'
]);

// Button Link
new \Kirki\Field\URL([
    'settings' => 'header_button_url',
    'label'    => 'Button URL',
    'section'  => 'main_header',
    'default'  => '#'
]);

// Search Toggle
new \Kirki\Field\Checkbox_Switch([
    'settings' => 'header_search_toggle',
    'label'    => 'Enable Search?',
    'section'  => 'main_header',
    'default'  => true
]);



/*--------------------------------------------------------------
# SECTION 3: FOOTER BRAND
# (Logo, Description, Social Icons)
--------------------------------------------------------------*/
new \Kirki\Section(
    'footer_brand',
    [
        'title'    => 'Footer Brand',
        'panel'    => 'theme_settings_panel',
        'priority' => 20,
    ]
);

// Footer Logo
new \Kirki\Field\Image([
    'settings' => 'footer_logo',
    'label'    => 'Footer Logo',
    'section'  => 'footer_brand',
]);

// Footer Description
new \Kirki\Field\Textarea([
    'settings' => 'footer_desc',
    'label'    => 'Footer Description',
    'section'  => 'footer_brand',
    'default'  => 'Your helpful footer description here.'
]);

// Footer Social Icons
new \Kirki\Field\Repeater([
    'settings' => 'footer_socials',
    'label'    => 'Social Icons',
    'section'  => 'footer_brand',
    'fields'   => [
        'icon' => ['type' => 'text', 'label' => 'Icon Class'],
        'url'  => ['type' => 'url', 'label' => 'URL'],
    ],
]);



/*--------------------------------------------------------------
# SECTION 4: FOOTER SUPPORT
# (Support Phone, Badge, Email)
--------------------------------------------------------------*/
new \Kirki\Section(
    'footer_support',
    [
        'title' => 'Footer Support',
        'panel' => 'theme_settings_panel',
    ]
);

// Support Phone
new \Kirki\Field\Text([
    'settings' => 'footer_support_phone',
    'label'    => 'Support Phone',
    'section'  => 'footer_support',
    'default'  => '+888 6263 5682'
]);

// Support Badge Label
new \Kirki\Field\Text([
    'settings' => 'footer_support_label',
    'label'    => '"Free" Badge Text',
    'section'  => 'footer_support',
    'default'  => 'Free'
]);

// Support Email
new \Kirki\Field\Text([
    'settings' => 'footer_support_email',
    'label'    => 'Support Email',
    'section'  => 'footer_support',
    'default'  => 'needhelp@mail.com'
]);
