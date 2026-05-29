<?php include('header.php'); ?>

<!--inner heading start-->
<div class="inner-heading">
  <div class="container">
    <h3>Verification Code</h3>
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
          <div class="contctxt">Profile Verification Code</div>
          <div class="formint conForm">
            <form class="row" method="post">
              
              <div class="col-12 input-wrap">
                <label class="form-label">Enter Code</label>
                <input type="text" id="myCodeInputId" name="code" placeholder="Enter Code*" class="form-control" required>
              </div>

              
              <div class="sub-btn">
                <input type="button" id="myButtonId" class="sbutn" value="Submit">
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    
    <!--Register End--> 
</div>
</div>
<!--Inner Content End--> 

<?php include('footer.php'); ?>

<script>
  
    $(document).ready(function () {
      $('#myButtonId').on('click', function () {
          var code = $('#myCodeInputId').val();
      var otpget = '90A55';
         
          if (code !== '') 
          {
                if(code==otpget) 
                {
                    window.location.href="thanks.php?otp="+code;
                }
                else
                {
                    alert("Wrong OTP...");
                };

          }
          else
          {
            alert('Enter OTP Please...');
          }
      });
  });
</script>