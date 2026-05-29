<?php include('header.php'); ?>




  <div class="container-fluid header hero-bg p-0 pb-5">
    <h1 class="text-uppercase text-center fs-3 p-4">TRACE LOST FSSAI CERTIFICATE ONLINE
    </h1>
    <div class="row g-0 flex-column-reverse flex-lg-row mx-2">
      <div class="col-lg-6 ps-lg-4 pe-xl-2  wow fadeIn" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">TRACE LOST FSSAI CERTIFICATE FORM
            </h2>
          </div>

          <form  method="post" enctype="multipart/form-data" id="main-form1"
            class="main-form-custom" data-bitwarden-watching="1">
            <div class="form-group txt">
              <label>Enter Full Name <span class="required">*</span></label>
              <input type="text" maxlength="10" minlength="10" class="form-control" name="name" required="">
            </div>

            <div class="form-group txt">
              <label>Enter E-mail Id <span class="required">*</span></label>
              <input type="email" class="form-control" name="email" required="">
            </div>

            <div class="form-group txt">
              <label>Enter Mobile Number <span class="required">*</span></label>
              <input type="tel" class="form-control" name="mobile" required="">
            </div>

            <div class="form-group txt">
              <label>Enter Business Name For Which Certificate Is to be Traced <span class="required">*</span></label>
              <input type="text" class="form-control" name="traced_name" required="">
            </div>
            <div class="form-group txt">
              <label>Enter COMPLETE ADDRESS OF THE ABOVE MENTIONED BUSINESS <span class="required">*</span></label>
              <input type="text" class="form-control" name="address_buss" required="">
            </div>
            <div class="row form-group ">
              <div class=" col-lg-4 txt">
                <label>PINCODE</label> <input type="text" class="form-control" name="pincode" id="pincode" minlength="6" maxlength="6" required="">
              </div>
              <div class=" txt col-lg-4 col-12">
                <label>State / राज्य <span class="">*</span></label> 
                <select id="office-state" size="1" name="state" 
                  class="form-control" name="office_state" onchange="makeSubmenuOffice(this.value)" required="">
                  <option value="">
                    Select State
                  </option>
                  <option value="Andaman_And_Nicobar_Island">
                    1. ANDAMAN AND NICOBAR ISLANDS / अंदमान और निकोबार द्वीपसमूह
                  </option>
                  <option value="Andhra_Pradesh">
                    2. ANDHRA PRADESH / आन्ध्र प्रदेश
                  </option>
                  <option value="Arunachal_Pradesh">
                    3. ARUNACHAL PRADESH / अरुणाचल प्रदेश
                  </option>
                  <option value="Assam">
                    4. ASSAM / असम
                  </option>
                  <option value="Bihar">
                    5. BIHAR / बिहार
                  </option>
                  <option value="Chhattisgarh">
                    6. CHHATTISGARH / छत्तीसगढ़
                  </option>
                  <option value="Chandigarh">
                    7. CHANDIGARH / चंडीगढ़
                  </option>
                  <option value="Dadara">
                    8.DADAR AND NAGAR HAVELI / दादरा और नगर हवेली
                  </option>
                  <option value="Daman">
                    9. DAMAN AND DIU / दमन और दीव
                  </option>
                  <option value="Delhi">
                    10. DELHI / दिल्ली
                  </option>
                  <option value="Goa">
                    11. GOA / गोवा
                  </option>
                  <option value="Gujarat">
                    12. GUJARAT / गुजरात
                  </option>
                  <option value="Haryana">
                    13. HARYANA / हरियाणा
                  </option>
                  <option value="Himachal_Pradesh">
                    14. HIMACHAL PRADESH / हिमाचल प्रदेश
                  </option>
                  <option value="Jammu_and_Kashmir">
                    15. JAMMU AND KASHMIR / जम्मू और कश्मीर
                  </option>
                  <option value="Jharkhand">
                    16. JHARKHAND / झारखण्ड
                  </option>
                  <option value="Karnataka">
                    17. KARNATAKA / कर्णाटक
                  </option>
                  <option value="Kerala">
                    18. KERALA / केरल
                  </option>
                  <option value="Ladakh">
                    19. LADAKH / लद्दाख
                  </option>
                  <option value="Lakshadweep">
                    20. LAKSHADWEEP / लक्षद्वीप
                  </option>
                  <option value="Madhya_Pradesh">
                    21. MADHYA PRADESH / मध्य प्रदेश
                  </option>
                  <option value="Maharashtra">
                    22. MAHARASHTRA / महाराष्ट्र
                  </option>
                  <option value="Manipur">
                    23. MANIPUR / मणिपुर
                  </option>
                  <option value="Meghalaya">
                    24. MEGHALAYA / मेघालय
                  </option>
                  <option value="Mizoram">
                    25. MIZORAM / मिज़ोरम
                  </option>
                  <option value="Nagaland">
                    26. NAGALAND / नागालैण्ड
                  </option>
                  <option value="Odisha">
                    27. ODISHA / ओड़िशा
                  </option>
                  <option value="Puducherry">
                    28. PUDUCHERRY / पुडुचेरी
                  </option>
                  <option value="Punjab">
                    29. PUNJAB / पंजाब
                  </option>
                  <option value="Rajasthan">
                    30. RAJASTHAN / राजस्थान
                  </option>
                  <option value="Sikkim">
                    31. SIKKIM / सिक्किम
                  </option>
                  <option value="Tamil_Nadu">
                    32. TAMIL NADU / तमिलनाडु
                  </option>
                  <option value="Telangana">
                    33. TELANGANA / तेलंगाना
                  </option>
                  <option value="Tripura">
                    34. TRIPURA / त्रिपुरा
                  </option>
                  <option value="Uttar_Pradesh">
                    35. UTTAR PRADESH / उत्तर प्रदेश
                  </option>
                  <option value="Uttarakhand">
                    36. UTTARAKHAND / उत्तराखण्ड
                  </option>
                  <option value="West_Bengal">
                    37. WEST BENGAL / पश्चिम बंगाल
                  </option>
                </select>
              </div>
              <div class=" txt col-lg-4 col-12">
                <label>District / जिला <span class="">*</span></label> <select class="form-control"
                  name="office_district" id="office-district" required="">
                  <option value="" selected="selected">
                    Select District
                  </option>
                  <option value="DDD">Distric Name</option>
                </select>
              </div>
            </div>
            <div class="form-group txt mt-3">
              <label>Mention licence number of the certificate to be traced <span class="">*</span></label>
              <select class="form-control check_licence" name="check_licence" required="">
                <option value="">
                  --selct option--
                </option>
                <option value="yes">
                  I, have licence number with me
                </option>
                <option value="no">
                  I, do not have licence number with me
                </option>
              </select>
            </div>


            <div class="form-group txt" id="yes-div" style="display:none;">
              <label>Existing FSSAI License/Registration No / मौजूदा एफएसएसएआई लाइसेंस/पंजीकरण नंबर <span class="required"> *
                </span></label><br>
              <div class="input-group">
                <input type="text" class="form-control" name="existing_licence_number" value="" required="true">
                <button type="button" class="btn btn-dark fcs-submit-button" id="btnz"value="valid">Validate</button>
              </div>
              <hr>
             
            </div>



