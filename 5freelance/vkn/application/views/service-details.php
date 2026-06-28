
<?php include('header.php'); ?>

    <!--Page title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1><?=$EDITDATA->name ?></h1>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><?=$EDITDATA->name ?></li>
                    </ul>
                </div>
            </div>            
        </div>
    </section>

    <!-- Sidebar page -->
    <div class="sidebar-page-container sp-one">
        <div class="container">
            <div class="row row-revers-lg">
                
                <!--Content Side / Blogs Classic-->
                <div class="content-side col-lg-8">
                    <div class="single-service-post">
                        <div class="inner-box">

                            <div class="top-content">

                                <div class="image">
                                     <img src="<?=base_url() ?>media/uploads/services/<?=$EDITDATA->image ?>" alt="Civil Work">
                                </div>

                                <h1>
                                    <i class="fas fa-bolt text-warning"></i>
                                    <?=$EDITDATA->name ?>
                                </h1>

                                <?=$EDITDATA->content ?>


                            </div>

                        </div>
                    </div>
    
                </div>
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4">
                    <aside class="sidebar right-sidebar">

                        <!-- Services Widget -->
<div class="sidebar-widget categories-widget-two">
    <div class="inner-box">

        <h4 class="mb-4">Technical Services</h4>

        <ul class="service-list">
             <?php
            $subservice = $this->db->get_where('services',array('status'=>1,'cat_id'=>$EDITDATA->cat_id))->result_object();
            foreach($subservice as $data) { ?>
            <li class="active">
                <a href="<?=base_url($data->slug) ?>"><?=$data->name ?></a>
            </li>
        <?php } ?>
            
        </ul>

    </div>
</div>

<!-- Quote Box -->

<div class="sidebar-widget quote-widget">
    <div class="quote-box">

        

        <a data-toggle="modal" data-target="#quickEnquiryModal" class="theme-btn btn-style-one w-100">
            Get a Free Quote
        </a>

    </div>
</div>

                        
                    </aside>
                </div>
                
            </div>
        </div>
        
    </div>

    

    

   
<?php include('footer.php'); ?>