<?php include('header.php'); ?>

    <!--Page title-->
    <section class="page-title" style="background-image:url(<?=base_url() ?>media/uploads/category/<?=$EDITDATA->banner ?>)">
        <div class="container">
            <div class="outer-box">
                <h1><?=$EDITDATA->name ?></h1>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><?=$EDITDATA->name ?></li>
                    </ul>
                </div>
            </div>            
        </div>
    </section>  

    <style>
        .technical-services-section{
    padding:90px 0;
    background:linear-gradient(180deg,#f8fbff 0%,#ffffff 100%);
}

.section-title h2{
    font-size:46px;
    font-weight:800;
    color:#0b2c53;
    margin-bottom:15px;
}

.section-title p{
    max-width:750px;
    margin:auto;
    color:#666;
    line-height:30px;
}

.service-card{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 35px rgba(0,0,0,.08);
    transition:.4s;
    height:100%;
}

.service-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 45px rgba(0,0,0,.15);
}

.service-card img{
    width:100%;
    height:250px;
    object-fit:cover;
    transition:.6s;
}

.service-card:hover img{
    transform:scale(1.08);
}

.service-card h4{
    padding:20px;
    margin:0;
    text-align:center;
    font-size:20px;
    font-weight:700;
    color:#0b2c53;
    line-height:30px;
}

/* Tablet */

@media(max-width:991px){

    .service-card img{
        height:220px;
    }

    .section-title h2{
        font-size:36px;
    }
}

/* Mobile */

@media(max-width:767px){

    .technical-services-section{
        padding:70px 0;
    }

    .section-title h2{
        font-size:30px;
    }

    .service-card img{
        height:220px;
    }

    .service-card h4{
        font-size:18px;
        padding:15px;
    }
}
    </style>

    <section class="technical-services-section py-5">
    <div class="container">

        <div class="section-title text-center mb-5">
            <h2><?=$EDITDATA->name?></h2>
            
        </div>

        <div class="row">

            <?php
            $subservice = $this->db->get_where('services',array('status'=>1,'cat_id'=>$EDITDATA->id))->result_object();
            foreach($subservice as $data) { ?>

            <div class="col-lg-4 col-md-6 mb-4">
                <a href="<?=base_url($data->slug) ?>" class="service-card">
                    <img src="<?=base_url() ?>media/uploads/services/<?=$data->image ?>" alt="Civil Work">
                    <h4><?=$data->name ?></h4>
                </a>
            </div>
        <?php } ?>
            

          

        </div>

    </div>
</section>

<?php include('footer.php'); ?>
  