<?php
$total_product = $this->db->where('order_id', $EDITDATA->id)->count_all_results('order_items');
?>

<!DOCTYPE html>
<html lang="en">
<title><?=$page_title ?></title>
   <?php $this->load->view('admin/include/allcss') ?>

<style>
   .border {
       border: 1px solid #05080a !important;
       padding: 16px !important;
    border-radius: 10px;
    width: 100%;
   }
</style>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         <?php $this->load->view('admin/include/topbar') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         <div id="content" class="app-content">
            <h1 class="page-header add-header"><?=$page_title ?> </h1>
            <div class="row gx-4">

                <div class="col-xl-8 mb-xl-0 mb-4">
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-none h6 m-0 d-flex align-items-center">
                            <i class="fa fa-shopping-bag fa-lg me-2 text-gray text-opacity-50"></i> &nbsp;
                            Products (<?=@$total_product ?>)
                        </div>

                        <div class="card-body p-3 text-dark fw-bold">

                            <?php
                            $total_amount = 0;
                            $order_items = $this->db->get_where('order_items',array('order_id'=>$EDITDATA->id))->result_object();
                            foreach($order_items as $key => $value)
                                {
                                    $total_amount += (float)$value->total_price;

                                 ?>

                            <div class="row align-items-center" style="    border: 1px solid;margin-bottom: 5px;border-radius: 5px;">
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="h-65px w-65px d-flex align-items-center justify-content-center position-relative">
                                        <img src="<?=base_url('media/uploads/product/'.product_mainimage($value->product_id)) ?>" class="mw-100 mh-100" height="150px"/>
                                        <span class="w-20px h-20px p-0 d-flex align-items-center justify-content-center badge bg-primary text-white position-absolute end-0 top-0 fw-bold fs-12px rounded-pill mt-n2 me-n2">1</span>
                                    </div>
                                    <div class="ps-3 flex-1">
                                        <div><a href="<?=base_url('admin_con/product/edit/'.$value->product_id) ?>" class="text-decoration-none text-dark"><?=@$value->product_name ?> </a></div>
                                    </div>
                                </div>
                                <div class="col-lg-2 m-0 ps-lg-3">
                                    <?=currency_simble($value->product_price) ?> x <?=$value->quantity ?>
                                </div>
                                <div class="col-lg-2 text-dark fw-bold m-0 text-end">
                                    <?=currency_simble($value->total_price) ?>
                                </div>
                            </div>
                        <?php } ?>
                            
                           
                        </div>

                    </div>
                    <div class="card border-0">
                        <div class="card-body">
                            <table class="table table-borderless table-sm fw-bold m-0">
                                <tbody>
                                    <!-- <tr>
                                        <td class="w-150px">Subtotal</td>
                                        <td><?=@$total_product ?> items</td>
                                        <td class="text-end">$3,496.00</td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <td>GST 5%</td>
                                        <td class="text-end">$174.80</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Fee</td>
                                        <td>promo code: <u class="text-success">FREESHIPPING</u> (<strike>$120.00</strike>)</td>
                                        <td class="text-end">$0.00</td>
                                    </tr> -->
                                    <tr style="text-align: center;">
                                        <td class="pb-2" colspan="2"><b>Total</b></td>
                                        <td></td>
                                        <td class="text-end pb-2 text-decoration-underline"><b><?=currency_simble($total_amount) ?></b></td>
                                    </tr>
                                                                       
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>

                <div class="col-xl-4">                    
                    <div class="card border-0 mb-4 p-2">
                        <div class="card-header bg-none h6 m-0 d-flex align-items-center">
                            Customer
                        </div>
                        <div class="card-body fw-bold">
                            <div class="d-flex align-items-center">
                                <a href="#" class="d-block"><img src="<?=base_url('media/uploads/'.userimage($EDITDATA->user_id)) ?>" width="45" class="rounded-pill" /></a>
                                <div class="flex-1 pl-3">
                                    <a class="d-block text-decoration-none"><?=username($EDITDATA->user_id) ?></a>
                                    <a href="mailto:<?=useremail($EDITDATA->user_id) ?>" ><?=useremail($EDITDATA->user_id) ?></a><br>
                                    <a href="tel:<?=usermobile($EDITDATA->user_id) ?>" ><?=usermobile($EDITDATA->user_id) ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>
      <?php $this->load->view('admin/include/theams') ?>
      <?php $this->load->view('admin/include/allscript') ?>



   </body>
</html>