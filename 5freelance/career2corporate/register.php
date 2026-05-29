<?php include('header.php'); ?>

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Register</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container"> 
    <!--Register Start-->
    <div class="row justify-content-center">
      <!-- <div class="col-lg-3 col-md-2"></div> -->
      <div class="col-lg-12 col-md-12">
        <div class="login">
          <div class="contctxt">Register Account</div>
          <div class="formint conForm">
            <form class="row" action="otp-page.php" method="post">
              <div class="col-6 input-wrap">
                <label class="form-label">First Name</label>
                <input type="text" name="name" placeholder="First Name" class="form-control" required>
              </div>
              <div class="col-6 input-wrap">
                <label class="form-label">Last Name</label>
                <input type="text" name="name" placeholder="Last Name" class="form-control" >
              </div>
              <div class="col-12 input-wrap">
                <label class="form-label">Email*</label>
                <input type="email" name="email" placeholder="Email" class="form-control" >
              </div>
              <div class="col-6 input-wrap">
                <label class="form-label">Password*</label>
                <input type="password" name="password" placeholder="Password" class="form-control" required>
              </div>
              <div class="col-6 input-wrap">
                <label class="form-label">Confirm Password*</label>
                <input type="password" name="password" placeholder="Password" class="form-control" required>
              </div>

              <div class="col-6 input-wrap">
                <label class="form-label">Phone No.*</label>
                <input type="tel" name="mobile" placeholder="Phone No." class="form-control" required>
              </div>
              <div class="col-6 input-wrap">
                <label class="form-label">City*</label>
                <input type="tel" name="mobile" placeholder="City*" class="form-control" >
              </div>

              <div class="col-6 input-wrap">
                <label class="form-label">Zip code*</label>
                <input type="text" name="code" placeholder="Zip code" class="form-control" >
              </div>

              <div class="col-6 input-wrap">
                <label class="form-label">Highest Qualification*</label>
                <input type="text" name="code" placeholder="Highest Qualification*" class="form-control" >
              </div>
              <div class="col-6 input-wrap">
                <label class="form-label">Your Expereince*</label>
                <input type="text" name="code" placeholder="Your Expereince*" class="form-control" >
              </div>

              <div class="col-6 input-wrap">
                <label class="form-label">Job Role*</label>
                <input type="text" name="code" placeholder="Job Role*" class="form-control" >
              </div>
              <div class="col-6 input-wrap">
                <label class="form-label">funtional Area*</label>
                <input type="text" name="code" placeholder="funtional Area*" class="form-control" >
              </div>
              <div class="col-6 input-wrap">
                <label class="form-label">Your Industry*</label>
                <input type="text" name="code" placeholder="Your Industry*" class="form-control" >
              </div>
              <div class="col-6 input-wrap">
                <label class="form-label">Resume file upload*</label>
                <input type="file" name="code" placeholder="Resume file upload*" class="form-control">
              </div>

              
              <div class="sub-btn">
                <input type="submit" class="sbutn" value="Submit">
              </div>
              <!-- <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Alre <a href="#.">Register Here</a></div> -->
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-2"></div>
    </div>
    
    <!--Register End--> 
</div>
</div>
<!--Inner Content End--> 

<?php include('footer.php'); ?>