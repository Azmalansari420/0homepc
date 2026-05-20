<?php 
include 'header.php'; 

// Fetch subcategories first
$subcategory = $this->db->get_where('sub_categories', [
    'cat_id' => $EDITDATA[0]->id, 
    'status' => 1
])->result_object();

// If subcategory is empty, fetch services
$service = [];
if (empty($subcategory)) 
{
    $service = $this->db->get_where('services', [
        'cat_id' => $EDITDATA[0]->id, 
        'status' => 1
    ])->result_object();
}
?>

 <div class="container-fluid py-5" id="our-tests">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px">
          <!-- <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"
          >
            our tests
          </h5> -->
          <h1 class="display-4"><?=$EDITDATA[0]->name ?></h1>
        </div>
        <div class="row">

          <?php
          if(!empty($subcategory))
            {

              foreach($subcategory as $subdata)
              {

             ?>
          <div class="col-lg-3 col-md-6 col-sm-12 mt-4 mt-lg-0">
            <a href="<?=base_url($subdata->slug) ?>">
              <article class="card">
                <img class="card__background" src="<?=base_url() ?>media/uploads/sub_categories/<?=$subdata->image ?>" alt="card-image"
                  width="1920" height="2193"
                />
                <div class="card__content | flow">
                  <div class="card__content--container | flow">
                    <h2 class="card__title"><?=$subdata->name ?></h2>
                    <p class="card__description">
                      <?=$subdata->description ?>
                    </p>
                  </div>
                  <button class="card__button">Read more</button>
                </div>
              </article>
            </a>
          </div>
        <?php } } else if(!empty($service)){

          foreach($service as $serdata)
          { 

          ?>
         <div class="col-lg-3 col-md-6">
            <div
              class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text- p-3 h-100"
            >
              <h4 class="mb-3 text-center"><?=$serdata->name ?></h4>
              <p>Includes following tests</p>
              <p class="m-0"><?=$serdata->small_content ?></p>
              <div class="service-box-footer">
                <span> <?=currency_simble($serdata->amount) ?></span>
                <a
                  href="<?=base_url($serdata->slug) ?>"
                  style="
                    padding: 10px 20px;
                    background-color: #c31807;
                    color: #fff;
                    border-radius: 5px;
                  "
                  >Book Now</a
                >
              </div>
            </div>
          </div>
        <?php } } ?>



        </div>

       

      </div>
    </div>

<?php include'footer.php' ?>