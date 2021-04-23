<?php get_header(); ?>
<header class="masthead masthead--big">
  <div class="masthead__body">
    <h1>Experience New Heights in Real Estate Service</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nostrum aliquam dolores ipsam, iure odit
      exercitationem
      sunt cumque quo enim.</p>
  </div>
</header>
<main>
  <section class="call-to-action">
    <a href="#" class="btn btn--big">Get in Touch with Us</a>
  </section>
  <?php get_template_part("/partials/features"); ?>
  <?php get_template_part("/partials/featured-property"); ?>
  <?php get_template_part("/partials/meet-the-team"); ?>
  <?php get_template_part("/partials/testimonials"); ?>
  <?php get_template_part("/partials/cta"); ?>
</main>
<?php get_footer(); ?>