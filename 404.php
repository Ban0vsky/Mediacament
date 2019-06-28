<?= get_header() ?>

<section class="home_banner_area">
  <div class="banner_inner d-flex align-items-center"
    style="background-image: url('<?= wp_get_attachment_url( $image_id = 185) ?>')">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="banner_content text-center">
              <!-- <h3>Erreur 404</h3> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= get_footer() ?>