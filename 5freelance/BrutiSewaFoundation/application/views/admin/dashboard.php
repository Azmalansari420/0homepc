<?php
$user = $this->crud->selectDataByMultipleWhere('tbl_admin',array('id'=>$this->session->userdata("id"),));
if(empty($user))
  {
   redirect('admin/logout');
   die;
  }

$total_orders = $this->db->count_all_results('orders');
$total_user = $this->db->where('type', 2)->count_all_results('tbl_admin');

/*total revenue*/
$this->db->select_sum('total_amount', 'total_revenue');
$this->db->where('status', 1);
$query = $this->db->get('orders')->row();
$total_revenue = $query->total_revenue;

/*today order*/
$today_date = date("Y-m-d");
$today_orders = $this->db
    ->where('DATE(addeddate)', $today_date)
    ->count_all_results('orders');



/*bar cahart data*/
$from_date = $this->input->get('from_date');
$to_date   = $this->input->get('to_date');

// Default = current month
if (empty($from_date) || empty($to_date)) {
    $from_date = date('Y-m-01');
    $to_date   = date('Y-m-t');
}

$this->db->select('DATE(addeddate) as order_date, SUM(total_amount) as total_revenue');
$this->db->from('orders');
// $this->db->where('status', 1); // agar sirf confirmed chahiye
$this->db->where('DATE(addeddate) >=', $from_date);
$this->db->where('DATE(addeddate) <=', $to_date);
$this->db->group_by('DATE(addeddate)');
$this->db->order_by('order_date', 'ASC');

$result = $this->db->get()->result_array();

$dates = [];
$revenues = [];

foreach ($result as $row) {
    $dates[] = $row['order_date'];
    $revenues[] = $row['total_revenue'];
}





?>
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
            <div class="row ">

               <div class="col-xl-12 col-sm-12">
                  <div class="widget-card widget-card-inverse">

                     <div class="widget-card-col col-12 col-lg-12" style="height: 100px;">
                        <div class="widget-card-cover" style="background-image: url(<?=base_url() ?>media/admin/img/dashboard-cover.jpg);">
                           <div class="cover-bg"></div>
                        </div>
                        <div class="widget-card-content widget-hero bottom">
                           <h1>Welcome back, <?php echo $user[0]->first_name; ?>!</h1>
                           <p class="m-b-0">I am glad to see you back online. Today is a great day!</p>
                        </div>
                     </div>
                  </div>
               </div>

               <?php
               if ($this->session->userdata('type') == 1) 
                  { ?>

               <div class="col-xl-3 col-sm-6">
                  <a href="<?=base_url('admin_con/orders/listing') ?>" class="widget-stats bg-gradient-blue text-white m-b-15">
                     <div class="widget-stats-info">
                        <div class="widget-stats-title">Total Orders</div>
                        <div class="widget-stats-value">
                           <?=@$total_orders ?>
                        </div>
                     </div>
                     <div class="widget-stats-icon">
                        <i class="fa fa-shopping-bag"></i>
                     </div>
                  </a>
               </div>

               
               <div class="col-xl-3 col-sm-6">
                  <a href="<?=base_url('admin_con/tbl_admin/listing') ?>" class="widget-stats widget-stats-inverse bg-gradient-pink m-b-15">
                     <div class="widget-stats-info">
                        <div class="widget-stats-title">Total Customers / Members</div>
                        <div class="widget-stats-value">
                           <?=@$total_user ?>
                        </div>
                     </div>
                     <div class="widget-stats-icon">
                        <i class="fa fa-user"></i>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-sm-6">
                  <a class="widget-stats widget-stats-inverse bg-gradient-orange m-b-15">
                     <div class="widget-stats-info">
                        <div class="widget-stats-title">Total Revenue</div>
                        <div class="widget-stats-value">
                           <?=currency_simble(@$total_revenue) ?>
                        </div>
                     </div>
                     <div class="widget-stats-icon">
                        <i class="fa fa-rupee-sign"></i>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-sm-6">
                  <a href="<?=base_url('admin_con/orders/listing') ?>" class="widget-stats widget-stats-inverse bg-gradient-purple m-b-15">
                     <div class="widget-stats-info">
                        <div class="widget-stats-title">Today Orders</div>
                        <div class="widget-stats-value">
                           <?=@$today_orders ?>
                        </div>
                     </div>
                     <div class="widget-stats-icon">
                        <i class="fa fa-shopping-cart"></i>
                     </div>
                  </a>
               </div>


               <div class="row justify-content-center">
                  <div class="col-xl-12 col-sm-12 mb-3">
                     <form method="get" class="row g-2 justify-content-center">
                        <div class="col-md-3">
                           <label>From Date</label>
                           <input type="date" name="from_date" class="form-control"
                              value="<?= isset($_GET['from_date']) ? $_GET['from_date'] : date('Y-m-01'); ?>">
                        </div>

                        <div class="col-md-3">
                           <label>To Date</label>
                           <input type="date" name="to_date" class="form-control"
                              value="<?= isset($_GET['to_date']) ? $_GET['to_date'] : date('Y-m-t'); ?>">
                        </div>

                        <div class="col-md-2 d-flex align-items-end">
                           <button type="submit" class="btn btn-primary w-100">Filter</button>
                        </div>
                     </form>
                  </div>

                  <div class="col-xl-6 col-sm-6">
                     <canvas id="revenueChart"></canvas>
                  </div>
                  <div class="col-xl-4 col-sm-4">
                     <canvas id="revenuePieChart"></canvas>
                  </div>
               </div>

               
            <?php } ?>



               

            </div>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>

       <?php $this->load->view('admin/include/theams') ?>
       <?php $this->load->view('admin/include/allscript') ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
const labels = <?= json_encode($dates) ?>;
const data = <?= json_encode($revenues) ?>;

/* ---------- BAR CHART ---------- */
new Chart(document.getElementById('revenueChart'), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Total Revenue (₹)',
            data: data,
            backgroundColor: '#4CAF50'
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

/* ---------- PIE CHART ---------- */
new Chart(document.getElementById('revenuePieChart'), {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            label: 'Revenue Share (₹)',
            data: data,
            backgroundColor: [
                '#4CAF50','#2196F3','#FFC107','#FF5722',
                '#9C27B0','#009688','#795548'
            ]
        }]
    },
    options: {
        responsive: true
    }
});
</script>



      
   </body>
</html>