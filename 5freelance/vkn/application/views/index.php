<?php include('header.php'); ?>
<style>
    .main-footer .services-widget .list li a {
    text-transform: none !important;
}

</style>

    <!--Main Slider-->
    <section class="">

        <div id="mainSlider" class="carousel slide carousel-fade" data-ride="carousel">
          <!--   
            <ol class="carousel-indicators">
                <?php
                $this->db->order_by('id desc');
                $slider = $this->db->get_where('slider',array('status'=>1))->result_object();
                foreach($slider as $key => $data){ ?>
                <li data-target="#mainSlider" data-slide-to="<?=$key ?>" class="<?php if($key==0) echo 'active' ?>"></li>
                <?php } ?>
               
            </ol> -->

            <div class="carousel-inner">
                <?php
                $this->db->order_by('id desc');
                $slider = $this->db->get_where('slider',array('status'=>1))->result_object();
                foreach($slider as $key => $data){ ?>
                <div class="carousel-item <?php if($key==0) echo 'active' ?>">
                    <img src="<?=base_url() ?>media/uploads/slider/<?=$data->image ?>" class="d-block w-100" alt="">
                </div>
            <?php } ?>

            </div>

            <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>

            <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </section>
    <!--End Main Slider-->

    <!-- Welcome section -->
  <section class="welcome-section">
    <div class="upper-box">
        <div class="sec-title centered">
            <h1>Our Services</h1>
            <div class="text">
                VKN Group provides professional Technical, Security, and Cleaning Services across Dubai. We are committed to delivering reliable, high-quality solutions with experienced professionals, ensuring complete customer satisfaction.
            </div>
        </div>
    </div>

    <div class="lower-box">
        <div class="container">
            <div class="row">

                <div class="content-side col-lg-12">
                    <div class="row">
                        <?php 
                        $service = $this->db->get_where('category',array('status'=>1))->result_object();
                        foreach($service as $data)
                            { ?>
                        <!-- Technical Services -->
                        <div class="news-block-one col-lg-4 col-md-6">
                            <div class="inner-box">
                                <div class="news-content">
                                    <h4><a href="<?=base_url($data->slug) ?>"><?=$data->name ?></a></h4>
                                </div>

                                <div class="image">
                                    <img src="<?=base_url() ?>media/uploads/category/<?=$data->image ?>" alt="Technical Services">
                                </div>

                                <div class="text">
                                    <?=$data->content ?>
                                </div>
                                <a href="<?=base_url($data->slug) ?>" class="service-btn">Read More</a>
                            </div>
                        </div>
                    <?php } ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- About Us -->
<section class="about-section-two sp-two pt-0">
    <div class="container">

        <div class="sec-title centered">
            <h1>About VKN Group</h1>
            <div class="text">
                Delivering reliable Technical, Security, and Cleaning Services across Dubai with quality, professionalism, and commitment.
            </div>
        </div>

        <div class="row">

            <!-- Left Side -->
            <div class="col-lg-6">
                <div class="text mb-4">
                    VKN Group provides a single point of contact to satisfy the most demanding requirements in a cost-effective manner. We have a strong presence in the UAE market, serving both private and public sector clients with comprehensive service solutions.
                </div>

                <div class="text mb-4">
                    Our experienced team works closely with clients to deliver efficient, reliable, and high-quality services. From technical maintenance and security solutions to professional cleaning services, we are committed to exceeding expectations and ensuring complete customer satisfaction.
                </div>

                <style>.about-block .inner-box h4{
    position:relative;
    display:inline-block;
    font-weight:700;
    margin-bottom:20px;
    padding-bottom:12px;
}

