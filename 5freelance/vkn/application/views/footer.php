
    <!-- Contact information -->
   <!--  <section class="contact-info-section">
        <div class="container">
            <div class="contact-info">
                <ul>
                    <li>
                        <div class="iocn-holder">
                            <span class="flaticon-time"></span>
                        </div>
                        <div class="text-holder">
                            <h6>WORKING HOURS</h6>
                            <p>Moday - Sunday: 8.00am to 10.30pm</p>
                        </div>
                    </li>
                    <li>
                        <div class="iocn-holder">
                            <span class="flaticon-phone-call"></span>
                        </div>
                        <div class="text-holder">
                            <h6>CALL US</h6>
                            <p>+111 321 6547</p>
                        </div>
                    </li>
                    <li>
                        <div class="iocn-holder">
                            <span class="flaticon-mail-1"></span>
                        </div>
                        <div class="text-holder">
                            <h6>MAIL US</h6>
                            <p>Security@support.com</p>
                        </div>
                    </li>
                </ul>
            </div>              
        </div>
    </section>

 -->
 <!-- Main footer -->

 <style>
     .main-footer .services-widget .list li a {
    text-transform: none;
}
 </style>
    <footer class="main-footer">
    <div class="container">

        <div class="widgets-section pt-50">
            <div class="row">

                <!-- About Us -->
                <div class="footer-column col-lg-4 col-md-6">
                    <div class="footer-widget about-widget">
                        <div class="footer-logo mb-3">
                            <a href="<?=base_url() ?>">
                                <img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting->logo ?>" alt="VKN Group">
                            </a>
                        </div>

                        <div class="text">
                            VKN Group provides professional Technical, Security, and Cleaning Services across Dubai with a commitment to quality, reliability, and customer satisfaction.
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-column col-lg-4 col-md-6">
                    <div class="footer-widget services-widget">
                        <h2 class="widget-title">Quick Links</h2>

                        <ul class="list">
                            <li><a href="<?=base_url() ?>">Home</a></li>
                            <li><a href="<?=base_url() ?>about">About Us</a></li>
                            <li><a href="<?=base_url() ?>our-client">Our Client</a></li>
                            <li><a href="<?=base_url() ?>gallery">Gallery</a></li>
                            <li><a href="<?=base_url() ?>contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Our Services -->
                <div class="footer-column col-lg-4 col-md-6">
                    <div class="footer-widget services-widget">
                        <h2 class="widget-title">Contact Us</h2>

                        <ul class="list">
                            <li>
                                <i class="fa fa-map-marker-alt"></i>
                                <?=$sitesetting->address ?>
                            </li>


                            <li>
                                <i class="fa fa-phone text-white"></i>
                                <a style="color: white;" href="tel:<?=$sitesetting->mobile ?>"><?=$sitesetting->mobile ?></a>
                            </li>
                            <li>
                                <i class="fa fa-envelope text-white"></i>
                                <a style="color: white;" href="mailto:<?=$sitesetting->email ?>"><?=$sitesetting->email ?></a>
                            </li>
                            <li>
                                <i class="fa fa-globe text-white"></i>
                                <a style="color: white;" href="https://<?=base_url() ?>" target="_blank"><?=base_url() ?></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>

           

            </div>
        </div>

    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="clearfix">

                <div class="float-sm-left">
                    <div class="copyright-text">
                        <p>
                            © 2026 VKN Group. All Rights Reserved.
                        </p>
                    </div>
                </div>

                <!-- <div class="float-sm-right">
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div> -->

            </div>
        </div>
    </div>
</footer>


</div>
<!--End pagewrapper--> 

<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button>
    









    <div class="modal fade" id="quickEnquiryModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content enquiry-modal">

            <div class="modal-header">
                <h4 class="modal-title">Quick Enquiry</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p class="text-muted mb-4">
                    Fill in your details and our team will contact you shortly.
                </p>

                <form action="<?=base_url() ?>welcome/enquiry_form" method="post">
                    <input type="hidden" name="page_url" value="<?=current_url(); ?>">

                    <div class="form-group">
                        <input type="text" class="form-control" name="name"
                            placeholder="Your Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email"
                            placeholder="Email Address">
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control" name="mobile"
                            placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject"
                            placeholder="Subject" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="4" name="message"
                            placeholder="Your Requirement"></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-block enquiry-submit">
                        Submit Enquiry
                    </button>

                </form>
            </div>

        </div>
    </div>
</div>









<style>
  .main-header .header-upper.style-two .social-links a:last-child {
    padding-right: revert-rule !important;
}
.main-header .header-upper.style-two .social-links a {
    position: relative;
    display: inline-block;
    font-size: 20px;
    font-weight: normal;
    color: white;
    padding: 11px 44px;
    line-height: 26px;
}

.main-header .header-upper.style-two .upper-right:before {
    background-color: unset !important;
}


  
    .quick-btn{
    background:#0d6efd;
    color:#fff;
    padding:12px 28px;
    border-radius:30px;
    font-weight:600;
    text-decoration:none;
    transition:.3s;
}

.quick-btn:hover{
    background:#084298;
    color:#fff;
    text-decoration:none;
}

.enquiry-modal{
    border:none;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 15px 50px rgba(0,0,0,.15);
}

.enquiry-modal .modal-header{
    background:linear-gradient(135deg,#0d6efd,#00c6ff);
    color:#fff;
    border:none;
}

.enquiry-modal .close{
    color:#fff;
    opacity:1;
}

.enquiry-modal .modal-title{
    font-weight:700;
}

.enquiry-modal .form-control{
    height:48px;
    border-radius:8px;
    border:1px solid #ddd;
}

.enquiry-modal textarea.form-control{
    height:auto;
}

.enquiry-submit{
    height:50px;
    border:none;
    border-radius:8px;
    background:linear-gradient(135deg,#0d6efd,#00c6ff);
    font-weight:600;
    text-transform:uppercase;
    letter-spacing:.5px;
}
</style>













<div class="floating-buttons">
    <a href="https://wa.me/91<?=$sitesetting->mobile ?>" class="float-btn whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    

</div>

<style>
.floating-buttons{
    position:fixed;
    left:20px;
    bottom:20px;
    z-index:9999;
    display:flex;
    flex-direction:column;
    gap:10px;
}

.float-btn{
    width:55px;
    height:55px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;
    color:#fff;
    font-size:26px;
    box-shadow:0 4px 12px rgba(0,0,0,.2);
    transition:.3s;
}

.float-btn:hover{
    transform:scale(1.1);
}

.whatsapp{
    background:#25D366;
}

.email{
    background:#ff5722;
}

@media(max-width:768px){
    .floating-buttons{
        left:15px;
        bottom:15px;
    }

    .float-btn{
        width:50px;
        height:50px;
        font-size:22px;
    }
}
</style>






<!-- jequery plugins -->

<script src="<?=base_url() ?>js/jquery.js"></script>
<script src="<?=base_url() ?>js/popover.js"></script>
<script src="<?=base_url() ?>js/bootstrap.min.js"></script>

<script src="<?=base_url() ?>js/wow.js"></script>
<script src="<?=base_url() ?>js/owl.js"></script>
<script src="<?=base_url() ?>js/validate.js"></script>
<script src="<?=base_url() ?>js/mixitup.js"></script>
<script src="<?=base_url() ?>js/isotope.js"></script>
<script src="<?=base_url() ?>js/appear.js"></script>
<script src="<?=base_url() ?>js/jquery.fancybox.js"></script>

<script src="<?=base_url() ?>js/script.js"></script>

</body>
</html>