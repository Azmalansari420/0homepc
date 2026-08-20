<!DOCTYPE html>
<html lang="en">
<title><?=$page_title ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
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
                        

                           <div class="col-md-6 form-group">
        <label>Project Name</label>
        <input type="text" class="form-control"
               name="project_name"
               value="<?=@$EDITDATA->project_name?>">
    </div>

   

    <div class="col-md-6 form-group" style="display: ndone;">
        <label>Source</label>
        <input type="text" class="form-control"
               name="source"
               value="<?=@$EDITDATA->source?>">
    </div>

    <div class="col-md-6 form-group"  style="display: none;">
        <label>Country</label>
        <input type="text" class="form-control"
               name="country"
               value="<?=@$EDITDATA->country?>">
    </div>

    <div class="col-md-4 form-group"  style="display: none;">
        <label>LOI (Minutes)</label>
        <input type="number" class="form-control"
               name="loi"
               value="<?=@$EDITDATA->loi?>">
    </div>

    <div class="col-md-4 form-group"  style="display: none;">
        <label>IR (%)</label>
        <input type="number" class="form-control"
               name="ir"
               value="<?=@$EDITDATA->ir?>">
    </div>

    <div class="col-md-4 form-group"  style="display: none;">
        <label>Payout</label>
        <input type="text" class="form-control"
               name="payout"
               value="<?=@$EDITDATA->payout?>">
    </div>

    <div class="col-md-12 form-group">
        <label>TSID</label>
        <textarea class="form-control"
                  name="tsid"><?=@$EDITDATA->tsid?></textarea>
    </div>


                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">
                       

                        <div class="col-12 form-group ">
                           <label>Select Status</label>
                           <select class="selectpicker  form-control" required name="status" data-style="btn-default" data-live-search="true" >
                              <option value="1"  <?= (isset($EDITDATA->status) && $EDITDATA->status == '1') ? 'selected' : '' ?>>Show</option>
                              <option value="0" <?= (isset($EDITDATA->status) && $EDITDATA->status == '0') ? 'selected' : '' ?>>Hide</option>
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

<script>
  CKEDITOR.replace( 'editor' );
</script>
   </body>
</html>