# Projeto Teste Técnico: Teste Prático para Desenvolvedor Web Júnior (Foco em WordPress)

## 📌 Descrição

Este projeto tem como objetivo a criação de um sistema de envio de posts para o WordPress via AJAX. Ele utiliza PHP para processar as requisições e jQuery para validar os campos e enviar o formulário sem recarregar a página. O projeto inclui funcionalidades de criação de posts, com suporte para upload de imagens como thumbnail.

---

## 🚀 **Funcionalidades**

1. **Validação de Formulário com jQuery**: Antes do envio, os campos obrigatórios (título, conteúdo e imagem) são verificados. Caso algum campo esteja vazio, uma mensagem de erro específica será exibida.
2. **Envio de Formulário via AJAX**: O formulário de criação de post é enviado para o WordPress sem recarregar a página.
3. **Criação de Posts**: O sistema cria posts no WordPress com título e conteúdo, e faz a publicação automaticamente.
4. **Upload de Imagens**: Suporte para enviar imagens, que serão configuradas como thumbnails do post.

---

## 🔄 **Fluxo de Trabalho**
1. O usuário preenche o formulário com um **título**, **conteúdo** e uma **imagem**.
2. Antes do envio, o JavaScript verifica se todos os campos obrigatórios estão preenchidos.
3. Se algum campo estiver vazio, uma **mensagem de erro** será exibida abaixo do campo correspondente.
4. Caso todos os campos estejam preenchidos, o formulário é enviado via AJAX para o servidor WordPress.
5. O servidor **valida os dados**, cria o post e, caso uma imagem seja enviada, faz o **upload e a associa como thumbnail**.
6. A resposta é enviada de volta para o navegador, incluindo os dados do post e a URL da imagem.

---

## 🛠 **Tecnologias Utilizadas**
- **WordPress**: Para a gestão de conteúdo e o backend.
- **PHP**: Para o processamento da requisição e criação do post.
- **jQuery**: Para validação dos campos e envio do formulário via AJAX.
- **JavaScript**: Para manipulação dinâmica da página.
- **AJAX**: Para comunicação assíncrona entre o front-end e o back-end.
- **HTML**: Para a marcação e estruturação das páginas.
- **CSS**: Para a estilização e exibição das mensagens de erro.

---

## 📌 **Melhorias Futuras**

- Adicionar **validações mais robustas** no backend para maior segurança.
- Melhorar a **experiência do usuário (UX)** com animações e feedback visual mais intuitivo.
- Criar um sistema de **notificações visuais** ao invés de alertas.
- O **post recém-criado é exibido automaticamente** na lista de posts sem a necessidade de recarregar a página.