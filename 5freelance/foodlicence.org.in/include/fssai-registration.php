<style>
    .bg-white {
    background: white;
    color: black;
    }
    .text-justify {
    text-align: justify !important;
    }
    .font-weight-bold {
    font-weight: 700 !important;
    }
    .font-weight-bold {
    font-weight: 700 !important;
    }
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    padding: 5px;
    text-align: left;
    }
    input[type=radio] {
    box-sizing: border-box;
    padding: 0;
    animation: blinker 2.9s linear infinite;
    }
    input[type='radio'] {
    -webkit-appearance: none;
    width: 20px;
    height: 20px;
    border-radius: 50% !important;
    outline: none;
    border: 3px solid #00246b;
    }
    input[type='radio']:before {
    content: '';
    display: block;
    width: 60%;
    height: 60%;
    margin: 20% auto;
    border-radius: 50%;
    }
</style>

<div class="small-business-operators" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">Small / Petty Food Business Operators Description:</h6>
        <span>Manufactures or sells any kind of food by himself/herself, Petty retailer, hawker, itinerant vendor, temporary stall, Thela, Sweets Shop, Juice Stall etc.
            <br>
            
            <hr>
            <p>
                <span style="font-weight:bold">e.g Gol gappa stall, fruits/vegetables vendors,snacks stall, Tea Stall, Samosa, Bread pakoda, retail shops, Temporary Food Stalls like Chinese food stall, South Indian Food etc.
                </span>
            </p>
            <p style="color:red;font-weight:bold">Temporary or fixed stall or food premise involved in preparation, storage, distribution and sale of food products that can be served as a snacks/ tea/coffee  and similar variants.</p>
            <p>Hawker - Selling packaged or freshly prepared food by travelling (usually on foot or movable carts) from one location to other</p>
        </span>
    </div>
    <table style="width: 100%; background: white; color: black;">
        <tbody>
            <tr>
                <td>
                    <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                    <select class="form-control choose_cerificate_value" name="choose_cerificate_value" >
                        <option selected="selected" value="">Select Certificate Validity</option>
                        <option value="1_Year" data-price="2099">certificate validity -  1 Year</option>
                        <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                        <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                        <option value="4_Year" data-price="3499">certificate validity -  4 Years</option>
                        <option value="5_Year" data-price="3999">certificate validity -  5 Years</option>
                    </select>
                </td>
                <td>
                    <span class="turnoverType" style="display:none">
                        Based on the selection of your inputs 
                        <h5 style="color:#00246B;font-weight:bold;font-size:14px">FSSAI Basic Registration</h5>
                        is applicable in your case
                    </span>
                    <div class="fav">
                        <label></label>
                        <span style="color:black; font-weight: bold;font-size:14px;text-align: center;" class="pricing_display">Applicable Price ₹ <span class="option-price"></span>/-<br>+18% GST</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
            </tr>
        </tbody>
    </table>
</div>


<!--Dairy Units including Milk Chilling Units  -->
<div class="Dairy-Units" style="display:none;">
    <div class="container bg-white p-2 text-justify mb-3">
        <h6 class="font-weight-bold">Dairy Units including Milk Chilling Units:</h6>
        <span>Dairy Unitsincluding Milk Chilling Units Dairy processing means handling, processing, manufacturing, packing,storing, distribution & transportation of milk and milk products.<br>Note: Registration for Petty Milkman, Milk Vendors, License for rest according to Eligibility criteria

        </span>
    </div>

    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>

                <tr>
                    <td>
                        <input class="prodcution-radio" type="radio" name="turnover"
                            value="More than 50,000 Liters of Milk per day"
                            data-text="Central License Applicable In Your Case">
                    </td>

                    <td style="width:45%">
                        <div>
                            <label class="custom">
                                More than 50,000 Liters of Milk per day<br>
                                <b>OR</b><br>
                                More than 2500 MT of Milk Solid Per annum
                            </label>
                        </div>
                    </td>

                    <td class="turnoverType side-text-box" style="text-align:center">
                        Select Radio Button On <br>
                        The Left Side To Display <br>
                        The Kind Of Registration / <br>
                        Licence Applicable In Your Case
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="prodcution-radio" type="radio" name="turnover"
                            value="10001 – 50,000 Ltrs of Milk per day"
                            data-text="State License Applicable In Your Case">
                    </td>

                    <td style="width:45%">
                        <div>
                            <label class="custom">
                                10001 – 50,000 Ltrs of Milk per day<br>
                                <b>OR</b><br>
                                501 MT – 2500 MT of Milk Solids per annum
                            </label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="prodcution-radio" type="radio" name="turnover"
                            value="501 – 10,000 Ltrs of Milk per day"
                            data-text="Basic Registration Applicable In Your Case">
                    </td>

                    <td style="width:45%">
                        <div>
                            <label class="custom">
                                501 – 10,000 Ltrs of Milk per day<br>
                                <b>OR</b><br>
                                2.5 MT – 500 MT of Milk Solids per annum
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="prodcution-radio" type="radio" name="turnover"
                            value="Upto 500 Ltrs of Milk per day"
                            data-text="Basic Registration Applicable In Your Case">
                    </td>

                    <td style="width:45%">
                        <div>
                            <label class="custom">Upto 500 Ltrs of Milk per day<br>
                                <b>OR</b><br>
                                Upto 2.5 MT of Milk Solids per annum
                            </label>
                        </div>
                    </td>
                </tr>


                
            </tbody>
        </table>
    </div>

    <div class="dairy-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_dairy_value" name="choose_dairy_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">(Central License) Applicable Price ₹ <span class="option-daily-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="dairy-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_dairy_value" name="choose_dairy_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="8000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="15000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="20000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="25000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="30000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">(State License) Applicable Price ₹ <span class="option-daily-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="dairy-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_dairy_value" name="choose_dairy_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">(State License) Applicable Price ₹ <span class="option-daily-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="dairy-year-display-4" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_dairy_value" name="choose_dairy_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2499">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">(Registration) Applicable Price ₹ <span class="option-daily-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>    
