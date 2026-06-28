
<?php include('header.php'); ?>

    <!--Page title-->
    <section class="page-title" style="background-image:url(<?=base_url() ?>images/background.jpeg)">
        <div class="container">
            <div class="outer-box">
                <h1>Our Gallery</h1>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Our Gallery</li>
                    </ul>
                </div>
            </div>            
        </div>
    </section>

    <section class="portfolio-section sp-one grey-deep-bg">
        <!--MixitUp Galery-->
        <div class="masonry-gallery">

            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="float-lg-rightdd">
                            <!--Filter-->
                            <div class="filters mt-lg-3 clearfix">
                                
                                <ul class="filter-tabs filter-btns clearfix">
                                    <li class="active filter" data-role="button" data-filter=".all"> <span>All</span></li>
                                   <?php 
                                            $service = $this->db->get_where('category',array('status'=>1))->result_object();
                                            foreach($service as $data)
                                                { ?>
                                    <li class="filter" data-role="button" data-filter=".<?=$data->slug ?>"> <span><?=$data->name ?></span></li>
                                    <?php } ?>
                                    
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
            <div class="container-fluid">
                <div class="items-container row clearfix">
                    
                    <?php
                    $this->db->order_by('id desc');
                    $portfolio = $this->db->get_where('portfolio',array('status'=>1))->result_object();
                    foreach($portfolio as $data) {

                    $cate = $this->db->get_where('category',array('id'=>$data->cat_id))->row();
                      ?>
                    <div class="gallery-block-one all five-column <?=$cate->slug ?> col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="<?=base_url() ?>media/uploads/portfolio/<?=$data->image ?>" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="<?=base_url() ?>media/uploads/portfolio/<?=$data->image ?>" data-fancybox="gallery-images-1" data-caption="" class="link"><span class="icon fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
              
                    <!-- End block -->
                </div>
                
            </div>
        </div>
    </section>

    

    

   
<?php include('footer.php'); ?>