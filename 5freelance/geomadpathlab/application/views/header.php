<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Geomedipath Lab</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Geomedipath Lab" name="keywords" />
    <meta content="Geomedipath Lab" name="description" />

    <!-- Favicon -->
    <link href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url() ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="<?=base_url() ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url() ?>css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?=base_url() ?>css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
              <a
                class="text-decoration-none text-body pe-3"
                href="tel:<?=$sitesetting[0]->mobile ?>"
                ><i class="bi bi-telephone me-2"></i><?=$sitesetting[0]->mobile ?></a
              >
              <span class="text-body">|</span>
              <a
                class="text-decoration-none text-body px-3"
                href="mailto:<?=$sitesetting[0]->email ?>"
                ><i class="bi bi-envelope me-2"></i><?=$sitesetting[0]->email ?></a
              >
            </div>
          </div>
          <div class="col-md-6 text-center text-lg-end">
            <div class="d-inline-flex align-items-center">
              <a class="text-body px-2" href="<?=$sitesetting[0]->facebook ?>">
               <i class="fab fa-facebook-f"></i>
               </a>
               <a class="text-body px-2" href="<?=$sitesetting[0]->twitter ?>">
               <i class="fab fa-twitter"></i>
               </a>
               <a class="text-body px-2" href="<?=$sitesetting[0]->instagram ?>">
               <i class="fab fa-instagram"></i>
               </a>
               <a class="text-body ps-2" href="<?=$sitesetting[0]->youtube ?>">
               <i class="fab fa-youtube"></i>
               </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
          <a href="<?=base_url() ?>" class="navbar-brand">
            <!-- <h1 class="m-0 text-uppercase text-primary">
              <i class="fa fa-clinic-medical me-2"></i>Medinova
            </h1> -->
            <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting[0]->logo ?>" alt="" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
              <a href="<?=base_url() ?>" class="nav-item nav-link active">Home</a>
              <a href="<?=base_url() ?>about" class="nav-item nav-link">About</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Our Tests</a
                >
                <div class="dropdown-menu m-0">
                  <?php
                          $catego = $this->db->get_where('categories',array('status'=>1,))->result_object();
                          foreach($catego as $data)
                            { ?>
                           <a href="<?=base_url($data->slug) ?>" class="dropdown-item"
                              ><?=$data->name ?></a>
                            <?php } ?>
                </div>
              </div>
              <a href="<?=base_url() ?>lab-details-and-network" class="nav-item nav-link"
                >Associated Labs and Network</a
              >
              <a href="<?=base_url() ?>blog" class="nav-item nav-link">Blog</a>
              <a href="<?=base_url() ?>contact" class="nav-item nav-link">Contact</a>
               <a href="<?=base_url() ?>login" class="nav-item nav-link user-link"
                    ><i class="fa fa-user-circle"></i
                  ></a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->