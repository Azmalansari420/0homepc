(function ($) {
  "use strict";

  // Dropdown on mouse hover
  $(document).ready(function () {
    function toggleNavbarMethod() {
      if ($(window).width() > 992) {
        $(".navbar .dropdown")
          .on("mouseover", function () {
            $(".dropdown-toggle", this).trigger("click");
          })
          .on("mouseout", function () {
            $(".dropdown-toggle", this).trigger("click").blur();
          });
      } else {
        $(".navbar .dropdown").off("mouseover").off("mouseout");
      }
    }
    toggleNavbarMethod();
    $(window).resize(toggleNavbarMethod);
  });

  // Date and time picker
  $(".date").datetimepicker({
    format: "L",
  });
  $(".time").datetimepicker({
    format: "LT",
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Price carousel
  $(".price-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    margin: 45,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      992: {
        items: 2,
      },
      1200: {
        items: 3,
      },
    },
  });

  // Team carousel
  $(".team-carousel, .related-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    margin: 45,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      992: {
        items: 2,
      },
    },
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    items: 1,
    dots: true,
    loop: true,
  });
  
//   banner carousel
$(".banner-carousel").owlCarousel({
    autoplay: true,
    autoplayTimeout: 2000,
    smartSpeed: 1000,
    items: 1,
    dots: true,
    loop: true,
  });
  
})(jQuery);

// user-details

const profile = document.querySelector(".profile");
const invoice = document.querySelector(".invoice");
const testDetail = document.querySelector(".testDetails");
const profileBtn = document.querySelector(".profileBtn");
const testBtn = document.querySelector(".testBtn");
const invoiceBtn = document.querySelector(".invoiceBtn");

const hideAllSections = () => {
  profile.classList.remove("show");
  profile.classList.add("hidden");
  invoice.classList.remove("show");
  invoice.classList.add("hidden");
  testDetail.classList.remove("show");
  testDetail.classList.add("hidden");
};

const profileDetails = () => {
  hideAllSections();
  profile.classList.add("show");
  profile.classList.remove("hidden");
  profile.scrollIntoView({ behavior: "smooth" });
};

const invoiceDetails = () => {
  hideAllSections();
  invoice.classList.add("show");
  invoice.classList.remove("hidden");
  invoice.scrollIntoView({ behavior: "smooth" });
};

const testDetails = () => {
  hideAllSections();
  testDetail.classList.add("show");
  testDetail.classList.remove("hidden");
  testDetail.scrollIntoView({ behavior: "smooth" });
};

profileBtn.addEventListener("click", profileDetails);
invoiceBtn.addEventListener("click", invoiceDetails);
testBtn.addEventListener("click", testDetails);

// Initial state
hideAllSections();

// user-details


// banner carousel
  