</div>

<!-- Vegetable Oil Processing Units -->
<div class="Vegetable-Oil" style="display:none;">
    <div class="container bg-white p-2 text-justify mb-3">
        <h6 class="font-weight-bold">Vegetable Oil Processing Units:</h6>
        <span>Vegetable oil processing means processing of vegetables to produce vegetable oils by the process of solvent extraction/expeller and refining including oil expeller units.</span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Turnover Or Production Capacity  
        <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>

                <tr>
                    <td>
                        <input class="vegitable-radio" type="radio" name="turnover"
                            value="More than 2 MT per day"
                            data-text="Central License Applicable In Your Case">
                    </td>

                    <td style="width:45%">
                        <div>
                            <label class="custom">
                                More than 2 MT per day
                            </label>
                        </div>
                    </td>

                    <td class="turnoverType side-text-box" style="text-align:center">
                        Select Radio Button On <br>
                        The Left Side To Display <br>
                        The Kind Of Registration / <br>
                        Licence Applicable In Your Case
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="vegitable-radio" type="radio" name="turnover"
                            value="1-2 MT per day" data-text="Central License Applicable In Your Case">
                    </td>

                    <td style="width:45%">
                        <div>
                            <label class="custom">
                                1-2 MT per day
                            </label>
                        </div>
                    </td>

                    <td class="turnoverType side-text-box" style="text-align:center">
                        Select Radio Button On <br>
                        The Left Side To Display <br>
                        The Kind Of Registration / <br>
                        Licence Applicable In Your Case
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="vegitable-radio" type="radio" name="turnover"
                            value="Below 1 MT per day" data-text="Central License Applicable In Your Case">
                    </td>

                    <td style="width:45%">
                        <div>
                            <label class="custom">
                                Below 1 MT per day
                            </label>
                        </div>
                    </td>

                    <td class="turnoverType side-text-box" style="text-align:center">
                        Select Radio Button On <br>
                        The Left Side To Display <br>
                        The Kind Of Registration / <br>
                        Licence Applicable In Your Case
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="vegitable-radio" type="radio" name="turnover"
                            value="Turnover upto Rs. 12 Lacs per annum" data-text="Central License Applicable In Your Case">
                    </td>

                    <td style="width:45%">
                        <div>
                            <label class="custom">
                                Turnover upto Rs. 12 Lacs per annum
                            </label>
                        </div>
                    </td>

                    <td class="turnoverType side-text-box" style="text-align:center">
                        Select Radio Button On <br>
                        The Left Side To Display <br>
                        The Kind Of Registration / <br>
                        Licence Applicable In Your Case
                    </td>
                </tr>


            </tbody>
        </table>
    </div>

    <div class="vegitable-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_vegitable_value" name="choose_vegitable_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                            <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="vegitable_pricing_display">(Central License) Applicable Price ₹ <span class="option-vegitable-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="vegitable-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_vegitable_value" name="choose_vegitable_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                            <option value="1_Year" data-price="8000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="15000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="20000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="25000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="30999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="vegitable_pricing_display">(State License) Applicable Price ₹ <span class="option-vegitable-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="vegitable-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_vegitable_value" name="choose_vegitable_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                            <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="vegitable_pricing_display">(State License) Applicable Price ₹ <span class="option-vegitable-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="vegitable-year-display-4" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_vegitable_value" name="choose_vegitable_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                            <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="vegitable_pricing_display">(Registration License) Applicable Price ₹ <span class="option-vegitable-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>

<!-- Slaughtering House: -->
<div class="Slaughtering-House" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Slaughtering House:</h6>
        <span>Slaughtering means a process of transporting, stunning, butchering, dressing, processing,storing & distribution of live animals/poultry birds.<br> Meatshop, Chicken Shop, Mutton Shop Lamb Meat etc. </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover Production Capacity/ टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>

                <tr>
                    <td>
                        <input class="slaughtering-radio" type="radio" name="turnover"
                            value="Large Animals: More than 50" data-text="Central License Applicable In Your Case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">
                                Large Animals: More than 50<br>
                                Small Animals: More than 150<br>
                                Poultry Birds: More than 1000
                            </label>
                        </div>
                    </td>

                    <td class="turnoverType side-text-box" style="text-align:center">
                        Select Radio Button On <br>
                        The Left Side To Display <br>
                        The Kind Of Registration / <br>
                        Licence Applicable In Your Case
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="slaughtering-radio" type="radio" name="turnover"
                            value="Large Animals: 3 to 50" data-text="Central License Applicable In Your Case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">
                                Large Animals: 3 to 50<br>
                                Small Animals:  11 to 150<br>
                                Poultry Birds: 51 to 1000
                            </label>
                        </div>
                    </td>

                    <td class="turnoverType side-text-box" style="text-align:center">
                        Select Radio Button On <br>
                        The Left Side To Display <br>
                        The Kind Of Registration / <br>
                        Licence Applicable In Your Case
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="slaughtering-radio" type="radio" name="turnover" value="Large Animals: 2" data-text="Central License Applicable In Your Case">
                    </td>
                    <td style="width:45%">
                        <div>
                            <label class="custom">
                                Large Animals: 2<br>
                                Small Animals:  10<br>
                                Poultry Birds: 50
                            </label>
                        </div>
                    </td>

                    <td class="turnoverType side-text-box" style="text-align:center">
                        Select Radio Button On <br>
                        The Left Side To Display <br>
                        The Kind Of Registration / <br>
                        Licence Applicable In Your Case
                    </td>
                </tr>

                
            </tbody>
        </table>
    </div>

    <div class="slaughtering-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_slaughtering_value" name="choose_slaughtering_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">(Central License) Applicable Price ₹ <span class="option-slaughtering-price"></span> /<br>+18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="slaughtering-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_slaughtering_value" name="choose_slaughtering_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="5000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="7000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="10000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="12000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="16000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">(State License) Applicable Price ₹ <span class="option-slaughtering-price"></span> /<br>+18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="slaughtering-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_slaughtering_value" name="choose_slaughtering_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">(Registration License) Applicable Price ₹ <span class="option-slaughtering-price"></span> /<br>+18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>


