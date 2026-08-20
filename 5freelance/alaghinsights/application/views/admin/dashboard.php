<!DOCTYPE html>
<html lang="en">
<title><?=website_name ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
      <?php $this->load->view('admin/include/topbar') ?>
      <?php $this->load->view('admin/include/sidebar') ?>
         

         


         <div id="content" class="app-content">
            <h1 class="page-header">
               Dashboard 
            </h1>
            <div class="row">

               <div class="col-xl-12 col-sm-12">
                  <div class="widget-card widget-card-inverse">

                     <div class="widget-card-col col-12 col-lg-12" style="height: 100px;">
                        <div class="widget-card-cover" style="background-image: url(<?=base_url() ?>media/admin/img/dashboard-cover.jpg);">
                           <div class="cover-bg"></div>
                        </div>
                        <div class="widget-card-content widget-hero bottom">
                           <h1>Welcome back, Admin!</h1>
                           <p class="m-b-0">I am glad to see you back online. Today is a great day!</p>
                        </div>
                     </div>
                  </div>
               </div>


               <div class="col-xl-3 col-sm-6">
                   <a href="<?= base_url('admin_con/survey_responses/listing?status=1') ?>" class="widget-stats bg-success text-white m-b-15">
                       <div class="widget-stats-info">
                           <div class="widget-stats-title">COMPLETE</div>
                           <div class="widget-stats-value"><?= $total_complete ?></div>
                           <div class="widget-stats-desc">Total Completed Surveys</div>
                       </div>
                       <div class="widget-stats-icon">
                           <i class="fa fa-check-circle"></i>
                       </div>
                   </a>
               </div>

               <div class="col-xl-3 col-sm-6">
                   <a href="<?= base_url('admin_con/survey_responses/listing?status=2') ?>" class="widget-stats bg-danger text-white m-b-15">
                       <div class="widget-stats-info">
                           <div class="widget-stats-title">TERMINATE</div>
                           <div class="widget-stats-value"><?= $total_terminate ?></div>
                           <div class="widget-stats-desc">Total Terminated</div>
                       </div>
                       <div class="widget-stats-icon">
                           <i class="fa fa-times-circle"></i>
                       </div>
                   </a>
               </div>


               <div class="col-xl-3 col-sm-6">
                   <a href="<?= base_url('admin_con/survey_responses/listing?status=3') ?>" class="widget-stats bg-warning text-white m-b-15">
                       <div class="widget-stats-info">
                           <div class="widget-stats-title">QUOTA FULL</div>
                           <div class="widget-stats-value"><?= $total_quota ?></div>
                           <div class="widget-stats-desc">Quota Full Responses</div>
                       </div>
                       <div class="widget-stats-icon">
                           <i class="fa fa-users"></i>
                       </div>
                   </a>
               </div>


               <div class="col-xl-3 col-sm-6">
                   <a href="<?= base_url('admin_con/survey_responses/listing?status=4') ?>" class="widget-stats bg-dark text-white m-b-15">
                       <div class="widget-stats-info">
                           <div class="widget-stats-title">SECURITY TERMINATE</div>
                           <div class="widget-stats-value"><?= $total_security ?></div>
                           <div class="widget-stats-desc">Security Failed</div>
                       </div>
                       <div class="widget-stats-icon">
                           <i class="fa fa-shield"></i>
                       </div>
                   </a>
               </div>


               <div class="col-xl-3 col-sm-6">
                   <a href="<?= base_url('admin/survey_projects') ?>" class="widget-stats bg-primary text-white m-b-15">
                       <div class="widget-stats-info">
                           <div class="widget-stats-title">TOTAL PROJECTS</div>
                           <div class="widget-stats-value"><?= $total_projects ?></div>
                           <div class="widget-stats-desc">Active Survey Projects</div>
                       </div>
                       <div class="widget-stats-icon">
                           <i class="fa fa-folder-open"></i>
                       </div>
                   </a>
               </div>


            </div>

         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>

       <?php $this->load->view('admin/include/theams') ?>
       <?php $this->load->view('admin/include/allscript') ?>

      
   </body>
</html>