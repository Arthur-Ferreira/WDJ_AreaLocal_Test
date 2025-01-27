<?php

function form_render() {
  ?>
    <article>
      <form id="post-form" method="post">
        <label for="title">Título: </label>
        <input type="text" id="title" name="title" required>

        <label for="content">Descrição: </label>
        <textarea id="content" name="content" required></textarea>

        <label for="image">Imagem Destacada: </label>
        <input type="file" id="image" name="image" required>

        <button type="submit" name="submit-post">Enviar</button>
      </form>
    </article>
    <?php
}
?>