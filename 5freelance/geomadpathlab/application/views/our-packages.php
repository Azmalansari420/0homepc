<?php include'header.php' ?>

<!-- Services Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <h5
            class="d-inline-block text-primary text-uppercase border-bottom border-5"
          >
            Services
          </h5>
          <h1 class="display-4">Our Packages</h1>
        </div>
        <div class="row g-5 justify-content-center">
          <?php
          $service = $this->db->get_where('services', [ 
              'status' => 1
          ])->result_object();
          foreach($service as $serdata)
          { ?>

          <div class="col-lg-3 col-md-6">
            <div
              class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text- p-3 h-100"
            >
              <h4 class="mb-3"><?=$serdata->name ?></h4>
              <p>Includes following tests</p>
              <p class="m-0"><?=$serdata->small_content ?></p>
              
              <div class="service-box-footer">
                <span> <?=currency_simble($serdata->amount) ?></span>
                <a
                  href="<?=base_url($serdata->slug) ?>"
                  style="
                    padding: 10px 20px;
                    background-color: #c31807;
                    color: #fff;
                    border-radius: 5px;
                  "
                  >Book Now</a
                >
              </div>
            </div>
          </div>
        <?php } ?>

        </div>
      </div>
    </div>
    <!-- Services End -->

<?php include'footer.php' ?>