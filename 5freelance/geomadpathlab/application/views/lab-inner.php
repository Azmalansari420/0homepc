<?php include'header.php' ?>

 <!-- labs and collection Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row gx-5">
          <div class="col-lg-6 mb-5 mb-lg-0" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100 rounded"
                src="img/about.png"
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-4">
              <?=$EDITDATA[0]->content ?>
            </div>
           
          </div>
        </div>
        <?=$EDITDATA[0]->bottomcontent ?>
      </div>
      <!-- gallery -->
      <div class="lab-and-collection-gallery container">
        <div class="row gy-3">
          <?php
          $allget = json_decode($EDITDATA[0]->multiple_image_json);
          if(!empty($allget))
          {
          foreach($allget as $data)
            { ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="gallery-images">
              <img src="<?=base_url() ?>media/uploads/labs/<?=$data ?>" alt="" />
            </div>
          </div>
          <?php } } ?>
        </div>
      </div>

      <!-- videos -->
      <div class="lab-and-collection-gallery container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <h5
            class="d-inline-block text-primary text-uppercase border-bottom border-5"
          >
            Videos
          </h5>
          <h1 class="display-4">Our Videos</h1>
        </div>

        <div class="row gy-3">
          <?php
          $this->db->order_by('id desc');
          $video = $this->db->get_where('video',array('status'=>1))->result_object();
          foreach($video as $data)
            { ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="gallery-images">
              <?=$data->content ?>
            </div>
          </div>
         <?php } ?>

          
        </div>
      </div>
    </div>
    <!-- labs and collection End -->

<?php include'footer.php' ?>