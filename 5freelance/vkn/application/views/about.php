<?php include('header.php'); ?>

    <!--Page title-->
    <section class="page-title" style="background-image:url(<?=base_url() ?>images/background.jpeg)">
        <div class="container">
            <div class="outer-box">
                <h1>About Us</h1>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>            
        </div>
    </section>  
<style>
    .about-us-section{
    padding:90px 0;
    background:#f8fbff;
}

.about-image{
    overflow:hidden;
    border-radius:25px;
    box-shadow:0 15px 45px rgba(0,0,0,.12);
}

.about-image img{
    width:100%;
    height:500px;
    object-fit:cover;
    transition:.6s;
}

.about-image:hover img{
    transform:scale(1.05);
}

.about-content .sub-title{
    display:inline-block;
    color:#00b4db;
    font-size:14px;
    font-weight:700;
    letter-spacing:2px;
    margin-bottom:15px;
}

.about-content h2{
    font-size:42px;
    font-weight:800;
    color:#0b2c53;
    margin-bottom:20px;
    line-height:1.3;
}

.about-content p{
    color:#666;
    line-height:30px;
    margin-bottom:20px;
    font-size:16px;
}

.about-list{
    padding:0;
    margin:25px 0;
    list-style:none;
}

.about-list li{
    position:relative;
    padding-left:30px;
    margin-bottom:12px;
    color:#333;
    font-weight:500;
}

.about-list li:before{
    content:"✓";
    position:absolute;
    left:0;
    top:0;
    color:#00b4db;
    font-weight:700;
}

