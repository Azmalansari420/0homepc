<?php include('header.php'); ?>
<style type="text/css">
   input[type="radio"]:checked {
   border-color: green;
   animation: none;
   }

   select option:nth-child(odd) {
       background-color: #dde9ff;
       font-weight: bold;
   }
   select option:nth-child(even) {
    background-color: #ffffff;
    font-weight: bold;
}
.form-control:disabled, .form-control:read-only {
    background-color: #ffffff;
    opacity: 1;
}
</style>
<!-- Header Start -->
<div class="container-fluid header hero-bg p-0 pb-5">
   <h1 class="text-uppercase text-center fs-3 p-4">APPLY FOR FSSAI LICENSE | FOOD LICENSE CERTIFICATE | FOSCOS</h1>
   <div class="row g-0 flex-column-reverse flex-lg-row mx-2">
      <div class="col-lg-6 ps-lg-4 pe-xl-2 wow fadeIn" data-wow-delay="0.1s">
         <div class="form-fssi">
            <div class="fssi-head d-flex align-items-center justify-content-center">
               <h2 class="text-uppercase text-center fs-5 m-0">FSSAI Registration
                  Online
                  Apply
               </h2>
            </div>
            <form action="#!" method="post" enctype="multipart/form-data" class="main-form-custom" id="main-form1">
               <div class="form-group txt">
                  <label for="applicant-name"> Name of Applicant / आवेदक का नाम <span class="required">
                  *</span></label>
                  <input type="text" class="form-control" name="name" id="applicant-name" value=""
                     required="">
               </div>
               <div class="form-group txt">
                  <label for="email-id">Email Id / ईमेल आईडी <span class="required"> *</span></label>
                  <input type="text" class="form-control" name="email" id="email-id" required="">
               </div>
               <div class="form-group txt">
                  <label for="mobile-number">Mobile Number / मोबाइल नंबर <span class="required">
                  *</span></label>
                  <input type="tel" maxlength="10" minlength="10" class="form-control" name="mobile"
                     id="mobile-number" required="">
               </div>
               <div class="form-group txt">
                  <label for="name-of-business">Name Of Business / Firm / Company / व्यवसाय / फर्म / कंपनी का नाम <span class="required"> *</span></label>
                  <input type="text" class="form-control" name="busines_name" id="name-of-business"
                     required="">
               </div>
               <div class="form-group txt">
                  <label for="food_category">Name of the Food Category / खाद्य श्रेणी का नाम <span
                     class="required">
                  *</span></label>
                  <select class="form-control" name="food_cate" id="food_category"
                     required="">
                     <option value="">Select</option>
                     <option value="Dairy products and analogues, excluding products of food category 2.0">
                        Dairy products and analogues, excluding products of food category 2.0
                     </option>
                     <option value="Fats and oils, and fat emulsions">Fats and oils, and fat emulsions
                     </option>
                     <option value="Edible ices, including sherbet and sorbet">Edible ices, including sherbet and sorbet
                     </option>
                     <option value="Fruits and vegetables (including mushrooms and fungi, roots and tubers, pulses and legumes, and aloe vera)">Fruits and vegetables (including mushrooms and fungi, roots and tubers, pulses and legumes, and aloe vera) </option>
                     <option value="Confectionery">Confectionery</option>
                     <option
                        value="Cereals and cereal products, derived from cereal grains, from roots and tubers, pulses, legumes">
                        Cereals and cereal products, derived from cereal grains, from roots and tubers,
                        pulses, legumes
                     </option>
                     <option value="Bakery products">Bakery products</option>
                     <option value="Fish and fish products, including molluscs, crustaceans, and echinoderms">
                        Fish and fish products, including molluscs, crustaceans, and echinoderms
                     </option>
                     <option value="Eggs and egg products">Eggs and egg products</option>
                     <option value="Sweeteners, including honey">Sweeteners, including honey</option>
                     <option value="Salts, spices, soups, sauces, salads and protein products">Salts, spices,
                        soups, sauces, salads and protein products
                     </option>
                     <option value="Foodstuffs intended for particular nutritional uses">Foodstuffs intended
                        for particular nutritional uses
                     </option>
                     <option value="Beverages, excluding dairy products">Beverages, excluding dairy products
                     </option>
                     <option value="Ready-to-eat savouries">Ready-to-eat savouries</option>
                     <option value="Prepared Foods">Prepared Foods</option>
                     <option value="Substances added to food">Substances added to food</option>
                     <option value="others">Others</option>
                  </select>
               </div>


               <div class="form-group txt">
                  <label for="nature_business">Kind Of Business / व्यवसाय का प्रकार <span class="required">
                  *</span></label>
                  <select class="form-control businessTypesDropdown" name="business_name" id="nature_business" required="">
                     <option value="" selected>Select</option>
                     <option value="Small / Petty Food Business Operators" data-id="small-business-operators">1. Small / Petty Food Business Operators
                     </option>
                     <option value="Dairy Units including Milk Chilling Units" data-id="Dairy-Units">2. Dairy Units including Milk Chilling Units
                     </option>
                     <option value="Vegetable Oil Processing Units" data-id="Vegetable-Oil">3. Vegetable Oil Processing Units
                     </option>
                     <option value="Slaughtering House" data-id="Slaughtering-House">4. Slaughtering House</option>
                     
                     <option value="Meat Processing" data-id="Meat-Processing">5. Meat Processing</option>
                     <option value="Food Manufacturing/Processing units other than Dairy Units, Vegetable Oil, Meat Processing, and Slaughtering Houses" data-id="Manufacturer-of-any-food">
                        6. Manufacturer / Processor of any food other than Dairy Units, Vegetable Oil....
                     </option>
                     <option value="Proprietary Food" data-id="Proprietary-Food">7. Proprietary Food</option>
                     <option value="Novel Food" data-id="Novel-Food">8. Novel Food</option>
                     
                     <option value="Storage - Cold/Refrigerated" data-id="warehouse">8. Warehouse - Cold/Refrigerated</option>
                     <option value="Storage – Atmospheric Controlled + Cold" data-id="Atmospheric-Controlled">9. Warehouse – Atmospheric Controlled + Cold
                     </option>
                     <option value="Storage Without Atmospheric Controlled + Cold" data-id="Atmospheric-Controlled-without">10. Warehouse Without Atmospheric Controlled + Cold
                     </option>
                     <option value="Transporter" data-id="Transporter">11. Transporter</option>
                     <option value="Wholesaler" data-id="Wholesaler">12. Wholesaler</option>
                     <option value="Distributor" data-id="Distributor">13. Distributor</option>
                     <option value="Supplier" data-id="Supplier">14. Supplier</option>
                     <option value="Retailer" data-id="Retailer">15. Retailer</option>
                     <option value="Marketer" data-id="Marketer">16. Marketer</option>
                     <option value="Hotel" data-id="Hotel">17. Hotel</option>
                     <option value="Restaurants" data-id="Restaurants">18. Restaurant and Bars</option>
                     <option value="Club/Canteen" data-id="Club-Canteen">19. Club/Canteen</option>
                     <option value="Caterer" data-id="Caterar">20. Caterer</option>
                     <option value="Food Vending Agencies" data-id="Food-Vending-Agencies">21. Food Vending Agencies</option>
                     <option value="Dhaba" data-id="Dhaba">22. Dhaba</option>
                     <option value="Importers" data-id="Importers">23. Importers</option>
                     <option value="Food Business Activities at premises of Central" data-id="Food-Business-Activities">24. Food Business Activities at premises of Central</option>
                     <option value="Departmental Canteens atthe premises of Central Govt. Institutions" data-id="Departmental-Canteens">25. Departmental Canteens atthe premises of Central Govt. Institutions</option>
                     <option value="Food Business Activities at premises of Airport/Seaportsuch as Storage, Wholesale, Distribution, Retail etc" data-id="Food-Business-Activities-aiport">26. Food Business Activities at premises of Airport/Seaportsuch as Storage, Wholesale, Distribution, Retail etc</option>
                     <option value="Mid day Meal Catere" data-id="Midday-Meal">27. Mid day Meal Catere</option>
                     <option value="Mid Day Meal Canteen" data-id="Midday-Meal-Canteen">28. Mid Day Meal Canteen</option>
                     <option value="Exporters" data-id="Exporter">26. Exporters</option>
                     <option value="Caterers/Restaurants/Canteens/Hawkers/Petty" data-id="multiple-type">29. Caterers/Restaurants/Canteens/Hawkers/Petty</option>
                     <option value="E-commerce" data-id="E-commerce">30. E-commerce</option>
                     <option value="Head Office/Registered Office" data-id="Head-Office">31. Head Office/Registered Office</option>
                     
                  </select>
               </div>
               <!-- 1 -->
               <div class="turnoverDisplay" style="display:none;">
                  <?php include('include/fssai-registration.php') ?>
               </div>

               <input type="hidden" id="payable_price" name="payable_price" class="payable-price" value="">

               <div class="form-group txt">
                  <label for="office-address">Complete Business Address / पता <span class="required">
                  *</span></label>
                  <textarea class="form-control" name="address" id="office-address" required=""
                     cols="10" row="5"></textarea>
               </div>

               <div class="row form-group">
                  <div class=" col-lg-4 txt">
                     <label>PINCODE</label>
                     <input type="text" class="form-control" name="pincode" id="pincode"  minlength="6" maxlength="6" required="">
                  </div>

                  <div class=" txt col-lg-4 col-12">
                     <label>State / राज्य <span class=""> *</span></label>
                     <select id="office-state" size="1" class="form-control select-state" name="state" required="">
                        <option value="" selected>Select State</option>
                        <option value="Andaman_And_Nicobar_Island">1. ANDAMAN AND NICOBAR ISLANDS / अंदमान और निकोबार
                          द्वीपसमूह</option>
                        <option value="Andhra_Pradesh">2. ANDHRA PRADESH / आन्ध्र प्रदेश </option>
                        <option value="Arunachal_Pradesh">3. ARUNACHAL PRADESH / अरुणाचल प्रदेश</option>
                        <option value="Assam">4. ASSAM / असम</option>
                        <option value="Bihar">5. BIHAR / बिहार</option>
                        <option value="Chhattisgarh">6. CHHATTISGARH / छत्तीसगढ़</option>
                        <option value="Chandigarh">7. CHANDIGARH / चंडीगढ़ </option>
                        <option value="Dadara">8.DADAR AND NAGAR HAVELI / दादरा और नगर हवेली</option>
                        <option value="Daman">9. DAMAN AND DIU / दमन और दीव</option>
                        <option value="Delhi">10. DELHI / दिल्ली</option>
                        <option value="Goa">11. GOA / गोवा</option>
                        <option value="Gujarat">12. GUJARAT / गुजरात</option>
                        <option value="Haryana">13. HARYANA / हरियाणा</option>
                        <option value="Himachal_Pradesh">14. HIMACHAL PRADESH / हिमाचल प्रदेश</option>
                        <option value="Jammu_and_Kashmir">15. JAMMU AND KASHMIR / जम्मू और कश्मीर</option>
                        <option value="Jharkhand">16. JHARKHAND / झारखण्ड</option>
                        <option value="Karnataka">17. KARNATAKA / कर्णाटक</option>
                        <option value="Kerala">18. KERALA / केरल</option>
                        <option value="Ladakh">19. LADAKH / लद्दाख</option>
                        <option value="Lakshadweep">20. LAKSHADWEEP / लक्षद्वीप</option>
                        <option value="Madhya_Pradesh">21. MADHYA PRADESH / मध्य प्रदेश</option>
                        <option value="Maharashtra">22. MAHARASHTRA / महाराष्ट्र</option>
                        <option value="Manipur">23. MANIPUR / मणिपुर</option>
                        <option value="Meghalaya">24. MEGHALAYA / मेघालय</option>
                        <option value="Mizoram">25. MIZORAM / मिज़ोरम</option>
                        <option value="Nagaland">26. NAGALAND / नागालैण्ड</option>
                        <option value="Odisha">27. ODISHA / ओड़िशा</option>
                        <option value="Puducherry">28. PUDUCHERRY / पुडुचेरी</option>
                        <option value="Punjab">29. PUNJAB / पंजाब</option>
                        <option value="Rajasthan">30. RAJASTHAN / राजस्थान</option>
                        <option value="Sikkim">31. SIKKIM / सिक्किम</option>
                        <option value="Tamil_Nadu">32. TAMIL NADU / तमिलनाडु</option>
                        <option value="Telangana">33. TELANGANA / तेलंगाना</option>
                        <option value="Tripura">34. TRIPURA / त्रिपुरा</option>
                        <option value="Uttar_Pradesh">35. UTTAR PRADESH / उत्तर प्रदेश</option>
                        <option value="Uttarakhand">36. UTTARAKHAND / उत्तराखण्ड</option>
                        <option value="West_Bengal">37. WEST BENGAL / पश्चिम बंगाल</option>
                     </select>
                  </div>
                  <div class=" txt col-lg-4 col-12">
                     <label>District / जिला <span class=""> *</span></label>
                     <select class="form-control get-city" name="distric" id="office-district" required="">
                     </select>
                  </div>
               </div>

               <div class="form-group txt">
                  <label>UPLOAD PAN CARD <span class=""> *</span></label>
                  <input type="file" class="form-control" id="pan_card" name="upload_pan_card_front">
               </div>

               <div class="form-group row form-check ms-3">
                  <div class="col-lg-12"><input type="checkbox" class="form-check-input"
                     name="terms_of_service" id="terms-of-service" required="">
                     <label class="form-check-label " for="terms-of-service">I AGREE TO THE <a href="Terms-And-Conditions.php"
                        class="">TERMS OF SERVICE</a></label>
                  </div>
                  <div class="col-lg-12"><input type="checkbox" class="form-check-input" name="tos4" id="tos4"
                     required="">
                     <label class="form-check-label" for="tos4"><span class="blink"
                        style="font-size: 14px;font-weight: 600;">I,
                     the applicant agree to share OTP</span> sent on my mobile and / or other Details
                     required for the purpose of FOOD LICENCE Certificate Generation.<br><br>I am aware that generation of
                     FOOD LICENCE certificate requires OTP verification<span class="required txt">[UPDATED]</span></label>
                  </div>
               </div>
               <?php $rand = rand(999,9999); ?>
               <div class="form-group">
                  <input type="text" id="very-code" class="form-control" placeholder="Verfication Code" required="required">
               </div>
              
               <input type="hidden" value="<?=$rand ?>" id="form-rand">
               <div class="form-group small clearfix">
                  <label class="checkbox-inline">Verification Code <span class="required"
                      style="cursor: pointer">*</span></label>
                  &nbsp;&nbsp; <?=$rand ?>
               </div>
               <!-- <input type="hidden" class="form-control" name="form_name" value="FSSAI Registration"> -->
               <br>
               <button type="button" name="submit" class="btn btn-primary fcs-submit-button" id="submit-btn">Submit Application</button>
            </form>
         </div>
      </div>
      <div class="col-lg-6 pe-lg-4 ps-xl-2 wow fadeIn" data-wow-delay="0.1s">
      <div class="form-fssi">

         <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">
               INSTRUCTIONS TO FILL FSSAI REGISTRATION ONLINE APPLY FORM
            </h2>
         </div>

         <div class="form-instructions main-form-custom pt-4">

            <div class="info-box" style="text-align:left;">

               <div class="mb-4">
                  <b>1. Visit FoSCoS Portal</b>
                  <p>
                     Visit the official FoSCoS portal and select “Apply for License/Registration” to begin the FSSAI application process according to your food business category and turnover eligibility.
                  </p>
               </div>

               <div class="mb-4">
                  <b>2. Select Correct Business Category</b>
                  <p>
                     Choose the correct State, business category, and Kind of Business (KoB) carefully to avoid application rejection or resubmission from the FSSAI department.
                  </p>
               </div>

               <div class="mb-4">
                  <b>3. Choose Proper License Type</b>
                  <p>
                     Select the proper license type such as Basic Registration, State License, or Central License based on annual turnover, production capacity, and business operations.
                  </p>
               </div>

               <div class="mb-4">
                  <b>4. Create FoSCoS Account</b>
                  <p>
                     Create your FoSCoS account using mobile number and email ID, then complete OTP verification to access the online FSSAI application dashboard.
                  </p>
               </div>

               <div class="mb-4">
                  <b>5. Fill Applicant Details Carefully</b>
                  <p>
                     Fill applicant details carefully including business name, owner details, address, contact information, and business constitution exactly as mentioned in official documents.
                  </p>
               </div>

               <div class="mb-4">
                  <b>6. Enter Business Premises Details</b>
                  <p>
                     Enter complete business premises details including address, ownership type, operational area, and nature of food activities conducted at the business location.
                  </p>
               </div>

               <div class="mb-4">
                  <b>7. Select Food Business Activities</b>
                  <p>
                     Select all applicable food business activities such as manufacturing, retail, storage, repacking, restaurant, transportation, wholesaling, distribution, or e-commerce operations.
                  </p>
               </div>

               <div class="mb-4">
                  <b>8. Upload Required Documents</b>
                  <p>
                     Upload clear scanned copies of required documents including Aadhaar Card, PAN Card, address proof, passport photo, business proof, and supporting licenses if applicable.
                  </p>
               </div>

               <div class="mb-4">
                  <b>9. Select License Validity</b>
                  <p>
                     Choose license validity from 1 year to 5 years according to business requirements to reduce future renewal hassles and maintain continuous legal compliance.
                  </p>
               </div>

               <div class="mb-2">
                  <b>10. Review & Submit Application</b>
                  <p>
                     Review all entered details carefully before final submission, pay the government fee online, and save the application reference number for future status tracking.
                  </p>
               </div>

            </div>

         </div>
      </div>
   </div>

   </div>