<!-- Fish Poultry Farm -->
<!-- <div class="Fish-Poultry-Farm" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Fish Seller /  Poultry Products Seller:</h6>
        <span>
        <b>Fish Seller</b> : specializes in providing a variety of fresh and high-quality fish, sourced directly from aquaculture farms or fisheries. Offering diverse options, they cater to consumer preferences for popular seafood choices.
        <br><br>
        <b>Poultry Products Seller</b> : focuses on providing fresh and responsibly-raised poultry products, including chicken and eggs. Ensuring quality through careful breeding and farming practices, they offer a range of poultry options to meet customer needs.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover / टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td><input class="fish-radio"  type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum" data-text="Based on the selection of your inputs FSSAI Basic Registration is applicable in your case">
                    </td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover upto Rs. 12 Lacs per annum</label>
                            <div id="turnoverx2" style="font-size:12px"></div>
                        </div>
                    </td>
                    <td rowspan="4" class="turnoverType option-fish-price-sidetext" style="text-align:center">Select Radio Button On <br> The Left Side To Display <br> The Kind Of Registration / <br> Licence Applicable In Your Case</td>
                </tr>
                <tr>
                    <td><input class="fish-radio other-price-44" type="radio" name="turnover" value="Turnover upto Rs. 20 crores per annum" data-price="6899" data-text="Based on the selection of your inputs FSSAI State Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom"> Turnover upto Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><input class="fish-radio other-price-44" type="radio" name="turnover" value="Turnover More than Rs. 20 crores per annum" data-price="16899" data-text="Based on the selection of your inputs FSSAI Center Licence With Basic Capacity is applicable in your case"></td>
                    <td style="width:auto">
                        <div>
                            <label class="custom">Turnover More than Rs. 20 crores per annum</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="fish-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_fish_value" name="choose_fish_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2899" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="3199">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="3799">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="4299">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="4799">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-fish-price"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="fish-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                      <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_displayx"> </span>           
                      <span class="customx">Default Certificate Validity : 1 Year</span>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-fish-price-2"></span> /-<br>Including Taxes &amp; Fees</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div> -->
<!-- meat processinfg -->
<div class="Meat-Processing" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Meat Processing:</h6>
        <span>Meat processing means further processing of slaughtered animals/poultry birdsinto meat & meat products, packaging, storing & transportation of meat & meat products.<br>Fish processing means handling, processing offish, manufacturing of fish products, packing, storing, distribution & transportation of fish and fish products.</span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select The Turnover Or Capacity / टर्नओवर का चयन करें <span class=""> *</span></label>
        <table class="" style="background:white;color:black;width:100%">
            <tbody>

                <tr>
                    <td>
                        <input class="meat-radio" type="radio" name="turnover"
                            value="More than 500 Kg Meat per day">
                    </td>

                    <td style="width:45%">
                        <label class="custom">
                            More than 500 Kg Meat per day <br>
                            or More than 150 MT Meat per annum
                        </label>
                    </td>

                    <td rowspan="3" class="turnoverType option-meat-price-sidetext"
                        style="text-align:center">
                        Select Radio Button On <br>
                        The Left Side To Display <br>
                        The Kind Of Registration / <br>
                        Licence Applicable In Your Case
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="meat-radio" type="radio" name="turnover"
                            value="Upto 500 Kg Meat per day">
                    </td>

                    <td style="width:45%">
                        <label class="custom">
                            Upto 500 Kg Meat per day <br>
                            or Upto 150 MT Meat per annum
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="meat-radio" type="radio" name="turnover"
                            value="Turnover upto Rs. 12 Lacs per annum">
                    </td>

                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum
                        </label>
                    </td>
                </tr>

                
            </tbody>
        </table>
    </div>

    <div class="meat-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_meat_value" name="choose_meat_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-meat-price"></span> /<br>+18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="meat-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_meat_value" name="choose_meat_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                            <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-meat-price"></span> /<br>+18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="meat-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_meat_value" name="choose_meat_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                            <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-meat-price"></span> /<br>+18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>


   
