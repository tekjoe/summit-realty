<?php get_header(); ?>
<header class="masthead">
  <div class="masthead__body">
    <h1>Featured Properties</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna
      fringilla</p>
  </div>
</header>
<main>
  <section class="properties">
    <div class="container">
      <div class="properties__title">
        <span class="subtitle">properties for sale</span>
        <h2>We go the extra mile to find the property of your dreams.</h2>
      </div>
      <ul class="properties__list">
        <?php
      $properties = new WP_Query(array('post_type' => "properties"));
      if ($properties->have_posts()):
        while ($properties->have_posts()): $properties->the_post();
        $price = get_field('price');
        $address = get_field('address');
        $beds = get_field('beds');
        $baths = get_field('baths');
        $square_feet = get_field('square_footage');
        ?>
        <li class="property">
          <a href="<?php echo the_permalink(); ?>">
            <div class="status">sold</div>
            <div class="property__image">
              <?php the_post_thumbnail('medium_large'); ?>
            </div>
            <div class="property__details">
              <p class="price">$<?php echo $price ?></p>
              <p class="address"><?php echo $address ?></p>
              <div class="amenities">
                <div class="beds">
                  <div class="data"><?php echo $beds ?></div>
                  <div class="label">Beds</div>
                </div>
                <div class="baths">
                  <div class="data"><?php echo $baths ?></div>
                  <div class="label">Baths</div>
                </div>
                <div class="square-footage">
                  <div class="data"><?php echo $square_feet ?></div>
                  <div class="label">ft²</div>
                </div>
              </div>
            </div>
          </a>
        </li>
        <?php
         endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </ul>
    </div>

  </section>
  <?php get_template_part("/partials/cta"); ?>
</main>
<?php get_footer(); ?>