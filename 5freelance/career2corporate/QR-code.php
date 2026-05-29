<?php 
$otp = $_GET['otp'];
include('header.php'); ?>

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>QR Code</h3>
  </div>
</div>
<!--inner heading end--> 

<!--Inner Content start-->
<div class="inner-content loginWrp">
  <div class="container"> 
    <!--Register Start-->
    <div class="row justify-content-center">


<?php
if(!empty($otp) && $otp=='69H05')
  { ?>
      <div class="col-lg-8 col-md-8">
        <div class="login">
          <div class="contctxt text-center">QR Code</div>
          <div class="formint conForm">
            <form class="row justify-content-center" method="post" action="thanks.php">
              
              <div class="col-6 input-wrap">
                <img src="images/qrcode.jpeg" class="img-fluid">
              </div>

              
              <div class="sub-btn">
                <input type="submit" id="myButtonId" class="sbutn" value="Submit">
              </div>
            </form>
          </div>
        </div>
      </div>
<?php } else {?>
      <div class="col-lg-8 col-md-8 text-center">
        <h2>Somthing Wrong</h2>
      </div>
<?php } ?>

    </div>
    
    <!--Register End--> 
</div>
</div>
<!--Inner Content End--> 

<?php include('footer.php'); ?>