<!-- 
            <div class="form-group txt mt-3" id="hideLicence" style="display:none">
              <label>Existing FSSAI License/Registration No <span class="required">*</span></label><br>
              <div class="input-group">
                <input type="text" class="form-control" name="existing_licence_number" value=""> <button type="button"
                  class="btn btn-dark fcs-submit-button" id="btnz" onclick="verifyLicence()"
                  value="valid">Validate</button>
              </div><span id="licencemsg"></span>
            </div> -->



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


            <button type="button" class="btn btn-primary fcs-submit-button mt-3" id="submit-btn">Submit
              Application</button>
          </form>
        </div>
      </div>



      <div class="col-lg-6 pe-lg-4 ps-xl-2 mb-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">INSTRUCTION TO FILL TRACE LOST FSSAI CERTIFICATE FORM
            </h2>
          </div>

          <div class="form-instructions main-form-custom">
            <div class="form-group" style="margin-top: 10px;">
              <label class="fcs-text-dark"><strong>Name Of Applicant / आवेदक का नाम :</strong> It is necessary for the
                candidate
                to accurately input their name.उम्मीदवार के लिए अपने नाम को सही तरीके से दर्ज करना आवश्यक है।</label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark" style="padding-top: 22px;"><strong>Email Id / ईमेल आईडी :</strong> The
                applicant needs
                to specify their email ID to receive the certificate and acknowledgment.आवेदक को प्रमाणपत्र और प्राप्ति
                प्राप्त
                करने के लिए अपनी ईमेल आईडी निर्दिष्ट करनी होगी।</label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong>Mobile Number / मोबाइल नंबर :</strong> Accurately mention your mobile
                number on
                the application form.आवेदन पत्र पर अपना मोबाइल नंबर सही रूप से उल्लेख करें।</label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong>Enter The Business Name For Which Certificate Is To Be Traced /कृपया
                  वह
                  व्यापारिक नाम दर्ज करें जिसके लिए प्रमाणपत्र का पता लगाना है :</strong> Candidates are required to
                enter the
                business name for certificate tracing.उम्मीदवारों को प्रमाणपत्र के खोज के लिए व्यापार का नाम दर्ज करना
                आवश्यक
                है।</label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong>Enter the Complete Address Of The Above Mentioned Business / उस
                  व्यापार के पूरे
                  पते को दर्ज करें जिसका उल्लेख किया गया है :</strong> Candidates should enter the entire address of the
                mentioned
                business.उम्मीदवारों को उस व्यापार के पूरे पते को दर्ज करना चाहिए।</label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong>Pincode /पिनकोड :</strong> Enter your PIN code as required,
                applicants.कृपया
                अपना पिन कोड दर्ज करें, आवेदक। </label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong>State / राज्य :</strong> Candidates must choose a state from the
                available
                drop-down list.उम्मीदवारों को उपलब्ध ड्रॉप-डाउन सूची से एक राज्य चुनना आवश्यक है।</label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong>District / जिला :</strong> From the dropdown menu, candidates must
                select their
                district.ड्रॉपडाउन मेनू से उम्मीदवारों को अपने जिले का चयन करना होगा।</label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong> Mention the Licence Number Of The Certificate To Be Traced /उस
                  प्रमाणपत्र के
                  लाइसेंस नंबर का उल्लेख करें जिसे खोजा जा रहा है :</strong> Applicants are required to mention the
                license number
                of the certificate for tracing.आवेदकों को प्रमाणपत्र के ट्रेसिंग के लिए लाइसेंस नंबर उल्लेख करना आवश्यक
                है।</label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong> Enter The Verification Code / कृपया सत्यापन कोड दर्ज करें :</strong>
                Before
                submitting the form, candidates need to fill in the verification code.फ़ॉर्म सबमिट करने से पहले,
                उम्मीदवारों को
                सत्यापन कोड भरना होगा। </label>
            </div>
            <div class="form-group">
              <label class="fcs-text-dark"><strong> Enter The Verification Code / कृपया सत्यापन कोड दर्ज करें :</strong>
                Entering
                the verification code is mandatory for candidates before submitting the form.फ़ॉर्म सबमिट करने से पहले,
                उम्मीदवारों के लिए सत्यापन कोड दर्ज करना अनिवार्य है। </label>
            </div>
          </div>

        </div>
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
      const final_amount = 5999;

      var form_id = "main-form1";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var form_name = 'TRACE LOST FSSAI CERTIFICATE ONLINE';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var mobile = $('input[name="mobile"]').val();



      data.push({"name":"Enter Business Name For Which Certificate Is to be Traced ","value":$('input[name="traced_name"]').val()});
      data.push({"name":"Enter COMPLETE ADDRESS OF THE ABOVE MENTIONED BUSINESS","value":$('input[name="address_buss"]').val()});
      data.push({"name":"PINCODE","value":$('input[name="pincode"]').val()});
      data.push({"name":"State / राज्य ","value":$('select[name="state"]').val()});
      data.push({"name":"District / जिला ","value":$('select[name="office_district"]').val()});
      data.push({"name":"Mention licence number of the certificate to be traced","value":$('select[name="check_licence"]').val()});
      data.push({"name":"Existing FSSAI License/Registration No / मौजूदा एफएसएसएआई लाइसेंस/पंजीकरण नंबर","value":$('input[name="existing_licence_number"]').val()});



    


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



$('.check_licence').change(function() {
  if ($(this).val() == 'yes') {
    $('#yes-div').show();
  } else {
    $('#yes-div').hide();
  }
});

      

</script>
