<?php
$aboutus =  $this->db->get_where('content',array('id'=>1))->result_object();
 include'header.php' ?>

<!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row gx-5">
          <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100 rounded"
                src="<?=base_url() ?>media/uploads/<?=$aboutus[0]->logo ?>"
                style="object-fit: cover"
              />
            </div>
          </div>

          <div class="col-lg-7">
            <div class="mb-4">
              <?=$aboutus[0]->content ?>
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
          <?php
            $process = $this->db->get_where('process',array('status'=>1))->result_object();
            foreach($process as $key => $data)
              { ?>
          <li>
            <div class="icon"><i class="fa fa-user"></i></div>
            <div class="title">Step <?=$key+1 ?></div>
            <div class="descr"><?=$data->content ?></div>
          </li>
          <?php } ?>
        </ol>
      </section>
    </div>
    <!-- booking-process end -->

<?php include'footer.php' ?>