.about-btn{
    display:inline-block;
    padding:14px 35px;
    background:linear-gradient(135deg, #b08830, #ac7f21, #c89b3c);
    color:#fff;
    border-radius:50px;
    text-decoration:none;
    font-weight:600;
    transition:.3s;
}

.about-btn:hover{
    color:#fff;
    transform:translateY(-3px);
}


.mission-block .image:before
{
        background-color: #b088308c;


}

.counter-block .inner-box:before {
    background-color: #b68b31;
}
/* Tablet */
@media(max-width:991px){

    .about-image img{
        height:400px;
    }

    .about-content h2{
        font-size:34px;
    }
}

/* Mobile */
@media(max-width:767px){

    .about-us-section{
        padding:70px 0;
    }

    .about-image img{
        height:280px;
    }

    .about-content{
        text-align:center;
    }

    .about-content h2{
        font-size:28px;
    }

    .about-content p{
        font-size:15px;
        line-height:28px;
    }

    .about-list{
        text-align:left;
    }
}
</style>
    <!-- About us -->
   <section class="about-us-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Image -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-image">
                    <img src="images/about-us.jpeg" alt="About Us" class="img-fluid">
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="sub-title">ABOUT US</span>

                    <h2>
                        Trusted Technical, Security & Cleaning
                        Services Across Dubai
                    </h2>

                    <p>
                        VKN Group provides reliable Technical, Security,
                        and Cleaning Services throughout Dubai. Our
                        experienced professionals are committed to
                        delivering quality solutions tailored to each
                        client’s requirements.
                    </p>

                    <p>
                        With a strong focus on professionalism,
                        reliability, and customer satisfaction, we
                        ensure every project is completed to the
                        highest standards while maintaining
                        cost-effective solutions.
                    </p>

                    <ul class="about-list">
                        <li>Professional & Experienced Team</li>
                        <li>Quality Assured Services</li>
                        <li>24/7 Support & Assistance</li>
                        <li>Customer Focused Approach</li>
                    </ul>

                    <a href="#" class="about-btn">
                        Know More
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .mission-section{
    padding:90px 0;
    background:linear-gradient(180deg,#f8fbff 0%,#ffffff 100%);
}

.mission-section .sec-title{
    margin-bottom:60px;
}

.mission-section .sec-title h1{
    font-size:46px;
    font-weight:800;
    color:#0b2c53;
    margin-bottom:15px;
}

.mission-section .sec-title .text{
    max-width:800px;
    margin:auto;
    color:#666;
    line-height:30px;
}

.mission-block{
    margin-bottom:30px;
}

.mission-block .inner-box{
    background:#fff;
    border-radius:25px;
    overflow:hidden;
    height:100%;
    box-shadow:0 10px 35px rgba(0,0,0,.08);
    transition:.4s;
}

.mission-block .inner-box:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 50px rgba(0,0,0,.15);
}

.mission-block .image{
    overflow:hidden;
}

.mission-block .image img{
    width:100%;
    height:250px;
    object-fit:cover;
    transition:.6s;
}

.mission-block:hover .image img{
    transform:scale(1.08);
}

.mission-block h4{
    font-size:28px;
    font-weight:700;
    color:#0b2c53;
    padding:25px 25px 10px;
    margin:0;
}

.mission-block .text{
    padding:0 25px 30px;
    color:#666;
    line-height:30px;
    font-size:15px;
}

/* Mobile */

@media(max-width:767px){

    .mission-section{
        padding:70px 0;
    }

    .mission-section .sec-title h1{
        font-size:32px;
    }

    .mission-block .image img{
        height:220px;
    }

    .mission-block h4{
        font-size:22px;
    }
}

.icon-box>i {
    font-size: 33px;
    color: black;
}
</style>

   <section class="mission-section sp-five">
    <div class="container">

        <div class="sec-title centered">
            <h1>Why Choose VKN Group</h1>
            <div class="text">
                Delivering reliable Technical, Security and Cleaning Services with professionalism, quality and customer satisfaction across Dubai.
            </div>
        </div>

        <div class="row">

            <!-- Mission -->
            <div class="mission-block col-lg-4 col-md-6">
                <div class="inner-box">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg" alt="">
                    </div>

                    <h4>Our Mission</h4>

                    <div class="text">
                        Our goal is to achieve the highest standards of performance,
                        reliability and service excellence while providing value-added
                        solutions that build long-term relationships with our clients.
                    </div>
                </div>
            </div>

            <!-- Vision -->
            <div class="mission-block col-lg-4 col-md-6">
                <div class="inner-box">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg" alt="">
                    </div>

                    <h4>Our Vision</h4>

                    <div class="text">
                        To be a leading construction and service organization recognized
                        for quality, innovation, proactive service delivery, professional
                        standards and exceptional value.
                    </div>
                </div>
            </div>

            <!-- Why VKN -->
            <div class="mission-block col-lg-4 col-md-6">
                <div class="inner-box">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/3184418/pexels-photo-3184418.jpeg" alt="">
                    </div>

                    <h4>Why VKN Group</h4>

                    <div class="text">
                        With strong technical expertise, experienced professionals and
                        comprehensive service solutions, we provide cost-effective,
                        reliable and customer-focused services tailored to every project.
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

   

    <!-- Funfact section -->
 <section class="funfact-section sp-one">
    <div class="container">

        <div class="sec-title centered">
            <h1>Delivering Excellence Across Dubai</h1>
            <div class="text">
                VKN Group provides comprehensive Technical, Security and Cleaning Services with a strong commitment to quality, reliability and customer satisfaction.
            </div>
        </div>

        <div class="row fact-counter style-two">

            <!-- Counter 1 -->
            <article class="counter-block counter-column col-xl-3 col-lg-6 col-md-6">
                <div class="item">
                    <div class="inner-box">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="250">0</span><span>+</span>
                            <h5>Projects Completed</h5>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-building"></i>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Counter 2 -->
            <article class="counter-block counter-column col-xl-3 col-lg-6 col-md-6">
                <div class="item">
                    <div class="inner-box">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="150">0</span><span>+</span>
                            <h5>Happy Clients</h5>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Counter 3 -->
            <article class="counter-block counter-column col-xl-3 col-lg-6 col-md-6">
                <div class="item">
                    <div class="inner-box">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="10">0</span><span>+</span>
                            <h5>Years Experience</h5>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-award"></i>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Counter 4 -->
            <article class="counter-block counter-column col-xl-3 col-lg-6 col-md-6">
                <div class="item">
                    <div class="inner-box">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="100">0</span><span>%</span>
                            <h5>Customer Satisfaction</h5>
                        </div>
                        <div class="icon-box">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </article>

        </div>

        <div class="bottom-content text-center mt-5">
            <h4>Professional Technical, Security & Cleaning Services</h4>
            <h3>TRUSTED SOLUTIONS FOR RESIDENTIAL & COMMERCIAL CLIENTS</h3>
        </div>

    </div>
</section>

  

<?php include('footer.php'); ?>
