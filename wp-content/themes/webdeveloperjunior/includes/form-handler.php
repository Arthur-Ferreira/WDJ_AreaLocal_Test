<?php
function form_submission_handler() {
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit-post'])) {

    if (isset($_POST['title']) || isset($_POST['content'])) {
      $post_id = wp_insert_post([
        'post_title' => sanitize_text_field($_POST['title']);,
        'post_content' => sanitize_text_field($_POST['content']);,
        'post_status' => 'publish',
        'post_type' => 'post',
      ]);
    }

    if ($post_id && !is_wp_error($post_id)) {
      if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        require_once ABSPATH . 'wp-admin/includes/file.php';
        require_once ABSPATH . 'wp-admin/includes/image.php';

        $upload = wp_handle_upload($_FILES['image'], ['test_form' => false]);
        
        if(!isset($upload['error'])) {
          $attachment = [
            'post_mime_type' => $upload['type'],
            'post_title'     => sanitize_file_name($_FILES['image']['name']),
            'post_content'   => '',
            'post_status'    => 'inherit',
          ];

          $attachment_id = wp_insert_attachment($attachment, $upload['file'], $post_id);
          $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload['file']);
          wp_update_attachment_metadata($attachment_id, $attachment_data);
          set_post_thumbnail($post_id, $attachment_id);
        }
      }
      
      $post = get_post($post_id);
      $image = get_the_post_thumbnail_url($post_id);
      wp_send_json_success([
        'post' => $post,
        'image' => $image,
      ]);
    } else {
      wp_send_json_error([
        'message' => 'Erro ao criar o post',
      ]);
    }
  }
}

add_action('wp_save_post', 'form_submission_handler');

?>
