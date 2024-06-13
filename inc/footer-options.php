<?php
/**
 * Footer Options Page
 * @package Netsqure
 * @since 1.0.0
 * @version 1.0.0
 * @author Netsqure Team
 * @license Proprietary
 * @link https://netsqure.com
 * Copyright (c) 2023 Netsqure  All rights reserved.
 */

function netsqure_footer_options_page()
{
  ?>
<div class="wrap">
    <h1>Netsqure Footer Options</h1>
    <form method="post" action="options.php">
        <?php
        settings_fields("netsqure_footer_options");
        do_settings_sections("netsqure_footer_options");
        submit_button();?>
    </form>
</div>
<?php
}

// Field Declare
function netsqure_footer_options_init()
{
  // Footer Logo Section
  add_settings_section(
    "netsqure_footer_logo",
    "Footer Logo Secion",
    "netsqure_footer_logo_callback",
    "netsqure_footer_options"
  );
  add_settings_field(
    "netsqure_footer_logo",
    "Footer Logo URL",
    "netsqure_footer_logo_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_logo"
  );
  add_settings_field(
    "netsqure_footer_about",
    "About Text",
    "netsqure_footer_about_callback",
    "netsqure_footer_options",
    "netsqure_footer_logo"
  );
  // column 1
  add_settings_section(
    "netsqure_footer_col_01",
    "Footer Column 01",
    "netsqure_footer_col_01_callback",
    "netsqure_footer_options"
  );
  // column 01 title
  add_settings_field(
    "netsqure_footer_col_01_title",
    "Footer Column 01 Title",
    "netsqure_footer_col_01_title_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_01"
  );
  // column 01 subTitles
  add_settings_field(
    "netsqure_footer_col_01_subtitle_01",
    "Footer Column 01 SubTitle 01",
    "netsqure_footer_col_01_subtitle_01_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_01"
  );
  add_settings_field(
    "netsqure_footer_col_01_subtitle_01_url",
    "Footer Column 01 SubTitle 01 Url",
    "netsqure_footer_col_01_subtitle_01_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_01"
  );
  add_settings_field(
    "netsqure_footer_col_01_subtitle_02",
    "Footer Column 01 SubTitle 02",
    "netsqure_footer_col_01_subtitle_02_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_01"
  );
  add_settings_field(
    "netsqure_footer_col_01_subtitle_02_url",
    "Footer Column 01 SubTitle 02 Url",
    "netsqure_footer_col_01_subtitle_02_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_01"
  );
  add_settings_field(
    "netsqure_footer_col_01_subtitle_03",
    "Footer Column 01 SubTitle 03",
    "netsqure_footer_col_01_subtitle_03_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_01"
  );
  add_settings_field(
    "netsqure_footer_col_01_subtitle_03_url",
    "Footer Column 01 SubTitle 03 Url",
    "netsqure_footer_col_01_subtitle_03_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_01"
  );
  add_settings_field(
    "netsqure_footer_col_01_subtitle_04",
    "Footer Column 01 SubTitle 04",
    "netsqure_footer_col_01_subtitle_04_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_01"
  );
  add_settings_field(
    "netsqure_footer_col_01_subtitle_04_url",
    "Footer Column 01 SubTitle 04 Url",
    "netsqure_footer_col_01_subtitle_04_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_01"
  );

  // column 2
  add_settings_section(
    "netsqure_footer_col_02",
    "Footer Column 02",
    "netsqure_footer_col_02_callback",
    "netsqure_footer_options"
  );
  // column 02 title
  add_settings_field(
    "netsqure_footer_col_02_title",
    "Footer Column 02 Title",
    "netsqure_footer_col_02_title_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_02"
  );
  // column 02 subTitles
  add_settings_field(
    "netsqure_footer_col_02_subtitle_01",
    "Footer Column 02 SubTitle 01",
    "netsqure_footer_col_02_subtitle_01_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_02"
  );
  add_settings_field(
    "netsqure_footer_col_02_subtitle_01_url",
    "Footer Column 02 SubTitle 01 Url",
    "netsqure_footer_col_02_subtitle_01_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_02"
  );

  add_settings_field(
    "netsqure_footer_col_01_subtitle_02",
    "Footer Column 02 SubTitle 02",
    "netsqure_footer_col_02_subtitle_02_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_02"
  );
  add_settings_field(
    "netsqure_footer_col_02_subtitle_02_url",
    "Footer Column 02 SubTitle 02 Url",
    "netsqure_footer_col_02_subtitle_02_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_02"
  );
  add_settings_field(
    "netsqure_footer_col_01_subtitle_03",
    "Footer Column 02 SubTitle 03",
    "netsqure_footer_col_02_subtitle_03_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_02"
  );
  add_settings_field(
    "netsqure_footer_col_02_subtitle_03_url",
    "Footer Column 02 SubTitle 03 Url",
    "netsqure_footer_col_02_subtitle_03_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_02"
  );
  add_settings_field(
    "netsqure_footer_col_01_subtitle_04",
    "Footer Column 02 SubTitle 04",
    "netsqure_footer_col_02_subtitle_04_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_02"
  );
  add_settings_field(
    "netsqure_footer_col_02_subtitle_04_url",
    "Footer Column 02 SubTitle 04 Url",
    "netsqure_footer_col_02_subtitle_04_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_02"
  );
  add_settings_field(
    "netsqure_footer_col_01_subtitle_05",
    "Footer Column 02 SubTitle 05",
    "netsqure_footer_col_02_subtitle_05_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_02"
  );
  add_settings_field(
    "netsqure_footer_col_02_subtitle_05_url",
    "Footer Column 02 SubTitle 05 Url",
    "netsqure_footer_col_02_subtitle_05_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_02"
  );

  // column 03
  add_settings_section(
    "netsqure_footer_col_03",
    "Footer Column 03",
    "netsqure_footer_col_03_callback",
    "netsqure_footer_options"
  );
  // column 03 title
  add_settings_field(
    "netsqure_footer_col_03_title",
    "Footer Column 03 Title",
    "netsqure_footer_col_03_title_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_03"
  );
  // column 03 subTitles
  add_settings_field(
    "netsqure_footer_col_03_subtitle_01",
    "Footer Column 03 SubTitle 01",
    "netsqure_footer_col_03_subtitle_01_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_03"
  );
  add_settings_field(
    "netsqure_footer_col_03_subtitle_01_url",
    "Footer Column 03 SubTitle 01 Url",
    "netsqure_footer_col_03_subtitle_01_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_03"
  );
  add_settings_field(
    "netsqure_footer_col_03_subtitle_02",
    "Footer Column 03 SubTitle 02",
    "netsqure_footer_col_03_subtitle_02_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_03"
  );
  add_settings_field(
    "netsqure_footer_col_03_subtitle_02_url",
    "Footer Column 03 SubTitle 02 Url",
    "netsqure_footer_col_03_subtitle_02_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_03"
  );
  add_settings_field(
    "netsqure_footer_col_03_subtitle_03",
    "Footer Column 03 SubTitle 03",
    "netsqure_footer_col_03_subtitle_03_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_03"
  );
  add_settings_field(
    "netsqure_footer_col_03_subtitle_03_url",
    "Footer Column 03 SubTitle 03 Url",
    "netsqure_footer_col_03_subtitle_03_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_03"
  );
  add_settings_field(
    "netsqure_footer_col_03_subtitle_04",
    "Footer Column 03 SubTitle 04",
    "netsqure_footer_col_03_subtitle_04_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_03"
  );
  add_settings_field(
    "netsqure_footer_col_03_subtitle_04_url",
    "Footer Column 03 SubTitle 04 Url",
    "netsqure_footer_col_03_subtitle_04_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_col_03"
  );

  // social media icons
  add_settings_section(
    "netsqure_footer_social_icons",
    "Footer Social Icons",
    "netsqure_footer_social_icons_callback",
    "netsqure_footer_options"
  );
  // icon1
  add_settings_field(
    "netsqure_footer_social_icon_01",
    "Footer Social Icon 01",
    "netsqure_footer_social_icon_01_callback",
    "netsqure_footer_options",
    "netsqure_footer_social_icons"
  );

  add_settings_field(
    "netsqure_footer_social_icon_01_url",
    "Footer Social Icon 01 Url",
    "netsqure_footer_social_icon_01_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_social_icons"
  );
  // icon2
  add_settings_field(
    "netsqure_footer_social_icon_02",
    "Footer Social Icon 02",
    "netsqure_footer_social_icon_02_callback",
    "netsqure_footer_options",
    "netsqure_footer_social_icons"
  );
  add_settings_field(
    "netsqure_footer_social_icon_02_url",
    "Footer Social Icon 02 Url",
    "netsqure_footer_social_icon_02_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_social_icons"
  );
  // icon3
  add_settings_field(
    "netsqure_footer_social_icon_03",
    "Footer Social Icon 02",
    "netsqure_footer_social_icon_03_callback",
    "netsqure_footer_options",
    "netsqure_footer_social_icons"
  );
  add_settings_field(
    "netsqure_footer_social_icon_03_url",
    "Footer Social Icon 03 Url",
    "netsqure_footer_social_icon_03_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_social_icons"
  );
  // icon4
  add_settings_field(
    "netsqure_footer_social_icon_04",
    "Footer Social Icon 04",
    "netsqure_footer_social_icon_04_callback",
    "netsqure_footer_options",
    "netsqure_footer_social_icons"
  );
  add_settings_field(
    "netsqure_footer_social_icon_04_url",
    "Footer Social Icon 04 Url",
    "netsqure_footer_social_icon_04_url_callback",
    "netsqure_footer_options",
    "netsqure_footer_social_icons"
  );

  register_setting("netsqure_footer_options", "netsqure_footer_options");
}

