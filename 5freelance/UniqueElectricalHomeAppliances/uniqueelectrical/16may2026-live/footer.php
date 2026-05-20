   <footer id="tt-footer">
   <div class="footer-wrapper">

      <div class="container container-lg-fluid">

         <div class="row footer-row">

            <!-- 1st Section -->
            <div class="col-md-6 col-lg-3 mb-4">

               <div class="footer-logo mb-3">
                  <a href="index.html">
                     <img src="images/logo.png" alt="Logo" style="max-width:180px;background: whitesmoke;border-radius: 10px;">
                  </a>
               </div>

               <p class="footer-text">
                  Unique Electrical Home Appliances provides trusted home appliance 
                  repair and electrician services with fast doorstep support, 
                  affordable pricing, genuine spare parts, and experienced technicians.
               </p>

            </div>

            <!-- 2nd Section -->
            <div class="col-md-6 col-lg-3 mb-4">

               <h4 class="footer-title">Quick Links</h4>

               <ul class="footer-links">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="index.php#about-us">About Us</a></li>
                  <li><a href="index.php#service">Services</a></li>
                  <li><a href="index.php#gallery">Gallery</a></li>
                  <!-- <li><a href="index.php#gallery">Gallery</a></li> -->
                  <li><a href="index.php#faq">FAQ</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
               </ul>

            </div>

            <!-- 3rd Section -->
            <div class="col-md-6 col-lg-3 mb-4">

               <h4 class="footer-title">Our Services</h4>

               <ul class="footer-links">
                  <li><a href="#" data-toggle="modal" data-target="#modalMakeAppointment">AC Repair & Service</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#modalMakeAppointment">Washing Machine Repair</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#modalMakeAppointment">Fridge Repair</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#modalMakeAppointment">LED TV Repair</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#modalMakeAppointment">Microwave Repair</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#modalMakeAppointment">RO Water Purifier Repair</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#modalMakeAppointment">Geyser Repair</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#modalMakeAppointment">Kitchen Chimney Repair</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#modalMakeAppointment">Electrician Services</a></li>
                  
               </ul>

            </div>

            <!-- 4th Section -->
            <div class="col-md-6 col-lg-3 mb-4">

               <h4 class="footer-title">Contact Us</h4>

               <ul class="footer-contact">
                  <li>
                     <span class="icon-telephone"></span>
                     <a href="tel:+919999999999">+91 99999 99999</a>
                  </li>

                  <li>
                     <span class="icon-email"></span>
                     <a href="mailto:info@uniqueelectrical.com">
                        info@uniqueelectrical.com
                     </a>
                  </li>

                  <li>
                     <span class="icon-map-marker"></span>
                     Noida Extension, Greater Noida West, Uttar Pradesh
                  </li>
               </ul>

            </div>

         </div>

         <!-- Copyright -->
         <div class="footer-bottom">

            <div class="row align-items-center">

               <div class="col-md-6">
                  <p class="copyright-text">
                     © 2026 Unique Electrical Home Appliances. All Rights Reserved.
                  </p>
               </div>

               <div class="col-md-6 text-md-end">

                  <ul class="footer-social">
                     <li>
                        <a href="#">
                           <span class="icon-facebook-logo-button"></span>
                        </a>
                     </li>

                     <li>
                        <a href="#">
                           <span class="icon-instagram-logo"></span>
                        </a>
                     </li>

                     <li>
                        <a href="#">
                           <span class="icon-twitter-logo-button"></span>
                        </a>
                     </li>
                  </ul>

               </div>

            </div>

         </div>

      </div>
   </div>
</footer>

<style>
    .custom-call-float, .custom-whatsapp-float {
    position: fixed;
    height: 50px;
    line-height: 50px;
    padding: 0 20px;
    color: #fff;
    border-radius: 50px;
    text-align: center;
    font-size: 16px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    z-index: 1000;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    text-decoration: none;
    transition: transform 0.3s ease;
    gap: 8px;
}

/* Desktop Call Left */
.custom-call-float {
    bottom: 20px;
    left: 20px;
    background-color: #1f74bd; /* call color */
}

