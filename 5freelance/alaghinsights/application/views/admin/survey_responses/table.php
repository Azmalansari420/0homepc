<table class="table table-striped table-td-valign-middle table-bordered bg-white">
  <thead>
    <tr>
      <th width="1%"><input type="checkbox" id="select-all"></th>
      <th>Created </th>
      <th>Project </th>
      <th>UID</th>
      <th>Status</th>
      <th>IP</th>
      <th>URL</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 1;
    foreach ($ALLDATA as $key => $data) { 
    ?>
    <tr>
      <td><?=$i++; ?>
         <input type="checkbox" name="multiple_delete[]" value="<?php echo $data->id; ?>" class="multiple_delete">
      </td>
      
      <td><?=format_datetime($data->created_at) ?></td>
      <td><?=projectname($data->project_id) ?></td>
      <td><?=$data->uid ?></td>
      <td><?=$data->status_name ?></td>
      <td><?=$data->ip ?></td>
      <td><?=$data->url ?></td>
     
      <td class="btn-col text-nowrap" width="1%">
        <!-- <a href="<?php echo $view_url.$data->id; ?>" class="btn btn-info btn-xs m-r-2">View</a> -->
        <!-- <a href="<?php echo $edit_url.$data->id; ?>" class="btn btn-success btn-xs m-r-2">Update</a> -->
        <a href="#" class="btn btn-danger btn-xs text-white delete-btn-ajax" data-id="<?=$data->id ?>">Delete</a>
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