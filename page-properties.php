<?php get_header(); ?>
<header class="masthead masthead--med">
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
        <?php if (have_rows('property')): ?>
        <?php while (have_rows('property')): the_row(); ?>
        <li class="property">
          <?php if (get_sub_field('sold')): ?>
          <div class="status">sold</div>
          <?php endif; ?>
          <img src="<?php the_sub_field('featured_image') ?>" alt="Property Thumbnail" class="property__image">
          <div class="property__details">
            <p class="price">$<?php the_sub_field('price'); ?></p>
            <p class="address"><?php the_sub_field('address'); ?></p>
            <div class="amenities">
              <div class="beds">
                <div class="data"><?php the_sub_field('beds'); ?></div>
                <div class="label">Beds</div>
              </div>
              <div class="baths">
                <div class="data"><?php the_sub_field('baths'); ?></div>
                <div class="label">Baths</div>
              </div>
              <div class="square-footage">
                <div class="data"><?php the_sub_field('square_footage'); ?></div>
                <div class="label">sqft</div>
              </div>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>

  </section>
  <?php get_template_part("/partials/cta"); ?>
</main>
<?php get_footer(); ?>