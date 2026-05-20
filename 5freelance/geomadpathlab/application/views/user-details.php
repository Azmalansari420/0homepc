<?php
chech_users_login();

$user = users_data();
// print_r($user->id);
// die;

 include'header.php' ?>
 <div class="container-fluid py-5">
          <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px">
              <h1 class="display-4">User Details</h1>
            </div>
            <div class="row py-5 justify-content-center">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-3">
                <div class="test-service-box profileBtn">
                  <img src="<?=base_url() ?>img/user.png" alt="" />
                  <p>Profile</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-3">
                <div class="test-service-box testBtn">
                  <img src="<?=base_url() ?>img/report.svg" alt="" />
                  <p>Test Details</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-3">
                <div class="test-service-box invoiceBtn">
                  <img src="<?=base_url() ?>img/certified-lab.svg" alt="" />
                  <p>Invoice</p>
                </div>
              </div>
            </div>
            <!-- profile-details -->
            <div class="py-5 profile">
              <div class="text-center mx-auto mb-5" style="max-width: 500px">
                <h2 class="display-7">Profile</h2>
              </div>
              <div class="profile-wrapper">
                <div class="row gy-4">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="profile-details">
                      <label for=""><strong>Name :</strong></label>
                      <span><?=$user->username ?></span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="profile-details">
                      <label for=""><strong>Email :</strong></label>
                      <span><?=$user->email ?></span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="profile-details">
                      <label for=""><strong>Mobile :</strong></label>
                      <span><?=$user->mobile ?></span>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="profile-details">
                      <label for=""><strong>Address :</strong></label>
                      <span> <?=$user->address ?></span>
                    </div>
                  </div>
                </div>
                <!-- <div class="d-flex justify-content-center mt-5 mb-5 mb-lg-0">
                  <a
                    href=""
                    style="
                      padding: 10px 20px;
                      background-color: #c31807;
                      color: #fff;
                      border-radius: 5px;
                      display: inline-block;
                    "
                    >Edit Profile</a
                  >
                </div> -->
              </div>
            </div>
            <!-- profile-details -->

            <!-- test-details -->
            <div class="py-5 testDetails">
              <div class="text-center mx-auto mb-5" style="max-width: 500px">
                <h2 class="display-7">Test Details</h2>
              </div>
              <div class="profile-wrapper">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th>sr.no</th>
                        <th>Selected Date</th>
                        <th>Selected Time</th>
                        <th>Address</th>
                        <th>Download Report</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>12-03-2025</td>
                        <td>11:00 pm</td>
                        <td>123, Main Street, City, State, ZIP</td>
                        <td><a href="#">Download</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- test-details -->

            <!-- invoice -->
            <div class="py-5 invoice">
              <div class="text-center mx-auto mb-5" style="max-width: 500px">
                <h2 class="display-7">Invoice</h2>
              </div>
              <div class="profile-wrapper">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th>sr.no</th>
                        <th>Date</th>
                        <th>Download Invoice</th>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>23-09-2025</td>
                        <td><a href="#">Download</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- invoice -->
          </div>
        </div>
<?php include'footer.php' ?>