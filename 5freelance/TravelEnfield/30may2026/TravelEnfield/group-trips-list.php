<?php include('header.php'); ?>

    <!-- Breadcrumb section Start-->
    <div class="breadcrumb-section" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(assets/group-trip.webp);">  
        
    </div>
    <!-- Breadcrumb section End-->

    <style>
        #pills-tab .nav-link {
            white-space: nowrap;
            border-radius: 30px;
            padding: 5px 13px;
            font-weight: 600;
            font-size: 15px;
            margin-top: 10px;
        }
    </style>

<style>
.calendar-box{
    background:#fff;
    border:1px solid #ddd;
    border-radius:10px;
    padding:15px;
    width:100%;
    max-width:320px;
}

.calendar-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:10px;
}

.calendar-header h4{
    margin:0;
    font-size:18px;
    font-weight:600;
}

.calendar-header button{
    border:none;
    background:#0d6efd;
    color:#fff;
    padding:5px 10px;
    border-radius:5px;
    cursor:pointer;
}

.calendar-days,
.calendar-dates{
    display:grid;
    grid-template-columns:repeat(7,1fr);
    gap:5px;
    text-align:center;
}

.calendar-days span{
    font-weight:bold;
    font-size:13px;
}

.calendar-dates div{
    padding:10px 0;
    border-radius:6px;
    cursor:pointer;
    background:#f8f9fa;
}

.calendar-dates div:hover{
    background:#0d6efd;
    color:#fff;
}

.today{
    background:#198754 !important;
    color:#fff;
}