</div>
<!-- Manufacturer -->
<div class="Manufacturer-of-any-food" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">All Food Manufacturing/ Processing units other
        than Dairy Units, Vegetable Oil, Meat Processing
        and Slaughtering Houses
        </h6>
                <span>Manufacturing/Processing Unit means a
        person/entity which owns or operates an
        establishmentthat manufactures or processes a
        food product.<br>This term includes, but is not limited to contract
        manufacturers, contract packers and other entities
        that manufactures or processes a food product.<br>Manufacturing or processing means each step in
        conversion of raw material derived from livestock
        and agricultural produce into products for
        intermediate or final consumption. The process
        includes procurement, receipt, preparation,
        Manufacturing/processing, packaging, storage,
        distribution & transportation of food products.<br>Repacking means packing of food product into
        differentsizes with labeling after doing minimal
        processing as required like sorting, grading, sieving etc. from wholesale packages. The
        food product is not manipulated& the composition
        or formulation is not affected or changed.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="manufacturer-radio" type="radio" name="turnover" value="Production Capacity: More than 2 MT per day">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Production Capacity: More than 2 MT per day <br>
                            No Grains, Cereals or Pulses Milling Units
                        </label>
                    </td>
                    <td class="turnoverType option-manufacturer-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="manufacturer-radio" type="radio" name="turnover" value="Production Capacity: 101 Kgs/Ltrs – 1 MT per Day">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Production Capacity: 101 Kgs/Ltrs – 1 MT per Day <br>
                            No Grains, Cereals or Pulses Milling Units
                        </label>
                    </td>
                    <td class="turnoverType option-manufacturer-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="manufacturer-radio" type="radio" name="turnover" value="Production Capacity: 1MT – 2 MT per Day">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Production Capacity: 1MT – 2 MT per Day
                        </label>
                    </td>
                    <td class="turnoverType option-manufacturer-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="manufacturer-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum<br>Production capacity upto 100 Kgs/Ltrs per day
                        </label>
                    </td>
                    <td class="turnoverType option-manufacturer-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="manufacturer-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_manufacturer_value" name="choose_manufacturer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-manufacturer-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="manufacturer-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_manufacturer_value" name="choose_manufacturer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-manufacturer-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="manufacturer-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_manufacturer_value" name="choose_manufacturer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="15000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="20000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="25000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="30000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-manufacturer-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="manufacturer-year-display-4" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_manufacturer_value" name="choose_manufacturer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-manufacturer-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>

<!-- Proprietary-Food -->
<div class="Proprietary-Food" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">Proprietary Food:</h6>
        <span>Proprietary Foods are those which are not standardized under regulations and may contain primary ingredients and some generic additives.
        </span>
    </div>
    <table style="width: 100%; background: white; color: black;">
        <tbody>

            <tr>
                <td>
                    <input class="Proprietary-radio" type="radio" name="turnover" value="No restriction on production capacity">
                </td>
                <td style="width:45%">
                    <label class="custom">No restriction on production capacity</label>
                </td>
                <td class="turnoverType option-Proprietary-price-sidetext"
                    style="text-align:center">
                    Central License
                </td>
            </tr>
        </tbody>
    </table>


    <div class="Proprietary-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Proprietary_value" name="choose_Proprietary_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Proprietary-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>


</div>

<!-- With prior Product Approval/ NOC from FSSAI-Food -->
<div class="Novel-Food" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-3">
        <h6 class="font-weight-bold">Novel Food:</h6>
        <span>With prior Product Approval/ NOC from FSSAI
        </span>
    </div>
    <table style="width: 100%; background: white; color: black;">
        <tbody>

            <tr>
                <td>
                    <input class="Novel-radio" type="radio" name="turnover" value="No restriction on production capacity">
                </td>
                <td style="width:45%">
                    <label class="custom">No restriction on production capacity</label>
                </td>
                <td class="turnoverType option-Novel-price-sidetext"
                    style="text-align:center">
                    Central License
                </td>
            </tr>
        </tbody>
    </table>

    
    <div class="Novel-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Novel_value" name="choose_Novel_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Novel-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>


</div>

<!-- warehouse -->

<div class="warehouse" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">warehouse
        </h6>
        <span>Cold/refrigerated storage is an activity where
        refrigerated/ frozen food products in packed or
        unpacked condition isstored forfurther distribution
        in refrigeration/ freezing storage facilities.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="warehouse-radio" type="radio" name="turnover" value="Storage Capacity of More than 10,000 MT">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Storage Capacity of More than 10,000 MT
                        </label>
                    </td>
                    <td class="turnoverType option-warehouse-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="warehouse-radio" type="radio" name="turnover" value="Storage Capacity Upto 10,000 MT">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Storage Capacity Upto 10,000 MT
                        </label>
                    </td>
                    <td class="turnoverType option-warehouse-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="warehouse-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-warehouse-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="warehouse-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_warehouse_value" name="choose_warehouse_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-warehouse-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="warehouse-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_warehouse_value" name="choose_warehouse_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="8000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="15000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="20000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="25000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="30000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-warehouse-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="warehouse-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_warehouse_value" name="choose_warehouse_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-warehouse-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>

<div class="Atmospheric-Controlled" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Storage – Atmospheric Controlled + Cold
        </h6>
        <span>Controlled Atmosphere storage is an activity where
            food products in packed or unpacked condition is
            stored for further distribution in controlled
            atmosphere storage facilities. A controlled
            atmosphere,
            generally used forstorage of dry commodities &
            agricultural produce in which the concentrations of oxygen, carbon
            dioxide and nitrogen, as well as the temperature
            and humidity of a storage room are regulated
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Atmospheric-radio" type="radio" name="turnover" value="Storage Capacity of More than 1,000 MT">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Storage Capacity of More than 1,000 MT
                        </label>
                    </td>
                    <td class="turnoverType option-Atmospheric-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Atmospheric-radio" type="radio" name="turnover" value="Storage Capacity Upto 1,000 MT">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Storage Capacity Upto 1,000 MT
                        </label>
                    </td>
                    <td class="turnoverType option-Atmospheric-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="Atmospheric-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Atmospheric-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="Atmospheric-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Atmospheric_value" name="choose_Atmospheric_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Atmospheric-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Atmospheric-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Atmospheric_value" name="choose_Atmospheric_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Atmospheric-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Atmospheric-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Atmospheric_value" name="choose_Atmospheric_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Atmospheric-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>



