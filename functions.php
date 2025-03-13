<?php

function boilerplate_load_assets()
{
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

function boilerplate_add_admin_menu()
{
  add_menu_page(
    'Boilerplate Settings', // Page title
    'Boilerplate',          // Menu title
    'manage_options',       // Capability
    'boilerplate-settings', // Menu slug
    'boilerplate_settings_page', // Callback function
    'dashicons-admin-generic',   // Icon
    100                          // Position
  );
}

function boilerplate_settings_page()
{
  ?>
  <div id="app-root-settings"></div>
  <?php
}

add_action('admin_menu', 'boilerplate_add_admin_menu');

function boilerplate_load_admin_assets($hook_suffix)
{
  if ($hook_suffix === 'toplevel_page_boilerplate-settings') {
    wp_enqueue_script('boilerplate-settings', get_theme_file_uri('/build/settings.js'), array('wp-element'), '1.0', true);
  }
}

add_action('admin_enqueue_scripts', 'boilerplate_load_admin_assets');