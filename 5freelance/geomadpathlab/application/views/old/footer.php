<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 py-5">
   <div class="container py-5">
      <div class="row g-5">
         <div class="col-lg-3 col-md-6">
            <h4
               class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4"
               >
               About
            </h4>
            <p class="mb-4">
               No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et
               et dolor sed dolor
            </p>
         </div>
         <div class="col-lg-3 col-md-6">
            <h4
               class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4"
               >
               Quick Links
            </h4>
            <div class="d-flex flex-column justify-content-start">
               <a class="text-light mb-2" href="<?=base_url() ?>"
                  ><i class="fa fa-angle-right me-2"></i>Home</a
                  >
               <a class="text-light mb-2" href="<?=base_url() ?>about"
                  ><i class="fa fa-angle-right me-2"></i>About Us</a
                  >
               <a class="text-light mb-2" href="health-packages.php"
                  ><i class="fa fa-angle-right me-2"></i>Health Packages</a
                  >
               <a class="text-light mb-2" href="blog.php"
                  ><i class="fa fa-angle-right me-2"></i>Latest Blog</a
                  >
               <a class="text-light" href="contact.php"
                  ><i class="fa fa-angle-right me-2"></i>Contact Us</a
                  >
               <a class="text-light mb-2" href="<?=base_url() ?>lab-details-and-network"
                  ><i class="fa fa-angle-right me-2"></i>Lab Details and
               Networks</a
                  >
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <h4
               class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4"
               >
               Popular Service
            </h4>
            <div class="d-flex flex-column justify-content-start">
               <?php
                  $catego = $this->db->get_where('categories',array('status'=>1,))->result_object();
                  foreach($catego as $data)
                    { ?>
               <a class="text-light mb-2" href="<?=base_url($data->slug) ?>"
                  ><i class="fa fa-angle-right me-2"></i><?=$data->name ?></a
                  >
               <?php } ?>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <h4
               class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4"
               >
               Contact
            </h4>
            <p class="mb-2">
               <i class="fa fa-map-marker-alt text-primary me-3"></i><?=$sitesetting[0]->address ?>
            </p>
            <p class="mb-2">
               <i class="fa fa-envelope text-primary me-3"></i
                  ><?=$sitesetting[0]->email ?> 
            </p>
            <p class="mb-0">
               <i class="fa fa-phone-alt text-primary me-3"></i><?=$sitesetting[0]->mobile ?> , <?=$sitesetting[0]->alt_mobile ?>
            </p>
            <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
            <div class="d-flex">
               <a
                  class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2"
                  href="<?=$sitesetting[0]->twitter ?>"
                  ><i class="fab fa-twitter"></i
                  ></a>
               <a
                  class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2"
                  href="<?=$sitesetting[0]->facebook ?>"
                  ><i class="fab fa-facebook-f"></i
                  ></a>
               <a
                  class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2"
                  href="<?=$sitesetting[0]->youtube ?>"
                  ><i class="fab fa-youtube"></i
                  ></a>
               <a
                  class="btn btn-lg btn-primary btn-lg-square rounded-circle"
                  href="<?=$sitesetting[0]->instagram ?>"
                  ><i class="fab fa-instagram"></i
                  ></a>
            </div>
         </div>
      </div>
   </div>
</div>
<div
   class="container-fluid bg-dark text-light border-top border-secondary py-4"
   >
   <div class="container">
      <div class="row g-5">
         <div class="col-md-6 text-center text-md-start">
            <p class="mb-md-0">
               Copyright © 2025 All Rights Reserved by
               <a href="#" class="text-uppercase">Geomedipath</a>
            </p>
         </div>
         <!-- <div class="col-md-6 text-center text-md-end">
            <p class="mb-0">
            
              Designed by
            
              <a class="text-primary" href="https://htmlcodex.com"
            
                >planet media center</a
            
              >
            
            </p>
            
            </div> -->
      </div>
   </div>
   <a id="whatsapp" href="https://api.whatsapp.com/send?phone=+918851054064&amp;text=hii ..."><img class="heart" src="img/what.png" style="position: fixed;z-index: 99999;bottom: 90px; left: 14px; width: 60px;"></a>
   <a href="tel:+918851054064"><img class="heart" src="img/call.png" style="position: fixed;z-index: 99999;bottom: 10px; left:15px; width: 60px;"></a>
</div>
<!-- Footer End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
   ><i class="bi bi-arrow-up"></i
   ></a>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url() ?>lib/easing/easing.min.js"></script>
<script src="<?=base_url() ?>lib/waypoints/waypoints.min.js"></script>
<script src="<?=base_url() ?>lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?=base_url() ?>lib/tempusdominus/js/moment.min.js"></script>
<script src="<?=base_url() ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="<?=base_url() ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Template Javascript -->
<script src="<?=base_url() ?>js/main.js"></script>
</body>
</html>