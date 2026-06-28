<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>VKN Group</title>

<!-- Stylesheets -->
<link href="<?=base_url() ?>css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url() ?>css/style.css" rel="stylesheet">
<link href="<?=base_url() ?>css/responsive.css" rel="stylesheet">
<link href="<?=base_url() ?>css/custom.css" rel="stylesheet">

<!-- Fav Icons -->
<link rel="shortcut icon" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting->logo ?>" type="image/x-icon">
<link rel="icon" href="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting->logo ?>" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<style>
    .news-block-one .image:before {
            background-color: transparent !important;
    }
</style>
<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <!-- <div class="preloader"></div>  -->

    <!-- main header -->
    <header class="main-header">

        <!-- Header upper -->
        <div class="header-upper style-two">
            <div class="container-fluid">                    
                
                <div class="upper-right">

                    <div class="main-logo">
                            <a class="navbar-brand" href="<?=base_url() ?>"><img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting->logo ?>" class="logo logo-image" alt=""></a>
                        </div>
                    
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse justify-content-center align-items-center w-100">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="<?=base_url() ?>">Home</a></li>
                                    <li class=""><a href="<?=base_url() ?>about">About Us</a></li>
                                    <li class=" dropdown"><a href="#">Service</a>
                                        <ul>
                                            <?php 
                                            $service = $this->db->get_where('category',array('status'=>1))->result_object();
                                            foreach($service as $data)
                                                { ?>
                                            <li><a href="<?=base_url($data->slug) ?>"><?=$data->name ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="<?=base_url() ?>gallery">Our Gallery</a></li>
                                    <li><a href="<?=base_url() ?>our-client">Our Clients</a></li>
                                    
                                    <li><a href="<?=base_url() ?>contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                        <a href="#" class="quick-btn" data-toggle="modal" data-target="#quickEnquiryModal">
    Quick Enquiry
</a>
                    <!-- <div class="social-links clearfix"> -->
                        <!-- <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-linkedin-in"></span></a>
                        <a href="#"><span class="fab fa-pinterest"></span></a>
                        <a href="#"><span class="fab fa-vimeo-v"></span></a> -->
                    <!-- </div> -->
                    
                </div>
                    
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="<?=base_url() ?>" class="img-responsive logo-image"><img src="<?=base_url() ?>media/uploads/site_setting/<?=$sitesetting->logo ?>" alt="" title="" style="width:150px"></a>
                    </div>
                    
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    
                                    <li class="current"><a href="">Home</a></li>
                                    <li class=""><a href="<?=base_url() ?>about">About Us</a></li>
                                    <li class=" dropdown"><a href="#">Service</a>
                                        <ul>
                                            <?php 
                                            $service = $this->db->get_where('category',array('status'=>1))->result_object();
                                            foreach($service as $data)
                                                { ?>
                                            <li><a href="<?=base_url($data->slug) ?>"><?=$data->name ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                   
                                    <li><a href="<?=base_url() ?>gallery">Our Gallery</a></li>
                                    <li><a href="<?=base_url() ?>our-client">Our Clients</a></li>
                                    
                                    <li><a href="<?=base_url() ?>contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
                    
                
            </div>
        </div>
        <!--End Sticky Header-->
    </header>