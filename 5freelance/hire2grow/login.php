<?php include('header.php'); ?>


<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Login</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container"> 
    <!--Login Start-->
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="login">
          <div class="contctxt">User Login</div>
          <div class="formint conForm">
            <form>
              <div class="input-wrap">
                <label class="input-group-addon">Email</label>
                <input type="text" name="name" placeholder="User Name" class="form-control">
              </div>
              <div class="input-wrap">
                <!-- <label class="input-group-addon">Password <span><a href="#">Forgot Password?</a></span></label> -->
                <input type="text" name="password" placeholder="Password" class="form-control">
              </div>
              <div class="sub-btn">
                <input type="submit" class="sbutn" value="Login">
              </div>
              <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="register.php">Register Here</a></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>
    
    <!--Login End--> 
</div>
</div>
<!--Inner Content End--> 


<?php include('footer.php'); ?>