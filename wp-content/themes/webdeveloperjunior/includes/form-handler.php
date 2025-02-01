<?php
function form_submission_handler()
{

  // Verifica se é uma requisição AJAX
  if (!isset($_POST['action']) || $_POST['action'] !== 'submit_post') {
    wp_send_json_error(['message' => 'Ação inválida']);
    wp_die();
  }

  // Valida o método e os campos
  if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['title']) || !isset($_POST['content'])) {
    wp_send_json_error(['message' => 'Dados inválidos']);
    wp_die();
  }

  // Cria o post
  $post_id = wp_insert_post([
    'post_title' => sanitize_text_field($_POST['title']),
    'post_content' => sanitize_text_field($_POST['content']),
    'post_status' => 'publish',
    'post_type' => 'post',
  ]);


  if (is_wp_error($post_id)) {
    wp_send_json_error(['message' => 'Erro ao criar o post']);
    wp_die();
  }

  if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/image.php';

    $upload = wp_handle_upload($_FILES['image'], ['test_form' => false]);

    if (!isset($upload['error'])) {
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

  
  // Retorna os dados do post
  $post = get_post($post_id);
  $image = get_the_post_thumbnail_url($post_id);

  wp_send_json_success([
    'post' => $post,
    'image' => $image,
  ]);

  wp_die();
}

// Registra a função no WordPress
add_action('wp_ajax_submit_post', 'form_submission_handler');
add_action('wp_ajax_nopriv_submit_post', 'form_submission_handler');