// Footer Logo Section
function netsqure_footer_logo_callback()
{
  echo "Configure Logo Section";
}

// Footer Logo URL
function netsqure_footer_logo_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_logo_url"])) {
    $value = $options["footer_logo_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_logo_url]" value="' .
    esc_attr($value) .
    '">';
}

// Footer About
function netsqure_footer_about_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_about"])) {
    $value = $options["footer_about"];
  }
  echo '<input style="width: 50%;"  name="netsqure_footer_options[footer_about]" value="' .
    esc_attr($value) .
    '">';
}
add_action("admin_init", "netsqure_footer_options_init");

// column 01
function netsqure_footer_col_01_callback()
{
  echo "Configure Footer Column 01";
}

// column 01 title
function netsqure_footer_col_01_title_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_01_title"])) {
    $value = $options["footer_col_01_title"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_01_title]" value="' .
    esc_attr($value) .
    '">';
}

// column 01 subtitle 01
function netsqure_footer_col_01_subtitle_01_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_01_subtitle_01"])) {
    $value = $options["footer_col_01_subtitle_01"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_01_subtitle_01]" value="' .
    esc_attr($value) .
    '">';
}
// column 01 subtitle 01 url
function netsqure_footer_col_01_subtitle_01_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_01_subtitle_01_url"])) {
    $value = $options["footer_col_01_subtitle_01_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_01_subtitle_01_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 01 subtitle 02
function netsqure_footer_col_01_subtitle_02_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_01_subtitle_02"])) {
    $value = $options["footer_col_01_subtitle_02"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_01_subtitle_02]" value="' .
    esc_attr($value) .
    '">';
}

