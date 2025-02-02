<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <div class="header-container">
      <div class="logo-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arealocal-logo.png" alt="Logo da empresa">
      </div>
    </div>

  </header>