</div>
<!-- Header End -->
<!-- Service Start -->
<div class="container-xxl pt-5">
   <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
         <h2 class="text-uppercase text-center fs-3 m-0">TYPES OF FSSAI REGISTRATION</h2>
         <p class="py-3">The Food Safety and Standards Authority of India (FSSAI) offers different types of
            registrations and
            licenses based on
            the scale and nature of the food business. These registrations are categorized into three main
            types:
         </p>
      </div>
      <div class="row g-4">
         
         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">

               <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4">
                  <img class="img-fluid" width="132" src="img/1.png" alt="">
               </div>

               <h4 class="mb-3">FSSAI Basic Registration</h4>

               <p class="mb-3">
                  FSSAI Basic Registration is the most suitable option for small food business operators who are starting their business on a small scale with limited turnover.
               </p>

               <p class="mb-3">
                  It is mainly designed for petty food manufacturers, home-based food businesses, small retailers, hawkers, temporary food stalls, tea stalls, juice shops, street food vendors, cloud kitchens, transporters, distributors, and small storage units.
               </p>

               <p class="mb-3">
                  Businesses with an annual turnover up to ₹12 Lakhs generally fall under this category.
               </p>

               <p class="mb-3">
                  This registration provides legal authorization to operate a food business in India under the guidelines of the Food Safety and Standards Authority of India (FSSAI). It helps businesses build customer trust and ensures that food products are handled and sold according to food safety standards.
               </p>

               <h5 class="mt-4 mb-3">Key Features of FSSAI Basic Registration:</h5>

               <ul class="ps-3">
                  <li>Suitable for startups and small food businesses.</li>
                  <li>Applicable for businesses having annual turnover up to ₹12 Lakhs.</li>
                  <li>Easy and simple registration process.</li>
                  <li>Minimal documentation requirements.</li>
                  <li>Validity available from 1 year to 5 years.</li>
                  <li>Affordable registration cost for small business owners.</li>
                  <li>Helps improve customer confidence and brand credibility.</li>
                  <li>Mandatory for operating food-related businesses legally.</li>
               </ul>

               <h5 class="mt-4 mb-3">Businesses Covered Under Basic Registration:</h5>

               <ul class="ps-3">
                  <li>Home Kitchen</li>
                  <li>Tea Stall</li>
                  <li>Juice Shop</li>
                  <li>Bakery Shop</li>
                  <li>Sweet Shop</li>
                  <li>Fast Food Stall</li>
                  <li>Street Food Vendor</li>
                  <li>Small Retail Grocery Shop</li>
                  <li>Food Cart / Thela</li>
                  <li>Small Storage Unit</li>
                  <li>Petty Transporter</li>
                  <li>Snacks & Namkeen Seller</li>
               </ul>

               <h5 class="mt-4 mb-3">Documents Generally Required:</h5>

               <ul class="ps-3">
                  <li>Aadhaar Card / PAN Card</li>
                  <li>Passport Size Photograph</li>
                  <li>Address Proof</li>
                  <li>Business Address Proof</li>
                  <li>Mobile Number & Email ID</li>
               </ul>

            </div>
         </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">

               <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4">
                  <img class="img-fluid" width="132" src="img/2.png" alt="">
               </div>

               <h4 class="mb-3">FSSAI State License</h4>

               <p class="mb-3">
                  FSSAI State License is meant for medium-sized food businesses operating within a single state.
               </p>

               <p class="mb-3">
                  Businesses involved in manufacturing, processing, packaging, storage, transportation, distribution, catering, restaurants, hotels, wholesalers, retailers, and food service activities generally require a State License when their turnover exceeds the basic registration limit.
               </p>

               <p class="mb-3">
                  This license is ideal for businesses that are growing and require a stronger legal framework to expand their operations within a particular state.
               </p>

               <p class="mb-3">
                  It ensures that food businesses maintain proper hygiene, quality standards, and compliance with food safety regulations.
               </p>

               <h5 class="mt-4 mb-3">Key Features of FSSAI State License:</h5>

               <ul class="ps-3">
                  <li>Suitable for medium-scale food businesses.</li>
                  <li>Applicable for businesses operating within one state.</li>
                  <li>Required for turnover above ₹12 Lakhs as per eligibility criteria.</li>
                  <li>License validity available from 1 year to 5 years.</li>
                  <li>Helps in business expansion and vendor approvals.</li>
                  <li>Improves business credibility in the market.</li>
                  <li>Mandatory for many restaurants, manufacturers, and storage businesses.</li>
                  <li>Moderate documentation and compliance requirements.</li>
               </ul>

               <h5 class="mt-4 mb-3">Businesses Covered Under State License:</h5>

               <ul class="ps-3">
                  <li>Restaurants</li>
                  <li>Cafes</li>
                  <li>Medium Manufacturing Units</li>
                  <li>Food Processing Units</li>
                  <li>Caterers</li>
                  <li>Mid-Sized Bakeries</li>
                  <li>Warehouses & Storage Units</li>
                  <li>Transporters</li>
                  <li>Distributors & Suppliers</li>
                  <li>Retail Chains within one state</li>
                  <li>Dhaba & Highway Food Units</li>
                  <li>Cloud Kitchens</li>
               </ul>

               <h5 class="mt-4 mb-3">Documents Generally Required:</h5>

               <ul class="ps-3">
                  <li>PAN Card of Business</li>
                  <li>Aadhaar Card of Proprietor/Partners/Directors</li>
                  <li>Address Proof of Business</li>
                  <li>Partnership Deed / Incorporation Certificate</li>
                  <li>Food Safety Management Plan</li>
                  <li>List of Food Products</li>
                  <li>Kitchen/Layout Plan</li>
                  <li>NOC (if applicable)</li>
               </ul>

            </div>
         </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">

               <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4">
                  <img class="img-fluid" width="132" src="img/3.png" alt="">
               </div>

               <h4 class="mb-3">FSSAI Central License</h4>

               <p class="mb-3">
                  FSSAI Central License is compulsory for large-scale food businesses operating at a national or international level.
               </p>

               <p class="mb-3">
                  Businesses involved in import-export activities, large manufacturing operations, e-commerce food sales, large storage facilities, airport or seaport food operations, and multi-state business activities generally require a Central License.
               </p>

               <p class="mb-3">
                  This license is issued by the Central Authority and is necessary for businesses having large production capacity, higher turnover, or operations across multiple states.
               </p>

               <p class="mb-3">
                  It is considered the highest level of FSSAI authorization and is essential for companies dealing with nationwide distribution or international food trade.
               </p>

               <h5 class="mt-4 mb-3">Key Features of FSSAI Central License:</h5>

               <ul class="ps-3">
                  <li>Required for large food businesses and corporations.</li>
                  <li>Suitable for businesses operating in multiple states.</li>
                  <li>Mandatory for importers and exporters of food products.</li>
                  <li>Required for e-commerce food businesses.</li>
                  <li>License validity available from 1 year to 5 years.</li>
                  <li>Provides nationwide business authorization.</li>
                  <li>Enhances brand reputation and legal compliance.</li>
                  <li>Detailed documentation and approval process.</li>
               </ul>

               <h5 class="mt-4 mb-3">Businesses Covered Under Central License:</h5>

               <ul class="ps-3">
                  <li>Importers & Exporters</li>
                  <li>Large Manufacturing Units</li>
                  <li>E-commerce Food Sellers</li>
                  <li>Large Warehouses</li>
                  <li>Multi-State Restaurant Chains</li>
                  <li>Large Food Processing Industries</li>
                  <li>Airports & Seaports Food Businesses</li>
                  <li>Nationwide Distributors</li>
                  <li>Large Transport Operators</li>
                  <li>Corporate Food Businesses</li>
               </ul>

               <h5 class="mt-4 mb-3">Documents Generally Required:</h5>

               <ul class="ps-3">
                  <li>PAN Card of Business</li>
                  <li>Incorporation Certificate</li>
                  <li>IEC Code (for import/export)</li>
                  <li>Address Proof</li>
                  <li>Food Safety Management Plan</li>
                  <li>Layout Plan of Unit</li>
                  <li>Product Details</li>
                  <li>NOC from Local Authority</li>
                  <li>Water Testing Report</li>
                  <li>Machinery Details</li>
                  <li>Authorized Signatory ID Proof</li>
               </ul>

            </div>
         </div>
      </div>
   </div>
   <p class="px-5 pt-4 text-center ">It's important to note that FSSAI regulations can change over time, so
      businesses should always check the
      latest
      guidelines and requirements when applying for or renewing their FSSAI registrations or licenses.
      Additionally, the
      specific requirements and documentation may vary from state to state, so it's advisable to consult with an
      FSSAI
      consultant or visit the official FSSAI website for the most up-to-date information and guidance.
   </p>
