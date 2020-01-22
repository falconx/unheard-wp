<?php
/*
Plugin Name: Deploy
*/

/**
 * Trigger CI build
 */
function trigger_build() {
  $url = 'https://api.netlify.com/build_hooks/5e28b8b6734d8f1bea66fc90';

  // request headers
  $headers = array(
    'Content-Type: application/x-www-form-urlencoded',
  );

  // open connection
  $ch = curl_init();

  // set the url, number of POST vars, POST data
  curl_setopt($ch, CURLOPT_VERBOSE, 1);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "{}");

  // execute post
  curl_exec($ch);

  // close connection
  curl_close($ch);
}

add_action('update_post', 'trigger_build');