/* Desktop WhatsApp Right */
.custom-whatsapp-float {
    bottom: 20px;
    right: 20px;
    background-color: #25d366; /* WhatsApp green */
}

/* Hover */
.custom-call-float:hover, .custom-whatsapp-float:hover {
    transform: scale(1.1);
}

.custom-whatsapp-float img {
    width: 26px;
    height: 26px;
}

/* ---------------------- */
/* MOBILE BOTTOM BAR      */
/* ---------------------- */
.custom-bottom-fixed-bar {
    display: none;
}

@media (max-width: 767px) {
    .custom-call-float, .custom-whatsapp-float {
        display: none;
    }

    .custom-bottom-fixed-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background: #BF4832;
        padding: 10px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 9999;
        box-shadow: 0 -4px 12px rgba(0,0,0,0.25);
    }

    .custom-bottom-btn {
        flex: 1;
        background: #fff;
        color: #BF4832;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        padding: 12px 0;
        margin: 0 6px;
        border-radius: 8px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.25);
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 6px;
    }

    .custom-middle-number {
        flex: 1;
        color: #fff;
        font-size: 18px;
        text-align: center;
        font-weight: bold;
    }

    .custom-whatsapp-btn {
        background: #25d366;
        color: #fff !important;
    }

    .custom-whatsapp-btn img {
        width: 20px;
        height: 20px;
    }
}
</style>

<a href="tel:+919528093204" class="custom-call-float">
    📞 Call Now
</a>

<a href="https://api.whatsapp.com/send?phone=919528093204" target="_blank" class="custom-whatsapp-float">
    <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp">
    WhatsApp
</a>





      <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
      <script src="js/jquery.min.js"></script>
      <script async src="js/bundle.js"></script><!-- modal - Make an Appointment -->
      <div class="modal fade" id="modalMakeAppointment" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-md">
            <div class="modal-content">
               <div class="modal-body form-default modal-layout-dafault">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon-860796"></span></button>
                  <div class="modal-titleblock">
                     <div class="modal-title">Make an Appointment</div>
                  </div>
                  <form class="form-modal" id="jsFormMakeAppointment" method="post" novalidate="novalidate" action="#">
                     <div class="form-group"><input type="text" name="name" class="form-control" id="modalName01" placeholder="Your Name *"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group"><input type="text" name="email" class="form-control" id="modalEmail01" placeholder="Your e-mail address *"></div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group"><input type="text" name="phone" class="form-control" id="modalPhone01" placeholder="Your phone number"></div>
                        </div>
                     </div>
                     <div class="form-group"><input type="text" name="modalAddress" class="form-control" id="modalAddress" placeholder="Address *"></div>
                     <div class="form-group">
                        <div class="custom-select">
                           <select name="typeofservice" class="tt-select">
                              <option value="AC Repair & Service">AC Repair & Service</option>
                              <option value="Washing Machine Repair">Washing Machine Repair</option>
                              <option value="Fridge Repair">Fridge Repair</option>
                              <option value="LED TV Repair">LED TV Repair</option>
                              <option value="Microwave Repair">Microwave Repair</option>
                              <option value="RO Water Purifier Repair">RO Water Purifier Repair</option>
                              <option value="Geyser Repair">Geyser Repair</option>
                              <option value="Kitchen Chimney Repair">Kitchen Chimney Repair</option>
                              <option value="Electrician Services">Electrician Services</option>
                              <option value="Service 05">Service 05</option>
                           </select>
                        </div>
                     </div>
                     
                     <div class="form-group"><textarea name="message" class="form-control" placeholder="Your comment"></textarea></div>
                     <button type="submit" class="tt-btn btn__color01"><span class="icon-lightning"></span>Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="js-backtotop" class="tt-back-to-top"><i class="icon-lightning"></i></a>


      <script>var giftofspeed = document.createElement('link');
         giftofspeed.rel = 'stylesheet';
         giftofspeed.href = 'css/styles__loaded_later.css';
         giftofspeed.type = 'text/css';
         var godefer = document.getElementsByTagName('link')[0];
         godefer.parentNode.insertBefore(giftofspeed, godefer);
      </script>

   </body>
   
</html>