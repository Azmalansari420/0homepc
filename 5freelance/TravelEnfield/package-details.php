<?php include('header.php'); ?>

<style>
   .video-banner {
    position: relative;
    width: 100%;
    height: 500px;
    overflow: hidden;
}

.video-banner video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Dark overlay */
.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.3);
}

/* Content on top */
.banner-content-wrap {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    z-index: 2;
    text-align: center;
}

/* Mute Button */
#muteBtn {
    position: absolute;
    bottom: 20px;
    right: 20px;
    z-index: 3;
    background: rgba(0,0,0,0.6);
    border: none;
    color: #fff;
    padding: 10px 14px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 18px;
}

.package-details-page .package-details-warpper .package-info-wrap h4 {
    margin-bottom: 10px;
}
.package-details-page .package-details-warpper .package-info-wrap p {
    margin-bottom: initial;
}

.enquiry-modal .modal-dialog {
    max-width: 600px;
}
.enquiry-modal .modal-dialog .modal-content {
    padding: 20px 20px;
 }







.tabs-sticky-wrapper {
     position: sticky;
    top: 54px;
    z-index: 999;
    background: white;
    padding: 10px 0;
    display: flex;
    justify-content: start;
}

/* pills container */
.tabs-container {
    display: inline-flex; /* ✅ full width hata */
    gap: 8px;
    background: #f1f1f1;
    padding: 6px;
    border-radius: 40px;
    width: auto; /* ✅ important */
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

/* buttons */
.tab-btn {
    border: none;
    padding: 3px 16px; /* 👈 size chhota */
    border-radius: 25px;
    background: transparent;
    cursor: pointer;
    font-weight: 600;
    font-size: 14px; /* 👈 text chhota */
    transition: 0.3s;
}

/* active */
.tab-btn.active {
    background: rgb(22 163 74);
    color: #fff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}

.itenory-btn
{
   background: green;
    padding: 8px;
    border-radius: 10px;
    color: white !important;
}

.package-details-sidebar
{
    position: sticky;
    top: 54px;
    z-index: 999;
    background: white;
    padding: 10px 0;
    display: flex;
    justify-content: start;
        width: 100%;
}
/* STICKY */
.sticky-sidebar {
   position: sticky;
    top: 100px;
    width: 100%;
}

/* CARD */
.booking-card {
   width: 100%;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 16px;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

/* PRICE */
.trip-label {
   font-size: 14px;
}

.price-row {
   display: flex;
   align-items: center;
   gap: 10px;
}

.price {
   font-size: 28px;
   color: #008342;
   font-weight: bold;
}

.old-price {
   text-decoration: line-through;
   color: #777;
}

.discount {
   color: #f61b00;
   font-size: 14px;
}

.per-person {
   font-size: 13px;
   color: #777;
}

/* SECTION */
.section {
   margin-top: 20px;
}

.section-header {
   display: flex;
   justify-content: space-between;
   align-items: center;
}

.month-btn {
   border: 1px solid #000;
   padding: 5px 12px;
   border-radius: 20px;
   background: #fff;
}

/* DATES */
.date-list {
   max-height: 200px;
   overflow-y: auto;
   margin-top: 10px;
}

.date-item {
   display: flex;
   justify-content: space-between;
   align-items: center;
   padding: 10px 0;
   cursor: pointer;
   border-bottom: 1px solid #eee;
}

.date-item p {
   margin: 0;
   font-weight: 500;
}

.date-item small {
   font-size: 12px;
}

.circle {
   width: 18px;
   height: 18px;
   border-radius: 50%;
   border: 2px solid #ccc;
}

.circle.active {
   background: #008342;
   border-color: #008342;
}

/* TRAVELLERS */
.travellers {
   display: flex;
   justify-content: space-between;
   align-items: center;
}

.counter {
   display: flex;
   align-items: center;
   gap: 10px;
}

.counter button {
   width: 30px;
   height: 30px;
   border: 1px solid #ddd;
   background: #fff;
}

/* BUTTON */
.book-btn {
   width: 100%;
   background: #008342;
   color: #fff;
   padding: 12px;
   border-radius: 30px;
   border: none;
   margin-top: 20px;
   font-weight: 500;
}

/* WHATSAPP */
.help {
   display: flex;
   align-items: center;
   justify-content: space-between;
   margin-top: 15px;
}

.whatsapp-btn {
   border: 1px solid #ddd;
   padding: 6px 15px;
   border-radius: 20px;
   text-decoration: none;
   color: #000;
}
.traveller-input {
   width: 80px;
   padding: 6px 10px;
   border: 1px solid #ddd;
   border-radius: 6px;
   font-size: 16px;
   text-align: center;
}
/* RESPONSIVE */
@media(max-width: 991px){
   .sticky-sidebar {
      position: relative;
      top: 0;
   }
}
.month-dropdown {
   border: 1px solid #000;
   padding: 6px 12px;
   border-radius: 20px;
   background: #fff;
   font-size: 14px;
   cursor: pointer;
}

.booking-card{
  width: 100%;
  background:#fff;
  border-radius:16px;
  padding:20px;
  box-shadow:0 5px 15px rgba(0,0,0,0.08);
}

/* DROPDOWN */
.month-select{
  border:1px solid #000;
  border-radius:20px;
  padding:5px 10px;
}

/* INPUT */
.traveller-input{
  width:80px;
  padding:5px;
  border:1px solid #ddd;
  border-radius:6px;
}

/* ACTIVE DATE */
.date-item.active{
  background:#f5f5f5;
}

/* CURSOR */
.date-item{
  cursor:pointer;
}



/* Responsive */
@media (max-width: 768px) {
    .video-banner {
        height: 300px;
    }

    .banner-content h1 {
        font-size: 20px;
    }

    .tabs-container {
        width: 100%;
        justify-content: center;
        overflow-x: auto;
    }

    .tab-btn {
        flex: 0 0 auto;
        font-size: 14px;
        padding: 8px 14px;
    }
}



</style>

      <div class="breadcrumb-section two">    
          <div class="video-banner">
              <video autoplay loop muted playsinline id="packagebannerVideo">
                  <source src="https://d1zvcmhypeawxj.cloudfront.net/location/Russia/videos/russia-web-mp4-06c70c5c64-1751967492917.mp4" type="video/mp4">
              </video>
              <div class="video-overlay"></div>
              <button id="muteBtn">🔇</button>
          </div>
      </div>
      
      <!-- Breadcrumb section End-->
      <!-- Location Details Modal section Start-->
      <div class="modal location-details-modal fade" id="packageLocationModal" tabindex="-1"
         aria-labelledby="packageLocationModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                  <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M2.00247 0.500545C1.79016 0.505525 1.58918 0.582706 1.4362 0.735547L0.694403 1.479C0.345704 1.82743 0.389689 2.43243 0.79164 2.83493L3.00694 5.05341L0.79164 7.27092C0.389689 7.67328 0.345566 8.27842 0.694403 8.62753L1.4362 9.37044C1.7849 9.71872 2.38879 9.67543 2.7913 9.27293L5.00659 7.05473L7.22189 9.27293C7.62467 9.67543 8.22898 9.71872 8.57699 9.37044L9.31989 8.62753C9.6679 8.27856 9.62461 7.67342 9.22182 7.27092L7.00653 5.05341L9.22182 2.83493C9.62461 2.43243 9.6679 1.82743 9.31989 1.479L8.57699 0.735547C8.22898 0.386433 7.62467 0.430557 7.22189 0.833614L5.00659 3.05126L2.7913 0.833753C2.56515 0.606635 2.27482 0.493906 2.00247 0.500545Z" />
                  </svg>
               </button>
               <div class="modal-header">
                  <h4 class="modal-title" id="packageLocationModalLabel">Eiffel Tower, France : 02 Days</h4>
               </div>
               <div class="modal-body">
                  <ul class="nav nav-pills" id="pills-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-activities-tab" data-bs-toggle="pill"
                           data-bs-target="#pills-activities" type="button" role="tab"
                           aria-controls="pills-activities" aria-selected="true">
                           <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                              <g>
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.99978 15.1112C2.14378 15.1112 0.888672 13.8561 0.888672 8.00006C0.888672 2.14406 2.14378 0.888947 7.99978 0.888947C13.8558 0.888947 15.1109 2.14406 15.1109 8.00006C15.1109 13.8561 13.8558 15.1112 7.99978 15.1112ZM10.0005 4.7515C9.94844 4.65679 9.87145 4.57812 9.77789 4.52402C9.68432 4.46991 9.57773 4.44243 9.46967 4.44455C9.36161 4.44667 9.25618 4.47831 9.16481 4.53604C9.07344 4.59378 8.9996 4.6754 8.95128 4.77209L6.49334 9.68795L5.40795 7.7145C5.35682 7.62152 5.28165 7.54398 5.19032 7.48997C5.09898 7.43597 4.99481 7.40747 4.8887 7.40747H3.85167C3.52439 7.40747 3.25909 7.67278 3.25909 8.00006C3.25909 8.32734 3.52439 8.59264 3.85167 8.59264H4.53834L5.99912 11.2486C6.05121 11.3433 6.1282 11.4219 6.22177 11.476C6.31534 11.5301 6.42192 11.5576 6.52998 11.5555C6.63804 11.5534 6.74346 11.5218 6.83483 11.464C6.9262 11.4063 7.00005 11.3247 7.04837 11.228L9.50631 6.3122L10.5917 8.28564C10.6428 8.37862 10.718 8.45617 10.8093 8.51018C10.9007 8.56418 11.0048 8.59267 11.1109 8.59267H12.148C12.4752 8.59267 12.7405 8.32736 12.7405 8.00009C12.7405 7.67281 12.4752 7.4075 12.148 7.4075H11.4613L10.0005 4.7515Z" />
                              </g>
                           </svg>
                           Tour Activities
                        </button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-accommodation-tab" data-bs-toggle="pill"
                           data-bs-target="#pills-accommodation" type="button" role="tab"
                           aria-controls="pills-accommodation" aria-selected="false">
                           <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M9.82319 1.65145L9.10418 2.3548L9.27418 3.34814C9.30165 3.51015 9.17758 3.65982 9.01118 3.65982C8.92088 3.65982 8.96778 3.67185 7.99883 3.16048L7.11082 3.62915C6.91581 3.73208 6.68654 3.56621 6.72348 3.34814L6.89348 2.3548L6.17447 1.65145C6.0162 1.49678 6.10487 1.22858 6.32247 1.19678L7.31515 1.05211L7.75949 0.148765C7.85716 -0.0494382 8.14036 -0.0497382 8.23817 0.148765L8.6825 1.05211L9.67519 1.19678C9.89319 1.22865 9.98112 1.49712 9.82319 1.65145ZM5.21629 3.01617L5.18479 2.8325C5.30809 2.7123 5.44626 2.61543 5.38569 2.42906C5.32516 2.2428 5.15519 2.24536 4.98602 2.22076L4.90355 2.05366C4.80595 1.85586 4.52298 1.85572 4.42528 2.05366L4.34281 2.22076C4.17241 2.24553 4.00367 2.24266 3.94314 2.42906C3.8826 2.61533 4.02164 2.71317 4.14404 2.8325L4.11254 3.01617C4.07527 3.23354 4.30407 3.39998 4.49948 3.29728L4.66438 3.21054C4.83322 3.29934 4.87005 3.32791 4.95335 3.32791C5.11789 3.32791 5.24435 3.17971 5.21629 3.01617ZM2.88292 4.34953L2.85142 4.16586C2.97472 4.04565 3.11289 3.94879 3.05232 3.76242C2.99179 3.57615 2.82182 3.57871 2.65265 3.55411L2.57018 3.38701C2.47258 3.18921 2.18961 3.18908 2.09191 3.38701L2.00944 3.55411C1.83904 3.57888 1.6703 3.57601 1.60977 3.76242C1.54923 3.94869 1.68827 4.04652 1.81067 4.16586L1.77917 4.34953C1.7419 4.5669 1.97071 4.73333 2.16611 4.63063L2.33101 4.5439C2.49985 4.6327 2.53668 4.66126 2.61998 4.66126C2.78452 4.66126 2.91099 4.51306 2.88292 4.34953ZM11.885 3.01617L11.8535 2.8325C11.9768 2.7123 12.115 2.61543 12.0544 2.42906C11.9939 2.2428 11.8239 2.24536 11.6547 2.22076C11.5785 2.06626 11.5291 1.90502 11.3332 1.90502C11.1373 1.90502 11.0872 2.06746 11.0116 2.22076L10.8272 2.24756C10.6089 2.2793 10.5213 2.54837 10.6794 2.70244L10.8128 2.8325C10.7837 3.00231 10.7288 3.16181 10.8874 3.27698C11.0458 3.39211 11.1818 3.29011 11.3332 3.21054C11.502 3.29934 11.5388 3.32791 11.6221 3.32791C11.7866 3.32791 11.9131 3.17971 11.885 3.01617ZM14.2184 4.34953L14.1869 4.16586C14.3102 4.04565 14.4484 3.94879 14.3878 3.76242C14.3273 3.57615 14.1573 3.57871 13.9881 3.55411C13.9119 3.39961 13.8625 3.23838 13.6665 3.23838C13.4707 3.23838 13.4206 3.40081 13.3449 3.55411L13.1605 3.58091C12.9423 3.61265 12.8547 3.88172 13.0127 4.03579L13.1462 4.16586C13.117 4.33566 13.0622 4.49516 13.2208 4.61033C13.3792 4.72546 13.5152 4.62346 13.6665 4.5439C13.8354 4.6327 13.8722 4.66126 13.9555 4.66126C14.12 4.66126 14.2464 4.51306 14.2184 4.34953ZM4.07074 15.7257C4.0753 15.8759 3.95447 16 3.80417 16H2.39871C1.80961 16 1.33203 15.5224 1.33203 14.9333V9.5999C1.33203 9.01079 1.80961 8.53322 2.39871 8.53322H3.79873C3.946 8.53322 4.0654 8.65289 4.0654 8.80016C4.0651 13.8222 4.0567 15.2656 4.07074 15.7257ZM3.16539 11.1999C3.16539 11.1292 3.1373 11.0614 3.08729 11.0114C3.03727 10.9614 2.96945 10.9333 2.89872 10.9333C2.828 10.9333 2.76017 10.9614 2.71016 11.0114C2.66015 11.0614 2.63205 11.1292 2.63205 11.1999V12.3333C2.63205 12.404 2.66015 12.4718 2.71016 12.5218C2.76017 12.5719 2.828 12.5999 2.89872 12.5999C2.96945 12.5999 3.03727 12.5719 3.08729 12.5218C3.1373 12.4718 3.16539 12.404 3.16539 12.3333V11.1999ZM14.6656 9.5999V14.9333C14.6656 15.5224 14.188 16 13.5989 16H12.1937C12.0434 16 11.9225 15.8759 11.9271 15.7257C11.9412 15.2664 11.9325 13.8251 11.9322 8.80016C11.9322 8.65289 12.0516 8.53322 12.1989 8.53322H13.5989C14.188 8.53322 14.6656 9.01079 14.6656 9.5999ZM13.3655 11.1999C13.3655 11.1292 13.3374 11.0614 13.2874 11.0114C13.2374 10.9614 13.1696 10.9333 13.0989 10.9333C13.0281 10.9333 12.9603 10.9614 12.9103 11.0114C12.8603 11.0614 12.8322 11.1292 12.8322 11.1999V12.3333C12.8322 12.404 12.8603 12.4718 12.9103 12.5218C12.9603 12.5719 13.0281 12.5999 13.0989 12.5999C13.1696 12.5999 13.2374 12.5719 13.2874 12.5218C13.3374 12.4718 13.3655 12.404 13.3655 12.3333V11.1999ZM7.33212 16H8.66547C8.7362 16 8.80403 15.9719 8.85404 15.9219C8.90405 15.8719 8.93214 15.8041 8.93214 15.7333V13.2333C8.93214 13.1626 8.90405 13.0947 8.85404 13.0447C8.80403 12.9947 8.7362 12.9666 8.66547 12.9666H7.33212C7.26139 12.9666 7.19356 12.9947 7.14355 13.0447C7.09354 13.0947 7.06545 13.1626 7.06545 13.2333V15.7333C7.06545 15.8041 7.09354 15.8719 7.14355 15.9219C7.19356 15.9719 7.26139 16 7.33212 16ZM11.3988 5.79985V15.7333C11.3988 15.8041 11.3707 15.8719 11.3207 15.9219C11.2707 15.9719 11.2029 16 11.1322 16H9.73215C9.66143 16 9.5936 15.9719 9.54359 15.9219C9.49358 15.8719 9.46548 15.8041 9.46548 15.7333V12.6999C9.46548 12.6292 9.43739 12.5614 9.38738 12.5114C9.33737 12.4614 9.26954 12.4333 9.19881 12.4333H6.79878C6.72805 12.4333 6.66022 12.4614 6.61021 12.5114C6.5602 12.5614 6.53211 12.6292 6.53211 12.6999V15.7333C6.53211 15.8041 6.50401 15.8719 6.454 15.9219C6.40399 15.9719 6.33616 16 6.26544 16H4.86542C4.79469 16 4.72686 15.9719 4.67685 15.9219C4.62684 15.8719 4.59875 15.8041 4.59875 15.7333V5.79985C4.59875 5.21074 5.07632 4.73316 5.66543 4.73316H10.3322C10.9213 4.73316 11.3988 5.21074 11.3988 5.79985ZM9.33215 10.2666C9.33215 10.1959 9.30405 10.128 9.25404 10.078C9.20403 10.028 9.1362 9.99991 9.06548 9.99991H6.93211C6.86139 9.99991 6.79356 10.028 6.74355 10.078C6.69354 10.128 6.66544 10.1959 6.66544 10.2666C6.66544 10.3373 6.69354 10.4051 6.74355 10.4551C6.79356 10.5052 6.86139 10.5332 6.93211 10.5332H9.06548C9.1362 10.5332 9.20403 10.5052 9.25404 10.4551C9.30405 10.4051 9.33215 10.3373 9.33215 10.2666ZM9.79882 7.69987C9.79882 7.62915 9.77073 7.56132 9.72072 7.51131C9.6707 7.4613 9.60288 7.4332 9.53215 7.4332H6.46544C6.39471 7.4332 6.32689 7.4613 6.27687 7.51131C6.22686 7.56132 6.19877 7.62915 6.19877 7.69987C6.19877 7.7706 6.22686 7.83843 6.27687 7.88844C6.32689 7.93845 6.39471 7.96655 6.46544 7.96655H9.53215C9.60288 7.96655 9.6707 7.93845 9.72072 7.88844C9.77073 7.83843 9.79882 7.7706 9.79882 7.69987Z" />
                           </svg>
                           Accommodation
                        </button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-transport-tab" data-bs-toggle="pill"
                           data-bs-target="#pills-transport" type="button" role="tab"
                           aria-controls="pills-transport" aria-selected="false">
                           <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                              <g>
                                 <path
                                    d="M9.05095 0.435C8.47095 -0.145 7.53095 -0.145 6.95095 0.435L0.436953 6.95C-0.143047 7.53 -0.143047 8.469 0.436953 9.048L6.95295 15.564C7.53295 16.144 8.47195 16.144 9.05095 15.564L15.567 9.048C16.147 8.468 16.147 7.529 15.567 6.95L9.05095 0.435ZM10.494 5.197L11.508 6.303L8.75095 8.83V12H7.25095V8.83L4.49395 6.303L5.50795 5.197L8.00095 7.483L10.494 5.197Z" />
                              </g>
                           </svg>
                           Transport
                        </button>
                     </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-activities" role="tabpanel"
                        aria-labelledby="pills-activities-tab">
                        <div class="single-activity mb-60">
                           <span class="title">Day-01</span>
                           <div class="row g-4">
                              <div class="col-md-4 col-sm-6">
                                 <div class="activity-card">
                                    <div class="activity-img">
                                       <img src="assets/img/innerpages/location-modal-activity-img1.jpg"
                                          alt="">
                                    </div>
                                    <div class="activity-content">
                                       <h6>Climb the Eiffel Tower</h6>
                                       <p>The Eiffel Tower, one of the most iconic landmarks in the world,
                                          offers an incredible climbing experience seekers and travelers.
                                       </p>
                                       <a href="#">
                                       Read More
                                       <i class="bi bi-caret-down-fill"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-6">
                                 <div class="activity-card">
                                    <div class="activity-img">
                                       <img src="assets/img/innerpages/location-modal-activity-img2.jpg"
                                          alt="">
                                    </div>
                                    <div class="activity-content">
                                       <h6>Sunset & Night View</h6>
                                       <p>The Eiffel Tower at sunset and night offers one of the most
                                          breathtaking views in the world.
                                       </p>
                                       <a href="#">
                                       Read More
                                       <i class="bi bi-caret-down-fill"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-6">
                                 <div class="activity-card">
                                    <div class="activity-img">
                                       <img src="assets/img/innerpages/location-modal-activity-img3.jpg"
                                          alt="">
                                    </div>
                                    <div class="activity-content">
                                       <h6>Bike Tour</h6>
                                       <p>Ride through the city's charming streets, soak in the beauty of
                                          iconic landmarks, and enjoy an active and eco-friendly adventure.
                                       </p>
                                       <a href="#">
                                       Read More
                                       <i class="bi bi-caret-down-fill"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="single-activity">
                           <span class="title">Day-02</span>
                           <div class="row g-4">
                              <div class="col-md-4 col-sm-6">
                                 <div class="activity-card">
                                    <div class="activity-img">
                                       <img src="assets/img/innerpages/location-modal-activity-img4.jpg"
                                          alt="">
                                    </div>
                                    <div class="activity-content">
                                       <h6>Breathtaking 360° views</h6>
                                       <p>From sunrise to sunset to sparkling nightscapes, the Eiffel Tower’s
                                          360° views will leave you speechless.
                                       </p>
                                       <a href="#">
                                       Read More
                                       <i class="bi bi-caret-down-fill"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-6">
                                 <div class="activity-card">
                                    <div class="activity-img">
                                       <img src="assets/img/innerpages/location-modal-activity-img5.jpg"
                                          alt="">
                                    </div>
                                    <div class="activity-content">
                                       <h6>Champagne Sunset</h6>
                                       <p>Imagine sipping a glass of fine champagne while watching the sunset
                                          from the Eiffel Tower.
                                       </p>
                                       <a href="#">
                                       Read More
                                       <i class="bi bi-caret-down-fill"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-accommodation" role="tabpanel"
                        aria-labelledby="pills-accommodation-tab">
                        <div class="content-wrapper">
                           <div class="accommodation-wrap">
                              <div class="accommodation-img">
                                 <img src="assets/img/innerpages/location-modal-accommodation-img.jpg" alt="">
                              </div>
                              <div class="accommodation-content">
                                 <h6><a href="hotel-details.html">Rajnonikanto Hotel, San Diego</a></h6>
                                 <div class="rating-and-location-area">
                                    <div class="rating-area">
                                       <ul class="rating-star">
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                          <li><i class="bi bi-star-fill"></i></li>
                                       </ul>
                                       <span>3,354 reviews</span>
                                    </div>
                                    <a href="https://www.google.com/maps" class="location">
                                       <svg width="14" height="14" viewBox="0 0 14 14"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M7 14C7 14 12.25 9.02475 12.25 5.25C12.25 3.85761 11.6969 2.52226 10.7123 1.53769C9.72774 0.553123 8.39239 0 7 0C5.60761 0 4.27226 0.553123 3.28769 1.53769C2.30312 2.52226 1.75 3.85761 1.75 5.25C1.75 9.02475 7 14 7 14ZM7 7.875C6.30381 7.875 5.63613 7.59844 5.14384 7.10616C4.65156 6.61387 4.375 5.94619 4.375 5.25C4.375 4.55381 4.65156 3.88613 5.14384 3.39384C5.63613 2.90156 6.30381 2.625 7 2.625C7.69619 2.625 8.36387 2.90156 8.85616 3.39384C9.34844 3.88613 9.625 4.55381 9.625 5.25C9.625 5.94619 9.34844 6.61387 8.85616 7.10616C8.36387 7.59844 7.69619 7.875 7 7.875Z" />
                                       </svg>
                                       San Fransico
                                    </a>
                                 </div>
                                 <p>Whether you're visiting Paris for a romantic getaway, an adventure, or a
                                    luxury vacation, finding the right accommodation with excellent facilities
                                    enhances your experience.
                                 </p>
                                 <ul>
                                    <li>
                                       <svg width="14" height="14" viewBox="0 0 14 14"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <rect width="14" height="14" rx="7" />
                                          <path
                                             d="M10.6947 5.45771L6.24644 9.90835C6.17556 9.97683 6.08572 10.0123 5.99596 10.0123C5.9494 10.0124 5.90328 10.0033 5.86027 9.98542C5.81727 9.96757 5.77822 9.94138 5.7454 9.90835L3.3038 7.46675C3.16436 7.32963 3.16436 7.10515 3.3038 6.96571L4.16652 6.10059C4.29892 5.96827 4.53524 5.96827 4.66764 6.10059L5.99596 7.42891L9.33092 4.09155C9.36377 4.05862 9.40278 4.03249 9.44573 4.01465C9.48868 3.9968 9.53473 3.98759 9.58124 3.98755C9.67572 3.98755 9.76556 4.02539 9.83172 4.09155L10.6944 4.95675C10.8341 5.09619 10.8341 5.32067 10.6947 5.45771Z" />
                                       </svg>
                                       Comfortable & Stylish Rooms.
                                    </li>
                                    <li>
                                       <svg width="14" height="14" viewBox="0 0 14 14"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <rect width="14" height="14" rx="7" />
                                          <path
                                             d="M10.6947 5.45771L6.24644 9.90835C6.17556 9.97683 6.08572 10.0123 5.99596 10.0123C5.9494 10.0124 5.90328 10.0033 5.86027 9.98542C5.81727 9.96757 5.77822 9.94138 5.7454 9.90835L3.3038 7.46675C3.16436 7.32963 3.16436 7.10515 3.3038 6.96571L4.16652 6.10059C4.29892 5.96827 4.53524 5.96827 4.66764 6.10059L5.99596 7.42891L9.33092 4.09155C9.36377 4.05862 9.40278 4.03249 9.44573 4.01465C9.48868 3.9968 9.53473 3.98759 9.58124 3.98755C9.67572 3.98755 9.76556 4.02539 9.83172 4.09155L10.6944 4.95675C10.8341 5.09619 10.8341 5.32067 10.6947 5.45771Z" />
                                       </svg>
                                       Comfortable & Stylish Rooms.
                                    </li>
                                    <li>
                                       <svg width="14" height="14" viewBox="0 0 14 14"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <rect width="14" height="14" rx="7" />
                                          <path
                                             d="M10.6947 5.45771L6.24644 9.90835C6.17556 9.97683 6.08572 10.0123 5.99596 10.0123C5.9494 10.0124 5.90328 10.0033 5.86027 9.98542C5.81727 9.96757 5.77822 9.94138 5.7454 9.90835L3.3038 7.46675C3.16436 7.32963 3.16436 7.10515 3.3038 6.96571L4.16652 6.10059C4.29892 5.96827 4.53524 5.96827 4.66764 6.10059L5.99596 7.42891L9.33092 4.09155C9.36377 4.05862 9.40278 4.03249 9.44573 4.01465C9.48868 3.9968 9.53473 3.98759 9.58124 3.98755C9.67572 3.98755 9.76556 4.02539 9.83172 4.09155L10.6944 4.95675C10.8341 5.09619 10.8341 5.32067 10.6947 5.45771Z" />
                                       </svg>
                                       Spa & Wellness Facilities.
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-transport" role="tabpanel"
                        aria-labelledby="pills-transport-tab">
                        <div class="content-wrapper">
                           <div class="transport-wrap">
                              <div class="title-area">
                                 <h6>
                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <g>
                                          <path
                                             d="M17.2591 5.37406C17.1808 5.37406 17.1003 5.38524 17.0201 5.40743L16.1117 5.65767L15.1684 3.35986C14.9013 2.70884 14.1113 2.17928 13.4076 2.17928H4.5797C3.87596 2.17928 3.08604 2.70884 2.81889 3.35986L1.87683 5.65454L0.979856 5.40743C0.902048 5.38564 0.821662 5.37442 0.740861 5.37406C0.311619 5.37406 0 5.70198 0 6.15388V6.68949C0 7.217 0.429089 7.64608 0.956592 7.64608H1.05929L0.907079 8.01694C0.658824 8.62181 0.456868 9.64567 0.456868 10.2994V14.8644C0.456868 15.3919 0.886034 15.821 1.41346 15.821H2.66285C3.19035 15.821 3.61944 15.3919 3.61944 14.8644V13.7243H14.368V14.8644C14.368 15.3919 14.7971 15.821 15.3246 15.821H16.5739C17.1014 15.821 17.5305 15.3919 17.5305 14.8644V10.2994C17.5305 9.64575 17.3286 8.62181 17.0802 8.01694L16.928 7.64608H17.0434C17.5708 7.64608 18 7.217 18 6.68949V6.15388C18 5.70198 17.6885 5.37406 17.2591 5.37406ZM2.56282 7.12646L3.98968 3.65082C4.14954 3.26145 4.6247 2.94287 5.0456 2.94287H12.9418C13.3627 2.94287 13.8379 3.26145 13.9977 3.65082L15.4245 7.12646C15.5844 7.51583 15.3708 7.83442 14.9499 7.83442H3.03752C2.61662 7.83442 2.40304 7.51583 2.56282 7.12646ZM5.74812 11.5227C5.74812 11.7331 5.57594 11.9053 5.36549 11.9053H2.65489C2.44444 11.9053 2.27225 11.7331 2.27225 11.5227V10.2218C2.27225 10.0113 2.44444 9.83913 2.65489 9.83913H5.36549C5.57594 9.83913 5.74812 10.0113 5.74812 10.2218V11.5227ZM15.6895 11.5227C15.6895 11.7331 15.5173 11.9053 15.3069 11.9053H12.5963C12.3859 11.9053 12.2137 11.7331 12.2137 11.5227V10.2218C12.2137 10.0113 12.3859 9.83913 12.5963 9.83913H15.3069C15.5173 9.83913 15.6895 10.0113 15.6895 10.2218V11.5227Z" />
                                       </g>
                                    </svg>
                                    Public Transport in Paris :
                                 </h6>
                                 <span><strong>Paris Metro</strong> (Subway)</span>
                              </div>
                              <h6>Facilities for Traveler-</h6>
                              <ul>
                                 <li>
                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <rect width="14" height="14" rx="7" />
                                       <path
                                          d="M10.6947 5.45771L6.24644 9.90835C6.17556 9.97683 6.08572 10.0123 5.99596 10.0123C5.9494 10.0124 5.90328 10.0033 5.86027 9.98542C5.81727 9.96757 5.77822 9.94138 5.7454 9.90835L3.3038 7.46675C3.16436 7.32963 3.16436 7.10515 3.3038 6.96571L4.16652 6.10059C4.29892 5.96827 4.53524 5.96827 4.66764 6.10059L5.99596 7.42891L9.33092 4.09155C9.36377 4.05862 9.40278 4.03249 9.44573 4.01465C9.48868 3.9968 9.53473 3.98759 9.58124 3.98755C9.67572 3.98755 9.76556 4.02539 9.83172 4.09155L10.6944 4.95675C10.8341 5.09619 10.8341 5.32067 10.6947 5.45771Z" />
                                    </svg>
                                    Fast & budget-friendly way to travel.
                                 </li>
                                 <li>
                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <rect width="14" height="14" rx="7" />
                                       <path
                                          d="M10.6947 5.45771L6.24644 9.90835C6.17556 9.97683 6.08572 10.0123 5.99596 10.0123C5.9494 10.0124 5.90328 10.0033 5.86027 9.98542C5.81727 9.96757 5.77822 9.94138 5.7454 9.90835L3.3038 7.46675C3.16436 7.32963 3.16436 7.10515 3.3038 6.96571L4.16652 6.10059C4.29892 5.96827 4.53524 5.96827 4.66764 6.10059L5.99596 7.42891L9.33092 4.09155C9.36377 4.05862 9.40278 4.03249 9.44573 4.01465C9.48868 3.9968 9.53473 3.98759 9.58124 3.98755C9.67572 3.98755 9.76556 4.02539 9.83172 4.09155L10.6944 4.95675C10.8341 5.09619 10.8341 5.32067 10.6947 5.45771Z" />
                                    </svg>
                                    16 metro lines & 300+ stations covering all major attractions.
                                 </li>
                                 <li>
                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <rect width="14" height="14" rx="7" />
                                       <path
                                          d="M10.6947 5.45771L6.24644 9.90835C6.17556 9.97683 6.08572 10.0123 5.99596 10.0123C5.9494 10.0124 5.90328 10.0033 5.86027 9.98542C5.81727 9.96757 5.77822 9.94138 5.7454 9.90835L3.3038 7.46675C3.16436 7.32963 3.16436 7.10515 3.3038 6.96571L4.16652 6.10059C4.29892 5.96827 4.53524 5.96827 4.66764 6.10059L5.99596 7.42891L9.33092 4.09155C9.36377 4.05862 9.40278 4.03249 9.44573 4.01465C9.48868 3.9968 9.53473 3.98759 9.58124 3.98755C9.67572 3.98755 9.76556 4.02539 9.83172 4.09155L10.6944 4.95675C10.8341 5.09619 10.8341 5.32067 10.6947 5.45771Z" />
                                    </svg>
                                    Operates from 5:30 AM to 12:30 AM daily.
                                 </li>
                                 <li>
                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <rect width="14" height="14" rx="7" />
                                       <path
                                          d="M10.6947 5.45771L6.24644 9.90835C6.17556 9.97683 6.08572 10.0123 5.99596 10.0123C5.9494 10.0124 5.90328 10.0033 5.86027 9.98542C5.81727 9.96757 5.77822 9.94138 5.7454 9.90835L3.3038 7.46675C3.16436 7.32963 3.16436 7.10515 3.3038 6.96571L4.16652 6.10059C4.29892 5.96827 4.53524 5.96827 4.66764 6.10059L5.99596 7.42891L9.33092 4.09155C9.36377 4.05862 9.40278 4.03249 9.44573 4.01465C9.48868 3.9968 9.53473 3.98759 9.58124 3.98755C9.67572 3.98755 9.76556 4.02539 9.83172 4.09155L10.6944 4.95675C10.8341 5.09619 10.8341 5.32067 10.6947 5.45771Z" />
                                    </svg>
                                    Prices vary based on demand and distance.
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
      <!-- Location Details Modal section End-->
      <!-- Rating Modal section Start-->
      <div class="modal rating-modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                  <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M2.00247 0.500545C1.79016 0.505525 1.58918 0.582706 1.4362 0.735547L0.694403 1.479C0.345704 1.82743 0.389689 2.43243 0.79164 2.83493L3.00694 5.05341L0.79164 7.27092C0.389689 7.67328 0.345566 8.27842 0.694403 8.62753L1.4362 9.37044C1.7849 9.71872 2.38879 9.67543 2.7913 9.27293L5.00659 7.05473L7.22189 9.27293C7.62467 9.67543 8.22898 9.71872 8.57699 9.37044L9.31989 8.62753C9.6679 8.27856 9.62461 7.67342 9.22182 7.27092L7.00653 5.05341L9.22182 2.83493C9.62461 2.43243 9.6679 1.82743 9.31989 1.479L8.57699 0.735547C8.22898 0.386433 7.62467 0.430557 7.22189 0.833614L5.00659 3.05126L2.7913 0.833753C2.56515 0.606635 2.27482 0.493906 2.00247 0.500545Z" />
                  </svg>
               </button>
               <div class="modal-body">
                  <h4 class="modal-title" id="ratingModalLabel">Give Your Review</h4>
                  <ul class="star-rating-list">
                     <li>
                        <span>Overall</span>
                        <div class="rating-container" data-rating="0">
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                        </div>
                     </li>
                     <li>
                        <span>Transport</span>
                        <div class="rating-container" data-rating="0">
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                        </div>
                     </li>
                     <li>
                        <span>Food</span>
                        <div class="rating-container" data-rating="0">
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                        </div>
                     </li>
                     <li>
                        <span>Tour Guide</span>
                        <div class="rating-container" data-rating="0">
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                        </div>
                     </li>
                     <li>
                        <span>Accomodation</span>
                        <div class="rating-container" data-rating="0">
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                           <i class="bi bi-star star-icon"></i>
                        </div>
                     </li>
                  </ul>
                  <form class="review-form-wrapper">
                     <div class="row g-4 mb-50">
                        <div class="col-lg-12">
                           <div class="form-inner">
                              <label>Your Feedback</label>
                              <textarea placeholder="Write a your tour feedback"></textarea>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-inner">
                              <label>Email Address</label>
                              <input type="email" placeholder="Email Address">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-inner">
                              <label>Your Name</label>
                              <input type="text" placeholder="Your Name">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-inner2">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="contactCheck22">
                                 <label class="form-check-label" for="contactCheck22">
                                 Save my email address & name when I comment further time.
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-inner">
                        <button type="submit" class="primary-btn1 black-bg">
                           <span>
                              Post Comment
                              <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z">
                                 </path>
                              </svg>
                           </span>
                           <span>
                              Post Comment
                              <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z">
                                 </path>
                              </svg>
                           </span>
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Rating Modal section End-->
      <!-- Booking Modal section Start-->
      <div class="modal booking-modal fade" id="bookingModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                  <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M2.00247 0.500545C1.79016 0.505525 1.58918 0.582706 1.4362 0.735547L0.694403 1.479C0.345704 1.82743 0.389689 2.43243 0.79164 2.83493L3.00694 5.05341L0.79164 7.27092C0.389689 7.67328 0.345566 8.27842 0.694403 8.62753L1.4362 9.37044C1.7849 9.71872 2.38879 9.67543 2.7913 9.27293L5.00659 7.05473L7.22189 9.27293C7.62467 9.67543 8.22898 9.71872 8.57699 9.37044L9.31989 8.62753C9.6679 8.27856 9.62461 7.67342 9.22182 7.27092L7.00653 5.05341L9.22182 2.83493C9.62461 2.43243 9.6679 1.82743 9.31989 1.479L8.57699 0.735547C8.22898 0.386433 7.62467 0.430557 7.22189 0.833614L5.00659 3.05126L2.7913 0.833753C2.56515 0.606635 2.27482 0.493906 2.00247 0.500545Z" />
                  </svg>
               </button>
               <div class="modal-header">
                  <h4>Dates & Availability</h4>
                  <p>Select your travel date & time, also minium traveller for reason easily booking a package.</p>
               </div>
               <div class="modal-body">
                  <form>
                     <div class="row g-4 mb-50">
                        <div class="col-sm-6">
                           <div class="single-field date-field">
                              <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                 <g>
                                    <path
                                       d="M16.125 1.28394H14.8913V2.43609C14.9509 2.57307 14.9755 2.72275 14.9629 2.87163C14.9502 3.0205 14.9007 3.16388 14.8188 3.28883C14.7368 3.41379 14.6251 3.51638 14.4936 3.58736C14.3622 3.65834 14.2151 3.69547 14.0657 3.6954C13.9163 3.69533 13.7692 3.65807 13.6378 3.58697C13.5064 3.51587 13.3948 3.41318 13.313 3.28815C13.2312 3.16312 13.1818 3.0197 13.1693 2.87081C13.1567 2.72193 13.1815 2.57227 13.2413 2.43534V1.28409H11.5136V2.43609C11.5733 2.57304 11.598 2.72272 11.5854 2.87159C11.5728 3.02047 11.5234 3.16388 11.4415 3.28887C11.3597 3.41386 11.248 3.5165 11.1165 3.58754C10.9851 3.65858 10.838 3.69577 10.6886 3.69577C10.5392 3.69577 10.3922 3.65858 10.2607 3.58754C10.1293 3.5165 10.0176 3.41386 9.93572 3.28887C9.85387 3.16388 9.80441 3.02047 9.79183 2.87159C9.77924 2.72272 9.80391 2.57304 9.86363 2.43609V1.28394H8.13638V2.43609C8.19609 2.57304 8.22076 2.72272 8.20818 2.87159C8.19559 3.02047 8.14613 3.16388 8.06428 3.28887C7.98242 3.41386 7.87073 3.5165 7.73929 3.58754C7.60784 3.65858 7.46079 3.69577 7.31138 3.69577C7.16197 3.69577 7.01491 3.65858 6.88346 3.58754C6.75202 3.5165 6.64033 3.41386 6.55848 3.28887C6.47662 3.16388 6.42716 3.02047 6.41457 2.87159C6.40199 2.72272 6.42666 2.57304 6.48638 2.43609V1.28394H4.75875V2.43519C4.81852 2.57212 4.84327 2.72178 4.83075 2.87066C4.81823 3.01955 4.76884 3.16297 4.68704 3.288C4.60524 3.41303 4.49359 3.51572 4.36219 3.58682C4.23078 3.65792 4.08373 3.69518 3.93432 3.69525C3.78491 3.69532 3.63784 3.65819 3.50636 3.58721C3.37489 3.51623 3.26315 3.41364 3.18124 3.28868C3.09932 3.16373 3.0498 3.02035 3.03715 2.87148C3.02449 2.7226 3.0491 2.57292 3.10875 2.43594V1.28394H1.875C1.37772 1.28394 0.900806 1.48148 0.549175 1.83311C0.197544 2.18474 0 2.66165 0 3.15894L0 16.0964C4.97191e-05 16.5937 0.19761 17.0706 0.54923 17.4222C0.90085 17.7738 1.37773 17.9714 1.875 17.9714H16.125C16.6223 17.9714 17.0992 17.7738 17.4508 17.4222C17.8024 17.0706 18 16.5937 18 16.0964V3.15894C18 2.66165 17.8025 2.18474 17.4508 1.83311C17.0992 1.48148 16.6223 1.28394 16.125 1.28394ZM17.25 15.9089C17.25 16.257 17.1117 16.5909 16.8656 16.837C16.6194 17.0832 16.2856 17.2214 15.9375 17.2214H2.0625C1.7144 17.2214 1.38056 17.0832 1.13442 16.837C0.888281 16.5909 0.75 16.257 0.75 15.9089V6.34644C0.75 5.99834 0.888281 5.6645 1.13442 5.41836C1.38056 5.17222 1.7144 5.03394 2.0625 5.03394H15.9375C16.2856 5.03394 16.6194 5.17222 16.8656 5.41836C17.1117 5.6645 17.25 5.99834 17.25 6.34644V15.9089Z" />
                                    <path
                                       d="M14.6287 0.591064C14.6287 0.280404 14.3769 0.0285645 14.0662 0.0285645C13.7556 0.0285645 13.5037 0.280404 13.5037 0.591064V2.84106C13.5037 3.15172 13.7556 3.40356 14.0662 3.40356C14.3769 3.40356 14.6287 3.15172 14.6287 2.84106V0.591064Z" />
                                    <path
                                       d="M11.2512 0.591064C11.2512 0.280404 10.9994 0.0285645 10.6887 0.0285645C10.3781 0.0285645 10.1262 0.280404 10.1262 0.591064V2.84106C10.1262 3.15172 10.3781 3.40356 10.6887 3.40356C10.9994 3.40356 11.2512 3.15172 11.2512 2.84106V0.591064Z" />
                                    <path
                                       d="M7.87378 0.591064C7.87378 0.280404 7.62194 0.0285645 7.31128 0.0285645C7.00062 0.0285645 6.74878 0.280404 6.74878 0.591064V2.84106C6.74878 3.15172 7.00062 3.40356 7.31128 3.40356C7.62194 3.40356 7.87378 3.15172 7.87378 2.84106V0.591064Z" />
                                    <path
                                       d="M4.49628 0.591064C4.49628 0.280404 4.24444 0.0285645 3.93378 0.0285645C3.62312 0.0285645 3.37128 0.280404 3.37128 0.591064V2.84106C3.37128 3.15172 3.62312 3.40356 3.93378 3.40356C4.24444 3.40356 4.49628 3.15172 4.49628 2.84106V0.591064Z" />
                                    <path
                                       d="M5.57379 12.859C5.57379 11.841 6.19393 11.266 6.94745 10.9237C6.31772 10.5738 5.93327 9.97518 5.93327 9.23362C5.93327 7.84346 7.14253 6.93768 9.03335 6.93768C10.665 6.93768 12.0754 7.71146 12.0754 9.2562C12.0754 10.0578 11.5991 10.5852 11.0117 10.8392C11.8151 11.133 12.4262 11.8054 12.4262 12.8442C12.4262 14.553 10.7024 15.3177 8.95704 15.3177C7.14785 15.3177 5.57379 14.5132 5.57379 12.859ZM10.4611 12.8062C10.4611 12.1583 10.0752 11.6429 8.99162 11.6429C7.89793 11.6429 7.50868 12.1281 7.50868 12.7625C7.50868 13.578 8.28429 13.9316 8.9993 13.9316C9.72377 13.9316 10.4611 13.636 10.4611 12.8062ZM7.83377 9.24273C7.83377 9.7755 8.13992 10.2237 9.04127 10.2237C9.88592 10.2237 10.171 9.82871 10.171 9.25623C10.171 8.62605 9.6497 8.29207 8.99612 8.29207C8.39034 8.29203 7.83377 8.57565 7.83377 9.24273Z" />
                                 </g>
                              </svg>
                              <div class="custom-select-dropdown">
                                 <input type="text" name="tourBookingCalendar" readonly value="Sep 12 - Sep 20">
                                 <div class="selected-date"></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="single-field">
                              <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M9.00003 1.52136C4.02939 1.52136 0 5.55075 0 10.5214C0 12.6873 0.765549 14.6746 2.04035 16.2275C2.23702 14.6528 3.80989 13.3209 6.01543 12.6901C6.82119 13.4409 7.86199 13.8964 8.99997 13.8964C10.1112 13.8964 11.1316 13.4638 11.9292 12.7445C14.1538 13.4304 15.6928 14.8401 15.7434 16.4787C17.1465 14.8914 18 12.8067 18 10.5214C18 5.55075 13.9706 1.52136 9.00003 1.52136ZM9.00003 12.8306C8.42549 12.8306 7.88412 12.6727 7.40341 12.3993C6.24498 11.7401 5.44736 10.3912 5.44736 8.83383C5.44736 6.63003 7.04103 4.83703 9.00003 4.83703C10.9592 4.83703 12.5527 6.63003 12.5527 8.83383C12.5527 10.4151 11.7301 11.7807 10.5429 12.4284C10.0751 12.6835 9.55325 12.8306 9.00003 12.8306Z" />
                              </svg>
                              <div class="custom-select-dropdown">
                                 <h6><span id="adult-qty">1</span> Adults, <span id="child-qty">0</span> Child
                                 </h6>
                                 <span>Select Travelers</span>
                              </div>
                              <div class="custom-select-wrap">
                                 <div class="title-area">
                                    <h6>Travelers</h6>
                                    <span>You can book for a maximum of 12 people</span>
                                 </div>
                                 <ul class="guest-count">
                                    <li class="single-item">
                                       <div class="title">
                                          <h6>Adult</h6>
                                          <Span>16 years+</Span>
                                       </div>
                                       <div class="quantity-counter">
                                          <a href="#" data-type="adult" class="guest-quantity__minus"><i
                                             class="bi bi-dash"></i></a>
                                          <input name="adult_quantity" type="text" class="quantity__input"
                                             value="1">
                                          <a href="#" data-type="adult" class="guest-quantity__plus"><i
                                             class="bi bi-plus"></i></a>
                                       </div>
                                    </li>
                                    <li class="single-item">
                                       <div class="title">
                                          <h6>Children</h6>
                                          <Span>0-16 years</Span>
                                       </div>
                                       <div class="quantity-counter">
                                          <a href="#" data-type="child" class="guest-quantity__minus"><i
                                             class="bi bi-dash"></i></a>
                                          <input name="child_quantity" type="text" class="quantity__input"
                                             value="0">
                                          <a href="#" data-type="child" class="guest-quantity__plus"><i
                                             class="bi bi-plus"></i></a>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="tour-booking-calendar" class="calendar-wrapper full-date two"
                        data-dates='[{"start_date":"2025-05-15","end_date":"no_end_date","price":"40","format_price":"$40","offer_price":"30","format_offer_price":"$30","trip_days":["monday","tuesday","wednesday","thursday","friday","saturday","sunday"]},{"start_date":"2025-05-15","end_date":"no_end_date","price":"35","format_price":"$35","offer_price":"28","format_offer_price":"$28","trip_days":["monday","tuesday","wednesday","thursday","friday","saturday","sunday"]},{"start_date":"2025-05-15","end_date":"no_end_date","price":"40","format_price":"$40","offer_price":"33","format_offer_price":"$33","trip_days":["monday","tuesday","wednesday","thursday","friday","saturday","sunday"]}]'
                        data-months-name='["January","February","March","April","May","June","July","August","September","October","November","December"]'
                        data-start-date="hotel-details-checkin" data-end-date="hotel-details-checkout">
                        <div class="calendar-inner">
                           <div class="calendar-container">
                              <div class="calendar" id="calendar-prev">
                                 <div class="calendar-header">
                                    <button class="prev-month">
                                       <!-- Left chevron icon -->
                                       <svg width="16" height="16" viewBox="0 0 16 16">
                                          <path d="M10 2L4 8l6 6" stroke="currentColor" fill="none"
                                             stroke-width="2" />
                                       </svg>
                                    </button>
                                    <h6 id="month-year-prev">August 2025</h6>
                                    <button class="next-month">
                                       <!-- Right chevron icon -->
                                       <svg width="16" height="16" viewBox="0 0 16 16">
                                          <path d="M6 2l6 6-6 6" stroke="currentColor" fill="none"
                                             stroke-width="2" />
                                       </svg>
                                    </button>
                                 </div>
                                 <div class="calendar-days">
                                    <div class="day-name">Mon</div>
                                    <div class="day-name">Tue</div>
                                    <div class="day-name">Wed</div>
                                    <div class="day-name">Thu</div>
                                    <div class="day-name">Fri</div>
                                    <div class="day-name">Sat</div>
                                    <div class="day-name">Sun</div>
                                 </div>
                                 <div class="calendar-dates" id="calendar-dates-prev">
                                    Previous month dates will be populated here
                                 </div>
                              </div>
                           </div>
                           <!-- Calendar Actions -->
                           <div class="calendar-actions">
                              <a href="#" id="tour-calendar-check"
                                 class="calendar-check underline">Apply</a>
                           </div>
                        </div>
                     </div>
                  </form>
                  <div class="package-list">
                     <div class="accordion accordion-flush" id="accordionFlushPackage">
                        <div class="accordion-item">
                           <div class="accordion-header" id="flush-package-headingOne">
                              <div class="accordion-button" role="button" data-bs-toggle="collapse"
                                 data-bs-target="#flush-package-collapseOne" aria-expanded="false"
                                 aria-controls="flush-package-collapseOne">
                                 <div class="batch">
                                    <span>Group Tour</span>
                                 </div>
                                 <div class="title-area">
                                    <span class="check"></span>
                                    <h6>Thailand with Phi Phi Islands.</h6>
                                 </div>
                                 <span>$99.00 </span>
                              </div>
                           </div>
                           <div id="flush-package-collapseOne" class="accordion-collapse collapse show"
                              aria-labelledby="flush-package-headingOne" data-bs-parent="#accordionFlushPackage">
                              <div class="accordion-body">
                                 <div class="tour-info-and-calculate-area">
                                    <p>An 11-night journey covering Bangkok <i class="bi bi-arrow-right"></i>
                                       River Kwai <i class="bi bi-arrow-right"></i> Chiang Rai <i
                                          class="bi bi-arrow-right"></i> Chiang Mai <i
                                          class="bi bi-arrow-right"></i> Phi Phi <i
                                          class="bi bi-arrow-right"></i> Phuket.
                                    </p>
                                    <div class="price-calculate">
                                       <span class="adult">$30 <i class="bi bi-x"></i> 2 Adult</span>
                                       <span class="children">$25 <i class="bi bi-x"></i> 1 Children</span>
                                    </div>
                                 </div>
                                 <div class="additional-service-area">
                                    <h6>Additional Services -</h6>
                                    <ul class="service-list">
                                       <li>
                                          <div class="service-info-wrap">
                                             <label class="containerss">
                                             <input type="checkbox">
                                             <span class="checkmark"></span>
                                             </label>
                                             <div class="service-info">
                                                <h6>Souvenir Photographs</h6>
                                                <p>Offer professional photo packages or digital keepsakes of
                                                   key moments on the tour.
                                                </p>
                                             </div>
                                          </div>
                                          <div class="pricing-and-count-area">
                                             <span>$49.00</span>
                                             <div class="quantity-counter">
                                                <a href="#" data-type="adult" class="quantity__minus"><i
                                                   class="bi bi-dash"></i></a>
                                                <input name="quantity" type="text" class="quantity__input"
                                                   value="01">
                                                <a href="#" data-type="adult" class="quantity__plus"><i
                                                   class="bi bi-plus"></i></a>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="service-info-wrap">
                                             <label class="containerss">
                                             <input type="checkbox">
                                             <span class="checkmark"></span>
                                             </label>
                                             <div class="service-info">
                                                <h6>Louvre Museum</h6>
                                                <p>Offer professional photo packages or digital keepsakes of
                                                   key moments on the tour.
                                                </p>
                                             </div>
                                          </div>
                                          <div class="pricing-and-count-area">
                                             <span>$30.00</span>
                                             <div class="quantity-counter">
                                                <a href="#" data-type="adult" class="quantity__minus"><i
                                                   class="bi bi-dash"></i></a>
                                                <input name="quantity" type="text" class="quantity__input"
                                                   value="01">
                                                <a href="#" data-type="adult" class="quantity__plus"><i
                                                   class="bi bi-plus"></i></a>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="btn-area">
                                    <a href="checkout.html" class="primary-btn1 two">
                                       <span>
                                          Book Now
                                          <svg width="10" height="10" viewBox="0 0 10 10"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z">
                                             </path>
                                          </svg>
                                       </span>
                                       <span>
                                          Book Now
                                          <svg width="10" height="10" viewBox="0 0 10 10"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z">
                                             </path>
                                          </svg>
                                       </span>
                                    </a>
                                    <a href="checkout.html" class="primary-btn1 two transparent">
                                       <span>
                                          <svg width="18" height="18" viewBox="0 0 18 18"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M16.7823 8.95775C15.7387 1.49096 14.8315 0.99707 9.00454 0.99707C3.16848 0.99707 2.26028 1.48821 1.21947 8.94769C0.764911 12.2018 1.01368 14.0987 2.05175 15.2923C3.29652 16.7227 5.54095 17.0026 8.99631 17.0026C12.4581 17.0026 14.7062 16.7218 15.9509 15.2904C16.9881 14.0987 17.2369 12.2055 16.7832 8.95775H16.7823ZM14.9165 14.3905C14.0184 15.424 11.9861 15.6307 8.99723 15.6307C6.0138 15.6307 3.98522 15.4231 3.08708 14.3914C2.34625 13.5408 2.18986 11.9192 2.57856 9.13701C3.52335 2.36897 3.83339 2.36897 9.00546 2.36897C14.1675 2.36897 14.4766 2.36897 15.4241 9.14799C15.8119 11.9238 15.6555 13.5408 14.9165 14.3905Z" />
                                             <path
                                                d="M11.2863 4.19824C11.1044 4.19824 10.9299 4.27051 10.8013 4.39915C10.6726 4.52779 10.6003 4.70227 10.6003 4.88419C10.6003 5.30868 10.4317 5.71579 10.1316 6.01595C9.83139 6.31611 9.42429 6.48474 8.99979 6.48474C8.5753 6.48474 8.1682 6.31611 7.86803 6.01595C7.56787 5.71579 7.39924 5.30868 7.39924 4.88419C7.39924 4.70227 7.32697 4.52779 7.19833 4.39915C7.06969 4.27051 6.89522 4.19824 6.71329 4.19824C6.53137 4.19824 6.35689 4.27051 6.22825 4.39915C6.09961 4.52779 6.02734 4.70227 6.02734 4.88419C6.02734 5.67254 6.34051 6.42859 6.89795 6.98603C7.4554 7.54347 8.21145 7.85664 8.99979 7.85664C9.78814 7.85664 10.5442 7.54347 11.1016 6.98603C11.6591 6.42859 11.9722 5.67254 11.9722 4.88419C11.9722 4.70227 11.9 4.52779 11.7713 4.39915C11.6427 4.27051 11.4682 4.19824 11.2863 4.19824Z" />
                                          </svg>
                                          Add to Cart
                                       </span>
                                       <span>
                                          <svg width="18" height="18" viewBox="0 0 18 18"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M16.7823 8.95775C15.7387 1.49096 14.8315 0.99707 9.00454 0.99707C3.16848 0.99707 2.26028 1.48821 1.21947 8.94769C0.764911 12.2018 1.01368 14.0987 2.05175 15.2923C3.29652 16.7227 5.54095 17.0026 8.99631 17.0026C12.4581 17.0026 14.7062 16.7218 15.9509 15.2904C16.9881 14.0987 17.2369 12.2055 16.7832 8.95775H16.7823ZM14.9165 14.3905C14.0184 15.424 11.9861 15.6307 8.99723 15.6307C6.0138 15.6307 3.98522 15.4231 3.08708 14.3914C2.34625 13.5408 2.18986 11.9192 2.57856 9.13701C3.52335 2.36897 3.83339 2.36897 9.00546 2.36897C14.1675 2.36897 14.4766 2.36897 15.4241 9.14799C15.8119 11.9238 15.6555 13.5408 14.9165 14.3905Z" />
                                             <path
                                                d="M11.2863 4.19824C11.1044 4.19824 10.9299 4.27051 10.8013 4.39915C10.6726 4.52779 10.6003 4.70227 10.6003 4.88419C10.6003 5.30868 10.4317 5.71579 10.1316 6.01595C9.83139 6.31611 9.42429 6.48474 8.99979 6.48474C8.5753 6.48474 8.1682 6.31611 7.86803 6.01595C7.56787 5.71579 7.39924 5.30868 7.39924 4.88419C7.39924 4.70227 7.32697 4.52779 7.19833 4.39915C7.06969 4.27051 6.89522 4.19824 6.71329 4.19824C6.53137 4.19824 6.35689 4.27051 6.22825 4.39915C6.09961 4.52779 6.02734 4.70227 6.02734 4.88419C6.02734 5.67254 6.34051 6.42859 6.89795 6.98603C7.4554 7.54347 8.21145 7.85664 8.99979 7.85664C9.78814 7.85664 10.5442 7.54347 11.1016 6.98603C11.6591 6.42859 11.9722 5.67254 11.9722 4.88419C11.9722 4.70227 11.9 4.52779 11.7713 4.39915C11.6427 4.27051 11.4682 4.19824 11.2863 4.19824Z" />
                                          </svg>
                                          Add to Cart
                                       </span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-header" id="flush-package-headingTwo">
                              <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                 data-bs-target="#flush-package-collapseTwo" aria-expanded="false"
                                 aria-controls="flush-package-collapseTwo">
                                 <div class="batch">
                                    <span>Family Tour</span>
                                 </div>
                                 <div class="title-area">
                                    <span class="check"></span>
                                    <h6>Jordan Classic Tour.</h6>
                                 </div>
                                 <span>$39.00 </span>
                              </div>
                           </div>
                           <div id="flush-package-collapseTwo" class="accordion-collapse collapse"
                              aria-labelledby="flush-package-headingTwo" data-bs-parent="#accordionFlushPackage">
                              <div class="accordion-body">
                                 <div class="tour-info-and-calculate-area">
                                    <p>An 11-night journey covering Bangkok <i class="bi bi-arrow-right"></i>
                                       River Kwai <i class="bi bi-arrow-right"></i> Chiang Rai <i
                                          class="bi bi-arrow-right"></i> Chiang Mai <i
                                          class="bi bi-arrow-right"></i> Phi Phi <i
                                          class="bi bi-arrow-right"></i> Phuket.
                                    </p>
                                    <div class="price-calculate">
                                       <span class="adult">$30 <i class="bi bi-x"></i> 2 Adult</span>
                                       <span class="children">$25 <i class="bi bi-x"></i> 1 Children</span>
                                    </div>
                                 </div>
                                 <div class="additional-service-area">
                                    <h6>Additional Services -</h6>
                                    <ul class="service-list">
                                       <li>
                                          <div class="service-info-wrap">
                                             <label class="containerss">
                                             <input type="checkbox">
                                             <span class="checkmark"></span>
                                             </label>
                                             <div class="service-info">
                                                <h6>Souvenir Photographs</h6>
                                                <p>Offer professional photo packages or digital keepsakes of
                                                   key moments on the tour.
                                                </p>
                                             </div>
                                          </div>
                                          <div class="pricing-and-count-area">
                                             <span>$49.00</span>
                                             <div class="quantity-counter">
                                                <a href="#" data-type="adult" class="quantity__minus"><i
                                                   class="bi bi-dash"></i></a>
                                                <input name="quantity" type="text" class="quantity__input"
                                                   value="01">
                                                <a href="#" data-type="adult" class="quantity__plus"><i
                                                   class="bi bi-plus"></i></a>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="service-info-wrap">
                                             <label class="containerss">
                                             <input type="checkbox">
                                             <span class="checkmark"></span>
                                             </label>
                                             <div class="service-info">
                                                <h6>Louvre Museum</h6>
                                                <p>Offer professional photo packages or digital keepsakes of
                                                   key moments on the tour.
                                                </p>
                                             </div>
                                          </div>
                                          <div class="pricing-and-count-area">
                                             <span>$30.00</span>
                                             <div class="quantity-counter">
                                                <a href="#" data-type="adult" class="quantity__minus"><i
                                                   class="bi bi-dash"></i></a>
                                                <input name="quantity" type="text" class="quantity__input"
                                                   value="01">
                                                <a href="#" data-type="adult" class="quantity__plus"><i
                                                   class="bi bi-plus"></i></a>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="btn-area">
                                    <a href="checkout.html" class="primary-btn1 two">
                                       <span>
                                          Book Now
                                          <svg width="10" height="10" viewBox="0 0 10 10"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z">
                                             </path>
                                          </svg>
                                       </span>
                                       <span>
                                          Book Now
                                          <svg width="10" height="10" viewBox="0 0 10 10"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z">
                                             </path>
                                          </svg>
                                       </span>
                                    </a>
                                    <a href="checkout.html" class="primary-btn1 two transparent">
                                       <span>
                                          <svg width="18" height="18" viewBox="0 0 18 18"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M16.7823 8.95775C15.7387 1.49096 14.8315 0.99707 9.00454 0.99707C3.16848 0.99707 2.26028 1.48821 1.21947 8.94769C0.764911 12.2018 1.01368 14.0987 2.05175 15.2923C3.29652 16.7227 5.54095 17.0026 8.99631 17.0026C12.4581 17.0026 14.7062 16.7218 15.9509 15.2904C16.9881 14.0987 17.2369 12.2055 16.7832 8.95775H16.7823ZM14.9165 14.3905C14.0184 15.424 11.9861 15.6307 8.99723 15.6307C6.0138 15.6307 3.98522 15.4231 3.08708 14.3914C2.34625 13.5408 2.18986 11.9192 2.57856 9.13701C3.52335 2.36897 3.83339 2.36897 9.00546 2.36897C14.1675 2.36897 14.4766 2.36897 15.4241 9.14799C15.8119 11.9238 15.6555 13.5408 14.9165 14.3905Z" />
                                             <path
                                                d="M11.2863 4.19824C11.1044 4.19824 10.9299 4.27051 10.8013 4.39915C10.6726 4.52779 10.6003 4.70227 10.6003 4.88419C10.6003 5.30868 10.4317 5.71579 10.1316 6.01595C9.83139 6.31611 9.42429 6.48474 8.99979 6.48474C8.5753 6.48474 8.1682 6.31611 7.86803 6.01595C7.56787 5.71579 7.39924 5.30868 7.39924 4.88419C7.39924 4.70227 7.32697 4.52779 7.19833 4.39915C7.06969 4.27051 6.89522 4.19824 6.71329 4.19824C6.53137 4.19824 6.35689 4.27051 6.22825 4.39915C6.09961 4.52779 6.02734 4.70227 6.02734 4.88419C6.02734 5.67254 6.34051 6.42859 6.89795 6.98603C7.4554 7.54347 8.21145 7.85664 8.99979 7.85664C9.78814 7.85664 10.5442 7.54347 11.1016 6.98603C11.6591 6.42859 11.9722 5.67254 11.9722 4.88419C11.9722 4.70227 11.9 4.52779 11.7713 4.39915C11.6427 4.27051 11.4682 4.19824 11.2863 4.19824Z" />
                                          </svg>
                                          Add to Cart
                                       </span>
                                       <span>
                                          <svg width="18" height="18" viewBox="0 0 18 18"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M16.7823 8.95775C15.7387 1.49096 14.8315 0.99707 9.00454 0.99707C3.16848 0.99707 2.26028 1.48821 1.21947 8.94769C0.764911 12.2018 1.01368 14.0987 2.05175 15.2923C3.29652 16.7227 5.54095 17.0026 8.99631 17.0026C12.4581 17.0026 14.7062 16.7218 15.9509 15.2904C16.9881 14.0987 17.2369 12.2055 16.7832 8.95775H16.7823ZM14.9165 14.3905C14.0184 15.424 11.9861 15.6307 8.99723 15.6307C6.0138 15.6307 3.98522 15.4231 3.08708 14.3914C2.34625 13.5408 2.18986 11.9192 2.57856 9.13701C3.52335 2.36897 3.83339 2.36897 9.00546 2.36897C14.1675 2.36897 14.4766 2.36897 15.4241 9.14799C15.8119 11.9238 15.6555 13.5408 14.9165 14.3905Z" />
                                             <path
                                                d="M11.2863 4.19824C11.1044 4.19824 10.9299 4.27051 10.8013 4.39915C10.6726 4.52779 10.6003 4.70227 10.6003 4.88419C10.6003 5.30868 10.4317 5.71579 10.1316 6.01595C9.83139 6.31611 9.42429 6.48474 8.99979 6.48474C8.5753 6.48474 8.1682 6.31611 7.86803 6.01595C7.56787 5.71579 7.39924 5.30868 7.39924 4.88419C7.39924 4.70227 7.32697 4.52779 7.19833 4.39915C7.06969 4.27051 6.89522 4.19824 6.71329 4.19824C6.53137 4.19824 6.35689 4.27051 6.22825 4.39915C6.09961 4.52779 6.02734 4.70227 6.02734 4.88419C6.02734 5.67254 6.34051 6.42859 6.89795 6.98603C7.4554 7.54347 8.21145 7.85664 8.99979 7.85664C9.78814 7.85664 10.5442 7.54347 11.1016 6.98603C11.6591 6.42859 11.9722 5.67254 11.9722 4.88419C11.9722 4.70227 11.9 4.52779 11.7713 4.39915C11.6427 4.27051 11.4682 4.19824 11.2863 4.19824Z" />
                                          </svg>
                                          Add to Cart
                                       </span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="accordion-item">
                           <div class="accordion-header" id="flush-package-headingThree">
                              <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                 data-bs-target="#flush-package-collapseThree" aria-expanded="false"
                                 aria-controls="flush-package-collapseThree">
                                 <div class="batch">
                                    <span>Private Tour</span>
                                 </div>
                                 <div class="title-area">
                                    <span class="check"></span>
                                    <h6>Maldives Group Island Hopping Tour.</h6>
                                 </div>
                                 <span>$79.00 </span>
                              </div>
                           </div>
                           <div id="flush-package-collapseThree" class="accordion-collapse collapse"
                              aria-labelledby="flush-package-headingThree"
                              data-bs-parent="#accordionFlushPackage">
                              <div class="accordion-body">
                                 <div class="tour-info-and-calculate-area">
                                    <p>An 11-night journey covering Bangkok <i class="bi bi-arrow-right"></i>
                                       River Kwai <i class="bi bi-arrow-right"></i> Chiang Rai <i
                                          class="bi bi-arrow-right"></i> Chiang Mai <i
                                          class="bi bi-arrow-right"></i> Phi Phi <i
                                          class="bi bi-arrow-right"></i> Phuket.
                                    </p>
                                    <div class="price-calculate">
                                       <span class="adult">$30 <i class="bi bi-x"></i> 2 Adult</span>
                                       <span class="children">$25 <i class="bi bi-x"></i> 1 Children</span>
                                    </div>
                                 </div>
                                 <div class="additional-service-area">
                                    <h6>Additional Services -</h6>
                                    <ul class="service-list">
                                       <li>
                                          <div class="service-info-wrap">
                                             <label class="containerss">
                                             <input type="checkbox">
                                             <span class="checkmark"></span>
                                             </label>
                                             <div class="service-info">
                                                <h6>Souvenir Photographs</h6>
                                                <p>Offer professional photo packages or digital keepsakes of
                                                   key moments on the tour.
                                                </p>
                                             </div>
                                          </div>
                                          <div class="pricing-and-count-area">
                                             <span>$49.00</span>
                                             <div class="quantity-counter">
                                                <a href="#" data-type="adult" class="quantity__minus"><i
                                                   class="bi bi-dash"></i></a>
                                                <input name="quantity" type="text" class="quantity__input"
                                                   value="01">
                                                <a href="#" data-type="adult" class="quantity__plus"><i
                                                   class="bi bi-plus"></i></a>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="service-info-wrap">
                                             <label class="containerss">
                                             <input type="checkbox">
                                             <span class="checkmark"></span>
                                             </label>
                                             <div class="service-info">
                                                <h6>Louvre Museum</h6>
                                                <p>Offer professional photo packages or digital keepsakes of
                                                   key moments on the tour.
                                                </p>
                                             </div>
                                          </div>
                                          <div class="pricing-and-count-area">
                                             <span>$30.00</span>
                                             <div class="quantity-counter">
                                                <a href="#" data-type="adult" class="quantity__minus"><i
                                                   class="bi bi-dash"></i></a>
                                                <input name="quantity" type="text" class="quantity__input"
                                                   value="01">
                                                <a href="#" data-type="adult" class="quantity__plus"><i
                                                   class="bi bi-plus"></i></a>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="btn-area">
                                    <a href="checkout.html" class="primary-btn1 two">
                                       <span>
                                          Book Now
                                          <svg width="10" height="10" viewBox="0 0 10 10"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z">
                                             </path>
                                          </svg>
                                       </span>
                                       <span>
                                          Book Now
                                          <svg width="10" height="10" viewBox="0 0 10 10"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z">
                                             </path>
                                          </svg>
                                       </span>
                                    </a>
                                    <a href="checkout.html" class="primary-btn1 two transparent">
                                       <span>
                                          <svg width="18" height="18" viewBox="0 0 18 18"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M16.7823 8.95775C15.7387 1.49096 14.8315 0.99707 9.00454 0.99707C3.16848 0.99707 2.26028 1.48821 1.21947 8.94769C0.764911 12.2018 1.01368 14.0987 2.05175 15.2923C3.29652 16.7227 5.54095 17.0026 8.99631 17.0026C12.4581 17.0026 14.7062 16.7218 15.9509 15.2904C16.9881 14.0987 17.2369 12.2055 16.7832 8.95775H16.7823ZM14.9165 14.3905C14.0184 15.424 11.9861 15.6307 8.99723 15.6307C6.0138 15.6307 3.98522 15.4231 3.08708 14.3914C2.34625 13.5408 2.18986 11.9192 2.57856 9.13701C3.52335 2.36897 3.83339 2.36897 9.00546 2.36897C14.1675 2.36897 14.4766 2.36897 15.4241 9.14799C15.8119 11.9238 15.6555 13.5408 14.9165 14.3905Z" />
                                             <path
                                                d="M11.2863 4.19824C11.1044 4.19824 10.9299 4.27051 10.8013 4.39915C10.6726 4.52779 10.6003 4.70227 10.6003 4.88419C10.6003 5.30868 10.4317 5.71579 10.1316 6.01595C9.83139 6.31611 9.42429 6.48474 8.99979 6.48474C8.5753 6.48474 8.1682 6.31611 7.86803 6.01595C7.56787 5.71579 7.39924 5.30868 7.39924 4.88419C7.39924 4.70227 7.32697 4.52779 7.19833 4.39915C7.06969 4.27051 6.89522 4.19824 6.71329 4.19824C6.53137 4.19824 6.35689 4.27051 6.22825 4.39915C6.09961 4.52779 6.02734 4.70227 6.02734 4.88419C6.02734 5.67254 6.34051 6.42859 6.89795 6.98603C7.4554 7.54347 8.21145 7.85664 8.99979 7.85664C9.78814 7.85664 10.5442 7.54347 11.1016 6.98603C11.6591 6.42859 11.9722 5.67254 11.9722 4.88419C11.9722 4.70227 11.9 4.52779 11.7713 4.39915C11.6427 4.27051 11.4682 4.19824 11.2863 4.19824Z" />
                                          </svg>
                                          Add to Cart
                                       </span>
                                       <span>
                                          <svg width="18" height="18" viewBox="0 0 18 18"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path
                                                d="M16.7823 8.95775C15.7387 1.49096 14.8315 0.99707 9.00454 0.99707C3.16848 0.99707 2.26028 1.48821 1.21947 8.94769C0.764911 12.2018 1.01368 14.0987 2.05175 15.2923C3.29652 16.7227 5.54095 17.0026 8.99631 17.0026C12.4581 17.0026 14.7062 16.7218 15.9509 15.2904C16.9881 14.0987 17.2369 12.2055 16.7832 8.95775H16.7823ZM14.9165 14.3905C14.0184 15.424 11.9861 15.6307 8.99723 15.6307C6.0138 15.6307 3.98522 15.4231 3.08708 14.3914C2.34625 13.5408 2.18986 11.9192 2.57856 9.13701C3.52335 2.36897 3.83339 2.36897 9.00546 2.36897C14.1675 2.36897 14.4766 2.36897 15.4241 9.14799C15.8119 11.9238 15.6555 13.5408 14.9165 14.3905Z" />
                                             <path
                                                d="M11.2863 4.19824C11.1044 4.19824 10.9299 4.27051 10.8013 4.39915C10.6726 4.52779 10.6003 4.70227 10.6003 4.88419C10.6003 5.30868 10.4317 5.71579 10.1316 6.01595C9.83139 6.31611 9.42429 6.48474 8.99979 6.48474C8.5753 6.48474 8.1682 6.31611 7.86803 6.01595C7.56787 5.71579 7.39924 5.30868 7.39924 4.88419C7.39924 4.70227 7.32697 4.52779 7.19833 4.39915C7.06969 4.27051 6.89522 4.19824 6.71329 4.19824C6.53137 4.19824 6.35689 4.27051 6.22825 4.39915C6.09961 4.52779 6.02734 4.70227 6.02734 4.88419C6.02734 5.67254 6.34051 6.42859 6.89795 6.98603C7.4554 7.54347 8.21145 7.85664 8.99979 7.85664C9.78814 7.85664 10.5442 7.54347 11.1016 6.98603C11.6591 6.42859 11.9722 5.67254 11.9722 4.88419C11.9722 4.70227 11.9 4.52779 11.7713 4.39915C11.6427 4.27051 11.4682 4.19824 11.2863 4.19824Z" />
                                          </svg>
                                          Add to Cart
                                       </span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Booking Modal section End-->
      

















      <!-- Read More-->
      <div class="modal enquiry-modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                  <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M2.00247 0.500545C1.79016 0.505525 1.58918 0.582706 1.4362 0.735547L0.694403 1.479C0.345704 1.82743 0.389689 2.43243 0.79164 2.83493L3.00694 5.05341L0.79164 7.27092C0.389689 7.67328 0.345566 8.27842 0.694403 8.62753L1.4362 9.37044C1.7849 9.71872 2.38879 9.67543 2.7913 9.27293L5.00659 7.05473L7.22189 9.27293C7.62467 9.67543 8.22898 9.71872 8.57699 9.37044L9.31989 8.62753C9.6679 8.27856 9.62461 7.67342 9.22182 7.27092L7.00653 5.05341L9.22182 2.83493C9.62461 2.43243 9.6679 1.82743 9.31989 1.479L8.57699 0.735547C8.22898 0.386433 7.62467 0.430557 7.22189 0.833614L5.00659 3.05126L2.7913 0.833753C2.56515 0.606635 2.27482 0.493906 2.00247 0.500545Z" />
                  </svg>
               </button>
               <div class="modal-body">
                  <h4 class="modal-title" id="enquiryModalLabel">Russia with St Petersburg and Moscow</h4>
                  <div class="prose prose-sm"><p>Explore the vast and diverse landscapes of Russia, where history, culture, and natural beauty converge to create an unforgettable travel experience.</p>

                  <p><strong>Russia, A Land of Diversity:</strong>&nbsp;Russia, the world’s largest country, offers a rich tapestry of experiences. From the historic cities of Moscow and St. Petersburg to the vast Siberian wilderness, Russia is a land of contrasts and surprises.</p>

                  <p><strong>Moscow, the Capital City:</strong>&nbsp;Moscow, the capital, is a bustling metropolis where ancient cathedrals stand alongside modern skyscrapers. The Kremlin, with its iconic cathedrals and historic significance, is a symbol of Russia’s power. Explore the Moscow Metro, a subterranean marvel adorned with stunning architecture.</p>

                  <p><strong>St. Petersburg, the Venice of the North:</strong>&nbsp;St. Petersburg, often called the “Venice of the North,” is known for its romantic canals, beautiful bridges, and imperial palaces. The Hermitage Museum houses an extensive collection of art and historical treasures, while the Peter and Paul Fortress offers a glimpse into the city’s history.</p>

                  <p><strong>Historical Landmarks:</strong>&nbsp;Red Square in Moscow is home to iconic landmarks like Lenin’s Mausoleum, St. Basil’s Cathedral, and the State Universal Store (GUM). In St. Petersburg, the Church of Our Savior on Spilled Blood and the Palace Bridge are architectural wonders.</p>

                  <p><strong>Natural Wonders:</strong>&nbsp;Russia’s natural beauty is awe-inspiring. Explore Zaryadye Park in Moscow, featuring a “floating bridge” with panoramic views. Gorky Park offers a vibrant urban oasis. Beyond the cities, Russia boasts picturesque landscapes, from the Ural Mountains to Lake Baikal.</p>

                  <p><strong>Cultural Riches:</strong>&nbsp;Russian culture is a treasure trove of literature, music, and dance. Discover the works of Tolstoy and Dostoevsky, enjoy classical music at the Bolshoi Theatre, and be captivated by traditional ballet performances.</p>

                  <p><strong>Cuisine and Hospitality:</strong>&nbsp;Savor Russian cuisine, with its hearty dishes like borscht, pelmeni, and blini. Experience the warmth of Russian hospitality as you engage with locals.</p>

                  <p><strong>Travel Highlights:</strong>&nbsp;Highlights of your journey may include the breathtaking Neva River Canal boat cruise in St. Petersburg, the high-speed SAPSAN train ride between Moscow and St. Petersburg, and the chance to witness Russia’s fascinating history and culture.</p></div>
               </div>
            </div>
         </div>
      </div>
      <!-- Enquiry Modal section End-->


      <!-- Package Details Page Start-->
      <div class="package-details-page pt-100 mb-10">
         <div class="container">
            <div class="row g-lg-4 gy-5 justify-content-between">

               <div class="col-xl-7 col-lg-8">
                  <div class="package-details-warpper">
                     <div class="package-info-wrap mb-2">
                        <h4>Russia with St Petersburg and Moscow</h4>
                        <p>Explore the vast and diverse landscapes of Russia, where history, culture, and natural beauty ....</p>
                        <a class="mt-0" data-bs-toggle="modal" data-bs-target="#enquiryModal">Read More</a>                        
                     </div>

                     <div class="tabs-sticky-wrapper">
                         <div class="tabs-container">
                             <button class="tab-btn active" data-target="itinerary">Itinerary</button>
                             <button class="tab-btn" data-target="inclusions">Inclusions</button>
                             <button class="tab-btn" data-target="notes">Notes</button>
                         </div>
                     </div>

                     <div class="location-slider-wrap mb-60">
                        <div>
                           <img src="assets/package-details.webp" class="img-fluid">
                        </div>
                     </div>

                     <div id="itinerary" class="tab-content tour-itinerary-area mb-60">
                        <div class="itinerary-title">
                           <h4>Itinerary Breakdown</h4>
                           <a href="" class="expand-btn itenory-btn">Download Itinerary</a>
                        </div>
                        <ul class="itinerary-list">
                           <li class="single-itinerary">
                              <div class="tour-plan-wrap">
                                 <div class="accordion accordion-flush" id="accordionTourPlan">

                                    <div class="accordion custom-accordion" id="tourAccordion">

                                        <!-- Day 1 -->
                                        <div class="accordion-item active">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#day1">

                                                    <div class="accordion-title">
                                                        <span class="day-badge">Day 1</span>
                                                        Arrival at St Petersburg
                                                    </div>

                                                    <span>⌃</span>
                                                </button>
                                            </h2>

                                            <div id="day1" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li>Arrival at St Petersburg</li>
                                                        <li>Meet & greet at Airport</li>
                                                        <li>Check-in & relax</li>
                                                        <li>Overnight stay</li>
                                                    </ul>

                                                    <p class="custom-note">
                                                        Note: Vehicle service from Airport-Hotel transfers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Day 2 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#day2">
                                                    <div class="accordion-title">
                                                        <span class="day-badge">Day 2</span>
                                                        St Petersburg Tour | Overnight Stay in St Petersburg
                                                    </div>
                                                    <span>⌄</span>
                                                </button>
                                            </h2>

                                            <div id="day2" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                    <p>After buffet breakfast in Hotel, at 11:00 hrs morning will be met by our English speaking guide in Hotel’s lobby to proceed below tour in (By vehicle) :-</p>
                                                    <ul>
                                                       <li>Visit to The Hermitage Museum No Entrance</li>
                                                       <li>Kazan Cathedral No Entrance</li>
                                                       <li>Visit to Palace Square No Entrance</li>
                                                       <li>Continue to Panoramic city tour with photo Stop (No Entrances):-</li>
                                                       <li>Church on the Savior of Split blood.</li>
                                                    </ul>
                                                    <p><strong>Note: Vehicle Service and English Speaking Guide from 11:00 till drop to hotel 18:00hrs</strong></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                 </div>
                              </div>
                           </li>

                           
                        </ul>
                     </div>
                     

                     <div id="inclusions" class="tab-content feature-list-area mb-60">
                        <h4>What’s in the Package?</h4>
                        <div class="row gy-md-5 gy-4 justify-content-between">
                           <div class="col-lg-5 col-md-6">
                              <div class="single-feature-list">
                                 <h5>Include Features</h5>
                                 <ul class="items-list two">
                                    <li>
                                       <svg width="16" height="16" viewBox="0 0 16 16"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15V16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16V15C11.866 15 15 11.866 15 8Z" />
                                          <path
                                             d="M11.6947 6.45795L7.24644 10.9086C7.17556 10.9771 7.08572 11.0126 6.99596 11.0126C6.9494 11.0127 6.90328 11.0035 6.86027 10.9857C6.81727 10.9678 6.77822 10.9416 6.7454 10.9086L4.3038 8.46699C4.16436 8.32987 4.16436 8.10539 4.3038 7.96595L5.16652 7.10083C5.29892 6.96851 5.53524 6.96851 5.66764 7.10083L6.99596 8.42915L10.3309 5.09179C10.3638 5.05887 10.4028 5.03274 10.4457 5.01489C10.4887 4.99705 10.5347 4.98784 10.5812 4.98779C10.6757 4.98779 10.7656 5.02563 10.8317 5.09179L11.6944 5.95699C11.8341 6.09643 11.8341 6.32091 11.6947 6.45795Z" />
                                       </svg>
                                       Accommodation (Hotel, Resort, Villa, Camping, etc.)
                                    </li>
                                    <li>
                                       <svg width="16" height="16" viewBox="0 0 16 16"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15V16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16V15C11.866 15 15 11.866 15 8Z" />
                                          <path
                                             d="M11.6947 6.45795L7.24644 10.9086C7.17556 10.9771 7.08572 11.0126 6.99596 11.0126C6.9494 11.0127 6.90328 11.0035 6.86027 10.9857C6.81727 10.9678 6.77822 10.9416 6.7454 10.9086L4.3038 8.46699C4.16436 8.32987 4.16436 8.10539 4.3038 7.96595L5.16652 7.10083C5.29892 6.96851 5.53524 6.96851 5.66764 7.10083L6.99596 8.42915L10.3309 5.09179C10.3638 5.05887 10.4028 5.03274 10.4457 5.01489C10.4887 4.99705 10.5347 4.98784 10.5812 4.98779C10.6757 4.98779 10.7656 5.02563 10.8317 5.09179L11.6944 5.95699C11.8341 6.09643 11.8341 6.32091 11.6947 6.45795Z" />
                                       </svg>
                                       Meals (Breakfast, Lunch, Dinner – specify type)
                                    </li>
                                    <li>
                                       <svg width="16" height="16" viewBox="0 0 16 16"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15V16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16V15C11.866 15 15 11.866 15 8Z" />
                                          <path
                                             d="M11.6947 6.45795L7.24644 10.9086C7.17556 10.9771 7.08572 11.0126 6.99596 11.0126C6.9494 11.0127 6.90328 11.0035 6.86027 10.9857C6.81727 10.9678 6.77822 10.9416 6.7454 10.9086L4.3038 8.46699C4.16436 8.32987 4.16436 8.10539 4.3038 7.96595L5.16652 7.10083C5.29892 6.96851 5.53524 6.96851 5.66764 7.10083L6.99596 8.42915L10.3309 5.09179C10.3638 5.05887 10.4028 5.03274 10.4457 5.01489C10.4887 4.99705 10.5347 4.98784 10.5812 4.98779C10.6757 4.98779 10.7656 5.02563 10.8317 5.09179L11.6944 5.95699C11.8341 6.09643 11.8341 6.32091 11.6947 6.45795Z" />
                                       </svg>
                                       Guided Tours & Excursions
                                    </li>
                                    <li>
                                       <svg width="16" height="16" viewBox="0 0 16 16"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15V16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16V15C11.866 15 15 11.866 15 8Z" />
                                          <path
                                             d="M11.6947 6.45795L7.24644 10.9086C7.17556 10.9771 7.08572 11.0126 6.99596 11.0126C6.9494 11.0127 6.90328 11.0035 6.86027 10.9857C6.81727 10.9678 6.77822 10.9416 6.7454 10.9086L4.3038 8.46699C4.16436 8.32987 4.16436 8.10539 4.3038 7.96595L5.16652 7.10083C5.29892 6.96851 5.53524 6.96851 5.66764 7.10083L6.99596 8.42915L10.3309 5.09179C10.3638 5.05887 10.4028 5.03274 10.4457 5.01489C10.4887 4.99705 10.5347 4.98784 10.5812 4.98779C10.6757 4.98779 10.7656 5.02563 10.8317 5.09179L11.6944 5.95699C11.8341 6.09643 11.8341 6.32091 11.6947 6.45795Z" />
                                       </svg>
                                       Entry Tickets to Attractions
                                    </li>
                                    <li>
                                       <svg width="16" height="16" viewBox="0 0 16 16"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15V16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16V15C11.866 15 15 11.866 15 8Z" />
                                          <path
                                             d="M11.6947 6.45795L7.24644 10.9086C7.17556 10.9771 7.08572 11.0126 6.99596 11.0126C6.9494 11.0127 6.90328 11.0035 6.86027 10.9857C6.81727 10.9678 6.77822 10.9416 6.7454 10.9086L4.3038 8.46699C4.16436 8.32987 4.16436 8.10539 4.3038 7.96595L5.16652 7.10083C5.29892 6.96851 5.53524 6.96851 5.66764 7.10083L6.99596 8.42915L10.3309 5.09179C10.3638 5.05887 10.4028 5.03274 10.4457 5.01489C10.4887 4.99705 10.5347 4.98784 10.5812 4.98779C10.6757 4.98779 10.7656 5.02563 10.8317 5.09179L11.6944 5.95699C11.8341 6.09643 11.8341 6.32091 11.6947 6.45795Z" />
                                       </svg>
                                       Adventure Activities & Travel Insurance.
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-5 col-md-6">
                              <div class="single-feature-list">
                                 <h5>Exclude Features</h5>
                                 <ul class="items-list two">
                                    <li>
                                       <svg class="exclude" width="16" height="16" viewBox="0 0 16 16"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g>
                                             <path
                                                d="M15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15C11.866 15 15 11.866 15 8ZM16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8Z" />
                                             <path
                                                d="M6.00165 5.00036C5.8601 5.00368 5.72612 5.05514 5.62413 5.15703L5.1296 5.65267C4.89714 5.88495 4.92646 6.28828 5.19443 6.55662L6.67129 8.03561L5.19443 9.51394C4.92646 9.78219 4.89704 10.1856 5.1296 10.4184L5.62413 10.9136C5.8566 11.1458 6.2592 11.117 6.52753 10.8486L8.0044 9.36982L9.48126 10.8486C9.74978 11.117 10.1527 11.1458 10.3847 10.9136L10.8799 10.4184C11.1119 10.1857 11.0831 9.78228 10.8145 9.51394L9.33769 8.03561L10.8145 6.55662C11.0831 6.28828 11.1119 5.88495 10.8799 5.65267L10.3847 5.15703C10.1527 4.92429 9.74978 4.9537 9.48126 5.22241L8.0044 6.70084L6.52753 5.2225C6.37677 5.07109 6.18321 4.99594 6.00165 5.00036Z" />
                                          </g>
                                       </svg>
                                       Visa Fees & Processing.
                                    </li>
                                    <li>
                                       <svg class="exclude" width="16" height="16" viewBox="0 0 16 16"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g>
                                             <path
                                                d="M15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15C11.866 15 15 11.866 15 8ZM16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8Z" />
                                             <path
                                                d="M6.00165 5.00036C5.8601 5.00368 5.72612 5.05514 5.62413 5.15703L5.1296 5.65267C4.89714 5.88495 4.92646 6.28828 5.19443 6.55662L6.67129 8.03561L5.19443 9.51394C4.92646 9.78219 4.89704 10.1856 5.1296 10.4184L5.62413 10.9136C5.8566 11.1458 6.2592 11.117 6.52753 10.8486L8.0044 9.36982L9.48126 10.8486C9.74978 11.117 10.1527 11.1458 10.3847 10.9136L10.8799 10.4184C11.1119 10.1857 11.0831 9.78228 10.8145 9.51394L9.33769 8.03561L10.8145 6.55662C11.0831 6.28828 11.1119 5.88495 10.8799 5.65267L10.3847 5.15703C10.1527 4.92429 9.74978 4.9537 9.48126 5.22241L8.0044 6.70084L6.52753 5.2225C6.37677 5.07109 6.18321 4.99594 6.00165 5.00036Z" />
                                          </g>
                                       </svg>
                                       Personal Expenses (Shopping, Souvenirs, Tips, etc.)
                                    </li>
                                    <li>
                                       <svg class="exclude" width="16" height="16" viewBox="0 0 16 16"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g>
                                             <path
                                                d="M15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15C11.866 15 15 11.866 15 8ZM16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8Z" />
                                             <path
                                                d="M6.00165 5.00036C5.8601 5.00368 5.72612 5.05514 5.62413 5.15703L5.1296 5.65267C4.89714 5.88495 4.92646 6.28828 5.19443 6.55662L6.67129 8.03561L5.19443 9.51394C4.92646 9.78219 4.89704 10.1856 5.1296 10.4184L5.62413 10.9136C5.8566 11.1458 6.2592 11.117 6.52753 10.8486L8.0044 9.36982L9.48126 10.8486C9.74978 11.117 10.1527 11.1458 10.3847 10.9136L10.8799 10.4184C11.1119 10.1857 11.0831 9.78228 10.8145 9.51394L9.33769 8.03561L10.8145 6.55662C11.0831 6.28828 11.1119 5.88495 10.8799 5.65267L10.3847 5.15703C10.1527 4.92429 9.74978 4.9537 9.48126 5.22241L8.0044 6.70084L6.52753 5.2225C6.37677 5.07109 6.18321 4.99594 6.00165 5.00036Z" />
                                          </g>
                                       </svg>
                                       Optional Excursions & Activities.
                                    </li>
                                    <li>
                                       <svg class="exclude" width="16" height="16" viewBox="0 0 16 16"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g>
                                             <path
                                                d="M15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15C11.866 15 15 11.866 15 8ZM16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8Z" />
                                             <path
                                                d="M6.00165 5.00036C5.8601 5.00368 5.72612 5.05514 5.62413 5.15703L5.1296 5.65267C4.89714 5.88495 4.92646 6.28828 5.19443 6.55662L6.67129 8.03561L5.19443 9.51394C4.92646 9.78219 4.89704 10.1856 5.1296 10.4184L5.62413 10.9136C5.8566 11.1458 6.2592 11.117 6.52753 10.8486L8.0044 9.36982L9.48126 10.8486C9.74978 11.117 10.1527 11.1458 10.3847 10.9136L10.8799 10.4184C11.1119 10.1857 11.0831 9.78228 10.8145 9.51394L9.33769 8.03561L10.8145 6.55662C11.0831 6.28828 11.1119 5.88495 10.8799 5.65267L10.3847 5.15703C10.1527 4.92429 9.74978 4.9537 9.48126 5.22241L8.0044 6.70084L6.52753 5.2225C6.37677 5.07109 6.18321 4.99594 6.00165 5.00036Z" />
                                          </g>
                                       </svg>
                                       Meals Not Mentioned in Itinerary.
                                    </li>
                                    <li>
                                       <svg class="exclude" width="16" height="16" viewBox="0 0 16 16"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <g>
                                             <path
                                                d="M15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15C11.866 15 15 11.866 15 8ZM16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8Z" />
                                             <path
                                                d="M6.00165 5.00036C5.8601 5.00368 5.72612 5.05514 5.62413 5.15703L5.1296 5.65267C4.89714 5.88495 4.92646 6.28828 5.19443 6.55662L6.67129 8.03561L5.19443 9.51394C4.92646 9.78219 4.89704 10.1856 5.1296 10.4184L5.62413 10.9136C5.8566 11.1458 6.2592 11.117 6.52753 10.8486L8.0044 9.36982L9.48126 10.8486C9.74978 11.117 10.1527 11.1458 10.3847 10.9136L10.8799 10.4184C11.1119 10.1857 11.0831 9.78228 10.8145 9.51394L9.33769 8.03561L10.8145 6.55662C11.0831 6.28828 11.1119 5.88495 10.8799 5.65267L10.3847 5.15703C10.1527 4.92429 9.74978 4.9537 9.48126 5.22241L8.0044 6.70084L6.52753 5.2225C6.37677 5.07109 6.18321 4.99594 6.00165 5.00036Z" />
                                          </g>
                                       </svg>
                                       Travel Insurance (if not included).
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>

                     
                     <div id="notes" class="tab-content additional-info mb-60">
                        <h4>Notes</h4>
                        <p><strong>Supplement Cost – Additional Tour for Hunting Northern Lights at Murmansk (Subject to Weather Conditions) Pickup at 21:00 and Drop at 00:00 hrs (Private Tour) (With English Speaking Chauffer)</strong></p>
                        <p><strong>
                           GROUP SIZE | AMOUNT<br>
                           2 Person – 135$ Per Person<br>
                           4-6 Person – 65$ Per Person<br>
                           For More than 8 Person – 40$ Per Person
                        </strong></p>
                     </div>

                  </div>
               </div>

               <div class="col-lg-4">
                 <div class="package-details-sidebar">

                   <div class="sticky-sidebar">

                     <div class="booking-card">

                       <!-- PRICE -->
                       <div class="price-box">
                         <p class="trip-label">Trip Starts From</p>

                         <div class="price-row">
                           <span class="price" id="mainPrice">₹ 18,999</span>
                           <span class="old-price">₹ 20,999</span>
                           <span class="discount">₹ 2,000 Off</span>
                         </div>

                         <p class="per-person">Per Person</p>
                       </div>

                       <!-- TRIP DATES -->
                       <div class="section">
                         <div class="section-header">
                           <h6>📅 Trip Dates</h6>

                           <!-- DROPDOWN -->
                           <select class="month-select no-nice">
                             <option>May</option>
                             <option>June</option>
                             <option>July</option>
                           </select>
                         </div>

                         <div class="date-list">

                           <div class="date-item active" data-price="18999">
                             <div>
                               <p>09 May 2026</p>
                               <small>Starting ₹ 18,999 /Person</small>
                             </div>
                             <span class="circle active"></span>
                           </div>

                           <div class="date-item" data-price="19999">
                             <div>
                               <p>16 May 2026</p>
                               <small>Starting ₹ 19,999 /Person</small>
                             </div>
                             <span class="circle"></span>
                           </div>

                           <div class="date-item" data-price="20999">
                             <div>
                               <p>23 May 2026</p>
                               <small>Starting ₹ 20,999 /Person</small>
                             </div>
                             <span class="circle"></span>
                           </div>

                         </div>
                       </div>

                       <!-- TRAVELLERS SIMPLE INPUT -->
                       <div class="section travellers">
                         <h6>👥 No. of Travellers</h6>

                         <input type="number" id="travellerInput" value="1" min="1" class="traveller-input">
                       </div>

                       <!-- BUTTON -->
                       <button class="book-btn">Book Now</button>

                       <!-- WHATSAPP -->
                       <div class="help">
                         <span>Any Doubt?</span>
                         <a href="https://wa.me/+919310660016" target="_blank" class="whatsapp-btn">
                           WhatsApp
                         </a>
                       </div>

                     </div>

                   </div>
                 </div>
               </div>

            </div>
         </div>
      </div>
      <!-- Package Details Page End-->


      <div class="destionation-dt-customer-gallery-section mb-100 pt-0">
        <div class="container-fluid">
            <div class="section-title text-center mb-60 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <h2>Gallery by Travelers</h2>
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


    <div class="home1-testimonial-section mb-5 pb-0 pt-0">
        <div class="container">
            <div class="row justify-content-center mb-50 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center">
                        <h2>Reviews From Our Travellers</h2>
                        <!-- <p>We</p> -->
                    </div>
                </div>
            </div>  
            <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="swiper home1-testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="review-col">
                                    <div class="review-box">
                                        <div class="review-img">
                                            <img src="assets/img/home5/tour-guide-img4.png" class="img-fluid">
                                        </div>
                                        <div class="review-content">
                                            <div class="stars">★★★★★</div>
                                            <p class="text-sm">The Pause Project gave me the space I didn’t realize I was craving. Through guided meditations, mindful exercises, and reflective sessions, I learned to release the tension, guilt, and fears I had been carrying. I left feeling not only refreshed but truly transformed, with tools to maintain calm and clarity in my daily life.</p>
                                            <h4>Harsh Bhatiya</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                </div>
            </div>


            <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="swiper home1-testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="review-col">
                                    <div class="review-box">
                                        <div class="review-img">
                                            <img src="assets/img/home5/tour-guide-img4.png" class="img-fluid">
                                        </div>
                                        <div class="review-content">
                                            <div class="stars">★★★★★</div>
                                            <p class="text-sm">The Pause Project gave me the space I didn’t realize I was craving. Through guided meditations, mindful exercises, and reflective sessions, I learned to release the tension, guilt, and fears I had been carrying. I left feeling not only refreshed but truly transformed, with tools to maintain calm and clarity in my daily life.</p>
                                            <h4>Harsh Bhatiya</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                            <div class="swiper-slide">
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
                </div>
            </div>
            
        </div>
    </div>


<?php include('footer.php'); ?>


<script>

   $('.month-select').niceSelect('destroy');



document.addEventListener("DOMContentLoaded", function () {

    const bannerVideo = document.getElementById("packagebannerVideo");
    const bannerBtn = document.getElementById("muteBtn");

    if (bannerVideo && bannerBtn) {
        bannerBtn.addEventListener("click", function () {
            bannerVideo.muted = !bannerVideo.muted;

            bannerBtn.innerHTML = bannerVideo.muted ? "🔇" : "🔊";
        });
    }

});
</script>

<script>
document.addEventListener("click", function(e){

   let item = e.target.closest(".date-item");
   if(!item) return;

   // remove active from all
   document.querySelectorAll(".date-item").forEach(i=>{
      i.classList.remove("active");

      let c = i.querySelector(".circle");
      if(c) c.classList.remove("active");
   });

   // add active to clicked
   item.classList.add("active");

   let activeCircle = item.querySelector(".circle");
   if(activeCircle) activeCircle.classList.add("active");

   // price update (optional)
   let price = item.getAttribute("data-price");
   let priceBox = document.getElementById("mainPrice");

   if(price && priceBox){
      priceBox.innerText = "₹ " + Number(price).toLocaleString();
   }

});



document.querySelectorAll(".tab-btn").forEach(button => {
    button.addEventListener("click", function () {

        // remove active from all buttons
        document.querySelectorAll(".tab-btn").forEach(btn => btn.classList.remove("active"));
        this.classList.add("active");

        // hide all content
        document.querySelectorAll(".tab-content").forEach(content => content.classList.remove("active"));

        // show selected content
        const target = this.getAttribute("data-target");
        const targetElement = document.getElementById(target);

        targetElement.classList.add("active");

        // ✅ SCROLL FIX (important)
        targetElement.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    });
});
</script>