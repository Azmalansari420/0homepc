<?php include'header.php' ?>
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header" >
   <div class="container py-5">
      <div class="row justify-content-start">
         <div class="col-lg-8 text-center text-lg-start">
            <h5
               class="d-inline-block text-primary text-uppercase border-bottom border-5"
               style="border-color: rgba(256, 256, 256, 0.3) !important"
               >
               Welcome To Geomedipath Lab
            </h5>
            <h1 class="display-1 text-white mb-md-4">
               <?=$EDITDATA[0]->name ?>
            </h1>
            <div class="pt-2">
               <a
                  href="#"
                  class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2"
                  >Book Now</a
                  >
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Hero End -->
<!--payment-form-modal-->
<div
   class="modal fade"
   id="formModal"
   data-bs-backdrop="static"
   data-bs-keyboard="false"
   tabindex="-1"
   aria-labelledby="formModalLabel"
   aria-hidden="true"
   >
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="formModalLabel">Fill the Details</h5>
            <button
               type="button"
               class="btn-close"
               data-bs-dismiss="modal"
               aria-label="Close"
               ></button>
         </div>
         <div class="modal-body">
            <form id="userForm">
               <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" required />
               </div>
               <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" required />
               </div>
               <div class="mb-3">
                  <label for="mobile" class="form-label">Mobile</label>
                  <input
                     type="tel"
                     class="form-control"
                     id="mobile"
                     pattern="[0-9]{10}"
                     required
                     />
               </div>
               <div class="mb-3">
                  <label for="address" class="form-label">Address</label>
                  <textarea class="form-control" id="address" rows="3" required></textarea>
               </div>
               <div class="mb-3">
                  <label for="date" class="form-label">Select Date</label>
                  <input type="date" class="form-control" id="date" required />
               </div>
               <div class="mb-3">
                  <label for="time" class="form-label">Select Time</label>
                  <select class="form-control" id="time" required>
                     <option value="">Select Time</option>
                     <option value="07:00 AM">07:00 AM</option>
                     <option value="08:00 AM">08:00 AM</option>
                     <option value="09:00 AM">09:00 AM</option>
                     <option value="10:00 AM">10:00 AM</option>
                     <option value="11:00 AM">11:00 AM</option>
                     <option value="12:00 PM">12:00 PM</option>
                     <option value="01:00 PM">01:00 PM</option>
                     <option value="02:00 PM">02:00 PM</option>
                     <option value="03:00 PM">03:00 PM</option>
                     <option value="04:00 PM">04:00 PM</option>
                     <option value="05:00 PM">05:00 PM</option>
                     <option value="06:00 PM">06:00 PM</option>
                     <option value="07:00 PM">07:00 PM</option>
                     <option value="08:00 PM">08:00 PM</option>
                     <option value="09:00 PM">09:00 PM</option>
                     <option value="10:00 PM">10:00 PM</option>
                     <option value="11:00 PM">11:00 PM</option>
                     <option value="12:00 AM">12:00 AM</option>
                  </select>
               </div>
               <button type="submit" class="btn btn-success w-100">
               Submit
               </button>
            </form>
         </div>
      </div>
   </div>
</div>
<!--payment-form-modal end-->
<div class="container-fluid py-5">
   <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 500px">
         <h1 class="display-4"><?=$EDITDATA[0]->name ?></h1>
      </div>
      <div class="row py-5 justify-content-center">
         <div class="col-lg-6 col-md-6 col-sm-12 test-amount">
            <div class="row py-5 justify-content-center">
               <div class="col-lg-12">
                  <?=$EDITDATA[0]->content ?>
               </div>
               
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 test-amount">
            <h1>Fertility Profile</h1>
            <h3><!-- <del>₹3999</del> | --> <span class="text-success"><?=currency_simble($EDITDATA[0]->amount) ?></span></h3>
            <div class="test-highlighted-box">
              <?=$EDITDATA[0]->testlist ?>
            </div>
            <p class="text-dark">
               *inclusive of all the taxes, fees and subject to availability
            </p>
            <button
               class="btn btn-primary w-100 py-3"
               style="width: max-content !important; padding: 10px 100px"
               type="submit"
               data-bs-toggle="modal"
               data-bs-target="#formModal"
               >
            Book Now
            </button>
         </div>
      </div>
      <div class="row py-5 justify-content-center">
         <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-3">
            <div class="test-service-box">
               <img src="img/certified-lab.svg" alt="" />
               <p>Trusted & Certified Lab</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-3">
            <div class="test-service-box">
               <img src="img/report.svg" alt="" />
               <p>Trusted & Certified Lab</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-3">
            <div class="test-service-box">
               <img src="img/blood-sample.svg" alt="" />
               <p>Trusted & Certified Lab</p>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-3">
            <div class="test-service-box">
               <img src="img/vaccinated.svg" alt="" />
               <p>Trusted & Certified Lab</p>
            </div>
         </div>
      </div>
      <div class="row g-5 justify-content-center pb-5">
         <div class="col-lg-12 col-md-12">
            <?=$EDITDATA[0]->test_details ?>
         </div>
         
      </div>
   </div>
</div>
<script>
   document.addEventListener("DOMContentLoaded", function () {
     let dateInput = document.getElementById("date");
     let timeSelect = document.getElementById("time");
   
     // Set minimum date to today
     let today = new Date().toISOString().split("T")[0];
     dateInput.setAttribute("min", today);
   
     // Function to update time options
     function updateTimeOptions() {
       let selectedDate = new Date(dateInput.value);
       let now = new Date();
       let currentHour = now.getHours();
   
       let timeSlots = [];
       for (let hour = 7; hour <= 24; hour++) {
         if (
           selectedDate.toDateString() === now.toDateString() &&
           hour <= currentHour
         ) {
           continue; // Skip past hours if selected date is today
         }
         let formattedHour = hour > 12 ? hour - 12 : hour;
         let period = hour >= 12 ? "PM" : "AM";
         timeSlots.push(`${formattedHour}:00 ${period}`);
       }
   
       // Populate the time dropdown
       timeSelect.innerHTML = `<option value="">Select Time</option>`;
       timeSlots.forEach((time) => {
         let option = document.createElement("option");
         option.value = time;
         option.textContent = time;
         timeSelect.appendChild(option);
       });
     }
   
     // Update time when date changes
     dateInput.addEventListener("change", updateTimeOptions);
   
     // Set initial time options based on today's date
     dateInput.value = today;
     updateTimeOptions();
   });
</script>
<?php include'footer.php' ?>