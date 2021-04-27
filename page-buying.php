<?php get_header(); ?>
<header class="masthead">
  <div class="masthead__body">
    <h1><?php the_title(); ?></h1>
  </div>
</header>
<main>
  <section class="buying">
    <div class="container">
      <div class="row gap-5">
        <div class="col col-60">
          <div class="buying__title">
            <span class="subtitle">things to consider</span>
            <h2>Considerations for the Buyer</h2>
          </div>
          <p>According to the National Association of Realtors, the number one thing buyers are looking for in this
            market is "a deal". </p>
          <h3>
            Short Sales – Not Small Houses
          </h3>
          <p>When someone owes the bank more than they can sell their property, they are referred to as "upside-down" in
            their mortgage; they owe more than the home is worth. </p>
          <p>When someone sells a property as a short sale, the current owner accepts an offer, BUT it is contingent
            upon the bank agreeing to take a "short" payoff to cover the mortgage debt.</p>
          <p>This is a new territory – we call it the "wild, wild west of real estate". The rules are different; time
            tables and contracts are at the sole discretion of the bank. It can take 3-6 months to get this approval.
            Short sales are typically only approved if a property is on the brink of foreclosure. If there is more than
            one lender, the time table gets stretched even further. You can get a SUPER deal when purchasing a short
            sale, but it is not easy and you must be patient.</p>
          <h3>
            REO / Bank / Corporate Owned
          </h3>
          <p>REO means Real Estate Owned by a bank or investor. </p>
          <p>When a bank takes a property back from foreclosure they transfer the asset of a mortgage (a paper that says
            I.O.U), to a tangible asset (the house). A REO property has typically been vacant for several months.
            Hopefully it was properly winterized, but not always. </p>
          <p>The previous owners may not have taken the best care of it in the last months of ownership since they knew
            they were losing it, so REO properties usually have some element of distress (some more than others). They
            are cheaper, but they are always sold "as is-where is". A good home inspection can yield some of the
            conditions you are buying, but be prepared for surprises. Homes are meant to be lived in.</p>
          <h3>Sheriff’s Sales</h3>
          <p>When a property is foreclosed on in the State of Wisconsin, they are sold at the County Courthouse at a
            Sheriff's Sale. </p>
          <p>In the majority of cases, the foreclosing bank purchases the asset for what they have invested. It is their
            way of transferring the property from an IOU to and REO. Occasionally people will purchase homes at a
            Sheriff's Sale, but there is a "pecking order" of liens that are dropped (or not dropped) at these sales. It
            is critical to do homework first and enter cautiously. The man who paid $2,000 for a property at a Sheriff's
            Sale may also inherit $200,000 worth of liens. Not a place for unexperienced buyers!</p>
          <h3>Pitfalls</h3>
          <p>Typically these properties will have clear titles (once a full search is conducted). The biggest pitfall is
            the condition of the property. When a property sits empty, seals fail, bugs and rodents move in, sometimes
            copper piping disappears. Caveat emptor (buyer beware). </p>
          <h3>Advantages</h3>
          <p>You can get a great price on real estate. Cash is king, but even financed properties can be purchased at a
            good price. Word of caution: don't look at what it sold for in 2006. We may not be back to those prices for
            ten years. Have a real estate professional tell you what it's worth today!</p>
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