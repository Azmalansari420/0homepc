<table class="table table-striped table-td-valign-middle table-bordered bg-white">
  <thead>
    <tr>
      <th width="1%"><input type="checkbox" id="select-all"></th>
      <th>Project</th>
      <th>Code</th>
      <th>URLs</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 1;
    foreach ($ALLDATA as $key => $data) { 

      $base = base_url();

      $entry_url = $base.'survey?tsid='.$data->tsid.'&source='.$data->source.'&PID=XXXXX';

      $complete_url = $base.'ending?pid='.$data->id.'&uid=XXXXX&st=1';

      $terminate_url = $base.'ending?pid='.$data->id.'&uid=XXXXX&st=2';

      $quota_url = $base.'ending?pid='.$data->id.'&uid=XXXXX&st=3';

      $security_url = $base.'ending?pid='.$data->id.'&uid=XXXXX&st=4';

    ?>
    <tr>
      <td><?=$i++; ?>
         <input type="checkbox" name="multiple_delete[]" value="<?php echo $data->id; ?>" class="multiple_delete">
      </td>
      
      <td><?=$data->project_name ?></td>
      <td><?=$data->project_code ?></td>
      <td style="min-width:600px;">

    <div class="mb-2">
        <strong class="text-primary">Survey URL</strong>
        <div class="input-group input-group-sm">
            <input type="text" class="form-control" id="entry<?=$data->id?>" value="<?=$entry_url?>" readonly>
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" onclick="copyUrl('entry<?=$data->id?>')">
                    Copy
                </button>
            </div>
        </div>
    </div>

    <div class="mb-2">
        <strong class="text-success">Complete</strong>
        <div class="input-group input-group-sm">
            <input type="text" class="form-control" id="complete<?=$data->id?>" value="<?=$complete_url?>" readonly>
            <div class="input-group-append">
                <button class="btn btn-success" type="button" onclick="copyUrl('complete<?=$data->id?>')">
                    Copy
                </button>
            </div>
        </div>
    </div>

    <div class="mb-2">
        <strong class="text-danger">Terminate</strong>
        <div class="input-group input-group-sm">
            <input type="text" class="form-control" id="terminate<?=$data->id?>" value="<?=$terminate_url?>" readonly>
            <div class="input-group-append">
                <button class="btn btn-danger" type="button" onclick="copyUrl('terminate<?=$data->id?>')">
                    Copy
                </button>
            </div>
        </div>
    </div>

    <div class="mb-2">
        <strong class="text-warning">Quota Full</strong>
        <div class="input-group input-group-sm">
            <input type="text" class="form-control" id="quota<?=$data->id?>" value="<?=$quota_url?>" readonly>
            <div class="input-group-append">
                <button class="btn btn-warning" type="button" onclick="copyUrl('quota<?=$data->id?>')">
                    Copy
                </button>
            </div>
        </div>
    </div>

    <div>
        <strong class="text-dark">Security Terminate</strong>
        <div class="input-group input-group-sm">
            <input type="text" class="form-control" id="security<?=$data->id?>" value="<?=$security_url?>" readonly>
            <div class="input-group-append">
                <button class="btn btn-dark" type="button" onclick="copyUrl('security<?=$data->id?>')">
                    Copy
                </button>
            </div>
        </div>
    </div>

</td>
      <td>
        <div class="switcher switcher-success">
         <span id="statusbyid<?=$data->id ?>"><?php echo status($data->status); ?> </span>
          <input type="checkbox" name="customSwitch-<?=$data->id ?>" id="customSwitch-<?=$data->id ?>" <?php if($data->status==1)echo'checked'; ?> onclick="click_here(<?=$data->id ?>)">
          <label for="customSwitch-<?=$data->id ?>"></label>
        </div>
      </td>
      <td class="btn-col text-nowrap" width="1%">
        <!-- <a href="<?php echo $view_url.$data->id; ?>" class="btn btn-info btn-xs m-r-2">View</a> -->
        <a href="<?php echo $edit_url.$data->id; ?>" class="btn btn-success btn-xs m-r-2">Update</a>
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