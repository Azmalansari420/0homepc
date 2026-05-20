<?php include'header.php' ?>

 <div class="container-fluid py-5">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <h5
            class="d-inline-block text-primary text-uppercase border-bottom border-5"
          >
            Labs Details and Networks
          </h5>
          <h1 class="display-4">Labs and Collection Centers</h1>
        </div>
        <div class="row g-5">
          <?php
          $service = $this->db->get_where('labs', [
              'status' => 1
          ])->result_object();
          foreach($service as $data)
            { ?>

          <div class="col-xl-6 col-lg-6">
            <div class="lab-details">
                <a href="<?=base_url($data->slug) ?>">
                    <img src="<?=base_url() ?>media/uploads/labs/<?=$data->image ?>" alt="">
                <p><?=$data->name ?></p>
                </a>
            </div>
            <div class="d-flex justify-content-center mt-3">
              <a
                href="<?=base_url($data->slug) ?>"
                style="
                  padding: 10px 20px;
                  background-color: #c31807;
                  color: #fff;
                  border-radius: 5px;
                  display: inline-block;
                "
                >Book Now</a
              >
            </div>
          </div>
        <?php } ?>

          


        </div>
      </div>
    </div>

<?php include'footer.php' ?>