<div class="Atmospheric-Controlled-without" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Storage Without Atmospheric Controlled + Cold
        </h6>
        <span>Storage is an activity where food products in packed
        or unpacked condition is stored for further
        distribution in storage facilities, also called
        warehouses, godowns, etc
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Atmospheric-with-radio" type="radio" name="turnover" value="Storage Capacity of More than 50,000 MT">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Storage Capacity of More than 50,000 MT
                        </label>
                    </td>
                    <td class="turnoverType option-Atmospheric-with-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Atmospheric-with-radio" type="radio" name="turnover" value="Storage Capacity Upto 50,000 MT">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Storage Capacity Upto 50,000 MT
                        </label>
                    </td>
                    <td class="turnoverType option-Atmospheric-with-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="Atmospheric-with-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Atmospheric-with-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="Atmospheric-with-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Atmospheric-with_value" name="choose_Atmospheric-with_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Atmospheric-with-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Atmospheric-with-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Atmospheric-with_value" name="choose_Atmospheric-with_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Atmospheric-with-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Atmospheric-with-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Atmospheric-with_value" name="choose_Atmospheric-with_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Atmospheric-with-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>





<div class="Transporter" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Transporter
        </h6>
        <span>Transportation is an activity of transporting food
        products (both packed and bulk) from one location
        to another in vehicles/containers including
        specialized vehicles like insulated refrigerated van/
        wagon, oil/milk tankers etc.
        Food Trucks are also covered in this category
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Transporter-radio" type="radio" name="turnover" value="More than 100 Vehicles and Turnover more than Rs. 30 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            More than 100 Vehicles and Turnover more than Rs. 30 Crores per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Transporter-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Transporter-radio" type="radio" name="turnover" value="Upto 100 Vehicles and Turnover upto Rs. 30 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Storage Capacity Upto 50,000 MT
                        </label>
                    </td>
                    <td class="turnoverType option-Transporter-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="Transporter-radio" type="radio" name="turnover" value="Single Vehicle and Turnover upto Rs.12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Single Vehicle and Turnover upto Rs.12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Transporter-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="Transporter-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Transporter_value" name="choose_Transporter_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Transporter-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Transporter-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Transporter_value" name="choose_Transporter_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Transporter-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Transporter-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Transporter_value" name="choose_Transporter_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Transporter-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>





<div class="Wholesaler" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Wholesaler
        </h6>
        <span>Wholesale is an activity in the distribution channel
            where food product is procured in bulk and then
            sold to resellers/retailersrather than to consumers
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Wholesaler-radio" type="radio" name="turnover" value="Turnovermore than Rs. 30 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs. 30 Crores per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Wholesaler-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Wholesaler-radio" type="radio" name="turnover" value="Turnover upto Rs. 30 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 30 Crores per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Wholesaler-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="Wholesaler-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Single Vehicle and Turnover upto Rs.12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Wholesaler-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="Wholesaler-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Wholesaler_value" name="choose_Wholesaler_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Wholesaler-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Wholesaler-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Wholesaler_value" name="choose_Wholesaler_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Wholesaler-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Wholesaler-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Wholesaler_value" name="choose_Wholesaler_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Wholesaler-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>






<div class="Distributor" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Distributor
        </h6>
        <span>Distribution is an activity in the distribution
            channel where food product is distributed from
            the original place of manufacture to the person
            who makes the final delivery or sale of the food
            product to the ultimate consumer.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Distributor-radio" type="radio" name="turnover" value="Turnovermore than Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs. 20 Crores per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Distributor-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Distributor-radio" type="radio" name="turnover" value="Turnover upto Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 20 Crores per annum

                        </label>
                    </td>
                    <td class="turnoverType option-Distributor-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="Distributor-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Distributor-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="Distributor-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Distributor_value" name="choose_Distributor_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Distributor-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Distributor-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Distributor_value" name="choose_Distributor_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Distributor-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Distributor-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Distributor_value" name="choose_Distributor_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Distributor-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>




<div class="Supplier" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Supplier
        </h6>
        <span>Supply is an activity in the distribution channel where
        food product is provided to the consumer as per the requirements
        raised by the consumer.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Supplier-radio" type="radio" name="turnover" value="Turnovermore than Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs. 20 Crores per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Supplier-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Supplier-radio" type="radio" name="turnover" value="Turnover upto Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 20 Crores per annum

                        </label>
                    </td>
                    <td class="turnoverType option-Supplier-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="Supplier-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Supplier-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="Supplier-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Supplier_value" name="choose_Supplier_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Supplier-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Supplier-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Supplier_value" name="choose_Supplier_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Supplier-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Supplier-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Supplier_value" name="choose_Supplier_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Supplier-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>



<div class="Retailer" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Retailer
        </h6>
        <span>Retail is an activity where food products is procured
        from a manufacturer, distributor or wholesaler and
        sold to the ultimate end user.<br>E.g. Retail Shop/ Fish/ Meat/Poultry shop/
        seller/Sweet Shop/Snacks/Confectionery or Bakery
        Shop
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Retailer-radio" type="radio" name="turnover" value="Turnovermore than Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs. 20 Crores per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Retailer-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Retailer-radio" type="radio" name="turnover" value="Turnover upto Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 20 Crores per annum

                        </label>
                    </td>
                    <td class="turnoverType option-Retailer-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="Retailer-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Retailer-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="Retailer-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Retailer_value" name="choose_Retailer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Retailer-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Retailer-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Retailer_value" name="choose_Retailer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Retailer-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Retailer-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Retailer_value" name="choose_Retailer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Retailer-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>



<div class="Marketer" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Marketer
        </h6>
        <span>Marketing (self) means promoting food product of a
            brand in the market which is owned by the self.<br>
            Marketing (Third Party) means promoting food
            poduct of a brand in the market which is not
            owned by the self.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Marketer-radio" type="radio" name="turnover" value="Turnovermore than Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs. 20 Crores per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Marketer-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Marketer-radio" type="radio" name="turnover" value="Turnover upto Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 20 Crores per annum

                        </label>
                    </td>
                    <td class="turnoverType option-Marketer-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="Marketer-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Marketer-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="Marketer-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Marketer_value" name="choose_Marketer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Marketer-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Marketer-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Marketer_value" name="choose_Marketer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Marketer-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Marketer-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Marketer_value" name="choose_Marketer_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Marketer-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>


