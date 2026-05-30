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
            <form class="row" method="post" enctype="multipart/form-data" action="<?=base_url($formURL) ?>">

               <input type="hidden" name="id" value="<?=@$EDITDATA->id ?>">

               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">

                        <div class="col-12 form-group">
                            <label>Select Product</label>
                            <select class="selectpicker form-control" name="product_id[]" multiple id="product_select" data-live-search="true">
                                <?php
                                $product = $this->db->get_where('product',array('status'=>1))->result_object();
                                foreach($product as $data) { ?>
                                    <option value="<?=$data->id?>"><?=$data->name?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <!-- Selected Products Box -->
                        <div class="row mt-3" id="selected_products"></div>



                        
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">
                       
                        <div class="col-12 form-group">
                           <label>Total Amount </label>
                           <input type="text" class="form-control" name="total_amount" value="<?=@$EDITDATA->total_amount ?>" readonly id="total_amount">
                        </div>

                        <div class="col-12 form-group">
                           <label>Paid Amount </label>
                           <input type="text" class="form-control" name="paid_amount" value="<?=@$EDITDATA->paid_amount ?>" id="paid_amount">
                        </div>
                        <div class="col-12 form-group">
                           <label>Pending Amount </label>
                           <input type="text" class="form-control" name="pending_amount" value="<?=@$EDITDATA->pending_amount ?>"  id="pending_amount">
                        </div>


                        <div class="col-12 form-group ">
                           <label>Select Status</label>
                           <select class="selectpicker  form-control" required name="status" data-style="btn-default" data-live-search="true" >
                              <option value="0"  <?= (isset($EDITDATA->status) && $EDITDATA->status == '0') ? 'selected' : '' ?>>New</option>
                              <option value="1" <?= (isset($EDITDATA->status) && $EDITDATA->status == '1') ? 'selected' : '' ?>>Confirmed</option>
                              <!-- <option value="2" <?= (isset($EDITDATA->status) && $EDITDATA->status == '2') ? 'selected' : '' ?>>Shipped</option> -->
                              <!-- <option value="3" <?= (isset($EDITDATA->status) && $EDITDATA->status == '3') ? 'selected' : '' ?>>Delivered</option> -->
                              <option value="4" <?= (isset($EDITDATA->status) && $EDITDATA->status == '4') ? 'selected' : '' ?>>Cancelled</option>
                           </select>
                        </div>

                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple"><?=$page_title ?></button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
      </div>
      <?php $this->load->view('admin/include/theams') ?>
      <?php $this->load->view('admin/include/allscript') ?>

<?php if(!empty($order_items)){ ?>
<script>var existingProducts = <?=json_encode($order_items)?>;</script>
<?php } else { ?>
<script>var existingProducts = [];</script>
<?php } ?>

<script>

let isEditMode = false;

/* =========================
   PRODUCT BOX
========================= */
function renderProductBox(res, qty)
{
    let mainImage = "<?=base_url('media/uploads/product/')?>" + res.image;
    let multiImages = '';

    if(res.multiple_image_json){
        JSON.parse(res.multiple_image_json).forEach(img=>{
            multiImages += `<a href="<?=base_url('media/uploads/product/')?>${img}" target="_blank">
                <img src="<?=base_url('media/uploads/product/')?>${img}" width="80">
            </a>`;
        });
    }

    return `
    <div class="col-md-12 border mb-2 product-box" data-product="${res.id}">
        <input type="hidden" name="products[${res.id}][product_id]" value="${res.id}">
        <input type="hidden" name="products[${res.id}][price]" value="${res.price}">
        <input type="hidden" name="products[${res.id}][product_name]" value="${res.name}">

        <div class="d-flex">
            <img src="${mainImage}" width="120">
            <div class="ms-2">
                <strong>${res.name}</strong><br>
                ₹ ${res.price}
            </div>
        </div>

        <div class="mt-2">${multiImages}</div>

        <div class="mt-2">
            <label>Quantity</label>
            <input type="number" class="form-control qty" name="products[${res.id}][qty]" value="${qty}" min="1">
        </div>
    </div>`;
}

/* =========================
   SELECT CHANGE
========================= */
$('#product_select').on('changed.bs.select', function(){
    if(isEditMode) return; // 🔥 MAIN FIX

    let selected = $(this).val() || [];

    $('.product-box').each(function(){
        let pid = $(this).data('product');
        if(!selected.includes(pid.toString())){
            $(this).remove();
        }
    });

    selected.forEach(pid=>{
        if($(`[data-product="${pid}"]`).length === 0){
            $.post(
                "<?=base_url('admin_con/user_orders/get_product_detail')?>",
                {product_id: pid},
                function(res){
                    $('#selected_products').append(renderProductBox(res,1));
                    calculateTotalAmount();
                },
                'json'
            );
        }
    });
});


/* =========================
   EDIT LOAD
========================= */
$(document).ready(function(){
    if(existingProducts.length > 0){
        isEditMode = true; 

        let ids = [];

        existingProducts.forEach(item=>{
            if($(`[data-product="${item.product_id}"]`).length === 0){
                ids.push(item.product_id);

                $.post(
                    "<?=base_url('admin_con/user_orders/get_product_detail')?>",
                    {product_id:item.product_id},
                    function(res){
                        $('#selected_products').append(
                            renderProductBox(res,item.quantity)
                        );
                        calculateTotalAmount();
                    },
                    'json'
                );
            }
        });

        $('#product_select').selectpicker('val', ids);

        setTimeout(()=>{ isEditMode = false; },500); // 🔓 unlock
    }
});


/* =========================
   TOTAL
========================= */
function calculateTotalAmount(){
    let total = 0;
    $('.product-box').each(function(){
        let qty = parseFloat($(this).find('.qty').val()) || 0;
        let price = parseFloat($(this).find('input[name$="[price]"]').val()) || 0;
        total += qty * price;
    });
    $('input[name="total_amount"]').val(total);
}

$(document).on('input','.qty',calculateTotalAmount);

function updatePendingAmount() {
    let total   = parseFloat($('#total_amount').val()) || 0;
    let paid    = parseFloat($('#paid_amount').val()) || 0;

    let pending = total - paid;
    if (pending < 0) pending = 0;

    $('#pending_amount').val(pending);
}

$(document).on('input', '#paid_amount', updatePendingAmount);

// page load (EDIT MODE)
$(document).ready(function(){
    updatePendingAmount();
});
</script>



   </body>
</html>