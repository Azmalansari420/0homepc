<?php include'header.php' ?>

<!-- Blog-details Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <h5
            class="d-inline-block text-primary text-uppercase border-bottom border-5"
          >
            Blog-Detailst
          </h5>
          <h1 class="display-4"><?=$EDITDATA[0]->name ?></h1>
        </div>
        <div class="row g-5">
          <div class="col-xl-12 col-lg-12">
            <div class="blog-detail-image">
              <img src="<?=base_url() ?>media/uploads/blog/<?=$EDITDATA[0]->image ?>" alt="" />
            </div>
          </div>
          <div class="col-xl-12 col-lg-12">
            <div class="blog-detail-description">
              <h2><?=$EDITDATA[0]->name ?></h2>
              <?=$EDITDATA[0]->content ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog-details End -->

<?php include'footer.php' ?>