<?php

function form_render()
{
?>
  <form id="post-form" method="post" name="postform" enctype="multipart/form-data">
    <label for="title">Título: </label>
    <input type="text" id="title" name="title">
    <span id="title-error" class="error">Título não pode ser um campo vazio</span>

    <label for="content">Conteúdo: </label>
    <textarea id="content" name="content"></textarea>
    <span id="content-error" class="error">Conteúdo não pode ser um campo vazio</span>

    <label for="image">Imagem Destacada: </label>
    <input type="file" id="image" name="image">
    <span id="image-error" class="error">Imagem Destacada não pode ser um campo vazio</span>

    <button id="submit-btn">Enviar</button>
  </form>
<?php
}
?>