<div class="Hotel" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Hotel
        </h6>
        <span>Hotel is a commercial establishment providing
        lodging, meals, and other guest services.
        In general, to be called a hotel, an establishment
        must have a minimum of six letting bedrooms, at
        least three of which must have attached (ensuite)
        private bathroom facilities.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Hotel-radio" type="radio" name="turnover" value="Five Star and Above">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Five Star and Above
                        </label>
                    </td>
                    <td class="turnoverType option-Hotel-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Hotel-radio" type="radio" name="turnover" value="Three Star and Four Star">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Three Star and Four Star

                        </label>
                    </td>
                    <td class="turnoverType option-Hotel-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="Hotel-radio" type="radio" name="turnover" value="One Star, Two Star or Hotel without Star Rating by Ministry of Tourism (HRACC)">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            One Star, Two Star or Hotel without Star Rating by Ministry of Tourism (HRACC)
                        </label>
                    </td>
                    <td class="turnoverType option-Hotel-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Hotel-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Hotel-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="Hotel-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Hotel_value" name="choose_Hotel_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Hotel-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Hotel-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Hotel_value" name="choose_Hotel_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Hotel-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Hotel-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Hotel_value" name="choose_Hotel_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="5000" >certificate validity -  1 Year</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Hotel-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
    <div class="Hotel-year-display-4" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Hotel_value" name="choose_Hotel_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Hotel-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>




<div class="Restaurants" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Restaurants
        </h6>
        <span>Restaurant is a type of food service operation which
            prepares, serves food and drinks to customers in
            exchange for money. Meals are generally served
            and eaten on the premises, but many restaurants
            also offer take-out and food delivery services, and
            some offer only take-out and delivery.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Restaurants-radio" type="radio" name="turnover" value="Turnovermore than Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs. 20 Crores per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Restaurants-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Restaurants-radio" type="radio" name="turnover" value="Turnover upto Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 20 Crores per annum

                        </label>
                    </td>
                    <td class="turnoverType option-Restaurants-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="Restaurants-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Restaurants-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="Restaurants-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Restaurants_value" name="choose_Restaurants_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Restaurants-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Restaurants-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Restaurants_value" name="choose_Restaurants_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Restaurants-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Restaurants-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Restaurants_value" name="choose_Restaurants_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Restaurants-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>



<div class="Club-Canteen" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Club-Canteen
        </h6>
        <span>Canteen or Cafeteria is a dining area in an
        institution/ establishment serving food (being
        prepared in the premises or procured from other
        location orsource) to individuals associated with or
        visiting the institution
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Club-Canteen-radio" type="radio" name="turnover" value="Turnovermore than Rs 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Club-Canteen-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Club-Canteen-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 20 Crores per annum

                        </label>
                    </td>
                    <td class="turnoverType option-Club-Canteen-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>


                

            </tbody>
        </table>
    </div>

    <div class="Club-Canteen-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Club-Canteen_value" name="choose_Club-Canteen_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Club-Canteen-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    

    <div class="Club-Canteen-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Club-Canteen_value" name="choose_Club-Canteen_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Club-Canteen-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>




<div class="Caterar" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Caterar
        </h6>
        <span>Food Service Establishmentinvolved in preparation,
            storage, serving and /or transport of food for
            consumption of a group at a venue of
            ceremony/celebration /ritual/institution.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Caterar-radio" type="radio" name="turnover" value="Turnovermore than Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs. 20 Crores per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Caterar-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Caterar-radio" type="radio" name="turnover" value="Turnover upto Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 20 Crores per annum

                        </label>
                    </td>
                    <td class="turnoverType option-Caterar-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


              <!--   <tr>
                    <td>
                        <input class="Caterar-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Caterar-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr> -->

            </tbody>
        </table>
    </div>

    <div class="Caterar-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Caterar_value" name="choose_Caterar_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Caterar-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Caterar-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Caterar_value" name="choose_Caterar_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Caterar-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Caterar-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Caterar_value" name="choose_Caterar_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Caterar-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>





<div class="Food-Vending-Agencies" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Food Vending Agencies
        </h6>
        <span>Sale of packaged/fresh food from a temporary or
        fixed stall/cart/ machine by an individual or by
        automation
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Food-Vending-Agencies-radio" type="radio" name="turnover" value="More than 100 Vending Machines and/or located in two or more States/UTs">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            More than 100 Vending Machines and/or located in two or more States/UTs
                        </label>
                    </td>
                    <td class="turnoverType option-Food-Vending-Agencies-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Food-Vending-Agencies-radio" type="radio" name="turnover" value="Upto 100 Vending Machinesin only one State/UT">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Upto 100 Vending Machinesin only one State/UT

                        </label>
                    </td>
                    <td class="turnoverType option-Food-Vending-Agencies-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>


                <tr>
                    <td>
                        <input class="Food-Vending-Agencies-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum or Upto 12 Vending Machinesin only one State/UT">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum or Upto 12 Vending Machinesin only one State/UT
                        </label>
                    </td>
                    <td class="turnoverType option-Food-Vending-Agencies-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="Food-Vending-Agencies-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Food-Vending-Agencies_value" name="choose_Food-Vending-Agencies_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Food-Vending-Agencies-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Food-Vending-Agencies-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Food-Vending-Agencies_value" name="choose_Food-Vending-Agencies_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Food-Vending-Agencies-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Food-Vending-Agencies-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Food-Vending-Agencies_value" name="choose_Food-Vending-Agencies_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Food-Vending-Agencies-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>



