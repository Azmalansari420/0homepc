<?php include('header.php'); ?>

    <!--Page title-->
    <section class="page-title" style="background-image:url(<?=base_url() ?>images/background.jpeg)">
        <div class="container">
            <div class="outer-box">
                <h1>Contact</h1>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>            
        </div>
    </section>  


    <style>
        .vkn-contact-section{
    background:#f8fbff;
}

.contact-card{
    background:#fff;
    padding:35px;
    border-radius:20px;
    height:100%;
    box-shadow:0 10px 35px rgba(0,0,0,.08);
    transition:.3s;
}

.contact-card:hover{
    transform:translateY(-8px);
}

.contact-card .icon{
    width:70px;
    height:70px;
    background:#0b2c53;
    color:#fff;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    margin-bottom:20px;
}

.contact-card h4{
    color:#0b2c53;
    font-weight:700;
    margin-bottom:15px;
}

.contact-card p{
    color:#666;
    line-height:28px;
}

.contact-card ul{
    list-style:none;
    padding:0;
    margin-top:20px;
}

.contact-card ul li{
    padding:8px 0;
    color:#333;
}

.contact-card ul li i{
    color:#0083b0;
    width:25px;
}

.form-wrapper{
    background:#fff;
    padding:50px;
    border-radius:20px;
    box-shadow:0 10px 35px rgba(0,0,0,.08);
}

.form-control{
    height:55px;
    border-radius:10px;
}

textarea.form-control{
    height:auto;
}

@media(max-width:767px){

    .contact-card{
        padding:25px;
    }

    .form-wrapper{
        padding:25px;
    }

    .map-section iframe{
        height:350px;
    }
}
    </style>
    
    <!-- Contact info section two -->
    <section class="contact-info-section-two sp-four">
        <div class="container">
            <div class="sec-title centered mb-5">
    <h1>Contact Us</h1>
    <div class="text">
        Get in touch with VKN Group for Technical, Security and Cleaning Services across the UAE. Our team is ready to assist you with professional and reliable solutions.
    </div>
</div>
        </div>
       
    </section>

    <section class="vkn-contact-section py-5">
    <div class="container">

        <div class="row">

            <!-- Dubai Office -->
            <div class="col-lg-6 mb-4">
                <div class="contact-card">
                    <div class="icon">
                        <i class="fas fa-building"></i>
                    </div>

                    <h4>Dubai Office</h4>

                    <p><?=$sitesetting->address ?>
                    </p>

                    <ul>
                        <li><i class="fas fa-phone"></i> <?=$sitesetting->mobile ?></li>
                        <li><i class="fas fa-phone"></i> <?=$sitesetting->alt_mobile ?></li>
                        
                        <li><i class="fas fa-envelope"></i> <?=$sitesetting->email ?></li>
                        <li><i class="fas fa-envelope"></i> <?=$sitesetting->alt_email ?></li>
                       
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="form-wrapper">
                    <h3 class="text-center mb-4">
                        Request A Free Quote
                    </h3>
                    <form method="post" action="<?=base_url('welcome/enquiry_form') ?>">

                        <input type="hidden" name="page_url" value="<?=base_url() ?>contact">

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Your Name" name="name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email Address">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Phone Number" name="mobile">
                            </div>

                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Service Required" name="subject">
                            </div>

                            <div class="col-12 mb-3">
                                <textarea class="form-control" rows="6" name="message" placeholder="Your Message"></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <button class="theme-btn btn-style-one" type="submit" name="submit">
                                    Send Inquiry
                                </button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>

            <!-- Sharjah Office -->
            <!-- <div class="col-lg-6 mb-4">
                <div class="contact-card">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>

                    <h4>Sharjah Office</h4>

                    <p>
                        Office No. 3, 1st Floor, Big Business Center,<br>
                        Behind Ibrahim Al Madfa Street,<br>
                        Umm Al Tarafa, Sharjah, UAE
                    </p>

                    <ul>
                        <li><i class="fas fa-phone"></i> +971 6 715 2498</li>
                        <li><i class="fas fa-envelope"></i> infoshj@vkntech.com</li>
                        <li><i class="fas fa-globe"></i> www.vkntech.com</li>
                    </ul>
                </div>
            </div> -->

        </div>

    </div>
</section>


<!-- <section class="contact-form-section py-5">
    <div class="container">

        <div class="form-wrapper">

            <h3 class="text-center mb-4">
                Request A Free Quote
            </h3>

            <form>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Service Required">
                    </div>

                    <div class="col-12 mb-3">
                        <textarea class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <div class="col-12 text-center">
                        <button class="theme-btn btn-style-one">
                            Send Inquiry
                        </button>
                    </div>

                </div>

            </form>

        </div>

    </div>
</section>
 --><style>
    .branch-section{
    padding:80px 0;
    background:linear-gradient(
        135deg,
        #0d2f5f 0%,
        #1c4f9c 60%,
        #c89b3c 100%
    );
    position:relative;
}

.section-title h2{
    color:#fff;
    font-size:42px;
    font-weight:700;
    margin-bottom:50px;
}

.branch-box{
    text-align:center;
    padding:20px;
}

.branch-map{
    width:220px;
    height:220px;
    margin:auto;
    background:#fff;
    border-radius:50%;
    padding:15px;
    display:flex;
    align-items:center;
    justify-content:center;
    box-shadow:0 10px 30px rgba(0,0,0,.25);
    transition:.4s;
}

.branch-map img{
    width:100%;
    max-height:180px;
    object-fit:contain;
}

.branch-box:hover .branch-map{
    transform:translateY(-10px);
}

.branch-box h4{
    color:#fff;
    margin-top:20px;
    font-weight:700;
    font-size:24px;
}

/* Owl Nav */
.branch-carousel .owl-nav{
    text-align:center;
    margin-top:30px;
}

.branch-carousel .owl-prev,
.branch-carousel .owl-next{
    width:45px;
    height:45px;
    border-radius:50% !important;
    background:#fff !important;
    color:#0d2f5f !important;
    margin:0 5px;
    font-size:24px !important;
    line-height:45px !important;
}

.branch-carousel .owl-prev:hover,
.branch-carousel .owl-next:hover{
    background:#c89b3c !important;
    color:#fff !important;
}
</style>
<section class="branch-section">
    <div class="container">
        <div class="section-title text-center">
            <h2>Our Worldwide Branches</h2>
        </div>

        <div class="branch-carousel owl-carousel">

            <div class="branch-box">
                <div class="branch-map">
                   <img src="images/21.png" alt="India">
                </div>
                <h4>India</h4>
            </div>

            <div class="branch-box">
                <div class="branch-map">
                    <img src="images/New-Zealand.png" alt="New Zealand">
                </div>
                <h4>New Zealand</h4>
            </div>

            <div class="branch-box">
                <div class="branch-map">
                    <img src="images/Dubai.png" alt="Dubai">
                </div>
                <h4>Dubai</h4>
            </div>

            <div class="branch-box">
                <div class="branch-map">
                   <img src="images/Sharjah.png" alt="India">
                </div>
                
                <h4>Sharjah</h4>
            </div>

        </div>
    </div>
</section>


<section class="map-section">
    <?=$sitesetting->map ?>
</section>

  <?php include('footer.php'); ?>

  <script>
      $('.branch-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:2
        },
        768:{
            items:3
        },
        1200:{
            items:4
        }
    }
});
  </script>