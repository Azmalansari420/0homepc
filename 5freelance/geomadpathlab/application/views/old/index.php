
<?php include 'header.php'; ?>

<!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
      <div class="container py-5">
        <div class="row justify-content-start">
          <div class="col-lg-8 text-center text-lg-start">
            <h5
              class="d-inline-block text-primary text-uppercase border-bottom border-5"
              style="border-color: rgba(256, 256, 256, 0.3) !important"
            >
              Welcome To Geomedipath Lab
            </h5>
            <h1 class="display-1 text-white mb-md-4">
              Accurate Blood Tests for Better Health
            </h1>
            <div class="pt-2">
              <a
                href="#our-tests"
                class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2"
                >Our Tests</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row gx-5">
          <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100 rounded"
                src="<?=base_url() ?>img/about.png"
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h5
                class="d-inline-block text-primary text-uppercase border-bottom border-5"
              >
                About Us
              </h5>
              <h1 class="display-4">
                Accurate, Reliable, and Affordable Blood Tests at Geomedipath
              </h1>
            </div>
            <p>
              Geomedipath is a collaborative concept of providing most medical services under one umbrella, we take immense pride and honor in serving every need of individuals, corporate`s, and companies by providing Blood tests, Radiology, and medical services at their door step.
            </p>
            <p>
                This is one such of its kind of a concept that promises to deliver quality with max affordability, we have tie ups with quality labs, Doctors, and medical centers that manages with maintained international standards and has all required accreditations to run any medical service in india.
            </p>
            <div class="row g-3 pt-3">
              <div class="col-sm-3 col-6">
                <div class="bg-light text-center rounded-circle py-4">
                  <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                  <h6 class="mb-0">
                    Qualified<small class="d-block text-primary">Doctors</small>
                  </h6>
                </div>
              </div>
              <div class="col-sm-3 col-6">
                <div class="bg-light text-center rounded-circle py-4">
                  <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                  <h6 class="mb-0">
                    Accurate<small class="d-block text-primary">Testing</small>
                  </h6>
                </div>
              </div>
              <div class="col-sm-3 col-6">
                <div class="bg-light text-center rounded-circle py-4">
                  <i class="fas fa-3x fa-vials text-primary mb-3"></i>
                  <h6 class="mb-0">
                    Painless<small class="d-block text-primary"
                      >Sample Collection</small
                    >
                  </h6>
                </div>
              </div>
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
          <h1 class="display-4">Health Packages</h1>
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
            href="health-packages.php"
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
   

    <div class="container-fluid p-0">
      <div class="middle-banner">
        <img src="<?=base_url() ?>img/middle-banner.jpg" alt="" />
      </div>
    </div>

    <!-- middle-banner end -->

    <!-- blood-test start -->

    <div class="container-fluid py-5">
      <div class="container">
        <div class="row gx-5">
          <div class="col-lg-7">
            <div class="mb-4">
              <h5
                class="d-inline-block text-primary text-uppercase border-bottom border-5"
              >
                Blood Test
              </h5>
              <h1 class="display-4">
                Individual Blood Tests – Know Your Health Better
              </h1>
            </div>
            <p>
              "At Geomedipath, we believe that understanding your health starts
              with knowing the details. Our individual blood tests offer you a
              simple and effective way to gain valuable insights into your
              overall wellness. Whether you're looking to monitor specific
              health conditions or just want to stay proactive with your health,
              our blood tests provide accurate and personalized results. With
              easy access to detailed reports, you’ll be able to make informed
              decisions about your well-being. Trust us to help you stay on top
              of your health—one test at a time."
            </p>
            <div class="row g-3 pt-3">
              <div class="col-sm-3 col-6">
                <div class="bg-light text-center rounded-circle py-4">
                  <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                  <h6 class="mb-0">
                    Qualified<small class="d-block text-primary">Doctors</small>
                  </h6>
                </div>
              </div>
              <div class="col-sm-3 col-6">
                <div class="bg-light text-center rounded-circle py-4">
                  <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                  <h6 class="mb-0">
                    Accurate<small class="d-block text-primary">Testing</small>
                  </h6>
                </div>
              </div>
              <div class="col-sm-3 col-6">
                <div class="bg-light text-center rounded-circle py-4">
                  <i class="fas fa-3x fa-vials text-primary mb-3"></i>
                  <h6 class="mb-0">
                    Painless<small class="d-block text-primary"
                      >Sample Collection</small
                    >
                  </h6>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center mt-5 mb-5 mb-lg-0">
              <a
                href="individual-blood-test.php"
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
          <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100 rounded"
                src="<?=base_url() ?>img/blood-test.webp"
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
          $this->db->limit(3);
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
                  src="<?=base_url() ?>img/xray.jpg"
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

    <div
      class="container-fluid py-5 booking-process-wrapper"
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
        <div class="ag-format-container">
      <div class="ag-courses_box">
        <div class="ag-courses_item">
          <a href="#" class="ag-courses-item_link">
            <div class="ag-courses-item_bg"></div>
            <div class="ag-courses-item_date-box">
              Step:
              <span class="ag-courses-item_date mb-3"> 1</span>
            </div>

            <div class="ag-courses-item_title">
              Find a health package from the range of whole body and other available health packages
            </div>
          </a>
        </div>

        <div class="ag-courses_item">
          <a href="#" class="ag-courses-item_link">
            <div class="ag-courses-item_bg"></div>

            <div class="ag-courses-item_date-box">
              Step:
              <span class="ag-courses-item_date mb-3"> 2</span>
            </div>

            <div class="ag-courses-item_title">
              Our Phlebo will collect the sample from your doorstep ensuring the
              highest safety.
            </div>
          </a>
        </div>

        <div class="ag-courses_item">
          <a href="#" class="ag-courses-item_link">
            <div class="ag-courses-item_bg"></div>

            <div class="ag-courses-item_date-box">
              Step:
              <span class="ag-courses-item_date mb-3"> 3</span>
            </div>

            <div class="ag-courses-item_title">
              Test reports can be downloaded easily from Website.
            </div>
          </a>
        </div>

        <div class="ag-courses_item">
          <a href="#" class="ag-courses-item_link">
            <div class="ag-courses-item_bg"></div>

            <div class="ag-courses-item_date-box">
              Step:
              <span class="ag-courses-item_date mb-3"> 4</span>
            </div>

            <div class="ag-courses-item_title">
              Keep your bill number ready before pressing button talk to doctor
              for free consultation.
            </div>
          </a>
        </div>
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
            > Call Doctor For Free Consultation</a
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