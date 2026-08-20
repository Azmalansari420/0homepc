<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $status_name ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    margin:0;
    background:linear-gradient(135deg,#f2f6ff,#dfe9ff);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    font-family:Arial,sans-serif;
}

.box{
    width:100%;
    max-width:450px;
    background:#fff;
    border-radius:15px;
    text-align:center;
    padding:40px 30px;
    box-shadow:0 10px 30px rgba(0,0,0,.15);
}

.icon{
    width:90px;
    height:90px;
    margin:auto;
    border-radius:50%;
    background:#28a745;
    color:#fff;
    font-size:55px;
    line-height:90px;
    margin-bottom:20px;
}

.title{
    font-size:30px;
    font-weight:bold;
    margin-bottom:10px;
}

.text{
    color:#666;
    margin-bottom:30px;
}

.btn-home{
    padding:12px 35px;
    border-radius:30px;
}

</style>

</head>
<body>

<div class="box">

<?php

$color='#28a745';
$icon='✓';

if($status_name=='Terminate'){
    $color='#dc3545';
    $icon='✕';
}

if($status_name=='Quota Full'){
    $color='#ffc107';
    $icon='!';
}

if($status_name=='Security Terminate'){
    $color='#fd7e14';
    $icon='⚠';
}

?>

<div class="icon" style="background:<?= $color ?>">
    <?= $icon ?>
</div>

<div class="title">
    <?= $status_name ?>
</div>

<div class="text">
    Your survey response has been recorded successfully.
</div>

<a href="<?= base_url() ?>" class="btn btn-primary btn-home">
    Go Home
</a>

</div>

</body>
</html>