</div>
<!-- Service End -->

<div class="container-xxl pt-5">
   <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
         <h2 class="text-uppercase text-center fs-3 m-0">BENEFITS OF FSSAI LICENSE</h2>
      </div>

      <div class="row g-4">

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h5 class="mb-3">1. Legal Protection and Government Compliance</h5>
               <p class="mb-0">
                  FSSAI Registration or License provides complete legal authorization to operate a food business in India under the Food Safety and Standards Authority of India. It protects the business from penalties, legal complications, and unnecessary government actions related to food safety violations.
               </p>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h5 class="mb-3">2. Builds Customer Trust & Credibility</h5>
               <p class="mb-0">
                  Customers trust food businesses that follow proper hygiene and safety standards. Displaying the FSSAI logo and license number improves customer confidence and creates a professional business image.
               </p>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h5 class="mb-3">3. Helps Business Expansion</h5>
               <p class="mb-0">
                  FSSAI compliance helps businesses expand operations smoothly by opening new branches, working with distributors, retailers, supermarkets, and growing into larger markets legally.
               </p>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h5 class="mb-3">4. Mandatory for Online Food Selling</h5>
               <p class="mb-0">
                  Online marketplaces like Amazon, Flipkart, Swiggy, Zomato, Blinkit, and Jiomart usually require a valid FSSAI License before approving food sellers on their platforms.
               </p>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h5 class="mb-3">5. Improves Food Safety & Hygiene</h5>
               <p class="mb-0">
                  FSSAI compliance encourages businesses to maintain proper hygiene standards during manufacturing, packaging, storage, transportation, and distribution of food products.
               </p>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h5 class="mb-3">6. Useful for Tenders & Vendor Approval</h5>
               <p class="mb-0">
                  Many government departments, corporate companies, hotels, schools, hospitals, and institutions require vendors and suppliers to have a valid FSSAI License before approving contracts.
               </p>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h5 class="mb-3">7. Enhances Brand Value</h5>
               <p class="mb-0">
                  An FSSAI License helps businesses present themselves as professional and reliable food operators. It increases brand reputation and creates long-term trust among customers and business partners.
               </p>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h5 class="mb-3">8. Easier Loan & Investment Approval</h5>
               <p class="mb-0">
                  Financial institutions and investors prefer businesses with proper legal registrations and compliance documents. FSSAI Registration improves business credibility during financial verification.
               </p>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h5 class="mb-3">9. Supports Import-Export Operations</h5>
               <p class="mb-0">
                  Businesses involved in import-export activities or operating across multiple states require FSSAI compliance to expand legally into national and international food markets.
               </p>
            </div>
         </div>

         <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
            <div class="service-item bg-light rounded h-100 p-4">
               <h5 class="mb-3">10. Long-Term Business Stability</h5>
               <p class="mb-0">
                  FSSAI Registration helps businesses avoid penalties, product seizures, and operational risks while ensuring smooth long-term growth, proper documentation, and regulatory compliance.
               </p>
            </div>
         </div>

      </div>
   </div>

   <p class="px-4 pt-4 text-center">
      By obtaining an FSSAI License or Registration, food businesses can operate legally, improve customer trust, maintain food safety standards, and achieve long-term business growth successfully.
   </p>
