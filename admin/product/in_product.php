<?php
    include_once '../../dbconnect.php';
    session_start();
    if($_SESSION['m_email'] == 'admin@admin') {?>
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
    <link rel="shortcut icon" href="../../img/redstar1.jpg">
    <title>admin</title>
</head>
<body>
    <div class="container mt-5 fontstyle" style="width: 50%;">
        <form action="u_product.php" method="post" enctype="multipart/form-data" class="justify-content-center" >
            <div class="card p-5">
                <h2 class="md-2 text-center">เพิ่มข้อมูลสินค้า</h2>

                    <div class="row g-3">
                        <div class="col-4">
                            <label class="form-label">แบรนสินค้า</label>
                            <select class="form-select" name="p_brand" required>
                                <option selected>-</option>
                                <option >MSI</option>
                                <option >ASUS</option>
                                <option >ACER</option>
                                <option >DELL</option>
                                <option >LENOVO</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="form-label">ฃนิดสินค้า</label>
                            <select class="form-select" name="p_type" aria-label="Default select example" required>
                                <option selected>-</option>
                                <option >คอมพิวเตอร์/โน๊ตบุ๊ค</option>
                                <option >ไอที</option>
                                <option >ส่วนเสริม</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">ฃื่อสินค้า</label>
                            <input type="text" name="p_name" class="form-control" placeholder="กรอกชื่อ-รุ่นสินค้า" aria-label="Last name" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">รายละเอียดสินค้า</label>
                            <textarea name="p_details" class="form-control" rows="10" required></textarea>
                        </div>
                        <div class="col-3">
                            <label class="form-label">ราคาขายสินค้า</label>
                            <input type="text" name="p_price" class="form-control" placeholder="กรอกราคาขาย" aria-label="Last name" required>
                        </div>
                        <div class="col-3">
                            <label class="form-label">ราคาจริงสินค้า</label>
                            <input type="text" name="p_tprice" class="form-control" placeholder="(ไม่จำเป็น)" aria-label="Last name">
                        </div>
                        <div class="col-6">
                            <label class="form-label">เลือกรูปสินค้า</label>
                            <input class="form-control" name="p_img" type="file" multiple required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success col-4">เพิ่มข้อมูล</button>
                            <a href="s_product.php" class="btn btn-secondary">ย้อนกลับ</a>
                        </div>
                    </div>
                    
            </div>
        </form>
    </div>
    <?php } else { header("Location: ../../index.php"); } ?>
</body>
</html>