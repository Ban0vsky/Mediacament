<?php
  $args=array(
    'theme_location' => 'footer',
    'menu' => 'footer_fr',
    'menu_class' => 'list',
    'menu_id' => 'footer_id',
    'container_class' => 'col-6'
  );
  $arg=array(
    'theme_location' => 'newsletter',
    
  );
?>
<footer class="footer-area">
  <div class="container">
    <div class="row f_widgets_inner">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="single-footer-widget ab_widgets">
          <?= wp_nav_menu($arg)?>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <div class="f_title">
            <h3>Quick Links</h3>
          </div>
          <div class="row">
          <?= wp_nav_menu($args)?>
          </div>
        </div>
      </div>
    </div>
    <div class="row footer-bottom d-flex justify-content-between align-items-center">
      <div class="col-lg-12">
        <div class="f_boder"></div>
      </div>
      <p class="col-lg-8 col-md-8 footer-text m-0">
        Copyright &copy;<?= current_time('Y') ?> All rights reserved |</a>
      </p>
      <div class="col-lg-4 col-md-4 footer-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-rss"></i></a>
      </div>
    </div>
  </div>
</footer>
<?= wp_footer() ?>
</body>

</html>