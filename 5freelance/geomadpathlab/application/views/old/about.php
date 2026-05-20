<?php 
$about = $this->db->get_where('site_setting',array('id'=>2))->result_object();
include'header.php' ?>

<!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row gx-5">
          <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100 rounded"
                src="<?=base_url() ?>media/uploads/site_setting/<?=$about[0]->logo ?>"
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
                <?=$about[0]->content ?>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- booking-process -->
    <div
      class="container-fluid py-5 booking-process-wrapper d-lg-block d-md-block d-none"
    >
      <section class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <h5
            class="d-inline-block text-primary text-uppercase border-bottom border-5"
          >
            HOW WE DO THE TESTING
          </h5>
          <h1 class="display-4">Know what is the Process</h1>
        </div>
        <ol class="booking-processs">
          <li>
            <div class="icon"><i class="fa fa-user"></i></div>
            <div class="title">Step 1</div>
            <div class="descr">
              Find a Health Test you are looking for through more than 3500
              offerings.
            </div>
          </li>
          <li>
            <div class="icon"><i class="fa fa-procedures"></i></div>
            <div class="title">Step 2</div>
            <div class="descr">
              Our Phlebo will collect the sample from your doorstep ensuring the
              highest safety.
            </div>
          </li>
          <li>
            <div class="icon"><i class="fa fa-microscope"></i></div>
            <div class="title">Step 3</div>
            <div class="descr">
              Test reports can be downloaded easily from Email, SMS and WhatsApp
            </div>
          </li>
          <li>
            <div class="icon"><i class="fas fa-vials"></i></div>
            <div class="title">Step 4</div>
            <div class="descr">
              To understand your reports better, get free doctor consultation
              with Health Test.
            </div>
          </li>
        </ol>
      </section>
    </div>
    <!-- booking-process end -->

<?php include'footer.php' ?>