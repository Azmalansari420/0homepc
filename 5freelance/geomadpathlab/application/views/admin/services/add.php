<!DOCTYPE html>
<html lang="en">
<title>Add <?=$page_title ?></title>
   <?php $this->load->view('admin/include/allcss') ?>
   <body>
      <div id="app" class="app app-header-fixed app-sidebar-fixed">
         <?php $this->load->view('admin/include/topbar') ?>
         <?php $this->load->view('admin/include/sidebar') ?>
         <div id="content" class="app-content">
            <h1 class="page-header add-header">Add <?=$page_title ?> </h1>
            <form class="row" method="post" enctype="multipart/form-data" action="#">
               <div class="col-lg-8">
                  <div class="card m-b-15">
                     <div class="row card-body">

                        <div class="col-6 form-group ">
                           <label>Select Category</label>
                           <select class=" form-control" required name="cat_id">
                              <?php
                              $catego = $this->db->get_where('categories',array('status'=>1))->result_object();
                              foreach($catego as $data)
                                 { ?>
                              <option value="<?=$data->id ?>"><?=$data->name ?></option>
                           <?php } ?>
                           </select>
                        </div>

                        <div class="col-6 form-group ">
                           <label>Select Sub Category</label>
                           <select class=" form-control" name="sub_cat_id">
                              <option selected>Select Sub CAtegory</option>
                              <?php
                              $catego = $this->db->get_where('sub_categories',array('status'=>1))->result_object();
                              foreach($catego as $data)
                                 { ?>
                              <option value="<?=$data->id ?>"><?=$data->name ?></option>
                           <?php } ?>
                           </select>
                        </div>

                        <div class="col-6 form-group">
                           <label>Name </label>
                           <input type="text" class="form-control" name="name" />
                        </div>

                        <div class="col-6 form-group">
                           <label>Amount </label>
                           <input type="text" class="form-control" name="amount" />
                        </div>


                        <div class="col-12 form-group">
                           <label>Small  Content </label>
                           <textarea name="small_content" class="form-control"></textarea>
                        </div>

                        <div class="col-12 form-group">
                           <label>Top Content </label>
                           <textarea name="content" class="summernote form-control"></textarea>
                        </div>


                        <div class="col-12 form-group">
                           <label>Test List </label>
                           <textarea name="testlist" class="summernote form-control"></textarea>
                        </div>

                        <div class="col-12 form-group">
                           <label>Test Details </label>
                           <textarea name="test_details" class="summernote form-control"></textarea>
                        </div>

                        
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card m-b-15">
                     <div class="row card-body">
                        <div class="col-12 form-group">
                           <label>Click to Upload Image</label>
                           <input type="file" id="image-input" class="form-control" name="image">
                           <img id="image-preview" src="" alt="Image Preview" width="100px" style="display:none;">
                        </div>
                        <div class="col-12 form-group m-b-0">
                           <label>Select Status</label>
                           <select class=" form-control" required name="status">
                              <option value="1" selected>Show</option>
                              <option value="0">Hide</option>
                           </select>
                        </div>
                        <div class="col-12 form-group mt-4">
                           <button type="submit" name="submit" class="btn btn-purple">Add <?=$page_title ?></button>
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