// Validações dos campos do formulário

function fieldsValidation(fields) {
  let isValid = true;

  fields.forEach(function ($field) {
    let fieldId = $field.attr('id');
    let errorSpanId = `#${fieldId}-error`;

    if ($field.val().trim() === '') {
      jQuery(errorSpanId).addClass('show');
      isValid = false;
    } else {
      jQuery(errorSpanId).removeClass('show');
    }
  });

  return isValid;
}

jQuery(document).ready(function ($) {
  $('#submit-btn').on('click', function (e) {
    e.preventDefault(); // Evita o reload da página

    // Seleciona os campos obrigatórios
    var fields = [$('#title'), $('#content'), $('#image')];

    // Valida os campos
    if (!fieldsValidation(fields)) {
      return;
    }

    // Desbilitando o botão após o envio e muda o texto
    $('#submit-btn').prop('disabled', true).text('Enviando...');


    var form = $('#post-form')[0];
    var formData = new FormData(form);
    formData.append('action', 'submit_post'); // Adiciona a action post_form

    $.ajax({
      url: ajax_object.ajax_url, // Pega a URL do admin-ajax.php
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        alert('Post enviado com sucesso!');
        form.reset();
        $('#posts-list').prepend(response.data); // Atualiza a lista de posts dinamicamente
        console.log(response)
        // Reabilitando o botão após o sucesso e reseta o texto
        $('#submit-btn').prop('disabled', false).text('Enviar');
      },
      error: function () {
        alert('Erro ao enviar post.');
        // Reabilitando o botão após o sucesso e reseta o texto
        $('#submit-btn').prop('disabled', false).text('Enviar');
      }
    });
  });
});