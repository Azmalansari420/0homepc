<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Human Verification</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<style>

body{
    background:linear-gradient(135deg,#f5f7fa,#e4ecff);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial,sans-serif;
}

.verify-box{
    width:100%;
    max-width:420px;
    background:#fff;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,.12);
    overflow:hidden;
}

.verify-header{
    background:#0d6efd;
    color:#fff;
    text-align:center;
    padding:20px;
}

.verify-header h3{
    margin:0;
    font-size:24px;
    font-weight:600;
}

.verify-body{
    padding:30px;
}

.math-box{
    font-size:32px;
    font-weight:bold;
    text-align:center;
    background:#f8f9fa;
    border:2px dashed #0d6efd;
    border-radius:10px;
    padding:18px;
    margin-bottom:25px;
}

.form-control{
    height:50px;
    text-align:center;
    font-size:22px;
}

.btn-submit{
    width:100%;
    height:50px;
    font-size:18px;
    font-weight:600;
    border-radius:8px;
}

.note{
    margin-top:15px;
    text-align:center;
    color:#666;
    font-size:14px;
}

</style>

</head>
<body>

<div class="verify-box">

    <div class="verify-header">
        <h3>Human Verification</h3>
        <small>Please solve the math question</small>
    </div>

    <div class="verify-body">

        <?php if($this->session->flashdata('error')){ ?>
<div class="alert alert-danger">
    <?= $this->session->flashdata('error'); ?>
</div>
<?php } ?>

        <form method="post" action="<?= base_url('ending/verify') ?>">

            <input type="hidden" name="pid" value="<?= $pid ?>">
            <input type="hidden" name="uid" value="<?= $uid ?>">
            <input type="hidden" name="st" value="<?= $st ?>">

            <div class="math-box">
                <?= $a ?> + <?= $b ?> = ?
            </div>

            <div class="mb-3">
                <input
                    type="number"
                    name="answer"
                    class="form-control"
                    placeholder="Enter Answer"
                    required
                    autofocus>
            </div>

            <button class="btn btn-primary btn-submit">
                Verify & Continue
            </button>

        </form>

        <div class="note">
            This verification helps prevent automated submissions.
        </div>

    </div>

</div>

</body>
</html>