</style>
    <!-- Map View Modal section Start-->
    <div class="modal map-view-modal fade" id="mapViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.00247 0.500545C1.79016 0.505525 1.58918 0.582706 1.4362 0.735547L0.694403 1.479C0.345704 1.82743 0.389689 2.43243 0.79164 2.83493L3.00694 5.05341L0.79164 7.27092C0.389689 7.67328 0.345566 8.27842 0.694403 8.62753L1.4362 9.37044C1.7849 9.71872 2.38879 9.67543 2.7913 9.27293L5.00659 7.05473L7.22189 9.27293C7.62467 9.67543 8.22898 9.71872 8.57699 9.37044L9.31989 8.62753C9.6679 8.27856 9.62461 7.67342 9.22182 7.27092L7.00653 5.05341L9.22182 2.83493C9.62461 2.43243 9.6679 1.82743 9.31989 1.479L8.57699 0.735547C8.22898 0.386433 7.62467 0.430557 7.22189 0.833614L5.00659 3.05126L2.7913 0.833753C2.56515 0.606635 2.27482 0.493906 2.00247 0.500545Z"/>
                    </svg>
                </button>
                <div class="title-area">
                    <a href="https://www.tripadvisor.com/" class="rating-area">
                        <img src="assets/img/innerpages/icon/tripadvisor-rating2.svg" alt="">
                        <span>134 reviews</span>
                    </a>
                    <h2 class="modal-title" id="ratingModalLabel">Paris & Île-de-France</h2>
                    <ul class="package-features">
                        <li>
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.61933 3.0722L4.05903 8.6355C3.97043 8.7211 3.85813 8.7655 3.74593 8.7655C3.68772 8.76559 3.63008 8.75415 3.57632 8.73184C3.52256 8.70952 3.47376 8.67678 3.43272 8.6355L0.380725 5.5835C0.206425 5.4121 0.206425 5.1315 0.380725 4.9572L1.45912 3.8758C1.62462 3.7104 1.92002 3.7104 2.08552 3.8758L3.74593 5.5362L7.91463 1.3645C7.95569 1.32334 8.00445 1.29068 8.05814 1.26837C8.11183 1.24607 8.16939 1.23456 8.22753 1.2345C8.34563 1.2345 8.45792 1.2818 8.54063 1.3645L9.61903 2.446C9.79363 2.6203 9.79363 2.9009 9.61933 3.0722Z"/>
                            </svg>
                            No Booking Fee
                        </li>
                        <li>
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.61933 3.0722L4.05903 8.6355C3.97043 8.7211 3.85813 8.7655 3.74593 8.7655C3.68772 8.76559 3.63008 8.75415 3.57632 8.73184C3.52256 8.70952 3.47376 8.67678 3.43272 8.6355L0.380725 5.5835C0.206425 5.4121 0.206425 5.1315 0.380725 4.9572L1.45912 3.8758C1.62462 3.7104 1.92002 3.7104 2.08552 3.8758L3.74593 5.5362L7.91463 1.3645C7.95569 1.32334 8.00445 1.29068 8.05814 1.26837C8.11183 1.24607 8.16939 1.23456 8.22753 1.2345C8.34563 1.2345 8.45792 1.2818 8.54063 1.3645L9.61903 2.446C9.79363 2.6203 9.79363 2.9009 9.61933 3.0722Z"/>
                            </svg>
                            Best Price Ever
                        </li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="map-area">
                        <div id="mapModal"></div>
                    </div>
                    <div class="bottom-area">
                        <strong>$899<span>/per person</span></strong>
                        <span>Eiffel Tower + Louvre Museum + Palace of Versailles</span>
                        <a href="travel-package-details.html" class="primary-btn1 two">
                            <span>
                                Book Now
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"/>
                                </svg>
                            </span>
                            <span>
                                Book Now
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map View Modal section End-->

    <!-- Package Grid Page Start-->
    <div class="package-grid-page pt-100 mb-100">
        <div class="container">
            <div class="row justify-content-center mb-3 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Explore all International Tour Packages</h2>
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

            <div class="row">
                <div class="col-lg-3">
                    <div class="package-sidebar-area">
                        <div class="sidebar-wrapper">
                            <div class="title-area">
                                <h5>Filter</h5>
                                <span id="clear-filters">Clear All</span>
                            </div>
                            <div class="single-widgets">
                                
                                <div class="checkbox-container">
                                    <ul>
                                        <li>
                                            <div class="calendar-box">
                                                <div class="calendar-header">
                                                    <button onclick="changeMonth(-1)">&#10094;</button>
                                                    <h4 id="monthYear"></h4>
                                                    <button onclick="changeMonth(1)">&#10095;</button>
                                                </div>

                                                <div class="calendar-days">
                                                    <span>Sun</span>
                                                    <span>Mon</span>
                                                    <span>Tue</span>
                                                    <span>Wed</span>
                                                    <span>Thu</span>
                                                    <span>Fri</span>
                                                    <span>Sat</span>
                                                </div>

                                                <div class="calendar-dates" id="calendarDates"></div>
                                            </div>
                                        </li>


                                        <li class="sidebar-category-dropdown">
                                            <label class="containerss">
                                                <span class="checkmark"></span>
                                                <strong>💰 Budget</strong>
                                            </label>
                                            <ul class="sub-category">
                                                <li>
                                                    <label class="containerss">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <strong><span>Below 10K</span> </strong>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="containerss">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <strong><span>10K - 25K</span> </strong>
                                                    </label>
                                                </li>
                                                
                                                <li>
                                                    <label class="containerss">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <strong><span>25K - 50K</span> </strong>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="containerss">
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                        <strong><span>50K - 1Lakh +</span> </strong>
                                                    </label>
                                                </li>
                                                
                                            </ul>
                                            <i class="bi bi-caret-right-fill sidebar-category-icon"></i>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>


                <div class="col-lg-9">
                    <div class="package-grid-top-area">
                        <span><strong>70</strong> Unforgettable Journeys Await!</span>
                        <div class="selector-and-list-grid-area">
                            <div class="filter-btn d-lg-none d-flex">
                                <svg width="18" height="18" viewBox="0 0 18 18"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_456_25)">
                                        <path
                                            d="M0.5625 3.17317H9.12674C9.38486 4.34806 10.4341 5.2301 11.6853 5.2301C12.9366 5.2301 13.9858 4.3481 14.2439 3.17317H17.4375C17.7481 3.17317 18 2.92131 18 2.61067C18 2.30003 17.7481 2.04817 17.4375 2.04817H14.2437C13.9851 0.873885 12.9344 -0.00871277 11.6853 -0.00871277C10.4356 -0.00871277 9.38545 0.873744 9.12695 2.04817H0.5625C0.251859 2.04817 0 2.30003 0 2.61067C0 2.92131 0.251859 3.17317 0.5625 3.17317ZM10.191 2.61215L10.191 2.6061C10.1935 1.78461 10.8638 1.11632 11.6853 1.11632C12.5057 1.11632 13.1761 1.78369 13.1796 2.6048L13.1797 2.61306C13.1784 3.43597 12.5086 4.10513 11.6853 4.10513C10.8625 4.10513 10.1928 3.43663 10.191 2.61422L10.191 2.61215ZM17.4375 14.8268H14.2437C13.985 13.6525 12.9344 12.7699 11.6853 12.7699C10.4356 12.7699 9.38545 13.6524 9.12695 14.8268H0.5625C0.251859 14.8268 0 15.0786 0 15.3893C0 15.7 0.251859 15.9518 0.5625 15.9518H9.12674C9.38486 17.1267 10.4341 18.0087 11.6853 18.0087C12.9366 18.0087 13.9858 17.1267 14.2439 15.9518H17.4375C17.7481 15.9518 18 15.7 18 15.3893C18 15.0786 17.7481 14.8268 17.4375 14.8268ZM11.6853 16.8837C10.8625 16.8837 10.1928 16.2152 10.191 15.3928L10.191 15.3908L10.191 15.3847C10.1935 14.5632 10.8638 13.8949 11.6853 13.8949C12.5057 13.8949 13.1761 14.5623 13.1796 15.3834L13.1797 15.3916C13.1785 16.2146 12.5086 16.8837 11.6853 16.8837ZM17.4375 8.43751H8.87326C8.61514 7.26262 7.56594 6.38062 6.31466 6.38062C5.06338 6.38062 4.01418 7.26262 3.75606 8.43751H0.5625C0.251859 8.43751 0 8.68936 0 9.00001C0 9.31068 0.251859 9.56251 0.5625 9.56251H3.75634C4.01498 10.7368 5.06559 11.6194 6.31466 11.6194C7.56439 11.6194 8.61455 10.7369 8.87305 9.56251H17.4375C17.7481 9.56251 18 9.31068 18 9.00001C18 8.68936 17.7481 8.43751 17.4375 8.43751ZM7.80901 8.99853L7.80898 9.00458C7.80652 9.82607 7.13619 10.4944 6.31466 10.4944C5.49429 10.4944 4.82393 9.82699 4.82038 9.00591L4.82027 8.99769C4.8215 8.17468 5.49141 7.50562 6.31466 7.50562C7.13753 7.50562 7.80718 8.17408 7.80905 8.99653L7.80901 8.99853Z">
                                        </path>
                                    </g>
                                </svg>
                                <span>Filters</span>
                            </div>
                            <div class="selector-area">
                                <span>Sort By:</span>
                                <select>
                                    <option value="1">Default</option>
                                    <option value="2">latest</option>
                                    <option value="2">Price High</option>
                                    <option value="2">Price Low</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>

                    <div class="list-grid-product-wrap">
                        <div class="row gy-4">

                            
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="trip-package-card">                                    
                                    <div class="trip-package-img">
                                        <a href="package-details.php"><img src="assets/zamna-bali-card-app-webp-299e203bc7-1774527949767.webp" alt=""></a>
                                    </div>

                                    <div class="trip-package-content">
                                        <div class="trip-package-days">⏳ 8 days / 7 nights</div>
                                        <a href="package-details.php"><h5 class="trip-package-title">Zamna Festival Bali Packages | Capture A Trip</h5></a>
                                        <div class="trip-package-price">₹ 58,999 
                                            <span class="trip-old-price">₹ 63,999</span>
                                            <span class="trip-discount">₹ 5,000 Off</span>
                                        </div>
                                        <div class="trip-package-date">📅 Oct 12</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="trip-package-card">                                    
                                    <div class="trip-package-img"><img src="assets/frame-5412-webp-d84b2c8088-1751623282829.webp" alt=""></div>
                                    <div class="trip-package-content">
                                        <div class="trip-package-days">⏳ 10 days / 9 nights</div>
                                        <h5 class="trip-package-title">Spain with Ibiza & La Tomatina</h5>
                                        <div class="trip-package-price">₹ 179,999 
                                            <span class="trip-old-price">₹ 189,999</span>
                                            <span class="trip-discount">₹ 10,000 Off</span>
                                        </div>
                                        <div class="trip-package-date">📅 Aug 20</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="trip-package-card">                                    
                                    <div class="trip-package-img"><img src="assets/web--3--webp-bfa5cbcb54-1774353131829.webp" alt=""></div>
                                    <div class="trip-package-content">
                                        <div class="trip-package-days">⏳ 10 days / 9 nights</div>
                                        <h5 class="trip-package-title">Spain with Ibiza & La Tomatina</h5>
                                        <div class="trip-package-price">₹ 179,999 
                                            <span class="trip-old-price">₹ 189,999</span>
                                            <span class="trip-discount">₹ 10,000 Off</span>
                                        </div>
                                        <div class="trip-package-date">📅 Aug 20</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="trip-package-card">                                    
                                    <div class="trip-package-img">
                                        <a href="package-details.php"><img src="assets/frame-4-webp-a1b227df88-1751623290225.webp" alt=""></a>
                                    </div>

                                    <div class="trip-package-content">
                                        <div class="trip-package-days">⏳ 8 days / 7 nights</div>
                                        <a href="package-details.php"><h5 class="trip-package-title">Zamna Festival Bali Packages | Capture A Trip</h5></a>
                                        <div class="trip-package-price">₹ 58,999 
                                            <span class="trip-old-price">₹ 63,999</span>
                                            <span class="trip-discount">₹ 5,000 Off</span>
                                        </div>
                                        <div class="trip-package-date">📅 Oct 12</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="trip-package-card">                                    
                                    <div class="trip-package-img"><img src="assets/frame-5238-webp-7facea383d-1751538249646.webp" alt=""></div>
                                    <div class="trip-package-content">
                                        <div class="trip-package-days">⏳ 10 days / 9 nights</div>
                                        <h5 class="trip-package-title">Spain with Ibiza & La Tomatina</h5>
                                        <div class="trip-package-price">₹ 179,999 
                                            <span class="trip-old-price">₹ 189,999</span>
                                            <span class="trip-discount">₹ 10,000 Off</span>
                                        </div>
                                        <div class="trip-package-date">📅 Aug 20</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="trip-package-card">                                    
                                    <div class="trip-package-img">
                                        <a href="package-details.php"><img src="assets/frame-5424-webp-9328e58b8b-1751623298406.webp" alt=""></a>
                                    </div>

                                    <div class="trip-package-content">
                                        <div class="trip-package-days">⏳ 8 days / 7 nights</div>
                                        <a href="package-details.php"><h5 class="trip-package-title">Zamna Festival Bali Packages | Capture A Trip</h5></a>
                                        <div class="trip-package-price">₹ 58,999 
                                            <span class="trip-old-price">₹ 63,999</span>
                                            <span class="trip-discount">₹ 5,000 Off</span>
                                        </div>
                                        <div class="trip-package-date">📅 Oct 12</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- Package Grid Page End-->

<?php include('footer.php'); ?>

<script>
    // let currentDate = new Date();

function renderCalendar() {
    let year = currentDate.getFullYear();
    let month = currentDate.getMonth();

    let firstDay = new Date(year, month, 1).getDay();
    let lastDate = new Date(year, month + 1, 0).getDate();

    let monthNames = [
        "January","February","March","April","May","June",
        "July","August","September","October","November","December"
    ];

    document.getElementById("monthYear").innerText =
        monthNames[month] + " " + year;

    let dates = "";

    for(let i=0; i<firstDay; i++){
        dates += "<div></div>";
    }

    for(let day=1; day<=lastDate; day++){
        let today = new Date();

        let className =
            day === today.getDate() &&
            month === today.getMonth() &&
            year === today.getFullYear()
            ? "today"
            : "";

        dates += `<div class="${className}">${day}</div>`;
    }

    document.getElementById("calendarDates").innerHTML = dates;
}

function changeMonth(val){
    currentDate.setMonth(currentDate.getMonth() + val);
    renderCalendar();
}

renderCalendar();
</script>