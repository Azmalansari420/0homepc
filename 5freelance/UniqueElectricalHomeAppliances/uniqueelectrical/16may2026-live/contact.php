<?php include('header.php'); ?>  
      <div class="tt-breadcrumb" style="background-image: url('images/breadcrumb_bg.jpg')">
         <div class="container container-lg-fluid">
            <ul>
               <li><a href="index.php">Home</a></li>
               <li>Contacts</li>
            </ul>
         </div>
      </div>
      <main id="tt-pageContent">
         <div class="map-contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.256870782833!2d77.4365625!3d28.6220625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee38108bf165%3A0xe026c7cd3a4874a9!2sUnique%20Electrical%20Home%20Appliances!5e0!3m2!1sen!2sin!4v1778850069806!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
         <div class="section-indent-extra">
            <div class="container container-lg-fluid">
               <div class="section__wrapper02 tt-contact-wrapper">
                  <div class="row justify-content-center">
                     <div class="col-sm-6 col-md-4">
                        <div class="tt-contact">
                           <div class="tt-icon"><i class="icon-map-marker"></i></div>
                           <div class="tt-content">
                              <div class="tt-title">Address:</div>
                              <address>Shop no. 1, Jccp+Rj7, Opposite Bank of India, Shahberi, Greater Noida, Meerut Division Delhi, Shahberi, Greater Noida, Ghaziabad, Uttar Pradesh 201016</address>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4">
                        <div class="tt-contact">
                           <div class="tt-icon"><i class="icon-clock-circular-outline-1"></i></div>
                           <div class="tt-content">
                              <div class="tt-title">Email:</div>
                              info@gmail.com<br>
                              info@gmail.com
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4">
                        <div class="tt-contact">
                           <div class="tt-icon"><i class="icon-telephone"></i></div>
                           <div class="tt-content">
                              <div class="tt-title">Phone Numbers:</div>
                              <address><a href="tel:9528093204">9528093204</a></address>
                              <!-- <address><a href="tel:1(800)7654322">1 (800) 765-43-22 (Office)</a></address> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-indent">
            <div class="container container-md-fluid">
               <div class="section-title max-width-01">
                  <div class="section-title__01">Contact Form</div>
                  <div class="section-title__02">Get In Touch with Us</div>
                  <div class="section-title__03">Are you stumped by a home wiring project or problem? Fill out the form with the details of your situation and we can come to your aid.</div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-md-8">
                     <form id="feedbackform" class="form-default" method="post" novalidate="novalidate" action="#">
                        <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Your Name *"></div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group"><input type="text" name="email" class="form-control" placeholder="Your e-mail address *"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group"><input type="text" name="phonenumber" class="form-control" placeholder="Your phone number"></div>
                           </div>
                        </div>
                        <div class="form-group"><textarea name="message" class="form-control" rows="4" placeholder="Qustion In Detail *"></textarea></div>
                        <div class="form-group">
                           <div class="tt-notes text-center">All Electrical work must be done by a qualified licensed electrician.</div>
                        </div>
                        <div class="form-group text-center"><button class="tt-btn btn__color01" type="submit"><span class="icon-lightning"></span>Contact us</button></div>
                        <div class="tt-modal-message">Form sent successfully</div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </main>
     <?php include('footer.php'); ?>