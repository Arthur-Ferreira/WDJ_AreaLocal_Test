<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['custom_post_submit'])) {
  include_once 'form-handler.php';
}

function form_submission_handler() {
  if (isset($_POST['submit-post'])) {
    $title = sanitize_text_field($_POST['title']);
    $content = sanitize_text_field($_POST['content']);

    $post_id = wp_insert_post([
      'post_title' => $title,
      'post_content' => $content,
      'post_status' => 'publish',
    ]);

    if(!is_wp_error($post_id) && !empty($_FILES['image'])) {
      $attachment_id = media_handle_upload('image', $post_id);
      set_post_thumbnail($post_id, $attachment_id);
    }
  }
}

add_action('init', 'form_submission_handler');
