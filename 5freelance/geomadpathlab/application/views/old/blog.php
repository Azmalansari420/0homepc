<?php include'header.php' ?>

<!-- Blog Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <h5
            class="d-inline-block text-primary text-uppercase border-bottom border-5"
          >
            Blog Post
          </h5>
          <h1 class="display-4">Our Latest Blog Posts</h1>
        </div>
        <div class="row g-5">
          <?php
          $service = $this->db->get_where('blog', [
              'status' => 1
          ])->result_object();
          foreach($service as $data)
            { ?>
          <div class="col-xl-4 col-lg-6">
            <div class="bg-light rounded overflow-hidden">
              <img class="img-fluid w-100" src="<?=base_url() ?>media/uploads/blog/<?=$data->image ?>" alt="" />
              <div class="p-4">
                <a class="h3 d-block mb-3" href="<?=base_url($data->slug) ?>"
                  ><?=$data->name ?></a
                >
              </div>
              <div class="text-center border-top p-4">
                <div><a href="<?=base_url($data->slug) ?>">Read More</a></div>
              </div>
            </div>
          </div>

        <?php } ?>
        </div>
      </div>
    </div>
    <!-- Blog End -->

<?php include'footer.php' ?>