<?= get_header() ?>

<?php while (have_posts()): ?>
<?= the_post() ?>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" style="background-image: url('<?= the_post_thumbnail_url() ?>')"></div>
      <div class="container">
        <div class="banner_content text-center">
          <h2>Article</h2>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="news-details.html">Articles</a>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="news_area single-post-area p_100">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main_blog_details">
            <h4><?= the_title() ?></h4>
          </a>
          <?= the_content() ?>
          <div class="news_d_footer">
            <div class="news_socail ml-auto">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
              <a href="#"><i class="fa fa-rss"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile ?>

<?= get_footer() ?>