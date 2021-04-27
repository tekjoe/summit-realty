<?php get_header(); ?>
<header class="masthead">
  <div class="masthead__body">
    <h1><?php the_title(); ?></h1>
  </div>
</header>
<main>
  <section class="resources">
    <div class="container">
      <div class="row gap-5">
        <div class="col col-60">
          <div class="resources__title">
            <span class="subtitle">we're here to help</span>
            <h2>Helpful Information & Resources</h2>
          </div>
          <h3>Helpful Area Links</h3>
          <ul>
            <li><a href="#">City of Waukesha</a></li>
            <li><a href="#">City of Waukesha</a></li>
            <li><a href="#">City of Waukesha</a></li>
            <li><a href="#">City of Waukesha</a></li>
            <li><a href="#">City of Waukesha</a></li>
            <li><a href="#">City of Waukesha</a></li>
            <li><a href="#">City of Waukesha</a></li>
            <li><a href="#">City of Waukesha</a></li>
            <li><a href="#">City of Waukesha</a></li>
            <li><a href="#">City of Waukesha</a></li>
            <li><a href="#">City of Waukesha</a></li>
          </ul>
          <h3>Helpful Real Estate Links</h3>
          <h4>Lenders</h4>
          <ul>
            <li><a href="">Sunset Bank</a></li>
            <li><a href="">Waukesha State Bank</a></li>
            <li><a href="">Assured Mortgage</a></li>
          </ul>
          <h4>Title Company</h4>
          <h4>Home Inspectors</h4>
          <h4>Grant Info</h4>
        </div>
        <div class="col col-40">
          <div class="about__image"><img
              src="<?php echo get_template_directory_uri() . '/images/';?>summit-placeholder.png" alt="Interior" />
          </div>
        </div>
      </div>
  </section>

  <?php get_template_part("/partials/cta"); ?>
</main>
<?php get_footer(); ?>