// column 01 subtitle 02 url
function netsqure_footer_col_01_subtitle_02_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_01_subtitle_02_url"])) {
    $value = $options["footer_col_01_subtitle_02_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_01_subtitle_02_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 01 subtitle 03
function netsqure_footer_col_01_subtitle_03_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_01_subtitle_03"])) {
    $value = $options["footer_col_01_subtitle_03"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_01_subtitle_03]" value="' .
    esc_attr($value) .
    '">';
}

// column 01 subtitle 03 url
function netsqure_footer_col_01_subtitle_03_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_01_subtitle_03_url"])) {
    $value = $options["footer_col_01_subtitle_03_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_01_subtitle_03_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 01 subtitle 04
function netsqure_footer_col_01_subtitle_04_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_01_subtitle_04"])) {
    $value = $options["footer_col_01_subtitle_04"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_01_subtitle_04]" value="' .
    esc_attr($value) .
    '">';
}
// column 01 subtitle 03 url
function netsqure_footer_col_01_subtitle_04_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_01_subtitle_04_url"])) {
    $value = $options["footer_col_01_subtitle_04_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_01_subtitle_04_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 02
function netsqure_footer_col_02_callback()
{
  echo "Configure Footer Column 02";
}
// column 02 title
function netsqure_footer_col_02_title_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_02_title"])) {
    $value = $options["footer_col_02_title"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_02_title]" value="' .
    esc_attr($value) .
    '">';
}

