<?php
/**
 * Theme Options Page
 * @package Netsqure
 * @since 1.0.0
 * @version 1.0.0
 * @author Netsqure Team
 * @license Proprietary
 * @link https://netsqure.com
 * Copyright (c) 2023 Netsqure  All rights reserved.
 */

function netsqure_theme_options_page()
{
  ?>
<div class="wrap">
    <h1>Netsqure Theme Options</h1>
    <form method="post" action="options.php">
        <?php
        settings_fields("netsqure_theme_options");
        do_settings_sections("netsqure_theme_options");
        submit_button();?>
    </form>
</div>
<?php
}

function netsqure_theme_options_init()
{
  // All Heading
  add_settings_section(
    "netsqure_theme_headings",
    "Theme Headings",
    "netsqure_theme_headings_callback",
    "netsqure_theme_options"
  );

  // Heading 01
  add_settings_field(
    "netsqure_theme_heading_01",
    "Heading 01",
    "netsqure_theme_main_heading_01_callback",
    "netsqure_theme_options",
    "netsqure_theme_headings"
  );

  // Heading 02
  add_settings_field(
    "netsqure_theme_heading-02",
    "Heading 02",
    "netsqure_theme_main_heading_02_callback",
    "netsqure_theme_options",
    "netsqure_theme_headings"
  );

  // Heading 03
  add_settings_field(
    "netsqure_theme_heading-03",
    "Heading 03",
    "netsqure_theme_main_heading_03_callback",
    "netsqure_theme_options",
    "netsqure_theme_headings"
  );

  // Heading 04
  add_settings_field(
    "netsqure_theme_heading-04",
    "Heading 04",
    "netsqure_theme_main_heading_04_callback",
    "netsqure_theme_options",
    "netsqure_theme_headings"
  );

  // Heading 05
  add_settings_field(
    "netsqure_theme_heading-05",
    "Heading 05",
    "netsqure_theme_main_heading_05_callback",
    "netsqure_theme_options",
    "netsqure_theme_headings"
  );

  // Heading 06
  add_settings_field(
    "netsqure_theme_heading-06",
    "Heading 06",
    "netsqure_theme_main_heading_06_callback",
    "netsqure_theme_options",
    "netsqure_theme_headings"
  );

  // Heading 07
  add_settings_field(
    "netsqure_theme_heading-07",
    "Heading 07",
    "netsqure_theme_main_heading_07_callback",
    "netsqure_theme_options",
    "netsqure_theme_headings"
  );

  // Main Logo
  add_settings_section(
    "netsqure_theme_main_logo",
    "Main Logo",
    "netsqure_theme_main_logo_callback",
    "netsqure_theme_options"
  );

  // Main Logo URL
  add_settings_field(
    "netsqure_theme_main_logo",
    "Main Logo URL",
    "netsqure_theme_main_logo_url_callback",
    "netsqure_theme_options",
    "netsqure_theme_main_logo"
  );

  // Gallery Section
  add_settings_section(
    "netsqure_theme_section_gallery",
    "Gallery Section",
    "netsqure_theme_section_gallery_callback",
    "netsqure_theme_options"
  );

  // Gallery Shortcode
  add_settings_field(
    "netsqure_theme_gallery_shortcode",
    "Gallery Shortcode",
    "netsqure_theme_gallery_shortcode_callback",
    "netsqure_theme_options",
    "netsqure_theme_section_gallery"
  );

  register_setting("netsqure_theme_options", "netsqure_theme_options");
}

add_action("admin_init", "netsqure_theme_options_init");

// All Headings
function netsqure_theme_headings_callback()
{
  echo "Configure All Headings";
}

// Heading 01
function netsqure_theme_main_heading_01_callback()
{
  $options = get_option("netsqure_theme_options");
  $value = "";
  if (isset($options["heading_01"])) {
    $value = $options["heading_01"];
  }
  echo '<input type="text" style="width:50%" name="netsqure_theme_options[heading_01]" value="' .
    esc_attr($value) .
    '">';
}

// Heading 02
function netsqure_theme_main_heading_02_callback()
{
  $options = get_option("netsqure_theme_options");
  $value = "";
  if (isset($options["heading_02"])) {
    $value = $options["heading_02"];
  }
  echo '<input type="text" style="width:50%" name="netsqure_theme_options[heading_02]" value="' .
    esc_attr($value) .
    '">';
}

// Heading 03
function netsqure_theme_main_heading_03_callback()
{
  $options = get_option("netsqure_theme_options");
  $value = "";
  if (isset($options["heading_03"])) {
    $value = $options["heading_03"];
  }
  echo '<input type="text" style="width:50%" name="netsqure_theme_options[heading_03]" value="' .
    esc_attr($value) .
    '">';
}

// Heading 04
function netsqure_theme_main_heading_04_callback()
{
  $options = get_option("netsqure_theme_options");
  $value = "";
  if (isset($options["heading_04"])) {
    $value = $options["heading_04"];
  }
  echo '<input type="text" style="width:50%" name="netsqure_theme_options[heading_04]" value="' .
    esc_attr($value) .
    '">';
}

// Heading 05
function netsqure_theme_main_heading_05_callback()
{
  $options = get_option("netsqure_theme_options");
  $value = "";
  if (isset($options["heading_05"])) {
    $value = $options["heading_05"];
  }
  echo '<input type="text" style="width:50%" name="netsqure_theme_options[heading_05]" value="' .
    esc_attr($value) .
    '">';
}

// Heading 06
function netsqure_theme_main_heading_06_callback()
{
  $options = get_option("netsqure_theme_options");
  $value = "";
  if (isset($options["heading_06"])) {
    $value = $options["heading_06"];
  }
  echo '<input type="text" style="width:50%" name="netsqure_theme_options[heading_06]" value="' .
    esc_attr($value) .
    '">';
}

// Heading 07
function netsqure_theme_main_heading_07_callback()
{
  $options = get_option("netsqure_theme_options");
  $value = "";
  if (isset($options["heading_07"])) {
    $value = $options["heading_07"];
  }
  echo '<input type="text" style="width:50%" name="netsqure_theme_options[heading_07]" value="' .
    esc_attr($value) .
    '">';
}

// Main Logo
function netsqure_theme_main_logo_callback()
{
  echo "Configure Main Logo";
}

// Main Logo URL
function netsqure_theme_main_logo_url_callback()
{
  $options = get_option("netsqure_theme_options");
  $value = "";
  if (isset($options["main_logo_url"])) {
    $value = $options["main_logo_url"];
  }
  echo '<input type="url" name="netsqure_theme_options[main_logo_url]" value="' .
    esc_attr($value) .
    '">';
}

// Gallery Section
function netsqure_theme_section_gallery_callback()
{
  echo "Configure Gallery Section";
}

// Gallery Shortcode
function netsqure_theme_gallery_shortcode_callback()
{
  $options = get_option("netsqure_theme_options");
  $value = "";
  if (isset($options["gallery_shortcode"])) {
    $value = $options["gallery_shortcode"];
  }
  echo '<input type="text" name="netsqure_theme_options[gallery_shortcode]" value="' .
    esc_attr($value) .
    '">';
}

function netsqure_theme_menu()
{
  add_menu_page(
    "Theme Options",
    "Theme Options",
    "manage_options",
    "netsqure_theme_options",
    "netsqure_theme_options_page",
    "dashicons-admin-generic",
    30
  );
}

add_action("admin_menu", "netsqure_theme_menu");
