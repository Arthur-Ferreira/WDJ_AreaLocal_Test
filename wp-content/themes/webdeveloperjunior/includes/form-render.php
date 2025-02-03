<?php

function form_render()
{
?>
  <form id="post-form" method="post" name="postform" enctype="multipart/form-data">
    <label for="title">Título: </label>
    <input type="text" id="title" name="title" required>

    <label for="content">Conteúdo: </label>
    <textarea id="content" name="content" required></textarea>

    <label for="image">Imagem Destacada: </label>
    <input type="file" id="image" name="image" required>

    <button type="submit">Enviar</button>
  </form>
<?php
}
?>