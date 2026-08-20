<!DOCTYPE html>
<html>
<head>

<title>Verification</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#f5f5f5;">

<div class="container">

<div class="row justify-content-center mt-5">

<div class="col-md-4">

<div class="card shadow">

<div class="card-body">

<h3 class="text-center mb-4">

Human Verification

</h3>

<?php if(isset($error)){ ?>

<div class="alert alert-danger">

<?= $error ?>

</div>

<?php } ?>

<form method="post">

<input type="hidden" name="pid" value="<?= $pid ?>">

<input type="hidden" name="uid" value="<?= $uid ?>">

<input type="hidden" name="st" value="<?= $st ?>">

<div class="mb-3">

<label>

<b><?= $a ?> + <?= $b ?> = ?</b>

</label>

<input
type="number"
name="answer"
class="form-control"
required>

</div>

<button class="btn btn-primary w-100">

Continue

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>