.about-block .inner-box h4:after{
    content:'';
    position:absolute;
    left:0;
    bottom:0;
    width:60px;
    height:4px;
    background:linear-gradient(90deg,#007bff,#00c6ff);
    border-radius:10px;
}

.about-block .inner-box h4:before{
    content:'';
    position:absolute;
    left:0;
    bottom:-4px;
    width:18px;
    height:12px;
    background:#007bff;
    clip-path:polygon(0 0,100% 0,75% 100%,0 100%);
}</style>

                <div class="about-block-area">

                    <div class="about-block dark">
                        <div class="inner-box">
                            <!-- <div class="icon-box">
                                <span class="flaticon-computer"></span>
                            </div> -->
                            <h4>Technical Expertise</h4>
                            <div class="text">
                                Professional maintenance, HVAC, plumbing, CCTV, electrical and civil solutions.
                            </div>
                        </div>
                    </div>

                    <div class="about-block dark">
                        <div class="inner-box">
                            <!-- <div class="icon-box">
                                <span class="flaticon-shield"></span>
                            </div> -->
                            <h4>Trusted Services</h4>
                            <div class="text">
                                Reliable security, cleaning, and facility management services across Dubai.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side -->
            <div class="col-lg-6 pl-lg-4">

                <div class="our-skill grey-bg p-4">

                    

                    <h4 class="mt-4">Our Vision</h4>
                    <p>
                        To be a leading construction and services entity known for quality, professional standards, proactive service delivery, and exceptional value.
                    </p>

                    <h4>Our Mission</h4>
                    <p>
                        To achieve the highest standards of performance, reliability, and customer satisfaction while building long-term relationships through value-added services and professional excellence.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>

  
    <!-- Consultation -->
    <section class="consultation-section-two sp-one">
        <div class="container">
            <h3>We Provide Security Services That Matches <br> Your Needs & Your Budget!</h3>
            <form id="conta-form" name="contact_formdd" class="contact-form style-six" action="<?=base_url('welcome/enquiry_form') ?>" method="post">
                <div class="row">
                    <input type="hidden" name="page_url" value="<?=base_url() ?>">
                    <div class="col-lg-8">
                        <div class="row clearfix row-5">
                            <div class="col-md-6 column">        
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" value="" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control required email" value="" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="mobile" class="form-control" value="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 column">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" value="" placeholder="Interested">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control textarea required" placeholder="Enter Your Word"></textarea>
                                </div>
                            </div>                                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div class="number"><?=$sitesetting->mobile ?></div>
                            <div class="text">Thusiastically mesh long-term high-impact infrastructures efficient customer.</div>
                            <div class="form-group style-two">
                                <button name="submit" class="theme-btn btn-style-five" type="submit" >Submit Now</button>
                            </div>
                        </div>                            
                    </div>
                </div>   
            </form>
                
        </div>
    </section>

    <style>
        .filter-tabs li:hover, .filter-tabs li.active {
    background: linear-gradient(135deg, #b08830, #ac7f21, #c89b3c);
    color: #fff !important;
    transform: translateY(-3px);
}
.filter-tabs li:hover span, .filter-tabs li.active span {
    color: white;
    transition: .5s ease;
}
    </style>

    <!--Portfolio Section-->
    <section class="portfolio-section sp-one grey-deep-bg">
        <!--MixitUp Galery-->
        <div class="masonry-gallery">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sec-title">
                            <h1>Our Portfolio</h1>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="float-lg-right">
                            <!--Filter-->
                            <div class="filters mt-lg-3 clearfix">
                                
                                <ul class="filter-tabs filter-btns clearfix">
                                    <li class="active filter" data-role="button" data-filter=".all"> <span>All</span></li>
                                    <?php 
                                            $service = $this->db->get_where('category',array('status'=>1))->result_object();
                                            foreach($service as $data)
                                                { ?>
                                    <li class="filter" data-role="button" data-filter=".<?=$data->slug ?>"> <span><?=$data->name ?></span></li>
                                    <?php } ?>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
            <div class="container-fluid">
                <div class="items-container row clearfix">
                    
                    <?php
                    $this->db->order_by('id desc');
                    $portfolio = $this->db->get_where('portfolio',array('status'=>1))->result_object();
                    foreach($portfolio as $data) {

                    $cate = $this->db->get_where('category',array('id'=>$data->cat_id))->row();
                      ?>
                    <div class="gallery-block-one all five-column <?=$cate->slug ?> col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?=base_url() ?>media/uploads/portfolio/<?=$data->image ?>" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="<?=base_url() ?>media/uploads/portfolio/<?=$data->image ?>" data-fancybox="gallery-images-1" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    
                    
                   
              
                    <!-- End block -->
                </div>
                <!-- <div class="load-more-btn text-center mt-sm-4"><a href="#" class="theme-btn btn-style-nine">View More</a></div> -->
            </div>
        </div>
    </section>
    <!--End Portfolio section-->



    <!-- Testimonial section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="outer-testimonial">
                <div class="testimonial-carousel owl-carousel owl-theme owl-nav-style-four owl-dot-none">

                    <?php
                    $this->db->order_by('id desc');
                    $testimonials = $this->db->get_where('testimonials',array('status'=>1))->result_object();
                    foreach($testimonials as $data)
                     { ?>
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                            <div class="quote">“</div>
                            <div class="author">
                                <h2><?=$data->name ?></h2>
                                <div class="designation"><?=$data->position ?></div>
                            </div>
                            <div class="text-area">
                                <div class="text">
                                    <?=$data->content ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Client logo -->
    <div class="client-logo-section pb-40">
        <div class="container">
            <ul class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <?php
                    $this->db->order_by('id desc');
                    $partner = $this->db->get_where('partner',array('status'=>1))->result_object();
                    foreach($partner as $data)
                     { ?>
                <li><a href="#!"><div class="image"><img src="<?=base_url() ?>media/uploads/partner/<?=$data->image ?>" alt=""></div></a></li>
                <?php } ?>
            </ul>
        </div>
            
    </div>

    <!-- Whychoose section -->
    <section class="whychooseus-section grey-bg sp-one">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="video-image-box pr-lg-5 pb-4">
                        <div class="image">
                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg" alt="VKN Group" class="img-fluid">
            </div>
                    </div>

                    <h5>Trusted Technical, Security & Cleaning Solutions Across Dubai</h5>
                </div>

                <div class="col-lg-6">

                    <div class="sec-title mb-40">
                        <h3>Why Choose VKN Group</h3>
                        <div class="text">
                            VKN Group delivers reliable, cost-effective, and professional services backed by experienced teams, technical expertise, and a strong commitment to customer satisfaction.
                        </div>
                    </div>

                    <ul class="accordion-box style-two">

                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-outer">
                                    <span class="icon icon_plus flaticon-add-plus-button"></span>
                                    <span class="icon icon_minus flaticon-minus"></span>
                                </div>
                                <!-- <span class="count">01.</span> -->
                                Experienced & Professional Team
                            </div>

                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">
                                        Our highly skilled professionals provide dependable technical, security, and cleaning services with the highest standards of quality and safety.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer">
                                    <span class="icon icon_plus flaticon-add-plus-button"></span>
                                    <span class="icon icon_minus flaticon-minus"></span>
                                </div>
                                <!-- <span class="count">02.</span> -->
                                Complete Service Solutions
                            </div>

                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        From HVAC, plumbing, CCTV installation and maintenance to security and cleaning services, we provide comprehensive solutions under one roof.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer">
                                    <span class="icon icon_plus flaticon-add-plus-button"></span>
                                    <span class="icon icon_minus flaticon-minus"></span>
                                </div>
                                <!-- <span class="count">03.</span> -->
                                Customer-Focused Approach
                            </div>

                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        We work closely with our clients to ensure timely project completion, reliable support, and service quality that exceeds expectations.
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer">
                                    <span class="icon icon_plus flaticon-add-plus-button"></span>
                                    <span class="icon icon_minus flaticon-minus"></span>
                                </div>
                                <!-- <span class="count">04.</span> -->
                                Quality & Reliability
                            </div>

                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        Our mission is to deliver cost-effective services while maintaining the highest levels of professionalism, reliability, and customer satisfaction.
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

            </div>
        </div>
    </section>

   


<?php include('footer.php'); ?>