<?php
    $args1 = array(
      'showposts' => 1,
    );
    $args2 = array(
      'showposts' => 5,
    );
    $the_query1 = new WP_Query($args1);
    $the_query2 = new WP_Query($args2);
    $count = 0;
?>

<?= get_header() ?>
<section class="home_banner_area">
  <?php while ($the_query1->have_posts()): ?>
  <?= $the_query1->the_post() ?>
  <div class="banner_inner d-flex align-items-center"
    style="background-image: url('<?= the_post_thumbnail_url( 'bigThumbnail', $attr ) ?>')">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="banner_content text-center">
              
              <h3><?= the_title() ?></h3>
              <?= the_excerpt() ?>
              <div class="date">
                <a class="gad_btn" href="http://localhost:81/wordpress/qui-sommes-nous/">Lire la suite</a>
                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?= the_time('j F Y') ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile ?>
</section>
<div class="aboutUsContainer">
  <div class="aboutUsBlue"><h1 class="whomstve">Qui sommes-nous?</h1><img class="aboutUsBlueBackground" src="<?= IMAGES_URL.'/studio.png' ?>" alt="bite"><img class="pill" src="<?= IMAGES_URL.'/pill.png' ?>" alt="bite"></div>
  <div class="aboutUsText">
    <h1 class ="pitch">Nous sommes l'équipe de médiacament, des passionnés du digital, de données et d'informatiques.</h1>
    <a class="gad_btn" href="<?= the_permalink() ?>">Lire la suite</a>
  </div>
</div>
<section class="news_area p_100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main_title2">
          <h2>Tous les articles</h2>
        </div>
        <div class="latest_news">
        <?php while ($the_query2->have_posts()): ?>
      <?php
        $the_query2->the_post();
        $count += 1;
      ?>
      <?php if ($count != 1): ?>
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
          <?php endif ?>
      <?php endwhile ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?= get_footer() ?>