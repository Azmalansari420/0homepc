<table class="table table-striped table-td-valign-middle table-bordered bg-white">
  <thead>
    <tr>
      <th width="1%"><input type="checkbox" id="select-all"></th>
      <th>Order Date/Time</th>
      <th>Customer Data</th>
      <th>Order ID</th>
      <th>Total Amount</th>
      <th>Total Iteam</th>
      <th>Order Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 1;
    foreach ($ALLDATA as $key => $data) { 
      $count = $this->db
        ->where('order_id', $data->id)
        ->count_all_results('order_items');

    ?>
    <tr>
      <td><?=$i++; ?>
         <input type="checkbox" name="multiple_delete[]" value="<?php echo $data->id; ?>" class="multiple_delete">
      </td>
      <td><?=format_datetime($data->addeddate) ?></td>
      <td>
        Name:- <?=username($data->user_id) ?><br>
        Email:- <A href="mailto:<?=useremail($data->user_id) ?>"><?=useremail($data->user_id) ?></A><br>
        Mobile:- <a href="tel:<?=usermobile($data->user_id) ?>"><?=usermobile($data->user_id) ?></a><br>
          
      </td>
      <td><?=$data->order_number ?></td>
      <td>
        Total Amt:- <?=currency_simble($data->total_amount) ?><br>
        <?php 
        if($data->status!=0)
          { ?>
        Paid Amt:- <?=currency_simble($data->paid_amount) ?><br>
        Pending Amt:- <?=currency_simble($data->pending_amount) ?><br>
      <?php } ?>
      </td>
      <td><?=$count ?></td>
      <td><?=order_status($data->status) ?></td>

      <td class="btn-col text-nowrap" width="1%">
        <a href="<?=base_url('admin_con/orders/invoice/'.$data->id) ?>" class="btn btn-dark btn-xs m-r-2" target="_blank">Invoice</a>
        <a href="<?php echo $view_url.$data->id; ?>" class="btn btn-info btn-xs m-r-2">View</a>
        <a href="<?php echo $edit_url.$data->id; ?>" class="btn btn-success btn-xs m-r-2">Update</a>
        <!-- <a href="#" class="btn btn-danger btn-xs text-white delete-btn-ajax" data-id="<?=$data->id ?>">Delete</a> -->
      </td>
    </tr>
    <?php } ?>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="5">
      Total Data: <?= $total_rows ?> | Total Pages: <?= $total_pages ?>
    </td>
    </tr>
  </tfoot>
</table>

<script>
  $('#select-all').on('click', function () {
    $('.multiple_delete').prop('checked', this.checked);
  });

  
    $('.delete-btn-ajax').on('click', function() {
      event.preventDefault();
      var id = $(this).data('id');
      Swal.fire({
         title: "Are you sure?",
         showDenyButton: true,
         showCancelButton: true,
         confirmButtonText: "Yes",
      }).then((result) => {
         if (result.isConfirmed) 
         {
            $.ajax({
               type: 'POST',
               url: '<?=($delete_url)?>',
               data: {id: id},
               success: function(response) {
               // console.log(response);
               location.reload();
             }
           });
         }
      });
   });
</script>