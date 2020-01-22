<?php
/*
Plugin Name: Deploy
*/

function add_toolbar_items($admin_bar) {
  $admin_bar->add_node(array(
    'id' => 'deploy',
    'title' => 'Deploy',
    'href' => '#',
    'meta' => array(
      'onclick' => '(function() { const xhr = new XMLHttpRequest(); const url = "https://api.netlify.com/build_hooks/5e28b8b6734d8f1bea66fc90"; xhr.open("POST", url, true); xhr.send(); alert("Deploying"); })()',
    ),
  ));
}

add_action('admin_bar_menu', 'add_toolbar_items', 100);