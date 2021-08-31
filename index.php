<?php get_header(); ?>
  <section id="portfolio" class="portfolio">
    <div class="container">
      <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
    </div>
  </section>
  <section id="second-portfolio" class="portfolio">
    <div class="container">
      <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
    </div>
  </section>
  <section id="contact" class="contact">
    <div class="container">
      <h2 class="contact__title">
        CONTACTS
      </h2>
      <div class="contact__body">
        <picture class="contact__picture">
          <img src="<?php the_field('contact__picture') ?>" alt="Author photo">
        </picture>
        <div class="contact__info">
          <p class="contact__text">
            <?php the_field('contact__text') ?>
          </p>
          <div class="contact__name">
            <?php the_field('contact__name') ?>
          </div>
          <div class="contact__links">
            <a href="<?php the_field('contact__links') ?>" class="contact__links-item" target="_blank">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icons/instagram.png" alt="instagram">
            </a>
          </div>
          <div class="contact__phone">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icons/phone.png" alt="phone icon">
            <a href="tel:<?php the_field('contact__phone-1') ?>"><?php the_field('contact__phone-2') ?></a>
          </div>
          <div class="contact__email">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icons/mail.png" alt="mail icon">
            <a href="mailto:<?php the_field('contact__email') ?>"><?php the_field('contact__email') ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>