<div class="Dhaba" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Dhaba
        </h6>
        <span>Food service establishment generally located near
        roadside/highway involved in processing, storing packaging and selling of food to customers for
        consumption
        <br>Boarding housesserving food
        A building providing food and lodging for paying
        guest<br>Banquet halls with food catering arrangements
        A specified area such as hall which is used for the
        purpose of hosting parties/ ceremonies involved in
        preparation and serving of food to customers for
        consumption.<br>Home Based Canteens/ Dabba Wallas
        An individual or establishment involved in
        distribution of packed meals (usually packed
        lunch) from food service establishments such as
        home based caterer or restaurantsto customers<br>Permanent/ Temporary stall Holder
        A stand/booth/compartment/small covered area
        being used for
        preparation and /or sale of freshly prepared or
        packaged food for
        consumption. Thisstructuremaybe temporary or
        permanent (fixed).<br>Food stalls/ Arrangementsin religious gatherings/
        fairs etc
        A stand/booth/compartment/small covered area
        being used for preparation and /or sale or
        distribution of freshly prepared or packaged food
        being offered as Prasad in a religious institution.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Dhaba-radio" type="radio" name="turnover" value="Turnovermore than Rs 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Dhaba-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Dhaba-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum

                        </label>
                    </td>
                    <td class="turnoverType option-Dhaba-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>


                

            </tbody>
        </table>
    </div>

    <div class="Dhaba-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Dhaba_value" name="choose_Dhaba_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Dhaba-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    

    <div class="Dhaba-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Dhaba_value" name="choose_Dhaba_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Dhaba-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>




<div class="Importers" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Importers
        </h6>
        <span>Importersimporting food itemsincluding food
        ingredients and additives for
        commercial use <br>Import is an activity where articles of trade from a
        foreign source is brought into a domestic market in
        the course of trade
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Importers-radio" type="radio" name="turnover" value="Importing any type of food product with no limit on the capacity">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Importing any type of food product with no limit on the capacity
                        </label>
                    </td>
                    <td class="turnoverType option-Importers-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                               

            </tbody>
        </table>
    </div>

    <div class="Importers-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Importers_value" name="choose_Importers_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Importers-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    

    <div class="Importers-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Importers_value" name="choose_Importers_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Importers-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>



<div class="Food-Business-Activities" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Food Business Activities at premises of Central
        </h6>
        <span>Govt Agencies such as
        Storage,Wholesale, Distribution, Retail etc<br> Documentsfor License as per the business activity –
        Storage, Wholesale, Distribution, Retail

        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Food-Business-Activities-radio" type="radio" name="turnover" value="No limit on Capacity or Turnover">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            No limit on Capacity or Turnover
                        </label>
                    </td>
                    <td class="turnoverType option-Food-Business-Activities-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                               

            </tbody>
        </table>
    </div>

    <div class="Food-Business-Activities-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Food-Business-Activities_value" name="choose_Food-Business-Activities_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Food-Business-Activities-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    


    
</div>



<div class="Departmental-Canteens" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Departmental Canteens atthe premises of Central Govt. Institutions

        </h6>
        <span>Food Service Establishmentinvolved in
        preparation and serving of food for
        consumption of a group of individuals working or
        visiting central government
        agencies
                </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Departmental-Canteens-radio" type="radio" name="turnover" value="Turnovermore than Rs 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Departmental-Canteens-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Departmental-Canteens-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum

                        </label>
                    </td>
                    <td class="turnoverType option-Departmental-Canteens-price-sidetext"
                        style="text-align:center">
                        Central Registration
                    </td>
                </tr>


                

            </tbody>
        </table>
    </div>

    <div class="Departmental-Canteens-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Departmental-Canteens_value" name="choose_Departmental-Canteens_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Departmental-Canteens-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    

    <div class="Departmental-Canteens-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Departmental-Canteens_value" name="choose_Departmental-Canteens_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Departmental-Canteens-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>




<div class="Food-Business-Activities-aiport" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Food Business Activities at premises of Central
        </h6>
        <span>Food Service Establishmentinvolved in
            preparation and serving of food at
            airports/seaports
            Documentsfor License as per the business activity –
            Storage, Wholesale, Distribution, Retail

        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Food-Business-Activities-aiport-radio" type="radio" name="turnover" value="No limit on Capacity or Turnover">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            No limit on Capacity or Turnover
                        </label>
                    </td>
                    <td class="turnoverType option-Food-Business-Activities-aiport-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                               

            </tbody>
        </table>
    </div>

    <div class="Food-Business-Activities-aiport-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Food-Business-Activities-aiport_value" name="choose_Food-Business-Activities-aiport_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Food-Business-Activities-aiport-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    


    
</div>



<div class="Midday-Meal" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Mid day Meal Caterer
        </h6>
        <span>The Midday Meal Scheme is a school meal
        programme of the Government of India designed
        to better the nutritional standing of school-age
        children nationwide. The programme supplies
        free lunches on working days for children in
        primary and upper primary classesin government,
        government aided, local body, Education
        Guarantee Scheme, and alternate innovative
        education centres, Madarsa and Maqtabs
        supported under Sarva Shiksha Abhiyan, and
        National Child Labour Project schools run by the
        ministry of labour. Caterer preparing and
        transporting food to institutions under Midday
        mealscheme.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Midday-Meal-radio" type="radio" name="turnover" value="Turnovermore than Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs. 20 Crores per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Midday-Meal-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Midday-Meal-radio" type="radio" name="turnover" value="Turnover upto Rs. 20 Crores per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 20 Crores per annum

                        </label>
                    </td>
                    <td class="turnoverType option-Midday-Meal-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>



            </tbody>
        </table>
    </div>

    <div class="Midday-Meal-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Midday-Meal_value" name="choose_Midday-Meal_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Midday-Meal-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Midday-Meal-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Midday-Meal_value" name="choose_Midday-Meal_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Midday-Meal-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="Midday-Meal-year-display-3" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Midday-Meal_value" name="choose_Midday-Meal_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Midday-Meal-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>


