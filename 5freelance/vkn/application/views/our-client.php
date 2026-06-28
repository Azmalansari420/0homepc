<?php include('header.php'); ?>

    <!--Page title-->
    <section class="page-title" style="background-image:url(<?=base_url() ?>images/background.jpeg)">
        <div class="container">
            <div class="outer-box">
                <h1>Our Clients</h1>
                <div class="bread-crumb">
                    <ul class="clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Our Clients</li>
                    </ul>
                </div>
            </div>            
        </div>
    </section>  


    <style>
        .clients-section{
    padding:90px 0;
    background:#f8fbff;
}

.client-box{
    background:#fff;
    border-radius:15px;
    padding:25px 15px;
    text-align:center;
    height:100%;
    border:1px solid #eef2f7;
    transition:.3s ease;
    box-shadow:0 5px 20px rgba(0,0,0,.05);
}

.client-box:hover{
    transform:translateY(-5px);
    box-shadow:0 15px 35px rgba(0,0,0,.10);
}

.client-box img{
    width:100%;
    max-width:140px;
    height:80px;
    object-fit:contain;
    margin:0 auto 15px;
    display:block;
    filter:grayscale(100%);
    transition:.3s;
}

.client-box:hover img{
    filter:grayscale(0%);
}

.client-box h6{
    margin:0;
    font-size:15px;
    font-weight:600;
    color:#0b2c53;
}

/* Mobile */

@media(max-width:767px){

    .clients-section{
        padding:70px 0;
    }

    .client-box{
        padding:20px 10px;
    }

    .client-box img{
        max-width:100px;
        height:60px;
    }

    .client-box h6{
        font-size:13px;
    }
}
    </style>

   

   <section class="clients-section py-5">
    <div class="container">

        <div class="section-title text-center mb-5">
            <h2>Our Clients</h2>
            <p>
                Trusted by leading organizations across Dubai for Technical, Security and Cleaning Services.
            </p>
        </div>

        <div class="row">

            <?php
                    $this->db->order_by('id desc');
                    $partner = $this->db->get_where('partner',array('status'=>1))->result_object();
                    foreach($partner as $data)
                     { ?>

            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="client-box">
                    <img src="<?=base_url() ?>media/uploads/partner/<?=$data->image ?>" alt="Client 1">
                    <h6><?=$data->name ?></h6>
                </div>
            </div>

           <?php } ?>

        </div>

    </div>
</section>

<?php include('footer.php'); ?>
  