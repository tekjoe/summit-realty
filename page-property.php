<?php get_header(); ?>
<header class="masthead">
  <div class="masthead__body">
    <h1>2101 61st St, Milwaukee, WI 53207</h1>
  </div>
</header>
<main>
  <section class="intro">
    <div class="intro__body">
      <p class="price">$389,000</p>
      <div class="amenities">
        <div class="beds">
          <div class="data">5</div>
          <div class="label">Beds</div>
        </div>
        <div class="baths">
          <div class="data">3</div>
          <div class="label">Baths</div>
        </div>
        <div class="square-footage">
          <div class="data">2,780</div>
          <div class="label">sqft</div>
        </div>
      </div>
    </div>
  </section>
  <section class="gallery">
    <div class="container">
      <div class="splide" id="primary-slider">
        <div class="splide__track">
          <?php
            $images = get_field('images');
            if ($images): ?>
          <ul class="splide__list">
            <?php foreach ($images as $image): ?>
            <li class="splide__slide"><img src="<?php echo esc_url($image);?>" /></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
      <div class="splide" id="secondary-slider">
        <div class="splide__track">
          <?php
            $images = get_field('images');
            if ($images): ?>
          <ul class="splide__list">
            <?php foreach ($images as $image): ?>
            <li class="splide__slide"><img src="<?php echo esc_url($image);?>" /></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="property-listing">
    <div class="container">
      <div class="details">
        <div class="description">
          <h2>Description</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo rem in est assumenda error temporibus
            quas
            culpa, blanditiis facere esse incidunt. Explicabo nobis reiciendis esse eligendi obcaecati itaque
            consequuntur
            eaque voluptatum fugit laborum perspiciatis rem aliquid aut repudiandae velit inventore deserunt, quos
            cupiditate! Maxime quae repellendus voluptatem quis, eligendi delectus!</p>
          <a href="#" class="btn">Schedule a Showing</a>
          <div class="description__details">
            <div class="description__features">
              <h3>Features</h3>
              <ul>
                <li>Attic</li>
                <li>Balcony, Deck, or Patio</li>
                <li>Basement</li>
                <li>Attic</li>
                <li>Balcony, Deck, or Patio</li>
                <li>Basement</li>
                <li>Attic</li>
                <li>Balcony, Deck, or Patio</li>
                <li>Basement</li>
              </ul>
            </div>
            <div class="description__features">
              <h3>Details</h3>
              <ul>
                <li><strong>Price:</strong></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="listing-agent">
          <img src="<?php echo get_template_directory_uri() . '/images/';?>hannah-kruis.png" alt="Diane McGeen" />
          <div class="listing-agent__description">
            <h4>Diane McGeen</h4>
            <p><em>kevin@summitrealty.org</em></p>
            <p>262-555-5555</p>
            <div class="listing-agent__contact">
              <a href="#"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0ZM9.60129 18.8312C9.60129 17.5796 10.6159 16.5649 11.8675 16.5649C13.1191 16.5649 14.1337 17.5796 14.1337 18.8312V27.9168C14.1337 29.1684 13.1191 30.183 11.8675 30.183C10.6159 30.183 9.60129 29.1684 9.60129 27.9168V18.8312ZM14.4323 12.3522C14.4029 11.017 13.4481 10 11.8975 10C10.347 10 9.33334 11.017 9.33334 12.3522C9.33334 13.6598 10.3171 14.7061 11.8387 14.7061H11.8677C13.4481 14.7061 14.4323 13.6598 14.4323 12.3522ZM25.261 16.2451C28.2435 16.2451 30.4795 18.1919 30.4795 22.3748L30.4794 27.9169C30.4794 29.1684 29.4648 30.183 28.2132 30.183C26.9617 30.183 25.9471 29.1684 25.9471 27.9168V22.8973C25.9471 21.0673 25.2912 19.8185 23.6504 19.8185C22.3983 19.8185 21.6524 20.6604 21.3248 21.4735C21.205 21.7649 21.1756 22.1709 21.1756 22.5779V27.9223C21.1756 29.1711 20.1633 30.1833 18.9146 30.1833C17.6616 30.1833 16.6474 29.1681 16.6523 27.9151C16.6619 25.4223 16.6743 21.4337 16.6669 18.8811C16.6633 17.6181 17.699 16.5653 18.962 16.5653H20.7351C20.9784 16.5653 21.1756 16.7625 21.1756 17.0058C21.1756 17.4445 21.7965 17.6453 22.1231 17.3524C22.7964 16.7488 23.7755 16.2451 25.261 16.2451Z"
                    fill="#2B1736" />
                </svg></a>
              <a href="#"><svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M40 20C40 31.0457 31.0457 40 20 40C8.95431 40 0 31.0457 0 20C0 8.95431 8.95431 0 20 0C31.0457 0 40 8.95431 40 20ZM13.3929 18.1678C11.3895 19.0426 9.33097 19.9413 7.44865 20.9781C7.44858 20.9782 7.44852 20.9782 7.44846 20.9783C7.44843 20.9783 7.44838 20.9784 7.44834 20.9784C6.46557 21.698 7.77201 22.207 8.99754 22.6845C9.19238 22.7604 9.38518 22.8355 9.56641 22.9105C9.71722 22.9569 9.87058 23.0057 10.026 23.0552C11.389 23.4895 12.909 23.9737 14.2322 23.2453C16.4061 21.9966 18.4575 20.5529 20.5074 19.1103C21.179 18.6376 21.8504 18.1651 22.5259 17.6996C22.5575 17.6794 22.5933 17.6562 22.6323 17.6309C23.8482 16.8428 23.5347 18.1343 22.4897 19.138C21.8237 19.7777 21.1427 20.3933 20.4595 21.0107C19.6379 21.7533 18.8133 22.4986 18.0083 23.2919C17.748 23.5034 17.484 23.7942 17.2951 24.1171C16.68 25.1687 17.865 26.1583 18.8692 26.8481C20.1874 27.7535 21.5162 28.6472 22.8444 29.5405C23.4417 29.9422 24.0388 30.3439 24.6349 30.7464C25.645 31.553 27.2238 30.9006 27.4459 29.6403C27.5446 29.0605 27.6438 28.4807 27.743 27.9009C28.2909 24.6971 28.8391 21.4921 29.3234 18.2778C29.3892 17.7736 29.4638 17.2694 29.5384 16.765C29.6387 16.0872 29.7391 15.409 29.8182 14.7298C29.9451 13.6411 29.8893 12.19 28.7933 12.1743C28.3464 12.1679 27.8582 12.2874 27.4962 12.408C23.2419 14.0269 19.03 15.7657 14.8349 17.5352C14.3596 17.7457 13.8779 17.9561 13.3929 18.1678Z"
                    fill="#2B1736" />
                </svg></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part("/partials/cta"); ?>
</main>
<?php get_footer(); ?>