<div class="Midday-Meal-Canteen" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Mid Day Meal Canteen
        </h6>
        <span>Canteensserving food under mid day mealscheme
    in Schools
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Midday-Meal-Canteen-radio" type="radio" name="turnover" value="Turnovermore than Rs 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-Midday-Meal-Canteen-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="Midday-Meal-Canteen-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 20 Crores per annum

                        </label>
                    </td>
                    <td class="turnoverType option-Midday-Meal-Canteen-price-sidetext"
                        style="text-align:center">
                        Registration
                    </td>
                </tr>


                

            </tbody>
        </table>
    </div>

    <div class="Midday-Meal-Canteen-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Midday-Meal-Canteen_value" name="choose_Midday-Meal-Canteen_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="7000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="10000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="12999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="15999">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="20000">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Midday-Meal-Canteen-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    

    <div class="Midday-Meal-Canteen-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Midday-Meal-Canteen_value" name="choose_Midday-Meal-Canteen_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="2099" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="2499">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="2999">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="2499">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="2999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Midday-Meal-Canteen-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>


<div class="Exporter" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Exporter
        </h6>
        <span>a) Documentsfor License for 100% Export Oriented
            Units<br>
            b) Documentsfor License for Trader/Merchant
            Exporter<br>
            c) Documentsfor License for Manufacturer Exporter
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Exporter-radio" type="radio" name="turnover" value="No limit on Capacity or Turnover">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            No limit on Capacity or Turnover
                        </label>
                    </td>
                    <td class="turnoverType option-Exporter-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                               

            </tbody>
        </table>
    </div>

    <div class="Exporter-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Exporter_value" name="choose_Exporter_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Exporter-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
    
</div>


<div class="multiple-type" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Mid Day Meal Canteen
        </h6>
        <span>Canteensserving food under mid day mealscheme
    in Schools
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="multiple-type-radio" type="radio" name="turnover" value="Turnovermore than Rs 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnovermore than Rs 12 Lacs per annum
                        </label>
                    </td>
                    <td class="turnoverType option-multiple-type-price-sidetext"
                        style="text-align:center">
                        State License
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="multiple-type-radio" type="radio" name="turnover" value="Turnover upto Rs. 12 Lacs per annum">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            Turnover upto Rs. 12 Lacs per annum

                        </label>
                    </td>
                    <td class="turnoverType option-multiple-type-price-sidetext"
                        style="text-align:center">
                        Central Registration
                    </td>
                </tr>


                

            </tbody>
        </table>
    </div>

    <div class="multiple-type-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_multiple-type_value" name="choose_multiple-type_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-multiple-type-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    

    <div class="multiple-type-year-display-2" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_multiple-type_value" name="choose_multiple-type_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-multiple-type-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>


<div class="E-commerce" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">E-commerce
        </h6>
        <span>E-commerce also known as electronic commerce or
        internet commerce, refers to the buying and selling
        of goods or services using the internet, and the
        transfer of money and data to execute these
        transactions. Ecommerce is often used to refer to
        the sale of physical products online, but it can also
        describe any kind of commercial transaction that is
        facilitated through the internet.
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="E-commerce-radio" type="radio" name="turnover" value="No limit on Capacity or Turnover">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            No limit on Capacity or Turnover
                        </label>
                    </td>
                    <td class="turnoverType option-E-commerce-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                               

            </tbody>
        </table>
    </div>

    <div class="E-commerce-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_E-commerce_value" name="choose_E-commerce_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-E-commerce-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>
<div class="Head-Office" style="display:none;">
    <div class="container bg-white p-3 text-justify mb-2">
        <h6 class="font-weight-bold">Head Office/Registered Office
        </h6>
        <span>Food Business Operators having food business
        activities in two or more States/UTs have to declare
        one Head Office/Registered Office.
        Documentsfor Head office License only
        Documentsfor Head Office License along with Food
        Business Activity
        </span>
    </div>
    <div>
        <label class="font-weight-bold" id="exp">Select Production Capacity  <span class=""> *</span></label>
        <table  style="background:white;color:black;width:100%">
            <tbody>
                <tr>
                    <td>
                        <input class="Head-Office-radio" type="radio" name="turnover" value="No limit on Capacity or Turnover">
                    </td>
                    <td style="width:45%">
                        <label class="custom">
                            No limit on Capacity or Turnover
                        </label>
                    </td>
                    <td class="turnoverType option-Head-Office-price-sidetext"
                        style="text-align:center">
                        Central License
                    </td>
                </tr>

                               

            </tbody>
        </table>
    </div>

    <div class="Head-Office-year-display" style="display: none;">
        <table style="width: 100%; background: white; color: black;">
            <tbody>
                <tr>
                    <td>
                        <label>Choose Certificate Validity / प्रमाणपत्र वैधता चुनें <span class="required"> *</span></label>
                        <select class="form-control choose_Head-Office_value" name="choose_Head-Office_value">
                            <option selected="selected" value="">Select Certificate Validity</option>
                             <option value="1_Year" data-price="10000" >certificate validity -  1 Year</option>
                            <option value="2_Year" data-price="20000">certificate validity -  2 Years</option>
                            <option value="3_Year" data-price="30000">certificate validity -  3 Years</option>
                            <option value="4_Year" data-price="35000">certificate validity -  4 Years</option>
                            <option value="5_Year" data-price="41999">certificate validity -  5 Years</option>
                        </select>
                    </td>
                    <td>
                        <span class="turnoverType" style="display:none"></span>
                        <div class="fav">
                            <label></label>
                            <span style="color:black; font-weight: bold;font-size:14px;" class="pricing_display">Applicable Price ₹ <span class="option-Head-Office-price"></span> /<br> +18% GST</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="custom">Change required certificate validity from above dropdown.</td>
                </tr>
            </tbody>
        </table>
    </div>

    
</div>