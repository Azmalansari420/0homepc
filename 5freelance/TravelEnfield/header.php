<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TravelEnfield</title>
    <link rel="icon" href="assets/logo.png" type="image/gif" sizes="20x20">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <!-- Nice Select CSS -->
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">
    <!-- BoxIcon  CSS -->
    <link href="assets/css/boxicons.min.css" rel="stylesheet">
    <!--  Calendar CSS  -->
      <link rel="stylesheet" href="assets/css/calendar-css.css">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Title -->
</head>

<style>
    /* default */
header.style-1 {
    width: 100%;
    transition: 0.3s;
    z-index: 999;
}

/* sticky class */
header.style-1.sticky {
    position: fixed;
    top: 0;
    left: 0;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

/* body jump fix */
body.sticky-padding {
    padding-top: 80px; /* header height ke equal */
}
</style>

<body class="tt-magic-cursor">
<!-- 
    <div id="magic-cursor">
        <div id="ball"></div>
    </div> -->

    <!-- Back To Top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
        <svg class="arrow" width="22" height="25" viewBox="0 0 24 23" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0.556131 11.4439L11.8139 0.186067L13.9214 2.29352L13.9422 20.6852L9.70638 20.7061L9.76793 8.22168L3.6064 14.4941L0.556131 11.4439Z"/>
            <path d="M23.1276 11.4999L16.0288 4.40105L15.9991 10.4203L20.1031 14.5243L23.1276 11.4999Z"/>
        </svg>
    </div>

    <div class="top-offer-text-slider-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="top-offer-text-slider-wrap">
                        <div class="slider-btn top-offer-text-slider-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-cf8fe21077683c5b4" aria-disabled="false">
                            <svg width="11" height="12" viewBox="0 0 11 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.42865 10.4085C8.69396 8.57179 5.02049 6.73505 2.81641 6.00036C5.02049 5.26567 8.32661 4.16363 9.42865 1.5922" stroke-width="2" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="swiper top-offer-text-slider swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-cf8fe21077683c5b4" aria-live="off" style="transition-duration: 0ms; transition-delay: 0ms;">
                                <div class="swiper-slide" role="group" aria-label="1 / 3" style="width: 340px; opacity: 0; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                    <a href="travel-package-01.html">One-Click Booking, Upto <strong>FLAT 30%</strong></a>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3" style="width: 340px; opacity: 0; transform: translate3d(-340px, 0px, 0px); transition-duration: 0ms;">
                                    <a href="travel-package-01.html">Customize Your Trip Plan and Get <strong> Discounts</strong> </a>
                                </div>
                                
                            </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="slider-btn top-offer-text-slider-next swiper-button-disabled" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-cf8fe21077683c5b4" aria-disabled="true">
                            <svg width="11" height="12" viewBox="0 0 11 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.57141 10.4085C2.3061 8.57179 5.97957 6.73505 8.18366 6.00036C5.97957 5.26567 2.67345 4.16363 1.57141 1.5922" stroke-width="2" stroke-linecap="round"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header Section Start-->
    <div class="topbar-area d-lg-block d-none">
        <div class="container">
            <div class="topbar-wrap">
                <div class="logo-and-search-area">
                    <a href="index.php" class="header-logo">
                        <img src="assets/logo.png" alt="">
                    </a>
                    <form class="search-area">
                        <div class="form-inner">
                            <button type="submit">
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M15.8044 14.8855L13.0544 12.198L12.99 12.1002C12.8688 11.9807 12.7055 11.9137 12.5353 11.9137C12.3651 11.9137 12.2018 11.9807 12.0806 12.1002C9.74343 14.2443 6.14312 14.3605 3.66561 12.3724C1.18811 10.3843 0.604677 6.90645 2.30061 4.24832C3.99655 1.5902 7.44655 0.573637 10.3631 1.87332C13.2797 3.17301 14.755 6.38739 13.8125 9.38239C13.7793 9.48905 13.7753 9.60268 13.8011 9.71137C13.8269 9.82007 13.8815 9.91983 13.9591 10.0002C14.0375 10.082 14.1358 10.1421 14.2443 10.1746C14.3528 10.2071 14.4679 10.211 14.5784 10.1858C14.6883 10.1616 14.79 10.109 14.8732 10.0332C14.9564 9.95744 15.0182 9.86113 15.0525 9.75395C16.1775 6.19989 14.4781 2.37489 11.0525 0.75395C7.62686 -0.866988 3.50468 0.200824 1.35124 3.26864C-0.802198 6.33645 -0.34001 10.4818 2.43905 13.0239C5.21811 15.5661 9.47968 15.7408 12.4687 13.4377L14.9037 15.8183C15.026 15.9358 15.1889 16.0014 15.3584 16.0014C15.5279 16.0014 15.6909 15.9358 15.8131 15.8183C15.8728 15.7599 15.9201 15.6902 15.9525 15.6133C15.9848 15.5363 16.0015 15.4537 16.0015 15.3702C16.0015 15.2867 15.9848 15.2041 15.9525 15.1271C15.9201 15.0502 15.8728 14.9805 15.8131 14.9221L15.8044 14.8855Z"/>
                                    </g>
                                </svg>
                            </button>
                            <input type="text" placeholder="Find Your Perfect Tour Package">
                        </div>
                    </form>
                </div>
                <div class="topbar-right">
                    <div class="support-and-language-area">
                        <a href="#" class="text-white" style="font-size: large;"> <i class="bi-phone-flip"></i> 9582285014</a>
                    </div>

                    <a href="#" class="primary-btn1 black-bg">
                        <span>
                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M7.50105 7.78913C9.64392 7.78913 11.3956 6.03744 11.3956 3.89456C11.3956 1.75169 9.64392 0 7.50105 0C5.35818 0 3.60652 1.75169 3.60652 3.89456C3.60652 6.03744 5.35821 7.78913 7.50105 7.78913ZM14.1847 10.9014C14.0827 10.6463 13.9467 10.4082 13.7936 10.1871C13.0113 9.0306 11.8038 8.2653 10.4433 8.07822C10.2732 8.06123 10.0861 8.09522 9.95007 8.19727C9.23578 8.72448 8.38546 8.99658 7.50108 8.99658C6.61671 8.99658 5.76638 8.72448 5.05209 8.19727C4.91603 8.09522 4.72895 8.04421 4.5589 8.07822C3.19835 8.2653 1.97387 9.0306 1.20857 10.1871C1.05551 10.4082 0.919443 10.6633 0.817424 10.9014C0.766415 11.0034 0.783407 11.1225 0.834416 11.2245C0.970484 11.4626 1.14054 11.7007 1.2936 11.9048C1.53168 12.2279 1.78679 12.517 2.07592 12.7891C2.31401 13.0272 2.58611 13.2483 2.85824 13.4694C4.20177 14.4728 5.81742 15 7.48409 15C9.15076 15 10.7664 14.4728 12.1099 13.4694C12.382 13.2653 12.6541 13.0272 12.8923 12.7891C13.1644 12.517 13.4365 12.2279 13.6746 11.9048C13.8446 11.6837 13.9977 11.4626 14.1338 11.2245C14.2188 11.1225 14.2358 11.0034 14.1847 10.9014Z"/>
                                </g>
                            </svg>
                            Login
                        </span>
                        <span>
                            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M7.50105 7.78913C9.64392 7.78913 11.3956 6.03744 11.3956 3.89456C11.3956 1.75169 9.64392 0 7.50105 0C5.35818 0 3.60652 1.75169 3.60652 3.89456C3.60652 6.03744 5.35821 7.78913 7.50105 7.78913ZM14.1847 10.9014C14.0827 10.6463 13.9467 10.4082 13.7936 10.1871C13.0113 9.0306 11.8038 8.2653 10.4433 8.07822C10.2732 8.06123 10.0861 8.09522 9.95007 8.19727C9.23578 8.72448 8.38546 8.99658 7.50108 8.99658C6.61671 8.99658 5.76638 8.72448 5.05209 8.19727C4.91603 8.09522 4.72895 8.04421 4.5589 8.07822C3.19835 8.2653 1.97387 9.0306 1.20857 10.1871C1.05551 10.4082 0.919443 10.6633 0.817424 10.9014C0.766415 11.0034 0.783407 11.1225 0.834416 11.2245C0.970484 11.4626 1.14054 11.7007 1.2936 11.9048C1.53168 12.2279 1.78679 12.517 2.07592 12.7891C2.31401 13.0272 2.58611 13.2483 2.85824 13.4694C4.20177 14.4728 5.81742 15 7.48409 15C9.15076 15 10.7664 14.4728 12.1099 13.4694C12.382 13.2653 12.6541 13.0272 12.8923 12.7891C13.1644 12.517 13.4365 12.2279 13.6746 11.9048C13.8446 11.6837 13.9977 11.4626 14.1338 11.2245C14.2188 11.1225 14.2358 11.0034 14.1847 10.9014Z"/>
                                </g>
                            </svg>
                            Login
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <header class="style-1">
        <div class="container d-flex flex-nowrap align-items-center mobile-justify">
            <a href="index.php" class="header-logo d-lg-none d-block">
                <img src="assets/logo.png" alt="">
            </a>
            <div class="main-menu">
                <div class="mobile-logo-area d-lg-none d-flex align-items-center justify-content-between">
                    <a href="index.php" class="mobile-logo-wrap">
                        <img src="assets/logo.png" alt="">
                    </a>
                    <div class="menu-close-btn">
                        <i class="bi bi-x"></i>
                    </div>
                </div>
                <ul class="menu-list">

                    <li><a href="">🏠 Home</a></li>
                    <li><a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" width="20" height="20">
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
                        </svg> 
                        Domestic Trips</a>
                    </li>

                                

                    <li><a href="">✈️ International Packages</a></li>
                    <li><a href="">❤️ Honeymoon Packages</a></li>
                    <li><a href="">👥 Group Tours</a></li>
                    <li><a href="">🎒 Customized Holidays</a></li>
                    <li><a href="">📝 Blogs</a></li>
                    <li><a href="">ℹ️ About Us</a></li>
                    <li><a href="">📞 Contact Us</a></li>
  

                                        
                </ul>
                <div class="contact-area d-lg-none d-flex">
                    <div class="single-contact">
                        <div class="icon">
                            <img src="assets/img/home1/icon/whatsapp-icon.svg" alt="">
                        </div>
                        <div class="content">
                            <span>WhatsApp</span>
                            <a href="https://wa.me/91345533865">+91 345 533 865</a>
                        </div>
                    </div>  
                    <i class="bi bi-caret-down-fill contact-dropdown-btn"></i>
                    <ul class="contact-list">
                        <li class="single-contact">
                            <div class="icon">
                                <img src="assets/img/home1/icon/mail-icon.svg" alt="">
                            </div>
                            <div class="content">
                                <span>Mail Support</span>
                                <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#bdd4d3dbd2fdd8c5dcd0cdd1d893ded2d0"><span class="__cf_email__" data-cfemail="e48d8a828ba4819c8589948881ca878b89">[email&#160;protected]</span></a>
                            </div>
                        </li>
                        <li class="single-contact">
                            <div class="icon">
                                <img src="assets/img/home1/icon/live-chat.svg" alt="">
                            </div>
                            <div class="content">
                                <span>More Inquery</span>
                                <a href="https://wa.me/91345533865">+91 345 533 865</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="#" class="primary-btn1 black-bg d-lg-none d-flex">
                    <span>
                        <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M7.50105 7.78913C9.64392 7.78913 11.3956 6.03744 11.3956 3.89456C11.3956 1.75169 9.64392 0 7.50105 0C5.35818 0 3.60652 1.75169 3.60652 3.89456C3.60652 6.03744 5.35821 7.78913 7.50105 7.78913ZM14.1847 10.9014C14.0827 10.6463 13.9467 10.4082 13.7936 10.1871C13.0113 9.0306 11.8038 8.2653 10.4433 8.07822C10.2732 8.06123 10.0861 8.09522 9.95007 8.19727C9.23578 8.72448 8.38546 8.99658 7.50108 8.99658C6.61671 8.99658 5.76638 8.72448 5.05209 8.19727C4.91603 8.09522 4.72895 8.04421 4.5589 8.07822C3.19835 8.2653 1.97387 9.0306 1.20857 10.1871C1.05551 10.4082 0.919443 10.6633 0.817424 10.9014C0.766415 11.0034 0.783407 11.1225 0.834416 11.2245C0.970484 11.4626 1.14054 11.7007 1.2936 11.9048C1.53168 12.2279 1.78679 12.517 2.07592 12.7891C2.31401 13.0272 2.58611 13.2483 2.85824 13.4694C4.20177 14.4728 5.81742 15 7.48409 15C9.15076 15 10.7664 14.4728 12.1099 13.4694C12.382 13.2653 12.6541 13.0272 12.8923 12.7891C13.1644 12.517 13.4365 12.2279 13.6746 11.9048C13.8446 11.6837 13.9977 11.4626 14.1338 11.2245C14.2188 11.1225 14.2358 11.0034 14.1847 10.9014Z"/>
                            </g>
                        </svg>
                        Login
                    </span>
                    <span>
                        <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M7.50105 7.78913C9.64392 7.78913 11.3956 6.03744 11.3956 3.89456C11.3956 1.75169 9.64392 0 7.50105 0C5.35818 0 3.60652 1.75169 3.60652 3.89456C3.60652 6.03744 5.35821 7.78913 7.50105 7.78913ZM14.1847 10.9014C14.0827 10.6463 13.9467 10.4082 13.7936 10.1871C13.0113 9.0306 11.8038 8.2653 10.4433 8.07822C10.2732 8.06123 10.0861 8.09522 9.95007 8.19727C9.23578 8.72448 8.38546 8.99658 7.50108 8.99658C6.61671 8.99658 5.76638 8.72448 5.05209 8.19727C4.91603 8.09522 4.72895 8.04421 4.5589 8.07822C3.19835 8.2653 1.97387 9.0306 1.20857 10.1871C1.05551 10.4082 0.919443 10.6633 0.817424 10.9014C0.766415 11.0034 0.783407 11.1225 0.834416 11.2245C0.970484 11.4626 1.14054 11.7007 1.2936 11.9048C1.53168 12.2279 1.78679 12.517 2.07592 12.7891C2.31401 13.0272 2.58611 13.2483 2.85824 13.4694C4.20177 14.4728 5.81742 15 7.48409 15C9.15076 15 10.7664 14.4728 12.1099 13.4694C12.382 13.2653 12.6541 13.0272 12.8923 12.7891C13.1644 12.517 13.4365 12.2279 13.6746 11.9048C13.8446 11.6837 13.9977 11.4626 14.1338 11.2245C14.2188 11.1225 14.2358 11.0034 14.1847 10.9014Z"/>
                            </g>
                        </svg>
                        Login
                    </span>
                </a>
            </div>
            <div class="nav-right">

                <!-- <div class="contact-area d-lg-flex d-none">
                    <div class="single-contact">
                        <div class="icon">
                            <img src="assets/img/home1/icon/whatsapp-icon.svg" alt="">
                        </div>
                        <div class="content">
                            <span>WhatsApp</span>
                            <a href="https://wa.me/91345533865">+91 345 533 865</a>
                        </div>
                    </div>  
                    <i class="bi bi-caret-down-fill contact-dropdown-btn"></i>
                    <ul class="contact-list">
                        <li class="single-contact">
                            <div class="icon">
                                <img src="assets/img/home1/icon/mail-icon.svg" alt="">
                            </div>
                            <div class="content">
                                <span>Mail Support</span>
                                <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#325b5c545d72574a535f425e571c515d5f"><span class="__cf_email__" data-cfemail="1d74737b725d78657c706d7178337e7270">[email&#160;protected]</span></a>
                            </div>
                        </li>
                        <li class="single-contact">
                            <div class="icon">
                                <img src="assets/img/home1/icon/live-chat.svg" alt="">
                            </div>
                            <div class="content">
                                <span>More Inquery</span>
                                <a href="https://wa.me/91345533865">+91 345 533 865</a>
                            </div>
                        </li>
                    </ul>
                </div> -->
                
                <div class="search-bar d-lg-none d-block">
                    <div class="search-btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M15.7417 14.6098L13.486 12.3621C14.7088 10.8514 15.3054 8.9291 15.1526 6.99153C14.9998 5.05396 14.1093 3.24888 12.6648 1.94851C11.2203 0.648146 9.33193 -0.0483622 7.38901 0.00261294C5.44609 0.0535881 3.59681 0.84816 2.22248 2.22248C0.84816 3.59681 0.0535881 5.44609 0.00261294 7.38901C-0.0483622 9.33193 0.648146 11.2203 1.94851 12.6648C3.24888 14.1093 5.05396 14.9998 6.99153 15.1526C8.9291 15.3054 10.8514 14.7088 12.3621 13.486L14.6098 15.7417C14.6839 15.8164 14.7721 15.8757 14.8692 15.9161C14.9664 15.9566 15.0705 15.9774 15.1758 15.9774C15.281 15.9774 15.3852 15.9566 15.4823 15.9161C15.5794 15.8757 15.6676 15.8164 15.7417 15.7417C15.8164 15.6676 15.8757 15.5794 15.9161 15.4823C15.9566 15.3852 15.9774 15.281 15.9774 15.1758C15.9774 15.0705 15.9566 14.9664 15.9161 14.8692C15.8757 14.7721 15.8164 14.6839 15.7417 14.6098ZM1.62572 7.60368C1.62572 6.42135 1.97632 5.26557 2.63319 4.2825C3.29005 3.29943 4.22368 2.53322 5.31601 2.08076C6.40834 1.62831 7.61031 1.50992 8.76992 1.74058C9.92953 1.97124 10.9947 2.54059 11.8307 3.37662C12.6668 4.21266 13.2361 5.27783 13.4668 6.43744C13.6974 7.59705 13.579 8.79902 13.1266 9.89134C12.6741 10.9837 11.9079 11.9173 10.9249 12.5742C9.94178 13.231 8.78601 13.5816 7.60368 13.5816C6.01822 13.5816 4.49771 12.9518 3.37662 11.8307C2.25554 10.7096 1.62572 9.18913 1.62572 7.60368Z"/>
                            </g>
                        </svg>
                    </div>
                    <div class="search-input">
                        <div class="search-close"></div>
                        <form>
                            <div class="search-group">
                                <div class="form-inner2">
                                    <input type="text" placeholder="Find Your Perfect Tour Package">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                            <div class="quick-search">
                                <ul>
                                    <li>Quick Search :</li>
                                    <li><a href="travel-package-01.html">Thailand Tour,</a></li>
                                    <li><a href="travel-package-01.html">Philippines Tour,</a></li>
                                    <li><a href="travel-package-01.html">Bali Tour,</a></li>
                                    <li><a href="travel-package-01.html">Hawaii, USA Tour,</a></li>
                                    <li><a href="travel-package-01.html">Switzerland Tour,</a></li>
                                    <li><a href="travel-package-01.html">Maldives Tour,</a></li>
                                    <li><a href="travel-package-01.html">Paris Tour,</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sidebar-button mobile-menu-btn">
                    <svg width="20" height="18" viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.29445 2.8421H10.5237C11.2389 2.8421 11.8182 2.2062 11.8182 1.42105C11.8182 0.635903 11.2389 0 10.5237 0H1.29445C0.579249 0 0 0.635903 0 1.42105C0 2.2062 0.579249 2.8421 1.29445 2.8421Z"></path>
                        <path d="M1.23002 10.421H18.77C19.4496 10.421 20 9.78506 20 8.99991C20 8.21476 19.4496 7.57886 18.77 7.57886H1.23002C0.550421 7.57886 0 8.21476 0 8.99991C0 9.78506 0.550421 10.421 1.23002 10.421Z"></path>
                        <path d="M18.8052 15.1579H10.2858C9.62563 15.1579 9.09094 15.7938 9.09094 16.5789C9.09094 17.3641 9.62563 18 10.2858 18H18.8052C19.4653 18 20 17.3641 20 16.5789C20 15.7938 19.4653 15.1579 18.8052 15.1579Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <!-- header Section End-->