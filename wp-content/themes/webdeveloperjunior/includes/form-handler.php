<?php
function form_submission_handler() {
  require_once ABSPATH . 'wp-admin/includes/file.php';
  require_once ABSPATH . 'wp-admin/includes/media.php';
  require_once ABSPATH . 'wp-admin/includes/image.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit-post'])) {
    $title = sanitize_text_field($_POST['title']);
    $content = sanitize_text_field($_POST['content']);

    $post_id = wp_insert_post([
      'post_title' => $title,
      'post_content' => $content,
      'post_status' => 'publish',
      'post_type' => 'post',
    ]);

    if (!is_wp_error($post_id) && !empty($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
      $attachment_id = media_handle_upload('image', $post_id);
      if (!is_wp_error($attachment_id)) {
          set_post_thumbnail($post_id, $attachment_id);
      }
  }

    if ($post_id && !is_wp_error($post_id)) {
      // Redireciona para evitar reenvio de formulário
      wp_redirect(add_query_arg('form-submitted', 'true', home_url('/')));
      exit;
    }
  }
}

add_action('template_redirect', 'form_submission_handler');

?>
