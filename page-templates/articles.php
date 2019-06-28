<?php
    /*
    Template Name: Articles Page
    */
    get_header();
    $args = array(
      'showposts' => -1,
    );
    $the_query = new WP_Query($args);
?>

<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="background-image: url('<?= IMAGES_URL.'/testimonial.jpg' ?>')">></div>
        <div class="container">
        <div class="banner_content text-center">
          <h2><?= the_title() ?></h2>
          <div class="page_link">
            <a href="<?= bloginfo('url') ?>"><?= bloginfo('title') ?></a>
            <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
          </div>
        </div>
      </div>
  </div>
</section>

<section class="news_area p_100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main_title2">
          <h2>Tous les articles</h2>
        </div>
        <div class="latest_news">
          <?php while ($the_query->have_posts()): ?>
          <?= $the_query->the_post() ?>
          <div class="media">
            <div class="d-flex">
              <img class="img-fluid" src="<?= the_post_thumbnail_url( 'singleThumbnail') ?>" alt="<?= the_title() ?>">
            </div>
            <div class="media-body">
              <div class="choice_text">
                <a href="<?= the_permalink() ?>"><h4><?= the_title() ?></h4></a>
                <p><?= the_excerpt() ?></p>
                <div class="date mt-10">
                  <a class="gad_btn" href="<?= the_permalink() ?>">Lire la suite</a>
                  <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?= the_time('j F Y') ?></a>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>