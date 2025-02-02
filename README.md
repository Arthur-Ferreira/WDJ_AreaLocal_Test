# Projeto Teste Técnico: Teste Prático para Desenvolvedor Web Júnior (Foco em WordPress)

## Descrição

Este projeto tem como objetivo a criação de um sistema de envio de posts para o WordPress via AJAX. Ele utiliza PHP para processar as requisições e jQuery para enviar o formulário sem recarregar a página. O projeto inclui funcionalidades de criação de posts, com suporte para upload de imagens como thumbnail.

## Funcionalidades

1 Envio de Formulário via AJAX: O formulário de criação de post é enviado para o WordPress sem recarregar a página.

2 Criação de Posts: O sistema cria posts no WordPress com título e conteúdo, e faz a publicação automaticamente.

3 Upload de Imagens: Suporte para enviar imagens, que serão configuradas como thumbnails do post.

TODO - Exibição Dinâmica: Após o envio, o novo post é adicionado dinamicamente na página.
Como Funciona

## Fluxo de Trabalho
O usuário preenche o formulário com um título, conteúdo e uma imagem.
O formulário é enviado via AJAX para o servidor WordPress.
O servidor valida os dados, cria o post e, caso uma imagem seja enviada, faz o upload e a associa como thumbnail.
A resposta é enviada de volta para o navegador, incluindo os dados do post e a URL da imagem.
O post recém-criado é exibido na lista de posts na mesma página, sem a necessidade de recarregar a página.

## Tecnologias Utilizadas
- WordPress: Para a gestão de conteúdo e o backend;
- PHP: Para o processamento da requisição e criação do post;
- jQuery: Para envio do formulário via AJAX;
- JavaScript: Para manipulação dinâmica da página;
- AJAX: Para comunicação assíncrona entre o front-end e o back-end;
- HTML: Para a marcação e estruturação das páginas;
- CSS: Para a estilização.