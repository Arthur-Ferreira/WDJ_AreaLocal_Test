<?php


function form_render() {
  ?>
    <form id="post-form" method="post">
      <label for="title">Título: </label>
      <input type="title" id="title" title="title" required>

      <label for="content">Descrição: </label>
      <input type="content" id="content" title="content" required>

      <label for="image">Imagem Destacada: </label>
      <input type="file" id="image" title="image" required>

      <button type="submit" name="submit-post">Enviar</button>
    </form>
    <?php
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
