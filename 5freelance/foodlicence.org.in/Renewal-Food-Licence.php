
<?php


include('header.php'); ?>




  <div class="container-fluid header hero-bg p-0 pb-5">
    <h1 class="text-uppercase text-center fs-3 p-4">RENEW FSSAI LICENSE | FOOD LICENSE RENEWAL CERTIFICATE</h1>
    <div class="row g-0 flex-column-reverse flex-lg-row mx-2">
      <div class="col-lg-6 ps-lg-4 pe-xl-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">FSSAI Renewal License Registration</h2>
          </div>

          <form  method="post" enctype="multipart/form-data" id="main-form1"
            class="main-form-custom" >
            <div class="form-group txt">
              <label>Name of Applicant / आवेदक का नाम  <span class="required"> * </span></label>
              <input type="tel" maxlength="10" minlength="10" class="form-control" name="name" required="">
            </div>
            <div class="form-group txt">
              <label>Mobile Number / मोबाइल नंबर <span class="required"> * </span></label>
              <input type="tel" maxlength="10" minlength="10" class="form-control" name="mobile" required="">
            </div>

            <div class="form-group txt">
              <label>Email / ईमेल <span class="required"> * </span></label>
              <input type="email" class="form-control" name="email" required="">
            </div>

            <div class="form-group txt">
              <label>Existing FSSAI License/Registration No / मौजूदा एफएसएसएआई लाइसेंस/पंजीकरण नंबर <span
                  class="required"> *
                </span></label><br>
              <div class="input-group">
                <input type="text" class="form-control existing_licence_number" name="existing_licence_number" value="" required="true">
                <button type="button" class="btn btn-dark fcs-submit-button" id="btnz" onclick="check_licence_no()"
                  value="valid">Validate</button>
              </div>
              <hr>
            
            </div>

            <h6 style="color:red;font-weight:bold;font-size:14px">PLEASE VERIFY YOUR BUSINESS NAME BELOW</h6>
            <div class="show-hide" style="display:none;">
              <div class="form-group txt">
                <label>Business Name / व्यवसाय का नाम <span class="required"> * </span></label>
                <input type="text" class="form-control bussiness_name" name="bussiness_name"  >
              </div>

              <div class="form-group txt">
                <label>PAN CARD NUMBER / पैन कार्ड नंबर <span class=""> *</span></label>
                <input type="text" class="form-control" name="pan_card_number" pattern="(^([a-zA-Z]{5})([0-9]{4})([a-zA-Z]{1})$)" required="">
              </div>
              <div class=" txt col-lg-12 col-12">
               <label>Certificate Validity / प्रमाणपत्र वैधता *<span class=""> *</span></label>
               <select id="office-state" size="1" class="form-control select-state" name="state" required="">
                  <option value="1" selected>1 YEARS</option>
                </select>
              </div>

              <div class="form-group txt">
                <label>Upload Your Existing Fssai Licence / अपना मौजूदा एफएसएसएआई लाइसेंस अपलोड करें *<span class="required"> * </span></label>
                <input type="file" class="form-control" name="bussiness_name"  >
              </div>
              <div class="form-group txt">
                <label>Existing FSSAI Licence Validity End Date * (DD-MM-YYYY)<span class="required"> * </span></label>
                <input type="date" class="form-control" name="bussiness_name"  >
              </div>

            </div>

            
            




            <div class="form-group form-check ms-4">
              <input type="checkbox" class="form-check-input" name="terms_of_service" required="">
              <label class="form-check-label">I AGREE TO THE <a href="Terms-And-Conditions.php">TERMS OF
                  SERVICE</a></label>
            </div>

            <div class="form-group form-check ms-4">
              <input type="checkbox" class="form-check-input" name="tos4" required="">
              <label class="form-check-label"><span class="blink" style="font-size: 14px;font-weight: 600;">I, the
                  applicant
                  agree to share OTP</span> sent on my mobile and / or other Details required for the purpose of FOOD
                LICENCE
                Certificate Generation.<br><br>I am aware that generation of FOOD LICENCE certificate requires OTP
                verification
                <span class="required txt">[UPDATED]</span></label><br><br>
            </div>


            <button type="button" class="btn btn-primary fcs-submit-button" id="submit-btn">Submit
              Application</button>
          </form>
        </div>
      </div>



      <div class="col-lg-6 pe-lg-4 ps-xl-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">Instruction To Fill Renewal Food License Registration</h2>
          </div>

          <div class="form-instructions main-form-custom">

            <div class="form-group">
              <label class="fcs-text-dark"><strong>Mobile Number :</strong> The applicant's mobile number must be
                entered. Avoid
                Using Country Code आवेदक का मोबाइल नंबर दर्ज करना होगा। देश कोड का उपयोग करने से बचें
              </label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong>Email Id :</strong> Fill out the Applicant’s correct Email ID आवेदक
                की सही ईमेल
                आईडी भरें
              </label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong>Existing Fssai License/registration No :</strong>Fill out the
                Applicant’s
                existing Fssai Licence Registration number exactly appears on the certificate and click the validate
                Button आवेदक
                के मौजूदा एफएसएसएआई लाइसेंस पंजीकरण संख्या को भरें जो प्रमाण पत्र पर दिखाई देता है और मान्य बटन पर क्लिक
                करें
              </label>
            </div>

            <div class="form-group">
              <label class="fcs-text-dark"><strong>BUSINESS NAME :</strong> Business Name Will Be Auto Filled As
                Mentioned In
                Existing Fssai Certificate

                व्यवसाय का नाम मौजूदा एफएसएसएआई प्रमाणपत्र में उल्लिखित अनुसार स्वतः भरा जाएगा
              </label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong>PAN CARD NUMBER :</strong> Applicant Need To Fill Correct Pan Card
                Number
                आवेदक को सही पैन कार्ड नंबर भरना होगा
              </label>
            </div>

            <div class="form-group">
              <label class="fcs-text-dark"><strong>Upload Your Existing Fssai Licence :</strong> Applicant Need To
                Choose Correct
                Fssai License End Data As Given On Fssai Certificate
                आवेदक को एफएसएसएआई प्रमाणपत्र पर दिए गए अनुसार सही एफएसएसएआई लाइसेंस समाप्ति डेटा चुनना होगा
              </label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong>Terms &amp; Conditions :</strong> Tick both checkboxes to agree to
                the terms
                and conditions Please note that to process your application, OTP is required नियम और शर्तों से सहमत होने
                के लिए
                दोनों चेकबॉक्स पर क्लिक करें कृपया ध्यान दें कि आपके आवेदन को संसाधित करने के लिए ओटीपी की आवश्यकता है
              </label>
            </div>

            <div class="form-group">
              <label class="fcs-text-dark"><strong>Submit :</strong> To submit your application, Click the Submit
                Application
                Button.अपना आवेदन जमा करने के लिए सबमिट एप्लिकेशन बटन पर क्लिक करें।
              </label>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <div class="container-fluid header hero-bg p-0 pb-5">
    <div class="row px-5 ">
      <div class="col-md-12">
        <h2>Utilizing FSSAI Consultants to Renew Your FSSAI License</h2>
        <p>Utilizing FSSAI consultants to renew your FSSAI license can simplify the process and ensure compliance with
          the
          regulations. Here's a step-by-step guide on how FSSAI consultants can help you renew your FSSAI license:</p>

        <h3>1. Assessment of Current License</h3>
        <p><strong>Consultants' Role:</strong></p>
        <ul>
          <li>Review the current FSSAI license details.</li>
          <li>Determine the type of license (Basic, State, or Central) you have and its expiration date.</li>
          <li>Identify any changes in your business operations that might affect the renewal process.</li>
        </ul>

        <h3>2. Documentation Preparation</h3>
        <p><strong>Consultants' Role:</strong></p>
        <ul>
          <li>Assist in gathering all necessary documents required for renewal. This includes the previous FSSAI
            license,
            business details, updated food safety management plan, and other relevant documents.</li>
          <li>Ensure all documents are in the correct format and comply with FSSAI standards.</li>
        </ul>

        <h3>3. Filling the Renewal Application</h3>
        <p><strong>Consultants' Role:</strong></p>
        <ul>
          <li>Complete the renewal application accurately on the FSSAI online portal (Food Safety Compliance System).
          </li>
          <li>Handle any technical issues or queries that arise during the application process.</li>
        </ul>

        <h3>4. Fee Payment</h3>
        <p><strong>Consultants' Role:</strong></p>
        <ul>
          <li>Calculate the applicable renewal fee based on the type of license and the duration for which it is being
            renewed.
          </li>
          <li>Assist in making the payment through the appropriate channels and ensure receipt of payment confirmation.
          </li>
        </ul>

        <h3>5. Follow-up and Communication</h3>
        <p><strong>Consultants' Role:</strong></p>
        <ul>
          <li>Regularly follow up with the FSSAI authorities regarding the status of your renewal application.</li>
          <li>Handle any queries or requests for additional information from FSSAI.</li>
        </ul>

        <h3>6. Inspection and Compliance</h3>
        <p><strong>Consultants' Role:</strong></p>
        <ul>
          <li>Prepare your business for any potential inspection that might be required by the FSSAI as part of the
            renewal
            process.</li>
          <li>Ensure that your business complies with the food safety standards and guidelines set by FSSAI.</li>
        </ul>

        <h3>7. Receiving the Renewed License</h3>
        <p><strong>Consultants' Role:</strong></p>
        <ul>
          <li>Verify the details on the renewed license to ensure accuracy.</li>
          <li>Provide you with the renewed license and advise on any ongoing compliance requirements to maintain the
            validity of
            the license.</li>
        </ul>

        <h3>Benefits of Using FSSAI Consultants</h3>
        <p>Using FSSAI consultants for renewing your FSSAI license can streamline the process, reduce the likelihood of
          errors,
          and ensure timely renewal, keeping your business operations compliant and uninterrupted. Here are some
          benefits:</p>
        <ul>
          <li><strong>Expertise:</strong> Consultants have extensive knowledge of FSSAI regulations and can navigate the
            complexities of the renewal process efficiently.</li>
          <li><strong>Time-Saving:</strong> They handle the entire process, allowing you to focus on your core business
            activities.</li>
          <li><strong>Accuracy:</strong> Ensuring all information is correctly filled and all necessary documents are
            submitted
            reduces the risk of application rejection.</li>
          <li><strong>Compliance:</strong> Consultants help ensure that your business remains compliant with FSSAI
            guidelines,
            avoiding potential penalties or legal issues.</li>
        </ul>

      </div>
    </div>

  </div>












  <!-- Footer Start -->
 <?php include('footer.php'); ?>


