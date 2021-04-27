<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?> | Summit Realty</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="container">
      <?php get_template_part("/partials/nav") ?>
      <div class="header__mobile">
        <div class="logo">
        </div>
        <div class="hamburger">
          <button class="open-button" id="open-menu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path fill="#000" d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <button class="close-button" id="close-menu">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
              d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
          </svg>
        </button>
        <?php get_template_part('partials/mobile-navigation'); ?>
      </div>
    </div>
  </header>