// column 02 subtitle 01
function netsqure_footer_col_02_subtitle_01_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_02_subtitle_01"])) {
    $value = $options["footer_col_02_subtitle_01"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_02_subtitle_01]" value="' .
    esc_attr($value) .
    '">';
}
// column 02 subtitle 01 url
function netsqure_footer_col_02_subtitle_01_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_02_subtitle_01_url"])) {
    $value = $options["footer_col_02_subtitle_01_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_02_subtitle_01_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 02 subtitle 02
function netsqure_footer_col_02_subtitle_02_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_02_subtitle_02"])) {
    $value = $options["footer_col_02_subtitle_02"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_02_subtitle_02]" value="' .
    esc_attr($value) .
    '">';
}
// column 02 subtitle 02 url
function netsqure_footer_col_02_subtitle_02_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_02_subtitle_02_url"])) {
    $value = $options["footer_col_02_subtitle_02_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_02_subtitle_02_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 02 subtitle 03
function netsqure_footer_col_02_subtitle_03_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_02_subtitle_03"])) {
    $value = $options["footer_col_02_subtitle_03"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_02_subtitle_03]" value="' .
    esc_attr($value) .
    '">';
}

// column 02 subtitle 03 url
function netsqure_footer_col_02_subtitle_03_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_02_subtitle_03_url"])) {
    $value = $options["footer_col_02_subtitle_03_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_02_subtitle_03_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 02 subtitle 04
function netsqure_footer_col_02_subtitle_04_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_02_subtitle_04"])) {
    $value = $options["footer_col_02_subtitle_04"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_02_subtitle_04]" value="' .
    esc_attr($value) .
    '">';
}
// column 02 subtitle 04 url
function netsqure_footer_col_02_subtitle_04_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_02_subtitle_04_url"])) {
    $value = $options["footer_col_02_subtitle_04_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_02_subtitle_04_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 02 subtitle 05
function netsqure_footer_col_02_subtitle_05_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_02_subtitle_05"])) {
    $value = $options["footer_col_02_subtitle_05"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_02_subtitle_05]" value="' .
    esc_attr($value) .
    '">';
}
// column 02 subtitle 05 url
function netsqure_footer_col_02_subtitle_05_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_02_subtitle_05_url"])) {
    $value = $options["footer_col_02_subtitle_05_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_02_subtitle_05_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 03
function netsqure_footer_col_03_callback()
{
  echo "Configure Footer Column 03";
}

// column 03 title
function netsqure_footer_col_03_title_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_03_title"])) {
    $value = $options["footer_col_03_title"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_03_title]" value="' .
    esc_attr($value) .
    '">';
}

// column 02 subtitle 01
function netsqure_footer_col_03_subtitle_01_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_03_subtitle_01"])) {
    $value = $options["footer_col_03_subtitle_01"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_03_subtitle_01]" value="' .
    esc_attr($value) .
    '">';
}