<link href="apisetup/toast/saber-toast.css" rel="stylesheet">
<link href="apisetup/front_css.css" rel="stylesheet">
<script src="apisetup/toast/saber-toast.js"></script>
<script src="apisetup/front_script.js"></script>

<script>


  function check_licence_no() {
    var licenceno = $(".existing_licence_number").val();
    // console.log(licenceno);
    var settings = {
        "url": "proxy.php", // Your PHP proxy script URL
        "method": "POST",
        "timeout": 0,
        "data": {
            "licenseNumber": licenceno,
            "getCategorizedProductList": "false"
        }
    };
    $.ajax(settings).done(function(response) 
    {
      var getdata = JSON.parse(response);
      console.log(getdata.result.entityName);
      if(getdata.result.entityName !== '') 
      {
          $(".bussiness_name").val(getdata.result.entityName);
          $(".show-hide").css("display", "block");
          alert("License number verified successfully!");
      }
    });
    
}













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
      const final_amount = 16997;

      var form_id = "main-form1";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var form_name = 'RENEW FSSAI LICENSE | FOOD LICENSE RENEWAL CERTIFICATE';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var mobile = $('input[name="mobile"]').val();



      data.push({"name":"Existing FSSAI License/Registration No / मौजूदा एफएसएसएआई लाइसेंस/पंजीकरण नंबर","value":$('input[name="existing_licence_number"]').val()});
      data.push({"name":"Business Name / व्यवसाय का नाम","value":$('input[name="bussiness_name"]').val()});
      data.push({"name":"PAN CARD NUMBER / पैन कार्ड नंबर","value":$('input[name="pan_card_number"]').val()});


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