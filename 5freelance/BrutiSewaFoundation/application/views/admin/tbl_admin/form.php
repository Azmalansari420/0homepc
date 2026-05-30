<!DOCTYPE html>
<html lang="en">
<title> <?=$page_title ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         <?php $this->load->view('admin/include/topbar') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         <div id="content" class="app-content">
            <h1 class="page-header add-header"> <?=$page_title ?> </h1>
            <form class="row" method="post" enctype="multipart/form-data" action="<?=base_url($formURL) ?>">

               <input type="hidden" name="id" value="<?=@$EDITDATA->id ?>">
               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-4 form-group d-none">
                           <label>Select Role</label>
                           <select class=" form-control" required name="role">
                              <?php
                                 $role = $this->crud->selectDataByMultipleWhere('role',array('status'=>1,));
                                 foreach($role as $data)
                                    { ?>
                                 <option <?= (isset($EDITDATA->role) && $EDITDATA->role == $data->id) ? 'selected' : '' ?> value="<?=$data->id ?>"><?=$data->name ?></option>
                              <?php } ?>
                           </select>
                        </div>

                        <div class="col-6 form-group">
                           <label>Member ID</label>
                           <input type="text" class="form-control" name="username" required  value="<?= !empty(@$EDITDATA->username) ? $EDITDATA->username : generate_memberid(); ?>">
                        </div>
                        <div class="col-6 form-group">
                           <label>Password</label>
                           <input type="text" class="form-control" name="password" required  value="<?=@$EDITDATA->password ?>"/>
                        </div>

                        <div class="col-6 form-group">
                           <label>First Name</label>
                           <input type="text" class="form-control" name="first_name"  value="<?=@$EDITDATA->first_name ?>"/>
                        </div>

                        <div class="col-6 form-group">
                           <label>Last Name</label>
                           <input type="text" class="form-control" name="last_name"  value="<?=@$EDITDATA->last_name ?>"/>
                        </div>

                        <div class="col-6 form-group">
                           <label>Email</label>
                           <input type="text" class="form-control" name="email"  value="<?=@$EDITDATA->email ?>"/>
                        </div>

                        <div class="col-6 form-group">
                           <label>Mobile</label>
                           <input type="text" class="form-control" name="mobile"  value="<?=@$EDITDATA->mobile ?>"/>
                        </div>

                        <div class="col-12 form-group" >
                           <label>Address </label>
                           <textarea name="address" class="form-control"><?=@$EDITDATA->address ?></textarea>
                        </div>

                        
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">

                        <div class="col-12 form-group ">
                           <label>Assigned Selling Mode</label>
                           <select class="selectpicker  form-control" required name="selling_mode" data-style="btn-default" data-live-search="true" >
                              <option value="Rath"  <?= (isset($EDITDATA->selling_mode) && $EDITDATA->selling_mode == 'Rath') ? 'selected' : '' ?>>Rath</option>
                              <option value="Stall" <?= (isset($EDITDATA->selling_mode) && $EDITDATA->selling_mode == 'Stall') ? 'selected' : '' ?>>Stall</option>
                              <option value="Store" <?= (isset($EDITDATA->selling_mode) && $EDITDATA->selling_mode == 'Store') ? 'selected' : '' ?>>Store</option>
                           </select>
                        </div>
                        
                        <div class="col-12 form-group ">
                           <label>Select Status</label>
                           <select class="selectpicker  form-control" required name="status" data-style="btn-default" data-live-search="true" >
                              <option value="1"  <?= (isset($EDITDATA->status) && $EDITDATA->status == '1') ? 'selected' : '' ?>>Active</option>
                              <option value="0" <?= (isset($EDITDATA->status) && $EDITDATA->status == '0') ? 'selected' : '' ?>>Hide</option>
                           </select>
                        </div>
                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple"> <?=$page_title ?></button>
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
   </body>
</html>