<?php
$sitesetting = $this->db->get_where('site_setting',array('id'=>1))->result_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Invoice</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.invoice-box {
    max-width: 900px;
    margin: auto;
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.invoice-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #eee;
    padding-bottom: 15px;
}

.invoice-header img {
    max-height: 100px;
}

.company-details {
    text-align: right;
}

.company-details h2 {
    margin: 0;
    font-size: 22px;
}

.invoice-title {
    text-align: center;
    margin: 20px 0;
}

.invoice-title h1 {
    margin: 0;
    color: #6a00ff;
}

.invoice-info {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.invoice-info div {
    width: 48%;
    margin-bottom: 10px;
}

.invoice-table {
    width: 100%;
    border-collapse: collapse;
}

.invoice-table th,
.invoice-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

.invoice-table th {
    background: #6a00ff;
    color: #fff;
}

.invoice-summary {
    margin-top: 20px;
    display: flex;
    justify-content: flex-end;
}

.summary-box {
    width: 300px;
}

.summary-box table {
    width: 100%;
}

.summary-box td {
    padding: 8px;
}

.summary-box tr:last-child td {
    font-weight: bold;
    font-size: 18px;
}

.footer-note {
    margin-top: 30px;
    text-align: center;
    font-size: 14px;
    color: #666;
}

@media(max-width: 600px) {
    .invoice-header,
    .invoice-info {
        flex-direction: column;
        text-align: center;
    }

    .company-details {
        text-align: center;
        margin-top: 10px;
    }

    .invoice-info div {
        width: 100%;
    }
}



.invoice-actions {
    text-align: center;
    margin-bottom: 20px;
}

.invoice-actions .btn {
    display: inline-block;
    padding: 10px 22px;
    margin: 5px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    border: none;
    text-decoration: none;
}

.btn-print {
    background: #17a2b8;
    color: #fff;
}

.btn-download {
    background: #6a00ff;
    color: #fff;
}

.btn-print:hover {
    background: #138496;
}

.btn-download:hover {
    background: #5200cc;
}

/* 🔥 Print ke time buttons hide */
@media print {
    .invoice-actions {
        display: none;
    }
    body {
        background: #fff;
        padding: 0;
    }
}

</style>
</head>

<body>

<div class="invoice-box">

    <!-- Header -->
    <div class="invoice-header">
        <img src="<?=base_url('media/uploads/site_setting/'.@$sitesetting[0]->logo) ?>" alt="Logo">
        <div class="company-details">
            <h2>Bruti Sewa Foundation</h2>
            <p>New Delhi, India</p>
            <p>support@brutisewafoundation.org</p>
        </div>
    </div>

    <!-- Title -->
    <div class="invoice-title">
        <h1>INVOICE</h1>
        <p>Order Invoice</p>
    </div>

    


    <!-- Info -->
    <div class="invoice-info">
        <div>
            <strong>Order No:</strong> BSF-2026-001<br>
            <strong>Order Date:</strong> <?=format_datetime($EDITDATA->addeddate) ?>
        </div>
        <div>
            <strong>Status:</strong> <?=invoiceorder_status($EDITDATA->status) ?><br>
        </div>
    </div>

    <!-- Table -->
    <table class="invoice-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Price (₹)</th>
                <th>Qty</th>
                <th>Total (₹)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total_amount = 0;
            $order_items = $this->db->get_where('order_items',array('order_id'=>$EDITDATA->id))->result_object();
            foreach($order_items as $key => $value)
                {
                    $total_amount += (float)$value->total_price;

                 ?>
            <tr>
                <td><?=$key+1 ?></td>
                <td><?=@$value->product_name ?></td>
                <td><?=currency_simble($value->product_price) ?></td>
                <td><?=$value->quantity ?></td>
                <td><?=currency_simble($value->total_price) ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Summary -->
    <div class="invoice-summary">
        <div class="summary-box">
            <table>
                <tr>
                    <td>Total Amount</td>
                    <td align="right"><?=currency_simble(@$EDITDATA->total_amount) ?></td>
                </tr>
                <tr>
                    <td>Paid Amount</td>
                    <td align="right"><?=currency_simble(@$EDITDATA->paid_amount) ?></td>
                </tr>
                <?php
                $pendingamt = $EDITDATA->total_amount-$EDITDATA->paid_amount;
                ?>
                <tr>
                    <td>Pending Amount</td>
                    <td align="right"><?=currency_simble(@$pendingamt) ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div style="text-align:center; margin-top:20px;">
        <p style="font-size:14px; font-weight:bold;">Scan for Order Details</p>
        <img src="<?= $qr_code ?>" alt="QR Code">
    </div>

    <!-- Footer -->
    <div class="footer-note">
        Thank you for supporting <strong>Bruti Sewa Foundation</strong> ❤️<br>
        This is a computer generated invoice.
    </div>

</div>

<div class="invoice-actions">
        <button onclick="window.print()" class="btn btn-print">🖨 Print</button>
        <a href="<?= base_url('admin_con/orders/download_invoice/'.$EDITDATA->id) ?>" 
           class="btn btn-download">⬇ Download PDF</a>
    </div>

</body>
</html>
