<?php include('header.php'); ?>

    <!-- home1 Banner Section Start-->
    <div class="home1-banner-section">    
        <div class="banner-video-area" style="position: relative;">
            <video id="bannerVideo" autoplay loop muted playsinline 
                src="assets/video/home1-banner-video.mp4">
            </video>
            <button id="audioToggleBtn" class="audio-btn">
                🔇
            </button>
        </div>
        <!-- <div class="banner-content-wrap">
            <div class="container">
                <div class="banner-content">
                    <p>India’s Fastest Growing Community for Solo & Group Travellers</p>
                </div>
            </div>
        </div> -->
    </div>

    <div class="stats-bar">    
        <div class="stat-item">
            <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png">
            <span>563k+ Community</span>
        </div>
        <div class="stat-item">
            <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png">
            <span>⭐ 4.9 (8.5k+ Reviews)</span>
        </div>
        <div class="stat-item">
            <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png">
            <span>35k+ Travellers</span>
        </div>
    </div>
    
    <!-- home1 Banner Section End-->

    <section>
        <div>
            <img src="assets/shark-tank-web-banner-webp-a7bdc21739-1769686546002.webp" class="img-fluid">
        </div>
    </section>

    <div class="home1-destination-section mb-50 mt-50">
        <div class="container">
            <div class="row justify-content-center mb-60 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-10">
                    <div class="section-title text-center">
                        <h2>Explore  Destinations</h2>
                    </div>
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-europe-tab" data-bs-toggle="pill" data-bs-target="#pills-europe" type="button" role="tab" aria-controls="pills-europe" aria-selected="true">🌍 All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-asia-tab" data-bs-toggle="pill" data-bs-target="#pills-asia" type="button" role="tab" aria-controls="pills-asia" aria-selected="false">✈️ International</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-middle-east-tab" data-bs-toggle="pill" data-bs-target="#pills-middle-east" type="button" role="tab" aria-controls="pills-middle-east" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" width="20" height="20">
                                  <rect width="3" height="0.67" y="0" fill="#FF9933"/>
                                  <rect width="3" height="0.66" y="0.67" fill="#FFFFFF"/>
                                  <rect width="3" height="0.67" y="1.33" fill="#138808"/>
                                  <circle cx="1.5" cy="1" r="0.25" fill="none" stroke="#000080" stroke-width="0.03"/>
                                  <g stroke="#000080" stroke-width="0.02">
                                    <line x1="1.5" y1="1" x2="1.5" y2="0.75"/>
                                    <line x1="1.5" y1="1" x2="1.5" y2="1.25"/>
                                    <line x1="1.5" y1="1" x2="1.75" y2="1"/>
                                    <line x1="1.5" y1="1" x2="1.25" y2="1"/>
                                    <line x1="1.5" y1="1" x2="1.68" y2="0.82"/>
                                    <line x1="1.5" y1="1" x2="1.32" y2="0.82"/>
                                    <line x1="1.5" y1="1" x2="1.68" y2="1.18"/>
                                    <line x1="1.5" y1="1" x2="1.32" y2="1.18"/>
                                  </g>
                                </svg> Domestic</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-africa-tab" data-bs-toggle="pill" data-bs-target="#pills-africa" type="button" role="tab" aria-controls="pills-africa" aria-selected="false">🚗 Weekend</button>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-europe" role="tabpanel" aria-labelledby="pills-europe-tab">
                    <div class="swiper home1-destination-slider mb-40">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img1.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Rome, Italy
                                        </a>
                                        <div class="content">
                                            <p>140 tours | 240 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img2.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Paris, France
                                        </a>
                                        <div class="content">
                                            <p>140 tours | 240 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img3.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Switzerland
                                        </a>
                                        <div class="content">
                                            <p>120 tours | 250 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img4.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Scotland, UK
                                        </a>
                                        <div class="content">
                                            <p>110 tours | 230 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img5.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Athens, Greece
                                        </a>
                                        <div class="content">
                                            <p>70 tours | 150 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img6.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Istanbul, Turkey
                                        </a>
                                        <div class="content">
                                            <p>120 tours | 230 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagi-wrap">
                        <div class="home1-destination-pagi paginations"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-asia" role="tabpanel" aria-labelledby="pills-asia-tab">
                    <div class="swiper home1-destination-slider mb-40">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img1.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Rome, Italy
                                        </a>
                                        <div class="content">
                                            <p>140 tours | 240 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img2.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Paris, France
                                        </a>
                                        <div class="content">
                                            <p>140 tours | 240 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img3.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Switzerland
                                        </a>
                                        <div class="content">
                                            <p>120 tours | 250 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img4.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Scotland, UK
                                        </a>
                                        <div class="content">
                                            <p>110 tours | 230 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img5.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Athens, Greece
                                        </a>
                                        <div class="content">
                                            <p>70 tours | 150 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img6.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Istanbul, Turkey
                                        </a>
                                        <div class="content">
                                            <p>120 tours | 230 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagi-wrap">
                        <div class="home1-destination-pagi paginations"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-middle-east" role="tabpanel" aria-labelledby="pills-middle-east-tab">
                    <div class="swiper home1-destination-slider mb-40">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img1.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Rome, Italy
                                        </a>
                                        <div class="content">
                                            <p>140 tours | 240 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img2.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Paris, France
                                        </a>
                                        <div class="content">
                                            <p>140 tours | 240 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img3.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Switzerland
                                        </a>
                                        <div class="content">
                                            <p>120 tours | 250 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img4.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Scotland, UK
                                        </a>
                                        <div class="content">
                                            <p>110 tours | 230 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img5.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Athens, Greece
                                        </a>
                                        <div class="content">
                                            <p>70 tours | 150 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img6.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Istanbul, Turkey
                                        </a>
                                        <div class="content">
                                            <p>120 tours | 230 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagi-wrap">
                        <div class="home1-destination-pagi paginations"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-africa" role="tabpanel" aria-labelledby="pills-africa-tab">
                    <div class="swiper home1-destination-slider mb-40">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img1.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Rome, Italy
                                        </a>
                                        <div class="content">
                                            <p>140 tours | 240 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img2.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Paris, France
                                        </a>
                                        <div class="content">
                                            <p>140 tours | 240 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img3.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Switzerland
                                        </a>
                                        <div class="content">
                                            <p>120 tours | 250 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img4.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Scotland, UK
                                        </a>
                                        <div class="content">
                                            <p>110 tours | 230 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img5.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Athens, Greece
                                        </a>
                                        <div class="content">
                                            <p>70 tours | 150 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="destination-card">
                                    <a href="destination-details.html" class="destination-img">
                                        <img src="assets/img/home1/destination-img6.jpg" alt="">
                                    </a>
                                    <div class="destination-content">
                                        <a href="destination-details.html" class="title-area">
                                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.81276 0C4.31734 0 1.47305 2.84433 1.47305 6.34163C1.47305 9.07242 5.2847 13.5258 6.92356 15.3136C7.15052 15.5628 7.47606 15.7042 7.81276 15.7042C8.14946 15.7042 8.475 15.5628 8.70196 15.3136C10.3408 13.5258 14.1525 9.07238 14.1525 6.34163C14.1525 2.84433 11.3082 0 7.81276 0ZM8.35966 14.9991C8.21642 15.1535 8.02297 15.2391 7.81276 15.2391C7.60255 15.2391 7.4091 15.1536 7.26586 14.9991C5.66417 13.2525 1.93812 8.90875 1.93812 6.34167C1.93812 3.10103 4.57221 0.465067 7.81276 0.465067C11.0533 0.465067 13.6874 3.10103 13.6874 6.34167C13.6874 8.90875 9.96135 13.2524 8.35966 14.9991Z"/>
                                                <path
                                                    d="M7.81277 9.76634C9.6713 9.76634 11.1779 8.25971 11.1779 6.40118C11.1779 4.54265 9.6713 3.03601 7.81277 3.03601C5.95424 3.03601 4.4476 4.54265 4.4476 6.40118C4.4476 8.25971 5.95424 9.76634 7.81277 9.76634Z"/>
                                            </svg>
                                            Istanbul, Turkey
                                        </a>
                                        <div class="content">
                                            <p>120 tours | 230 departure</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagi-wrap">
                        <div class="home1-destination-pagi paginations"></div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    <section>
        <div>
            <img src="assets/soloweb.webp" class="img-fluid">
        </div>
    </section>

    <!-- home1 service Section Start-->
    <div class="home1-destination-section mb-50 mt-100">
        <div class="container">
            <div class="row justify-content-center mb-60 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Upcoming Group Trips</h2>
                    </div>
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-spain-tab" data-bs-toggle="pill" data-bs-target="#pills-spain" type="button" role="tab" aria-controls="pills-spain" aria-selected="false">Spain with Ibiza</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-leh-tab" data-bs-toggle="pill" data-bs-target="#pills-leh" type="button" role="tab" aria-controls="pills-leh" aria-selected="false">Leh</button>
                        </li>
                        
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-spite-tab" data-bs-toggle="pill" data-bs-target="#pills-spite" type="button" role="tab" aria-controls="pills-spite" aria-selected="false">Spiti Valley</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-spain-tab" data-bs-toggle="pill" data-bs-target="#pills-spain" type="button" role="tab" aria-controls="pills-spain" aria-selected="false">Kashmir</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-leh-tab" data-bs-toggle="pill" data-bs-target="#pills-leh" type="button" role="tab" aria-controls="pills-leh" aria-selected="false">Meghalaya</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-spite-tab" data-bs-toggle="pill" data-bs-target="#pills-spite" type="button" role="tab" aria-controls="pills-spite" aria-selected="false">Kedarnath</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-spain-tab" data-bs-toggle="pill" data-bs-target="#pills-spain" type="button" role="tab" aria-controls="pills-spain" aria-selected="false">Almaty</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-leh-tab" data-bs-toggle="pill" data-bs-target="#pills-leh" type="button" role="tab" aria-controls="pills-leh" aria-selected="false">Bhutan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-spite-tab" data-bs-toggle="pill" data-bs-target="#pills-spite" type="button" role="tab" aria-controls="pills-spite" aria-selected="false">Bali</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-spain-tab" data-bs-toggle="pill" data-bs-target="#pills-spain" type="button" role="tab" aria-controls="pills-spain" aria-selected="false">Vietnam</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-leh-tab" data-bs-toggle="pill" data-bs-target="#pills-leh" type="button" role="tab" aria-controls="pills-leh" aria-selected="false">Sri Lanka</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-spite-tab" data-bs-toggle="pill" data-bs-target="#pills-spite" type="button" role="tab" aria-controls="pills-spite" aria-selected="false">Japan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-spain-tab" data-bs-toggle="pill" data-bs-target="#pills-spain" type="button" role="tab" aria-controls="pills-spain" aria-selected="false">Thailand</button>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                    <div class="row mb-40">
                        <div class="col-lg-12">
                            <div class="swiper home1-trip-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Vietnam 8 Days Tour Package (Without Flights)</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 49,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 54,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Bali with Gili Island</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 49,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 54,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Kashmir Tulip Festival 5N 6D</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 9,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 14,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Spiti Valley Bike Trip</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 19,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 24,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="swiper-pagination2 paginations"></div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="pills-spain" role="tabpanel" aria-labelledby="pills-spain-tab">
                    <div class="row mb-40">
                        <div class="col-lg-12">
                            <div class="swiper home1-trip-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Vietnam 8 Days Tour Package (Without Flights)</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 49,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 54,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Bali with Gili Island</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 49,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 54,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Kashmir Tulip Festival 5N 6D</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 9,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 14,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Spiti Valley Bike Trip</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 19,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 24,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="swiper-pagination2 paginations"></div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-leh" role="tabpanel" aria-labelledby="pills-leh-tab">
                    <div class="row mb-40">
                        <div class="col-lg-12">
                            <div class="swiper home1-trip-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Vietnam 8 Days Tour Package (Without Flights)</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 49,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 54,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Bali with Gili Island</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 49,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 54,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Kashmir Tulip Festival 5N 6D</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 9,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 14,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Spiti Valley Bike Trip</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 19,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 24,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="swiper-pagination2 paginations"></div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-spite" role="tabpanel" aria-labelledby="pills-spite-tab">
                    <div class="row mb-40">
                        <div class="col-lg-12">
                            <div class="swiper home1-trip-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image1.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Vietnam 8 Days Tour Package (Without Flights)</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 49,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 54,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image2.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Bali with Gili Island</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 49,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 54,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image3.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Kashmir Tulip Festival 5N 6D</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 9,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 14,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="swiper-slide">
                                        <div class="package-card">
                                            <div class="package-img-wrap">
                                                <div class="swiper package-card-img-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <a href="" class="package-img">
                                                                <img src="assets/image4.webp" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-pagi-wrap">
                                                    <div class="package-card-img-pagi paginations"></div>
                                                </div>
                                                <div class="batch">
                                                    <span>Free Goodies 🎉</span>
                                                </div>
                                            </div>
                                            <div class="package-content">
                                                <div class="location-and-time">
                                                    <div class="location">
                                                        <a href="travel-package-01.html">⌛ 7 nights / 8 days  </a>
                                                    </div>
                                                </div>
                                                <h5><a href="">Spiti Valley Bike Trip</a></h5>
                                                <div class="btn-and-price-area">
                                                    <p class="mb-0"><span class="price-text">₹ 19,999</span> <span style="text-decoration: line-through; text-decoration-color:red;font-size: 12px;color: black;font-weight: 600;">₹ 24,999 </span> <span style="font-size: 12px;color: red;font-weight: 600;">₹ 5,000 off</span> </p>
                                                </div>
                                                
                                                <div class="bottom-area">
                                                    <ul>
                                                        <li>
                                                            <span class="line-clamp-1">📅 May 9, May 16, May 23, Jun 13, Jun 20</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="swiper-pagination2 paginations"></div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- home1 service Section End-->

    <div class=" mb-100">
       <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
             <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="" aria-current="true" aria-label="Slide 1"></button>
             </div>
             <div class="carousel-inner">
                <div class="carousel-item active">
                   <img src="assets/img/home4/home4-offer-slider-img1.jpg" class="d-block w-100" alt="..." style="border-radius: 15px;">
                </div>
                <div class="carousel-item ">
                   <img src="assets/img/home4/home4-offer-slider-img2.jpg" class="d-block w-100" alt="..." style="border-radius: 15px;">
                </div>
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
             </button>
          </div>
       </div>
    </div>



    <!-- home2 service Section Start-->
    <div class="home2-service-section mb-100">
        <div class="container">
            <div class="service-wrapper two">
                <div class="row justify-content-center wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="col-lg-9">
                        <div class="section-title">
                            <h2>Book with Confidence</h2>
                            <svg height="6" viewBox="0 0 872 6" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM867 3.5L872 5.88675V0.113249L867 2.5V3.5ZM4.5 3.5H867.5V2.5H4.5V3.5Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="row service-list wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">

                    <!-- Item 1 -->
                    <div class="col-4 single-service">
                        <div class="icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 2L27 8V14C27 21 22 27 15 29C8 27 3 21 3 14V8L15 2Z"/>
                                <path d="M11 15L14 18L20 11"/>
                            </svg>
                        </div>
                        <div class="content">
                            <h4>Book with Confidence</h4>
                            <p>Secure your spot by paying only 20% of the trip amount.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-4 single-service">
                        <div class="icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="8" width="22" height="14" rx="2"/>
                                <path d="M9 15H21"/>
                                <path d="M15 8V22"/>
                            </svg>
                        </div>
                        <div class="content">
                            <h4>Easy Zero-Cost EMI</h4>
                            <p>Book your trip now with flexible zero-cost EMI options.</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-4 single-service">
                        <div class="icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="12"/>
                                <path d="M10 10L20 20"/>
                                <path d="M20 10L10 20"/>
                            </svg>
                        </div>
                        <div class="content">
                            <h4>Free Cancellation</h4>
                            <p>Cancel your group trips easily without extra charges.</p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="col-4 single-service">
                        <div class="icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 3V15L23 19"/>
                                <circle cx="15" cy="15" r="12"/>
                            </svg>
                        </div>
                        <div class="content">
                            <h4>Free Reschedule</h4>
                            <p>Change your trip dates anytime at no extra cost.</p>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="col-4 single-service">
                        <div class="icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 8H25V18H18L13 23V18H5Z"/>
                                <circle cx="10" cy="13" r="1"/>
                                <circle cx="15" cy="13" r="1"/>
                                <circle cx="20" cy="13" r="1"/>
                            </svg>
                        </div>
                        <div class="content">
                            <h4>24×7 Support</h4>
                            <p>Round the clock assistance with trained trip captains.</p>
                        </div>
                    </div>

                </div>

                <div class="bottom-area d-flex justify-content-center wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="batch two">
                        <a href="travel-package-01.html">Discover Today
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Destination Details customer gallery Section Start-->
    <div class="destionation-dt-customer-gallery-section mb-100">
        <div class="container-fluid">
            <div class="section-title text-center mb-60 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <h2>Recent Customer Experience</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper destionation-dt-customer-gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/img/innerpages/customer-gallery-img1.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <div class="video-area">
                                    <video class="gallery-video" autoplay loop muted playsinline src="https://v2-statics.s3.ap-south-1.amazonaws.com/VibeWithUs/4+Raghupur+Fort+reel.mp4"></video>
                                </div>
                                <button class="mute-btn">🔇 Mute</button>
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/innerpages/customer-gallery-img2.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <div class="video-area">
                                    <video class="gallery-video" autoplay loop muted playsinline src="https://v2-statics.s3.ap-south-1.amazonaws.com/VibeWithUs/3+Georgia+reel.mp4"></video>
                                </div>
                                <button class="mute-btn">🔇 Mute</button>
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/innerpages/customer-gallery-img4.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <div class="video-area">
                                    <video autoplay loop muted playsinline src="assets/video/destination-details-video.mp4"></video>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/innerpages/customer-gallery-img6.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <div class="video-area">
                                    <video autoplay loop muted playsinline src="assets/video/destination-details-video.mp4"></video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Details customer gallery Section End-->

    <!-- Destination Details Best Time Visit Section Start-->
    <div class="destination-dt-travel-season-section mb-100" id="scroll-section">
        <div class="container">

            <div class="section-title text-center mb-60 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <h2>Reasons To Make Us Your Travel Bestie</h2>
            </div>

            <div class="row g-4 justify-content-center">

                <!-- Box 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bestie-box">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Solo is safe.</h4>
                            <p>Girlies, you're safe AF. No need to wait on fam or besties—just pack and go! Explore stress-free with 100% freedom!</p>
                        </div>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bestie-box">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/330/330426.png" alt="">
                        </div>
                        <div class="content">
                            <h4>We're the greenest flag.</h4>
                            <p>We ensure safety with verified stays, reliable transport, and trained guides for a secure, comfy, and hassle-free trip.</p>
                        </div>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bestie-box">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Our Group Captains are fire.</h4>
                            <p>Our awesome trip captains are part-guide, part-friend and full time vibe curators.</p>
                        </div>
                    </div>
                </div>

                <!-- Box 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bestie-box">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="">
                        </div>
                        <div class="content">
                            <h4>No kebab main haddi.</h4>
                            <p>No middlemen, no hidden fees. Enjoy direct bookings, lower costs, and personalized support for a seamless trip.</p>
                        </div>
                    </div>
                </div>

                <!-- Box 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="bestie-box">
                        <div class="icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/545/545682.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Vibe check comes first.</h4>
                            <p>We customize your trips based on age groups, so you're not stuck vibing to someone else's playlist.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Destination Details Best Time Visit Section End-->

    <!-- home2 destination Section Start-->
    <div class="home2-destination-section mb-100">
        <div class="container">
            <div class="section-title text-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <h2>Trending  Destinations</h2>
            </div>
            <div class="destination-slider-area">
                <div class="swiper home2-destination-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="destination-card2">
                                <a href="destination-details.html" class="destination-img">
                                    <img src="assets/img/home2/destination-img1.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <h5><a href="destination-details.html">Great Wall of China</a></h5>
                                    <span>Starting ₹ 19,499</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="destination-card2">
                                <a href="destination-details.html" class="destination-img">
                                    <img src="assets/img/home2/destination-img2.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <h5><a href="destination-details.html">Rome, Itlay</a></h5>
                                    <span>Starting ₹ 19,499</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="destination-card2">
                                <a href="destination-details.html" class="destination-img">
                                    <img src="assets/img/home2/destination-img3.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <h5><a href="destination-details.html">Machu Picchu of Peru</a></h5>
                                    <span>Starting ₹ 19,499</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="destination-card2">
                                <a href="destination-details.html" class="destination-img">
                                    <img src="assets/img/home2/destination-img4.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <h5><a href="destination-details.html">Great Temple Jordan</a></h5>
                                    <span>Starting ₹ 19,499</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="destination-card2">
                                <a href="destination-details.html" class="destination-img">
                                    <img src="assets/img/home2/destination-img5.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <h5><a href="destination-details.html">Athens Greece</a></h5>
                                    <span>Starting ₹ 19,499</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="destination-card2">
                                <a href="destination-details.html" class="destination-img">
                                    <img src="assets/img/home2/destination-img6.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <h5><a href="destination-details.html">Switzerland</a></h5>
                                    <span>Starting ₹ 19,499</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="destination-card2">
                                <a href="destination-details.html" class="destination-img">
                                    <img src="assets/img/home2/destination-img7.jpg" alt="">
                                </a>
                                <div class="destination-content">
                                    <h5><a href="destination-details.html">Norway</a></h5>
                                    <span>Starting ₹ 19,499</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-btn-grp two">
                    <div class="slider-btn destination-slider-prev">
                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.31421H16V6.68564H0V5.31421Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.685714 6.68569C3.9104 6.68569 6.54629 3.84958 6.54629 0.825119V0.139404H5.17486V0.825119C5.17486 3.12181 3.12412 5.31426 0.685714 5.31426H0V6.68569H0.685714Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.685714 5.31421C3.9104 5.31421 6.54629 8.15032 6.54629 11.1748V11.8605H5.17486V11.1748C5.17486 8.87901 3.12412 6.68564 0.685714 6.68564H0V5.31421H0.685714Z"/>
                        </svg>
                    </div>
                    <div class="slider-btn destination-slider-next">
                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 7.31421H-3.8147e-06V8.68564H16V7.31421Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.3143 8.68569C12.0896 8.68569 9.45371 5.84958 9.45371 2.82512V2.1394H10.8251V2.82512C10.8251 5.12181 12.8759 7.31426 15.3143 7.31426H16V8.68569H15.3143Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.3143 7.31421C12.0896 7.31421 9.45371 10.1503 9.45371 13.1748V13.8605H10.8251V13.1748C10.8251 10.879 12.8759 8.68564 15.3143 8.68564H16V7.31421H15.3143Z"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <img src="assets/InvestorWeb-6.webp" class="img-fluid" style="border-radius: 15px;">
        </div>
    </section>


    <section class="review-section">
        <div class="container">
            <div class="review-top">
                <h2>Reviews From Our Travellers</h2>
            </div>

            <div class="review-grid">

                <div class="review-col">
                    <div class="review-box">
                        <div class="review-img">
                            <img src="assets/img/home5/tour-guide-img4.png">
                        </div>
                        <div class="review-content">
                            <div class="stars">★★★★★</div>
                            <p class="text-sm">The Pause Project gave me the space I didn’t realize I was craving. Through guided meditations, mindful exercises, and reflective sessions, I learned to release the tension, guilt, and fears I had been carrying. I left feeling not only refreshed but truly transformed, with tools to maintain calm and clarity in my daily life.</p>
                            <h4>Harsh Bhatiya</h4>
                        </div>
                    </div>
                </div>

                <div class="review-col">
                    <div class="review-box">
                        <div class="review-img">
                            <img src="assets/img/home5/tour-guide-img3.png">
                        </div>
                        <div class="review-content">
                            <div class="stars">★★★★★</div>
                            <p>I didn’t realise how much I had been carrying until The Pause Project gave me the space to release it. Through guided sessions and gentle conversations, I confronted old fears, anger, and sadness. It was intense, yes, but so freeing. I left feeling lighter, open, and at peace with parts of myself I had long ignored.</p>
                            <h4>Rajni Malhotra</h4>
                        </div>
                    </div>
                </div>

                <div class="review-col">
                    <div class="review-box">
                        <div class="review-img">
                            <img src="assets/img/home5/tour-guide-img1.png">
                        </div>
                        <div class="review-content">
                            <div class="stars">★★★★★</div>
                            <p>Joining The Pause Project was one of the best decisions I’ve made for myself. Every moment from the meditations to the heartfelt group sessions encouraged me to look inward and nurture my mental and emotional wellness. It wasn’t just a break from life; it was a breakthrough into living more mindfully and fully.</p>
                            <h4>Gunish</h4>
                        </div>
                    </div>
                </div>

                <div class="review-col">
                    <div class="review-box">
                        <div class="review-img">
                            <img src="assets/img/home5/tour-guide-img2.png">
                        </div>
                        <div class="review-content">
                            <div class="stars">★★★★★</div>
                            <p>Unforgettable Spiti Circuit Ride with Capture A Trip 🚵‍♂️⛰️ The Spiti Valley bike trip with Capture A Trip was just next level. Scenic views, smooth roads (and bumpy ones too 😅), chilled stays, and bikes in top shape – full paisa vasool! The real MVPs — Jatin bhai, Sonam bhai, Vaibhav bhai, and Neeraj bhai — pure legends! Always hyped, super helpful, and made sure we were safe and laughing every day. Total bro-vibes throughout the ride 🙌🔥.Big shoutout to Saurabh for smooth bookings and backend support – clean work!</p>
                            <h4>Shreya Sodani</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- home1 faq Section Start-->
    <div class="home1-faq-section mb-100">
        <div class="container">
            <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-xl-10 col-lg-10">
                    <div class="section-title text-center">
                        <h2>Questions & Answer</h2>
                        <p style="max-width: 100%;">We’re committed to offering more than just products—we provide exceptional experiences.</p>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="faq-wrap">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">What Services Does Your Travel Agency Provide?</button>
                                </h5>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        A travel agency typically provides a wide range of services to ensure a smooth and enjoyable travel experience. As like- <span>Hotel booking, Flight Booking, Visa & Customized Travel Pakcge etc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">Do You Offer Customized Travel Packages?</button>
                                </h5>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                       Absolutely! We offer fully customized travel packages based on your interests, budget, and schedule. Whether you're planning <span>a solo adventure, a family vacation, a romantic getaway, or a group tour</span>, our team will tailor every detail to create a personalized travel experience just for you.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">Can I Book Flights, Hotels, and Tours Separately?</button>
                                </h5>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                       Yes, you can! We provide the flexibility to book <span>flights, hotels, and tours separately</span> based on your specific needs. Whether you need just a flight, only accommodation, or want to add a tour later — we’re here to help you plan each part of your trip your way.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                        aria-expanded="false" aria-controls="flush-collapseFour">Do You Provide Visa Assistance?</button>
                                </h5>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Yes, we do! Our team offers complete <span>visa assistance services</span> to help you navigate the application process smoothly. From providing guidance on required documents to scheduling appointments and submitting applications, we're here to support you every step of the way.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                        aria-expanded="false" aria-controls="flush-collapseFive">What Payment Methods Do You Accept?</button>
                                </h5>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        We accept a variety of <span>payment methods</span> to make your booking process easy and convenient. These include <span>cash, bank transfers, mobile payments (such as bKash, Nagad), and major debit/credit cards</span>. If you have a preferred payment option, feel free to let us know!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <h5 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                        aria-expanded="false" aria-controls="flush-collapseSix">What Travel Documents are Required for International Travel?</button>
                                </h5>
                                <div id="flush-collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        For international travel, you’ll typically need several important <span>travel documents</span>, including a <span>valid passport, visa (if required), airline tickets, travel insurance, and any COVID-19 related health certificates</span>. Depending on your destination, additional documents may be necessary. Our team will guide you through the specific requirements for your trip.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="home1-faq-section mb-100">
        <div class="container">
            <div class="row justify-content-center wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-xl-12 col-lg-12">
                    <div class="section-title text-center">
                        <h2>Loved by Travellers Across India</h2>
                        <p style="max-width: 100%;">Thousands of real travel moments shared by a community that chooses and trusts us.</p>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="bottom-image">
                        <img src="https://v2-statics.s3.ap-south-1.amazonaws.com/bookWithConfidence/static+page+icon/MOGRT+GIF.gif">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- home5 offer Section Start-->
    <div class="home5-offer-section mb-5"> 
        <div class="container">
            <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Recent Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="swiper home1-offer-slider mb-40">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="blog-card2 three">
                            <div class="blog-img-wrap">
                                <a href="" class="blog-img">
                                    <img src="assets/img/home6/blog-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h4><a href="">10 Breathtaking Destinations You Need to Visit This Year.</a></h4>
                                <ul class="blog-meta">
                                    <li><a href="">05 March, 2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card2 three">
                            <div class="blog-img-wrap">
                                <a href="" class="blog-img">
                                    <img src="assets/img/home6/blog-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h4><a href="">10 Breathtaking Destinations You Need to Visit This Year.</a></h4>
                                <ul class="blog-meta">
                                    <li><a href="">05 March, 2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card2 three">
                            <div class="blog-img-wrap">
                                <a href="" class="blog-img">
                                    <img src="assets/img/home6/blog-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h4><a href="">10 Breathtaking Destinations You Need to Visit This Year.</a></h4>
                                <ul class="blog-meta">
                                    <li><a href="">05 March, 2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card2 three">
                            <div class="blog-img-wrap">
                                <a href="" class="blog-img">
                                    <img src="assets/img/home6/blog-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h4><a href="">10 Breathtaking Destinations You Need to Visit This Year.</a></h4>
                                <ul class="blog-meta">
                                    <li><a href="">05 March, 2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-card2 three">
                            <div class="blog-img-wrap">
                                <a href="" class="blog-img">
                                    <img src="assets/img/home6/blog-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h4><a href="">10 Breathtaking Destinations You Need to Visit This Year.</a></h4>
                                <ul class="blog-meta">
                                    <li><a href="">05 March, 2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    
                    
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="swiper-pagination1 paginations two"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- home5 offer Section End-->


    <section>
        <div class="container">
            <img src="assets/InvestorWeb-6.webp" class="img-fluid" style="border-radius: 15px;">
        </div>
    </section>

    <div class="home5-offer-section mb-5 mt-50"> 
        <div class="container">
            <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>The Reality Of A Trip</h2>
                        <p>Watch the reality behind our trips, and real reviews by our users.</p>
                    </div>
                </div>
            </div>
            <div class="swiper home1-offer-slider mb-40">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="video-frame-box">
                            <iframe 
                                src="https://www.youtube.com/embed/-4hUuWDZwZg?rel=0&modestbranding=1&playsinline=1"
                                title="Leh Ladakh with Capture a Trip"
                                frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-frame-box">
                            <iframe 
                                src="https://www.youtube.com/embed/-4hUuWDZwZg?rel=0&modestbranding=1&playsinline=1"
                                title="Leh Ladakh with Capture a Trip"
                                frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-frame-box">
                            <iframe 
                                src="https://www.youtube.com/embed/-4hUuWDZwZg?rel=0&modestbranding=1&playsinline=1"
                                title="Leh Ladakh with Capture a Trip"
                                frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-frame-box">
                            <iframe 
                                src="https://www.youtube.com/embed/-4hUuWDZwZg?rel=0&modestbranding=1&playsinline=1"
                                title="Leh Ladakh with Capture a Trip"
                                frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="video-frame-box">
                            <iframe 
                                src="https://www.youtube.com/embed/-4hUuWDZwZg?rel=0&modestbranding=1&playsinline=1"
                                title="Leh Ladakh with Capture a Trip"
                                frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    
                                       
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="swiper-pagination1 paginations two"></div>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <img src="assets/footer-website-25july.webp" class="img-fluid" style="border-radius: 15px;">
        </div>
    </section>








































<?php include('footer.php'); ?>