// column 03 subtitle 01 url
function netsqure_footer_col_03_subtitle_01_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_03_subtitle_01_url"])) {
    $value = $options["footer_col_03_subtitle_01_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_03_subtitle_01_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 03 subtitle 02
function netsqure_footer_col_03_subtitle_02_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_03_subtitle_02"])) {
    $value = $options["footer_col_03_subtitle_02"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_03_subtitle_02]" value="' .
    esc_attr($value) .
    '">';
}

// column 03 subtitle 02 url
function netsqure_footer_col_03_subtitle_02_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_03_subtitle_02_url"])) {
    $value = $options["footer_col_03_subtitle_02_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_03_subtitle_02_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 03 subtitle 03
function netsqure_footer_col_03_subtitle_03_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_03_subtitle_03"])) {
    $value = $options["footer_col_03_subtitle_03"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_03_subtitle_03]" value="' .
    esc_attr($value) .
    '">';
}
// column 03 subtitle 03 url
function netsqure_footer_col_03_subtitle_03_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_03_subtitle_03_url"])) {
    $value = $options["footer_col_03_subtitle_03_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_03_subtitle_03_url]" value="' .
    esc_attr($value) .
    '">';
}

// column 03 subtitle 04
function netsqure_footer_col_03_subtitle_04_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_03_subtitle_04"])) {
    $value = $options["footer_col_03_subtitle_04"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_col_03_subtitle_04]" value="' .
    esc_attr($value) .
    '">';
}
// column 03 subtitle 04 url
function netsqure_footer_col_03_subtitle_04_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_col_03_subtitle_04_url"])) {
    $value = $options["footer_col_03_subtitle_04_url"];
  }
  echo '<input type="url" name="netsqure_footer_options[footer_col_03_subtitle_04_url]" value="' .
    esc_attr($value) .
    '">';
}

// footer social media icon
function netsqure_footer_social_icons_callback()
{
  echo "Configure Social Media Icons";
}
// icon1
function netsqure_footer_social_icon_01_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_social_icon_01"])) {
    $value = $options["footer_social_icon_01"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_social_icon_01]" value="' .
    esc_attr($value) .
    '">';
}

// icon1 url
function netsqure_footer_social_icon_01_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_social_icon_01_url"])) {
    $value = $options["footer_social_icon_01_url"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_social_icon_01_url]" value="' .
    esc_attr($value) .
    '">';
}

// icon2
function netsqure_footer_social_icon_02_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_social_icon_02"])) {
    $value = $options["footer_social_icon_02"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_social_icon_02]" value="' .
    esc_attr($value) .
    '">';
}
// icon2 url
function netsqure_footer_social_icon_02_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_social_icon_02_url"])) {
    $value = $options["footer_social_icon_02_url"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_social_icon_02_url]" value="' .
    esc_attr($value) .
    '">';
}

// icon3
function netsqure_footer_social_icon_03_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_social_icon_03"])) {
    $value = $options["footer_social_icon_03"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_social_icon_03]" value="' .
    esc_attr($value) .
    '">';
}
// icon3 url
function netsqure_footer_social_icon_03_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_social_icon_03_url"])) {
    $value = $options["footer_social_icon_03_url"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_social_icon_03_url]" value="' .
    esc_attr($value) .
    '">';
}

// icon4
function netsqure_footer_social_icon_04_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_social_icon_04"])) {
    $value = $options["footer_social_icon_04"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_social_icon_04]" value="' .
    esc_attr($value) .
    '">';
}

// icon4 url
function netsqure_footer_social_icon_04_url_callback()
{
  $options = get_option("netsqure_footer_options");
  $value = "";
  if (isset($options["footer_social_icon_04_url"])) {
    $value = $options["footer_social_icon_04_url"];
  }
  echo '<input type="text" name="netsqure_footer_options[footer_social_icon_04_url]" value="' .
    esc_attr($value) .
    '">';
}

// Footer Option
function netsqure_footer_menu()
{
  add_menu_page(
    "Footer Options",
    "Footer Options",
    "manage_options",
    "netsqure_footer_options",
    "netsqure_footer_options_page",
    "dashicons-layout",
    30
  );
}
add_action("admin_menu", "netsqure_footer_menu");
