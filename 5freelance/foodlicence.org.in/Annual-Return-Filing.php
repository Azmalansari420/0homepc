<?php include('header.php'); ?>




  <div class="container-fluid header hero-bg p-0 pb-5">
    <h1 class="text-uppercase text-center fs-3 p-4">APPLY FOR FSSAI ANNUAL RETURN FILING</h1>
    <div class="row g-0 flex-column-reverse flex-lg-row mx-2">
      <div class="col-lg-6 ps-lg-4 pe-xl-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">FSSAI Registration
              Online
              Apply</h2>
          </div>

          <form action="MakePayment.php" method="post" enctype="multipart/form-data" id="main-form"
            class="main-form-custom">
            <div class="form-group txt">
              <label>Enter Full Name <span class="required"> *</span></label>
              <input type="text" class="form-control" name="name" id="applicant-name" value="" required="">
            </div>


            <div class="form-group txt">
              <label>Enter E-mail Id <span class="required"> *</span></label>
              <input type="text" class="form-control" name="email" id="email-id" required="">
            </div>
            <div class="form-group txt">
              <label>Enter Mobile Number <span class="required"> *</span></label>
              <input type="tel" maxlength="10" minlength="10" class="form-control" name="mobile"
                id="mobile-number" required="">
            </div>
            <div class="form-group txt">
              <label>Mention FSSAI License Number For Which ANNUAL RETURN IS TO BE FILLED<span class="required"> *
                </span></label>
              <div class="input-group">
                <input type="text" class="form-control" name="existing_licence_number" value="" required="true">
                <!-- <button type="button" class="btn btn-dark fcs-submit-button" id="btnz"  value="valid">Validate</button> -->
              </div>
            </div>

            <div class="form-group txt mt-2">
              <label>SELECT NUMBER OF RETURNS <span class="required"> * </span></label><br>
              <div class="input-group">
                <select id="tenure" name="tenure" class="form-control" >
                  <option value="1 Return (Annual / Bi-Annual)" selected="">1 Return (Annual / Bi-Annual) </option>
                </select>
              </div>
            </div>
            <div class="form-group txt col-lg-12 mt-2">
              <label>State / राज्य <span class="">*</span></label> 
              <select id="office-state" class="form-control" name="state" required="">
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

            <button type="button" class="btn btn-primary fcs-submit-button" id="submit-btn">Submit Application</button>
          </form>

        </div>
      </div>
      <div class="col-lg-6 pe-lg-4 ps-xl-2 wow fadeIn mb-3" data-wow-delay="0.1s">
        <div class="form-fssi">
          <div class="fssi-head d-flex align-items-center justify-content-center">
            <h2 class="text-uppercase text-center fs-5 m-0">Instruction to Fill Annual Return filing Form</h2>
          </div>

          <div class="form-instructions main-form-custom">

            <div class="form-group text-lowercase">
              <label class="fcs-text-dark"><strong>Name Of Applicant / आवेदक का नाम :</strong> Candidates are required
                to enter
                their names accurately.उम्मीदवारों को अपने नाम को सही तरीके से दर्ज करना आवश्यक है।</label>
            </div>

            <div class="form-group text-lowercase">
              <label class="fcs-text-dark" style="padding-top: 22px;"><strong>Email Id / ईमेल आईडी : </strong> The
                candidate is
                required to enter their email address to receive the certificate and acknowledgment at the registered
                email.उम्मीदवार को प्रमाणपत्र और पावती प्राप्त करने के लिए अपना ईमेल आईडी दर्ज करना आवश्यक है ,
                प्रमाणपत्र और
                पावती पंजीकृत ईमेल पर भेजे जाएंगे.</label>
            </div>
            <div class="form-group text-lowercase">
              <label class="fcs-text-dark"><strong>Mobile Number / मोबाइल नंबर :</strong> Provide your valid mobile
                number in the
                application form.आवेदन पत्र में अपना वैध मोबाइल नंबर प्रदान करें</label>
            </div>
            <div class="form-group text-lowercase">
              <label class="fcs-text-dark">Mention the FSSAI License Number For Which the Annual Return Is To Be Filled
                /
                जिस FSSAI लाइसेंस नंबर के लिए वार्षिक रिटर्न भरा जाना है, उसका उल्लेख करें : Fill out the FSSAI license
                number
                required for the annual return.वार्षिक रिटर्न के लिए आवश्यक FSSAI लाइसेंस नंबर भरें।
              </label>
            </div>
            <div class="form-group text-lowercase">
              <label class="fcs-text-dark"><strong>Select The Number Of Returns / रिटर्न की संख्या चुनें:</strong>
                Candidates are
                required to choose the number of returns.उम्मीदवारों को रिटर्न की संख्या चुननी होगी।</label>
            </div>
            <div class="form-group text-lowercase">
              <label class="fcs-text-dark"><strong>State / राज्य :</strong> Choose the correct operating state for your
                business.अपने व्यवसाय के लिए सही संचालन राज्य चुनें।</label>
            </div>
            <div class="form-group text-lowercase">
              <label class="fcs-text-dark"><strong> Enter The Verification Code / कृपया सत्यापन कोड दर्ज करें:</strong>
                Before
                submitting the form, candidates need to fill in the verification code.फ़ॉर्म सबमिट करने से पहले,
                उम्मीदवारों को
                सत्यापन कोड भरना होगा।</label>
            </div>
          </div>

        </div>
      </div>

    </div>



  </div>

  <section class="bg-light pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-uppercase text-center fs-3 m-0 py-3">An Overview of Returns Under FSSAI</h2>
          <p> <strong>Food Safety & Standards (FSS) Act, 2006,</strong> was introduced by Government of India
            with the objective to regulate the food industry. The FSS Act, 2006, contains laws that
            regulates sale, manufacturing, storage, distribution (within the country )and import &
            export of food items (to & from) the country.</p>
          <p>It s very important for the Food Department to make sure that all the required
            instructions are followed & compliances are duly fulfilled by the food business operator.
            FSS Act has made it compulsorily for any person obtain the FSSAI License before
            starting a Food Business. Person doing Food Business has been termed as FOOD
            BUSINESS OPERATOR, under the FSS Act, 2006.</p>


          <p>When any FBO registers under FSS ACT, he is granted a Registration / Licence. While
            applying for licence, FBO submits various details about his food business which helps
            Food Department analyse FBO. FSS Act, 2006 also lays down rules for submission of
            Returns by the FBO. While the FSSAI Registration ensures that the food consumed is
            safe & healthy for human consumption. The Food Business Operators must comply with
            the FSSAI compliances and file the FSSAI Returns. Failure to comply with requirements
            of Returns results in heavy penalties. And failure to pay penalties will restrict FBO to
            Renew its Licence.</p>

          <h2 class="text-uppercase text-center fs-3 m-0 pt-3 pb-5">Different Types of FSSAI Annual Return</h2>
          <div class="row">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">1. Annual Return</h4>
                <ul>
                  <li><strong>Form:</strong> Form D1</li>
                  <li><strong>Due Date:</strong> 31st May of every financial year.</li>
                  <li><strong>Who Should File:</strong> Every FBO involved in the manufacturing, importing, labeling,
                    re-labeling,
                    packing, and re-packing of food products.</li>
                  <li><strong>Details Required:</strong> Quantity of food products manufactured or handled, the sale and
                    distribution
                    details, and details of the countries to which they are exported (if applicable).</li>
                </ul>



              </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">2. Half-Yearly Return</h4>
                <ul>
                  <li><strong>Form:</strong> Form D2</li>
                  <li><strong>Due Date:</strong> 31st October and 30th April of every financial year.</li>
                  <li><strong>Who Should File:</strong> FBOs involved in the manufacturing or importing of milk and milk
                    products.</li>
                  <li><strong>Details Required:</strong> The quantity of milk and milk products manufactured, imported,
                    exported, and
                    distributed.</li>
                </ul>





              </div>
            </div>


            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">Additional Points
                </h4>
                <ul>
                  <li><strong>Penalties for Non-Compliance:</strong> FBOs failing to file the required returns on time
                    can face
                    penalties and other enforcement actions.</li>
                  <li><strong>Electronic Filing:</strong> FSSAI has an online portal where FBOs can file their returns
                    electronically.
                  </li>
                  <li><strong>Documentation:</strong> Proper documentation and records must be maintained to support the
                    information
                    provided in the returns.</li>
                </ul>






              </div>
            </div>

            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">Steps to File Returns

                </h4>
                <ol>
                  <li><strong>Register/Login:</strong> Access the FSSAI Food Safety Compliance System (FoSCoS) portal.
                  </li>
                  <li><strong>Navigate to Returns Section:</strong> Find the section for filing returns.</li>
                  <li><strong>Select Appropriate Form:</strong> Choose the form based on the type of return (D1 or D2).
                  </li>
                  <li><strong>Fill in Details:</strong> Provide accurate details about the food products and business
                    activities.</li>
                  <li><strong>Submit:</strong> Review and submit the form.</li>
                </ol>
              </div>
            </div>

            <div class="col-lg-12 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">Key Tips

                </h4>
                <ul>
                  <li><strong>Timely Filing:</strong> Ensure returns are filed before the due dates to avoid penalties.
                  </li>
                  <li><strong>Accurate Information:</strong> Provide precise and accurate information to avoid
                    discrepancies.</li>

                </ul>
                <p><strong>Regular Updates:</strong> Keep track of any updates or changes in FSSAI regulations
                  regarding returns.
                </p>

              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="bg-light pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">



          <h2 class="text-uppercase text-center fs-3 m-0 py-3">Benefits of Complying with FSSAI Annual
            Return
          </h2>
          <p class="text-center pb-3">Complying with the FSSAI annual return requirements offers several benefits for
            food business operators (FBOs). These benefits range from legal and regulatory
            advantages to business growth and consumer trust. Here are the key benefits:</p>
          <div class="row">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">1. Legal and Regulatory Compliance</h4>
                <ul>
                  <li><strong>Avoid Penalties:</strong> Timely and accurate filing of annual returns helps avoid
                    penalties, fines, and
                    legal actions.</li>
                  <li><strong>Smooth Renewal Process:</strong> Compliance with return filing requirements facilitates
                    the smooth renewal
                    of FSSAI licenses and registrations.</li>
                  <li><strong>Legal Protection:</strong> Being compliant with FSSAI regulations provides legal
                    protection and reduces
                    the risk of business interruptions due to non-compliance issues.</li>
                </ul>




              </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">2. Business Credibility and Trust</h4>
                <ul>
                  <li><strong>Enhanced Reputation:</strong> Compliance with FSSAI norms enhances the credibility and
                    reputation of the
                    business among consumers, suppliers, and stakeholders.</li>
                  <li><strong>Consumer Trust:</strong> Demonstrates a commitment to food safety and quality, thereby
                    building trust
                    among consumers.</li>
                  <li><strong>Market Advantage:</strong> FBOs that consistently comply with FSSAI regulations are more
                    likely to be
                    preferred by consumers and business partners.</li>
                </ul>


              </div>
            </div>


            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">3. Operational Efficiency
                </h4>
                <ul>
                  <li><strong>Better Record-Keeping:</strong>Regular filing of returns
                    encourages better record-keeping and documentation, which can
                    streamline business operations and
                    audits.</li>
                  <li><strong>Data Analysis:</strong> Annual returns provide valuable data that can be analyzed
                    to improve business operations, supply chain management, and market
                    strategies
                  </li>

                </ul>






              </div>
            </div>

            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">4. Financial Benefits

                </h4>
                <ol>
                  <li><strong>Cost Savings:</strong> Avoidance of penalties and legal fees due to non-compliance
                    translates into cost savings.
                  </li>
                  <li><strong>Access to Financial Services:</strong> Compliance with FSSAI regulations can
                    enhance the likelihood of obtaining loans, insurance, and other financial
                    services, as it reflects a well-managed and credible business.</li>

                </ol>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">5. Competitive Advantage

                </h4>
                <ul>
                  <li><strong>Regulatory Advantage:</strong> Compliant businesses can leverage their adherence to FSSAI
                    regulations as a
                    competitive advantage in marketing and promotions.</li>
                  <li><strong>Market Access:</strong> Compliance with FSSAI regulations is often a prerequisite for
                    accessing certain
                    markets, especially for export-oriented businesses.</li>
                </ul>



              </div>
            </div>


            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">6. Support from Authorities

                </h4>
                <ul>
                  <li><strong>Positive Relationship with Regulators:</strong> Consistent compliance fosters a positive
                    relationship with
                    regulatory authorities, which can be beneficial during inspections and audits.</li>
                  <li><strong>Support and Guidance:</strong> Compliant FBOs are more likely to receive support and
                    guidance from FSSAI
                    and other regulatory bodies.</li>
                </ul>

              </div>
            </div>
            <div class="col-lg-12 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">7. Contribution to Public Health

                </h4>
                <ul>
                  <li><strong>Ensuring Food Safety:</strong> By complying with FSSAI regulations, businesses contribute
                    to ensuring food
                    safety and public health, which is a fundamental responsibility of every food business operator.
                  </li>
                  <li><strong>Consumer Satisfaction:</strong> Providing safe and high-quality food products leads to
                    higher consumer
                    satisfaction and loyalty.</li>
                </ul>

              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>




  <section class="bg-light pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">



          <h2 class="text-uppercase text-center fs-3 m-0 py-3">Who can File the FSSAI Annual Return?
          </h2>
          <p class="text-center pb-3">Filing the FSSAI annual return is mandatory for specific categories of food
            business operators (FBOs). The responsibility to file these returns typically falls on
            businesses involved in certain activities related to food manufacturing, processing,
            importing, and exporting. Here’s a detailed look at who can and must file the
            FSSAI annual return:</p>

          <h5 class="text-center pb-3">Categories of FBOs Required to File FSSAI Annual Return
          </h5>
          <div class="row">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">1. Manufacturers
                </h4>
                <ul>


                  <li>Businesses involved in the manufacturing of food products, including Small-scale,
                    medium-scale, and large-scale manufacturers.</li>
                  <li>This includes manufacturers of packaged food, processed food, and food additives.</li>


                </ul>





              </div>
            </div>

            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">2. Processors
                </h4>
                <ul>
                  <li>FBOs engaged in the processing of food items, such as milling,
                    refining, canning, freezing, and other forms of food processing.</li>

                </ul>


              </div>
            </div>


            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">3. Importers

                </h4>
                <ul>
                  <li>Entities that import food products into India for distribution or sale
                    within the country.</li>
                  <li>Importers of raw materials or finished food products used in further
                    manufacturing or processing.
                  </li>

                </ul>






              </div>
            </div>

            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">4. Exporters

                </h4>
                <ul>
                  <li>Businesses that export food products from India to other countries.

                  </li>
                  <li>This includes exporters of finished food products as well as processed
                    food items.
                  </li>

                </ul>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">5. Food Labelers and Re-labelers

                </h4>
                <ul>
                  <li>Businesses involved in labeling and re-labeling food products before
                    they are sold in the market.</li>
                  <li>This includes changing labels for compliance with local regulations or
                    marketing requirements.</li>
                </ul>



              </div>
            </div>


            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">6. Food Packers and Re-packers

                </h4>
                <ul>
                  <li>Entities involved in packing and re-packing food products for
                    distribution and sale.</li>
                  <li>This also includes businesses that repack bulk food items into
                    consumer-sized packages.
                  </li>
                </ul>

              </div>
            </div>
            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">Specific Requirements

                </h4>
                <ul>
                  <li>
                    <strong>Form D1:</strong> All FBOs involved in manufacturing, importing, labeling, relabeling,
                    packing, and
                    re-packing food products must file an annual return in Form D1 by the 31st of May every year.
                  </li>
                  <li>
                    <strong>Form D2:</strong> FBOs involved in the manufacturing or importing of milk and milk products
                    must file a
                    half-yearly return in Form D2 by the 31st of October and 30th of April every year.
                  </li>
                </ul>


              </div>
            </div>


            <div class="col-lg-6 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">Exemptions

                </h4>
                <ul>
                  <li>
                    <strong>Small-scale and Petty FBOs:</strong>Certain small-scale and petty food business
                    operators, such as small retailers, hawkers, itinerant vendors, temporary
                    stallholders, and small-scale or cottage industries relating to food, may be
                    exempt from filing annual returns depending on specific state regulations
                    and the scale of their operations.
                  </li>

                </ul>


              </div>
            </div>
            <div class="col-lg-12 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <div class="service-item bg-light rounded h-100 p-4">
                <h4 class="mb-3">Authorized Persons to File

                </h4>
                <ul>
                  <li><strong>Owners or Proprietors:</strong> The primary responsibility to file the returns lies with
                    the owner or
                    proprietor of the food business.</li>
                  <li><strong>Authorized Representatives:</strong> Owners can authorize a representative, such as a
                    senior employee or a
                    compliance officer, to file the returns on their behalf.</li>
                </ul>
                <p> <strong>Consultants or Compliance Firms:</strong> FBOs may also engage professional
                  consultants or compliance firms specializing in FSSAI regulations to ensure
                  accurate and timely filing of returns.</p>


              </div>
            </div>







          </div>

        </div>
      </div>
    </div>
  </section>



  <section class="bg-light pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">



          <h2 class="text-uppercase text-center fs-3 m-0 py-3">Necessary Details required in FSSAI Returns
            (Annual / Half Yearly)
          </h2>
          <p class="text-center pb-3">Filing FSSAI returns, whether annual or half-yearly, requires specific details
            about
            the food business operations. Accurate and comprehensive information must be
            provided to comply with FSSAI regulations. Below are the necessary details
            required for both types of returns:</p>


          <div class="row">
            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <h2>Annual Return (Form D1)</h2>
              <ul>
                <li><strong>Due Date:</strong> 31st May of every financial year</li>
                <li><strong>Who Should File:</strong> All FBOs involved in manufacturing, importing, labeling,
                  relabeling, packing,
                  and re-packing of food products.</li>
                <li><strong>Details Required:</strong>
                  <ol>
                    <li><strong>Basic Information:</strong>
                      <ul>
                        <li>FSSAI License/Registration Number</li>
                        <li>Name and Address of the FBO</li>
                        <li>Contact Details (Phone Number, Email Address)</li>
                      </ul>
                    </li>
                    <li><strong>Product Details:</strong>
                      <ul>
                        <li>List of food products manufactured or handled</li>
                        <li>Quantity of each product (in metric tonnes or liters) manufactured, sold, or distributed
                        </li>
                      </ul>
                    </li>
                    <li><strong>Manufacturing Information:</strong>
                      <ul>
                        <li>Manufacturing site address</li>
                        <li>Production capacity (per day/month/year)</li>
                        <li>Quantity of raw materials used</li>
                        <li>Details of processing methods and technology used</li>
                      </ul>
                    </li>
                    <li><strong>Import and Export Details:</strong>
                      <ul>
                        <li>Quantity of food products imported and exported</li>
                        <li>Country of origin for imports</li>
                        <li>Destination country for exports</li>
                      </ul>
                    </li>
                    <li><strong>Sales and Distribution Details:</strong>
                      <ul>
                        <li>Quantity of food products sold within India</li>
                        <li>Sales turnover</li>
                        <li>Distribution network details</li>
                      </ul>
                    </li>
                    <li><strong>Packaging and Labeling Information:</strong>
                      <ul>
                        <li>Types of packaging materials used</li>
                        <li>Compliance with labeling regulations</li>
                      </ul>
                    </li>
                    <li><strong>Safety and Quality Assurance:</strong>
                      <ul>
                        <li>Details of quality control measures and safety standards followed</li>
                        <li>Any incidents of food safety violations and corrective actions taken</li>
                      </ul>
                    </li>
                  </ol>
                </li>
              </ul>

              <h2>Half-Yearly Return (Form D2)</h2>
              <ul>
                <li><strong>Due Dates:</strong> 31st October and 30th April of every financial year</li>
                <li><strong>Who Should File:</strong> FBOs involved in manufacturing or importing milk and milk
                  products.</li>
                <li><strong>Details Required:</strong>
                  <ol>
                    <li><strong>Basic Information:</strong>
                      <ul>
                        <li>FSSAI License/Registration Number</li>
                        <li>Name and Address of the FBO</li>
                        <li>Contact Details (Phone Number, Email Address)</li>
                      </ul>
                    </li>
                    <li><strong>Product Details:</strong>
                      <ul>
                        <li>List of milk and milk products manufactured or handled</li>
                        <li>Quantity of each product (in metric tonnes or liters) manufactured, sold, or distributed
                        </li>
                      </ul>
                    </li>
                    <li><strong>Manufacturing Information:</strong>
                      <ul>
                        <li>Manufacturing site address</li>
                        <li>Production capacity (per day/month/year)</li>
                        <li>Quantity of raw milk and other ingredients used</li>
                        <li>Details of processing methods and technology used</li>
                      </ul>
                    </li>
                    <li><strong>Import and Export Details:</strong>
                      <ul>
                        <li>Quantity of milk and milk products imported and exported</li>
                        <li>Country of origin for imports</li>
                        <li>Destination country for exports</li>
                      </ul>
                    </li>
                    <li><strong>Sales and Distribution Details:</strong>
                      <ul>
                        <li>Quantity of milk and milk products sold within India</li>
                        <li>Sales turnover</li>
                        <li>Distribution network details</li>
                      </ul>
                    </li>
                    <li><strong>Packaging and Labeling Information:</strong>
                      <ul>
                        <li>Types of packaging materials used</li>
                        <li>Compliance with labeling regulations</li>
                      </ul>
                    </li>
                    <li><strong>Safety and Quality Assurance:</strong>
                      <ul>
                        <li>Details of quality control measures and safety standards followed</li>
                        <li>Any incidents of food safety violations and corrective actions taken</li>
                      </ul>
                    </li>
                  </ol>
                </li>
              </ul>

              <p><strong>Additional Points</strong></p>
              <ul>
                <li><strong>Electronic Filing:</strong> FSSAI provides an online portal (<a
                    href="https:foodlicence.org.in" target="_blank">Food Safety Compliance System</a>) for the
                  electronic filing of returns.</li>
                <li><strong>Documentation:</strong> Ensure all supporting documents, such as purchase records, sales
                  invoices,
                  import/export documentation, and quality test reports, are maintained and available for verification.
                </li>
                <li><strong>Accuracy:</strong> All information provided must be accurate and up-to-date to avoid
                  discrepancies and
                  potential penalties.</li>
              </ul>

              <h2>Exemption from filing FSSAI Return</h2>
              <p>Exempting certain entities from filing the FSSAI Annual Return, which is as follows:</p>
              <ol>
                <li>Canteens;</li>
                <li>Restaurants;</li>
                <li>Fast-food joints;</li>
                <li>Grocery stores.</li>
              </ol>

              <p><strong>Penalty for Late filing of FSSAI Annual Return</strong></p>
              <p>According to Section 2.1.13 (3) of FSS (Licensing and Registration) Regulations, 2011, if the Food
                Business Operators
                do not file the FSSAI Annual/Half-Yearly Return within the prescribed time frame, a fine of Rs. 100/day
                will be
                imposed on non-complying FBOs. This penalty of Rs. 100/day will be levied for the number of days the
                return was
                delayed.</p>

              <p><strong>Additional Regulations under the FSSAI Act</strong></p>
              <ul>
                <li>FSSAI rules state factory's sanitary and hygiene and also keep a record of worker's hygiene.</li>
                <li>Keep up day-by-day records of creation, crude materials, use, and sales independently.</li>
                <li>Guarantee that the source and norms of raw material utilized are of ideal quality.</li>
                <li>Not to produce, store or expose for sale any article of food in any premises that is close by or
                  part of any
                  privy, urinal, sullage, channel, or spot of the capacity of waste issue.</li>
                <li>Daily, clean the machines and other equipment.</li>
                <li>Guarantee testing of pertinent synthetic as well as microbiological contaminants in food items, at
                  any rate, once
                  in a half year.</li>
                <li>Guarantees that the temperature is exact all through the store network from the spot of obtainment
                  or sourcing
                  until it arrives at the end buyer.</li>
              </ul>

              <p><strong>How does foodlicenceapply.com Support its Client in filing FSSAI Annual Return?</strong></p>
              <p>Filing FSSAI annual return is a tedious and cumbersome process and every Food business operator holding
                FSSAI Licence
                must file FSSAI Annual Return, unless exempted under the FSS Act. All these FBOs are required to file
                FSSAI ANNUAL
                RETURN in Form D1 who indulge in manufacturing, whereas the FBOs dealing with the production,
                distribution of milk and
                milk products are required to file FSSAI Half Yearly Return in Form D2.</p>
              <p><strong>foodlicenceapply.com recommends that properly filing up the form is very important. Errors can
                  prove to be
                  costly. It is always advisable to take assistance of professionals while filing up the Annual / Half
                  Yearly
                  Returns.</strong></p>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


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
      const final_amount = 4599;

      var form_id = "main-form1";


      var form_ok = check_required_fields(form_id);
      if(form_ok!=1) return false;

      loader("show");

      var current_url =  window.location.href;
      var form_name = 'APPLY FOR FSSAI ANNUAL RETURN FILING';
      var name = $('input[name="name"]').val();
      var email = $('input[name="email"]').val();
      var mobile = $('input[name="mobile"]').val();



      data.push({"name":"Mention FSSAI License Number For Which ANNUAL RETURN IS TO BE FILLED","value":$('input[name="existing_licence_number"]').val()});
      data.push({"name":"SELECT NUMBER OF RETURNS","value":$('select[name="tenure"]').val()});
      data.push({"name":"State / राज्य ","value":$('select[name="state"]').val()});


    


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