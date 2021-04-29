<?php get_header(); ?>
<header class="masthead">
  <div class="masthead__body">
    <h1>Get in Touch</h1>
  </div>
</header>
<main>
  <section class="get-in-touch">
    <div class="container">
      <div class="contact">
        <div class="contact__inquiries">
          <h3>General Inquries</h3>
          <p><a href="mailto:info@summitrealty.org">info@summitrealty.org</a></p>
          <p><a href="tel:2625493091">262-549-3091</a></p>
          <h3>Business Hours</h3>
          <p>Monday &ndash; Friday 9AM - 5PM</p>
          <div class="social">
            <a href="https://www.facebook.com/summitrealtywaukeshacounty" target="_blank"><svg viewBox="0 0 32 33"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M32 16.1484C32 7.31094 24.8375 0.148438 16 0.148438C7.1625 0.148438 0 7.31094 0 16.1484C0 24.1359 5.85 30.7547 13.5 31.9547V20.7734H9.4375V16.1484H13.5V12.6234C13.5 8.61406 15.8875 6.39844 19.5438 6.39844C21.2938 6.39844 23.125 6.71094 23.125 6.71094V10.6484H21.1063C19.1188 10.6484 18.5 11.8828 18.5 13.1484V16.1484H22.9375L22.2281 20.7734H18.5V31.9547C26.15 30.7547 32 24.1359 32 16.1484Z"
                  fill="#2B1736" />
              </svg></a>
          </div>
        </div>
        <div class="contact__form">
          <div class="map" id="map"></div>
          <?php echo do_shortcode('[contact-form-7 id="'.get_field('contact_form', 'option').'" title="Contact Form"]'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>