</div>


<div class="container-xxl pt-5">
   <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
         <h2 class="text-uppercase text-center fs-3 m-0">Documents Required for Obtaining FSSAI Registration
         </h2>
      </div>
      <div class="row g-4">
         <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="section">
               <h2 class="fs-5 pt-4 pb-2">=> Basic FSSAI Registration (For petty food business operators)</h2>
               <ul class="service-item bg-light rounded h-100 p-5">
                  <li class="py-2"><strong>Application Form A:</strong> Duly completed and signed.</li>
                  <li class="py-2"><strong>Photo Identity Proof:</strong> A copy of the applicant’s valid ID
                     proof (Aadhar card, Voter ID,
                     Passport, etc.).
                  </li>
                  <li class="py-2"><strong>Passport-sized Photograph:</strong> Recent photograph of the
                     applicant.
                  </li>
               </ul>
            </div>
            <div class="section">
               <h2 class="fs-5 pt-4 pb-2">=> FSSAI State License (For medium-sized food businesses)</h2>
               <ul class="service-item bg-light rounded h-100 p-5">
                  <li class="py-2"><strong>Application Form B:</strong> Duly completed and signed.</li>
                  <li class="py-2"><strong>Photo Identity Proof:</strong> A copy of the applicant’s valid ID
                     proof.
                  </li>
                  <li class="py-2"><strong>Passport-sized Photograph:</strong> Recent photograph of the
                     applicant.
                  </li>
                  <li class="py-2"><strong>Proof of Possession of Premises:</strong> Rental agreement, utility
                     bill, or ownership document.
                  </li>
                  <li class="py-2"><strong>Food Safety Management Plan (FSMS):</strong> A brief plan outlining
                     the food safety protocols and
                     practices.
                  </li>
                  <li class="py-2"><strong>Supporting Documents:</strong> NOCs from the local municipality or
                     other relevant authorities, if
                     applicable.
                  </li>
                  <li class="py-2"><strong>Business Registration Proof:</strong> Incorporation certificate,
                     partnership deed, or other relevant
                     business registration documents.
                  </li>
                  <li class="py-2"><strong>List of Food Products:</strong> Detailed list of food products to
                     be handled/manufactured.
                  </li>
                  <li class="py-2"><strong>Water Testing Report:</strong> Report of water used in food
                     processing, if applicable.
                  </li>
               </ul>
            </div>
            <div class="section">
               <h2 class="fs-5 pt-4 pb-2">=> FSSAI Central License (For large-scale food businesses)</h2>
               <ul class="service-item bg-light rounded h-100 p-5">
                  <li class="py-2"><strong>Application Form B:</strong> Duly completed and signed.</li>
                  <li class="py-2"><strong>Photo Identity Proof:</strong> A copy of the applicant’s valid ID
                     proof.
                  </li>
                  <li class="py-2"><strong>Passport-sized Photograph:</strong> Recent photograph of the
                     applicant.
                  </li>
                  <li class="py-2"><strong>Proof of Possession of Premises:</strong> Rental agreement, utility
                     bill, or ownership document.
                  </li>
                  <li class="py-2"><strong>Food Safety Management Plan (FSMS):</strong> A detailed plan
                     outlining the food safety protocols and
                     practices.
                  </li>
                  <li class="py-2"><strong>Supporting Documents:</strong> NOCs from the local municipality or
                     other relevant authorities, if
                     applicable.
                  </li>
                  <li class="py-2"><strong>Business Registration Proof:</strong> Incorporation certificate,
                     partnership deed, or other relevant
                     business registration documents.
                  </li>
                  <li class="py-2"><strong>List of Food Products:</strong> Detailed list of food products to
                     be handled/manufactured.
                  </li>
                  <li class="py-2"><strong>Water Testing Report:</strong> Report of water used in food
                     processing, if applicable.
                  </li>
                  <li class="py-2"><strong>Nomination of Person:</strong> Letter of authority from the
                     manufacturer nominating a person
                     responsible for ensuring compliance with FSSAI regulations.
                  </li>
                  <li class="py-2"><strong>Proof of Annual Turnover:</strong> Financial documents supporting
                     the business’s annual turnover.
                  </li>
                  <li class="py-2"><strong>Import Export Code (IEC):</strong> Required for food businesses
                     involved in import/export.
                  </li>
               </ul>
            </div>
            <div class="section">
               <h3 class="fs-5 pt-4 pb-2">=> Additional Documents (if applicable)</h3>
               <ul class="service-item bg-light rounded h-100 p-5">
                  <li class="py-2"><strong>No Objection Certificate (NOC):</strong> From the local
                     municipality or health department.
                  </li>
                  <li class="py-2"><strong>Proof of Food Safety Management System:</strong> Certificates or
                     documents proving the
                     implementation of food safety management systems.
                  </li>
                  <li class="py-2"><strong>Proof of Refrigeration Facility:</strong> For businesses dealing
                     with perishable food items.
                  </li>
                  <li class="py-2"><strong>FSSAI Declaration Form:</strong> Declaration as per FSSAI
                     guidelines.
                  </li>
               </ul>
            </div>
            <div class="section">
               <h2 class="fs-5 pt-4 pb-2">=> Steps to Apply for FSSAI Registration</h2>
               <ol class="service-item bg-light rounded h-100 p-5">
                  <li class="py-2"><strong>Determine the Type of Registration/License:</strong> Based on your
                     business size and nature.
                  </li>
                  <li class="py-2"><strong>Gather Required Documents:</strong> Ensure all necessary documents
                     are complete and accurate.
                  </li>
                  <li class="py-2"><strong>Fill the Application Form:</strong> Form A for basic registration
                     and Form B for state and central
                     licenses.
                  </li>
                  <li class="py-2"><strong>Submit the Application:</strong> Submit the application and
                     required documents to the FSSAI
                     authority.
                  </li>
                  <li class="py-2"><strong>Pay the Fee:</strong> Pay the registration fee as applicable.</li>
                  <li class="py-2"><strong>Inspection (if needed):</strong> An FSSAI officer may inspect your
                     premises before granting the
                     license.
                  </li>
                  <li class="py-2"><strong>Obtain Registration/License:</strong> Upon approval, you will
                     receive your FSSAI
                     registration/license.
                  </li>
                  <p>By ensuring you have all the required documents and following the proper application
                     process, you
                     can smoothly obtain
                     FSSAI registration and ensure your food business operates legally and meets the
                     necessary food
                     safety standards.
                  </p>
               </ol>
            </div>
         </div>
      </div>
   </div>
