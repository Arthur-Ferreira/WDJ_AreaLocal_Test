<?php

function form_render() {
  ?>
    <section>
      <form id="form" method="post" name="postform" enctype="multipart/form-data" action="">
        <label for="title">Título: </label>
        <input type="text" id="title" name="title" required>

        <label for="content">Conteúdo: </label>
        <textarea id="content" name="content" required></textarea>

        <label for="image">Imagem Destacada: </label>
        <input type="file" id="image" name="image" required>

        <button type="submit" name="submit-post">Enviar</button>
      </form>
    </section>
    <?php
}
?>