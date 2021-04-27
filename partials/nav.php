<nav class="navigation">
  <div class="container">
    <?php wp_nav_menu(array(
              "theme_location" => "header-menu",
              "container" => "ul",
              "container_class" => "nav__links",
              "menu_class" => "nav__links"
              )); ?>
  </div>
</nav>