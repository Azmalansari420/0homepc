
<?php include'header.php' ?>

  <!-- Hero Start -->
  <marquee class= "marquee">
      Need Assistance? Please whatapp your prescription
  </marquee>
    
    
    <div class="owl-carousel banner-carousel">
      <?php
      $slider =  $this->db->get_where('slider',array('status'=>1))->result_object();
      foreach($slider as $data)
        { ?>
              <div class="banner-item">
                  <img src="<?=base_url() ?>media/uploads/slider/<?=$data->image ?>"/>
              </div>
            <?php } ?>
   </div>
    
    <!-- Hero End -->
    

<?php
$aboutus =  $this->db->get_where('content',array('id'=>1))->result_object();
?>
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

        <div class="row g-5">
          <?php
          $this->db->limit(3);
          $service = $this->db->get_where('services', [ 
              'status' => 1
          ])->result_object();
          foreach($service as $serdata)
          { ?>
          <div class="col-lg-4 col-md-6">
            <div
              class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
            >
              <div class="service-icon">
                <a href="<?=base_url($serdata->slug) ?>"><img src="<?=base_url() ?>media/uploads/services/<?=$serdata->image ?>" alt="image" /></a>
              </div>
              <h4 class="mb-3"><?=$serdata->name ?></h4>
              <p class="m-0"><?=$serdata->small_content ?></p>
              <a class="btn btn-lg btn-primary rounded-pill" href="<?=base_url($serdata->slug) ?>">
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

        <?php } ?>
         
        </div>
        <div class="d-flex justify-content-center mt-5 mb-5 mb-lg-0">
          <a
            href="our-packages.php"
            style="
              padding: 10px 20px;
              background-color: #c31807;
              color: #fff;
              border-radius: 5px;
              display: inline-block;
            "
            >Read More</a
          >
        </div>
      </div>
    </div>
    <!-- Services End -->

    

    <div class="container-fluid p-0">
      <div class="middle-banner">
        <img src="<?=base_url() ?>img/middle-banner.jpg" alt="" />
      </div>
    </div>

    <!-- middle-banner end -->

    <!-- blood-test start -->
<?php
$blood =  $this->db->get_where('content',array('id'=>2))->result_object();
?>
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row gx-5">
          <div class="col-lg-7">
            <div class="mb-4">
              <?=$blood[0]->content ?>
            </div>
          </div>
          <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100 rounded"
                src="<?=base_url() ?>media/uploads/<?=$blood[0]->logo ?>"
                style="object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- blood-test end -->

    <!-- Xray-ultrasound start -->

    <div class="container-fluid py-5" id="our-tests">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <h5
            class="d-inline-block text-primary text-uppercase border-bottom border-5"
          >
            our tests
          </h5>
          <h1 class="display-4">Radiology</h1>
        </div>
        <div class="row">
          <?php
          $this->db->limit(4);
          $service = $this->db->get_where('sub_categories', [ 
              'status' => 1
          ])->result_object();
          foreach($service as $serdata)
          { ?>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4 mt-lg-0">
            <a href="<?=base_url($serdata->slug) ?>">
              <article class="card">
                <img
                  class="card__background"
                  src="<?=base_url() ?>media/uploads/sub_categories/<?=$serdata->image ?>"
                  alt="card-image"
                  width="1920"
                  height="2193"
                />
                <div class="card__content | flow">
                  <div class="card__content--container | flow">
                    <h2 class="card__title"><?=$serdata->name ?></h2>
                    <p class="card__description"><?=$serdata->description ?></p>
                  </div>
                  <button class="card__button">Read more</button>
                </div>
              </article>
            </a>
          </div>
        <?php } ?>
          

        </div>
        
      </div>
    </div>

    <!-- Xray-ultrasound end -->

    <!-- booking-process -->

    <div class="container-fluid py-5 booking-process-wrapper">
      <section class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <h5
            class="d-inline-block text-primary text-uppercase border-bottom border-5"
          >
            Free Doctor Consultantion
          </h5>
          <i
            class="fa fa-arrow-down me-2"
            style="color: #c31807; display: block; font-size: 40px"
          ></i>
          <h1 class="display-4">Process</h1>
        </div>
        <div class="ag-format-container">
          <div class="ag-courses_box">
            <?php
            $process = $this->db->get_where('process',array('status'=>1))->result_object();
            foreach($process as $key => $data)
              { ?>
            <div class="ag-courses_item">
              <a href="#" class="ag-courses-item_link">
                <div class="ag-courses-item_bg"></div>
                <div class="ag-courses-item_date-box">
                  Step:
                  <span class="ag-courses-item_date mb-3"> <?=$key+1 ?></span>
                </div>

                <div class="ag-courses-item_title">
                  <?=$data->content ?>
                </div>
              </a>
            </div>

           <?php } ?>

            
          </div>
          <div class="d-flex justify-content-center">
            <a
              href="#"
              style="
                padding: 10px 20px;
                background-color: #c31807;
                color: #fff;
                border-radius: 5px;
                display: inline-block;
              "
            >
              Call Doctor For Free Consultation</a
            >
          </div>
        </div>
      </section>
    </div>
    <!-- booking-process end -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <h5
            class="d-inline-block text-primary text-uppercase border-bottom border-5"
          >
            Testimonial
          </h5>
          <h1 class="display-4">Patients Say About Our Services</h1>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="owl-carousel testimonial-carousel">

              <?php
              $this->db->order_by('id desc');
              $testimonials = $this->db->get_where('testimonials',array('status'=>1))->result_object();
              foreach($testimonials as $data)
                { ?>
              <div class="testimonial-item text-center">
                <div class="position-relative mb-5">
                  <img
                    class="img-fluid rounded-circle mx-auto"
                    src="<?=base_url() ?>media/uploads/testimonials/<?=$data->image ?>"
                    alt=""
                  />
                  <div
                    class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                    style="width: 60px; height: 60px"
                  >
                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                  </div>
                </div>
                <p class="fs-4 fw-normal">
                 <?=$data->content ?>
                </p>
                <hr class="w-25 mx-auto" />
                <h3><?=$data->name ?></h3>
                <h6 class="fw-normal text-primary mb-3"><?=$data->position ?></h6>
              </div>

            <?php } ?>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <h5
            class="d-inline-block text-primary text-uppercase border-bottom border-5"
          >
            Blog Post
          </h5>
          <h1 class="display-4">Our Latest Blog Posts</h1>
        </div>
        <div class="row g-5">
          <?php
          $service = $this->db->get_where('blog', [
              'status' => 1
          ])->result_object();
          foreach($service as $data)
            { ?>
          <div class="col-xl-4 col-lg-6">
            <div class="bg-light rounded overflow-hidden">
              <img class="img-fluid w-100" src="<?=base_url() ?>media/uploads/blog/<?=$data->image ?>" alt="" />
              <div class="p-4">
                <a class="h3 d-block mb-3" href="<?=base_url($data->slug) ?>"
                  ><?=$data->name ?></a
                >
              </div>
              <div class="text-center border-top p-4">
                <div><a href="<?=base_url($data->slug) ?>">Read More</a></div>
              </div>
            </div>
          </div>
        <?php } ?>
         
        </div>
      </div>
    </div>
    <!-- Blog End -->

<?php include'footer.php' ?>