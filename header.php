<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('description'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oranienbaum&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <main id="main" class="scroll-container">
  <section id="home" class="header">
    <div class="container header__container">
      <h1 class="header__title">
        ALEXEY ZUBKO
      </h1>
      <div class="header__slider">
      <?php echo do_shortcode('[smartslider3 slider="4"]'); ?>
      </div>
</section>