</div>



<?php include('footer.php'); ?>
<script>
  
   
   
   
   
   
   
   
</script>








<link href="apisetup/toast/saber-toast.css" rel="stylesheet">
<link href="apisetup/front_css.css" rel="stylesheet">
<script src="apisetup/toast/saber-toast.js"></script>
<script src="apisetup/front_script.js"></script>

<script>
  <?php  
    $base  = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]".str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
  ?>

    var api_url = '<?=$api_url ?>';
    var base_url = '<?=$base ?>';

    // console.log(payable_price);

    $(document).on("click", "#submit-btn",(function(e) {      
      event.preventDefault();
      var data = [];
      var files_name_array = [];
    const final_amount = $("#payable_price").val();

      var form_id = "main-form1";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var form_name = 'APPLY FOR FSSAI LICENSE | FOOD LICENSE CERTIFICATE | FOSCOS';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var mobile = $('input[name="mobile"]').val();



      data.push({"name":"Name Of Business / Firm / Company / व्यवसाय / फर्म / कंपनी का नाम","value":$('input[name="busines_name"]').val()});
      data.push({"name":"Name of the Food Category / खाद्य श्रेणी का नाम","value":$('select[name="food_cate"]').val()});
      data.push({"name":"Kind Of Business / व्यवसाय का प्रकार","value":$('select[name="business_name"]').val()});
      data.push({"name":"Complete Business Address / पता","value":$('input[name="address"]').val()});
      data.push({"name":"PINCODE","value":$('input[name="pincode"]').val()});
      data.push({"name":"State / राज्य ","value":$('select[name="state"]').val()});
      data.push({"name":"District / जिला","value":$('select[name="distric"]').val()});
      files_name_array.push({"name":"UPLOAD PAN CARD","key":"upload_pan_card_front"});

      data = JSON.stringify(data);
      var form = new FormData();




      
      form.append('form_name', form_name); // do not change Mandatory
      form.append('name', name); // do not change Mandatory
      form.append('email', email); // do not change Mandatory
      form.append('mobile', mobile); // do not change Mandatory
      form.append('current_url', current_url); // do not change Mandatory
      form.append('base_url', base_url); // do not change Mandatory
      form.append('hostname', location.hostname); // do not change Mandatory
      form.append('files_name_array', JSON.stringify(files_name_array)); // do not change Mandatory
      form.append('final_amount', final_amount); // do not change Mandatory
      form.append('data', data); // do not change Mandatory

      $(files_name_array).each(function(index, item){
        form.append(item.key, $(`input[name="${item.key}"]`).prop('files')[0]);
      });


      var settings = {
        "url": api_url+"leads/create",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener('progress', function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = Math.round((evt.loaded / evt.total) * 100);
                        $('#progressBar').css('width', percentComplete + '%');
                        $('#progressText').text(percentComplete + '%');
                    }
                }, false);
                return xhr;
             },
        "mimeType": "multipart/form-data",
        "contentType": false,
        "dataType": "json",
        "data": form
      };
      $.ajax(settings).always(function (response) {
          loader("hide");
          response = admin_response_data_check(response);
      });
   }));


      

</script>