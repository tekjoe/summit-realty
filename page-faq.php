<?php get_header(); ?>
<header class="masthead">
  <div class="masthead__body">
    <h1><?php the_title(); ?></h1>
    <p>We get a lot of questions about real estate. Here are some of the most frequently asked questions.</p>
  </div>
</header>
<main>
  <section class="faq-section">
    <div class="container">
      <h2>General Questions</h2>
      <div class="faq-list">
        <?php if (get_field('faqs')): ?>
        <?php while (have_rows('faqs')): the_row();
          $faq = get_sub_field('faq');
          
        ?>
        <div class="faq">
          <p><?php echo $faq['question'] ?></p>
        </div>
        <div class="answer">
          <p>
            <?php echo $faq['answer'] ?>
          </p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
  </section>
  <?php get_template_part("/partials/cta"); ?>
</main>
<?php get_footer(); ?>