<?php
    include_once '../dbconnect.php';
    session_start();
    if($_SESSION['m_email'] == 'admin@admin') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <style>
        .fontstyle{
            font-family: 'Kanit', sans-serif;
        }
    </style>
    <!-- icons -->
    <link rel="shortcut icon" href="../img/redstar1.jpg">
    <title>admin</title>
</head>
<body>
    <div class="container mt-5 fontstyle">
        <form action="" method="post" class="d-flex justify-content-center">
            <div class="d-block card p-5">
                <h2 class="md-2 text-center">จัดการข้อมูล</h2>
                <a href="member/s_member.php" class="btn btn-info mb-1">จัดการข้อมูลสมาชิก</a><br>
                <a href="product/s_product.php" class="btn btn-info mb-1">จัดการขอมูลสินค้า</a><br>
                <a href="money/s_payment.php" class="btn btn-info mb-1">จัดการข้อมูลชำระเงิน</a><br>
                <a href="../index.php" class="btn btn-dark mb-1">กลับหน้าหลัก</a>
            </div>
        </form>
    </div>
    <?php } else { header("Location: ../index.php"); } ?>
</body>
</html>