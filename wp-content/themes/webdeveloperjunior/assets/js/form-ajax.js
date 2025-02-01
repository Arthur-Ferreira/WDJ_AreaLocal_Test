jQuery(document).ready(function ($) {
  $('#post-form').on('submit', function (e) {
    e.preventDefault(); // Evita o reload da página

    var formData = new FormData(this);
    formData.append('action', 'submit_post'); // Adiciona a action post_form

    $.ajax({
      url: ajax_object.ajax_url, // Pega a URL do admin-ajax.php
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        alert('Post enviado com sucesso!');
        $('#post-form')[0].reset();
        $('#posts-list').prepend(response.data); // Atualiza a lista de posts dinamicamente
      },
      error: function () {
        alert('Erro ao enviar post.');
      }
    });
  });
});