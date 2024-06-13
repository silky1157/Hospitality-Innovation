<?php
/**
 * Netsqure Theme functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Netsqure
 * @since 1.0.0
 * @version 1.0.0
 * @author Netsqure Team
 * @license Proprietary
 * @link https://netsqure.com
 * Copyright (c) 2023 Netsqure  All rights reserved.
 */

if (!function_exists("netsqure_setup")):
  /**
   * Sets up theme defaults and registers support for various
   * WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme
   * hook, which runs before the init hook. The init hook is too late
   * for some features, such as indicating support post thumbnails.
   */

  /**
   * SVG Support
   *
   */
  function add_svg_to_upload_mimes($upload_mimes)
  {
    $upload_mimes["svg"] = "image/svg+xml";
    return $upload_mimes;
  }
  add_filter("upload_mimes", "add_svg_to_upload_mimes");

  function netsqure_setup()
  {
    /**
     * Custom logo
     */
    add_theme_support("custom-logo", [
      "width" => 150,
      "flex-width" => true,
      "flex-height" => true,
    ]);

    /**
     * Add dynamic title tag support
     */
    add_theme_support("title-tag");

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support("automatic-feed-links");

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support("post-thumbnails");

    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus([
      "primary" => __("Primary Menu Header", "netsqure-primary"),
      "secondary" => __("Secondary Menu Footer", "netsqure-secondary"),
    ]);

    /**
     * Nav Walker
     */
    require_once get_template_directory() .
      "/inc/class-wp-bootstrap-navwalker.php";

    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support("post-formats", [
      "aside",
      "gallery",
      "quote",
      "image",
      "video",
    ]);

    /**
     * ACF Custom Fields Settings
     */
    include_once "inc/field-settings.php";
  }
endif;
add_action("after_setup_theme", "netsqure_setup");

function netsqure_enqueue_assets()
{
  $version = wp_get_theme()->get("Version");
  $version = rand(1, 1000);

  wp_enqueue_style(
    "netsqure-animate-style",
    get_template_directory_uri() . "/assets/css/aos.min.css",
    [],
    "2.3.1"
  );
  // wp_enqueue_style(
  //   "netsqure-swiper-style",
  //   get_template_directory_uri() . "/assets/css/swiper.min.css",
  //   [],
  //   "8.4.5"
  // );
  wp_enqueue_style(
    "netsqure-main-style",
    get_template_directory_uri() . "/assets/css/main.css",
    [],
    $version
  );
  wp_enqueue_style("netsqure-style", get_stylesheet_uri(), [], $version);

  wp_enqueue_script(
    "netsqure-popper-script",
    get_template_directory_uri() . "/assets/js/popper.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "netsqure-bootstrap-script",
    get_template_directory_uri() . "/assets/js/bootstrap.min.js",
    [],
    "1.0.0",
    true
  );
  wp_enqueue_script(
    "netsqure-aos-script",
    get_template_directory_uri() . "/assets/js/aos.min.js",
    [],
    "2.3.0",
    true
  );
  // wp_enqueue_script(
  //   "netsqure-swiper-script",
  //   get_template_directory_uri() . "/assets/js/swiper.min.js",
  //   [],
  //   "8.4.5"
  // );
  wp_enqueue_script(
    "netsqure-odometer-script",
    get_template_directory_uri() . "/assets/js/odometer.min.js",
    [],
    "0.4.5",
    true
  );
  wp_enqueue_script(
    "netsqure-powerglitch-script",
    get_template_directory_uri() . "/assets/js/powerglitch.min.js",
    [],
    "0.4.5",
    true
  );
  wp_enqueue_script(
    "netsqure-main-script",
    get_template_directory_uri() . "/assets/js/main.js",
    [],
    $version,
    true
  );
  wp_enqueue_script(
    "netsqure-hubspot-script",
    "//js.hsforms.net/forms/embed/v2.js",
    [],
    "2.0.0",
    false
  );
}

add_action("wp_enqueue_scripts", "netsqure_enqueue_assets");

/**
 * ACF
 */
// Define path and URL to the ACF plugin.
define("MY_ACF_PATH", get_stylesheet_directory() . "/inc/acf-pro/");
define("MY_ACF_URL", get_stylesheet_directory_uri() . "/inc/acf-pro/");

// Include the ACF plugin.
include_once MY_ACF_PATH . "acf.php";

// Customize the url setting to fix incorrect asset URLs.
add_filter("acf/settings/url", "my_acf_settings_url");
function my_acf_settings_url($url)
{
  return MY_ACF_URL;
}
// add_filter("acf/settings/show_admin", "__return_false");

/**
 * Rigister Custom Post Type for Speakers
 */

function netsqure_speakers_post_type()
{
  $labels = [
    "name" => "Speakers",
    "singular_name" => "Speaker",
    "add_new" => "Add New Speaker",
    "all_items" => "All Speaker",
    "add_new_item" => "Add New Speaker",
    "edit_item" => "Edit Speaker",
    "new_item" => "New Speaker",
    "view_item" => "View Speaker",
    "search_item" => "Search Speaker",
    "not_found" => "No Speaker",
    "not_found_in_trash" => "No Speaker Found in Trash",
    "parent_item_colon" => "Parent Speaker",
  ];
  $args = [
    "menu_icon" => "dashicons-businessman",
    "labels" => $labels,
    "public" => true,
    "has_archive" => true,
    "publicly_queryable" => false, // Hide from admin menu
    "query_var" => true,
    "rewrite" => true,
    "capability_type" => "post",
    "hierarchical" => false,
    "supports" => ["title", "custom-fields", "thumbnail", "revisions"],
    "menu_position" => 4,
    "exclude_from_search" => true,
  ];
  register_post_type("speaker", $args);
}
add_action("init", "netsqure_speakers_post_type");

/**
 * Rigister Custom Post Type for Advisory
 */

function netsqure_advisory_post_type()
{
  $labels = [
    "name" => "Advisory",
    "singular_name" => "Advisory",
    "add_new" => "Add New Advisory",
    "all_items" => "All Advisory",
    "add_new_item" => "Add New Advisory",
    "edit_item" => "Edit Advisory",
    "new_item" => "New Advisory",
    "view_item" => "View Advisory",
    "search_item" => "Search Advisory",
    "not_found" => "No Advisory",
    "not_found_in_trash" => "No Advisory Found in Trash",
    "parent_item_colon" => "Parent Advisory",
  ];
  $args = [
    "menu_icon" => "dashicons-groups",
    "labels" => $labels,
    "public" => true,
    "has_archive" => true,
    "publicly_queryable" => false, // Hide from admin menu
    "query_var" => true,
    "rewrite" => true,
    "capability_type" => "post",
    "hierarchical" => false,
    "supports" => ["title", "custom-fields", "thumbnail", "revisions"],
    "menu_position" => 5,
    "exclude_from_search" => true,
  ];
  register_post_type("advisory", $args);
}
add_action("init", "netsqure_advisory_post_type");

/**
 * Rigister Custom Post Type for Testimonials
 */

function netsqure_testimonials_post_type()
{
  $labels = [
    "name" => "Testimonials",
    "singular_name" => "Testimonial",
    "add_new" => "Add New Testimonial",
    "all_items" => "All Testimonial",
    "add_new_item" => "Add New Testimonial",
    "edit_item" => "Edit Testimonial",
    "new_item" => "New Testimonial",
    "view_item" => "View Testimonial",
    "search_item" => "Search Testimonial",
    "not_found" => "No Testimonial",
    "not_found_in_trash" => "No Testimonial Found in Trash",
    "parent_item_colon" => "Parent Testimonial",
  ];
  $args = [
    "menu_icon" => "dashicons-format-quote",
    "labels" => $labels,
    "public" => true,
    "has_archive" => true,
    "publicly_queryable" => false, // Hide from admin menu
    "query_var" => true,
    "rewrite" => true,
    "capability_type" => "post",
    "hierarchical" => false,
    "supports" => ["title", "custom-fields", "thumbnail", "revisions"],
    "menu_position" => 4,
    "exclude_from_search" => true,
  ];
  register_post_type("testimonials", $args);
}
add_action("init", "netsqure_testimonials_post_type");

/**
 * Rigister Custom Post Type for Client Testimonials
 */

function netsqure_client_testimonials_post_type()
{
  $labels = [
    "name" => "Client Testimonials",
    "singular_name" => "Client Testimonial",
    "add_new" => "Add New Client Testimonial",
    "all_items" => "All Client Testimonial",
    "add_new_item" => "Add New Client Testimonial",
    "edit_item" => "Edit Client Testimonial",
    "new_item" => "New Client Testimonial",
    "view_item" => "View Client Testimonial",
    "search_item" => "Search Client Testimonial",
    "not_found" => "No Client Testimonial",
    "not_found_in_trash" => "No Client Testimonial Found in Trash",
    "parent_item_colon" => "Parent Client Testimonial",
  ];
  $args = [
    "menu_icon" => "dashicons-video-alt3",
    "labels" => $labels,
    "public" => true,
    "has_archive" => true,
    "publicly_queryable" => false, // Hide from admin menu
    "query_var" => true,
    "rewrite" => true,
    "capability_type" => "post",
    "hierarchical" => false,
    "supports" => ["title", "custom-fields", "thumbnail", "revisions"],
    "menu_position" => 4,
    "exclude_from_search" => true,
  ];
  register_post_type("client_testimonials", $args);
}
add_action("init", "netsqure_client_testimonials_post_type");

// Custom Field Added by Shakil ⬆️⬆️⬆️

function change_logo_class($html)
{
  $html = str_replace("custom-logo-link", "navbar-brand logo", $html);
  $html = str_replace("custom-logo", "logo-img", $html);

  return $html;
}
add_filter("get_custom_logo", "change_logo_class");

function enqueue_my_custom_scripts()
{
  wp_enqueue_script(
    "netsqure-custom-script",
    get_template_directory_uri() . "/assets/js/admin.js",
    [],
    "1.2.0",
    true
  );
}
add_action("admin_enqueue_scripts", "enqueue_my_custom_scripts");

// include_once "inc/theme-options.php";
// include_once "inc/footer-options.php";
