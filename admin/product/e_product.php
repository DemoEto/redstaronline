<?php
    include_once '../../dbconnect.php';
  
    $id = $_GET['id'];

    session_start();
    $sql = "SELECT * FROM product WHERE `product`.`p_id` = '$id'";
    $result = $conn-> query($sql);
    $row = $result-> fetch_assoc();
    
    if(isset($_POST['update'])){
        $brand = $_POST['p_brand'];
        $type = $_POST['p_type'];
        $name = $_POST['p_name'];
        $details = $_POST['p_details'];
        $price = $_POST['p_price'];
        $tprice = $_POST['p_tprice'];

        unlink($row['p_img']);
        if($brand == "MSI"){
            $dir = "img/brand/p_msi/";//ตำแหน่งรูปที่ไปเก็บในเครื่อง
            $fileImage = $dir . basename($_FILES["p_img"]["name"]);
        }
        else if ($brand == "ASUS"){
            $dir = "img/brand/p_asus/";//ตำแหน่งรูปที่ไปเก็บในเครื่อง
            $fileImage = $dir . basename($_FILES["p_img"]["name"]);
        }
        else if ($brand == "ACER"){
            $dir = "img/brand/p_acer/";//ตำแหน่งรูปที่ไปเก็บในเครื่อง
            $fileImage = $dir . basename($_FILES["p_img"]["name"]);
        }
        else if ($brand == "DELL"){
            $dir = "img/brand/p_dell/";//ตำแหน่งรูปที่ไปเก็บในเครื่อง
            $fileImage = $dir . basename($_FILES["p_img"]["name"]);
        }
        else if ($brand == "LENOVO"){
            $dir = "img/brand/p_lenovo/";//ตำแหน่งรูปที่ไปเก็บในเครื่อง
            $fileImage = $dir . basename($_FILES["p_img"]["name"]);
        }else{
            $dir = "img/brand/nobrand/";//ตำแหน่งรูปที่ไปเก็บในเครื่อง
            $fileImage = $dir . basename($_FILES["p_img"]["name"]);
        }
        //echo $fileImage;

        if(move_uploaded_file($_FILES["p_img"]["tmp_name"],$fileImage)){
            echo "ไฟล์ภาพฃื่อ ". basename($_FILES["p_img"]["name"]) . " อัพโหลดเสร์จแล้ว";
        } else {
            echo "อัพโหลดผิดพลาด";
        }

        $upd = mysqli_query($conn,"UPDATE `product` SET `p_brand` = '$brand', `p_type` = '$type', `p_name` = '$name', `p_details` = '$details', `p_price` = '$price', `p_tprice` = '$tprice', `p_img` = '$fileImage' WHERE `product`.`p_id` = '$id'");
        
        if($upd){
            header("location: s_product.php");
        }else{
            echo '<script type="text/javascript"> alert("อัพเดทข้อมูลผิดพลาด")</script>';
        }
        /* $user = $_GET['user'];
        $pass = $_GET['pass'];
        echo $user,$pass;
        $sql = "UPDATE member SET m_user = '$user', m_pass = '$pass' WHERE m_id = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: s_member.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } */
    }
    
    
?>
<?php if($_SESSION['m_email'] == 'admin@admin') {?>
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
        <form action="" method="post" enctype="multipart/form-data" class="justify-content-center" >
            <div class="card p-5">
                <h2 class="md-2 text-center">แก้ไขข้อมูลสินค้า</h2>
                <form action="" method="post">
                    <div class="row g-3">
                        <div class="col-4"><?php //echo $row["p_brand"]; ?>
                            <label class="form-label">แบรนสินค้า</label>
                            <select class="form-select" name="p_brand" aria-label="Default select example" required>
                                <?php
                                    $row["p_brand"];
                                    if ($row["p_brand"] == "MSI") {?>
                                                <option >-</option>
                                                <option selected>MSI</option>
                                                <option >ASUS</option>
                                                <option >ACER</option>
                                                <option >DELL</option>
                                                <option >LENOVO</option>
                                    <?php } else if($row["p_brand"] == "ASUS"){?>
                                                <option >-</option>
                                                <option >MSI</option>
                                                <option selected>ASUS</option>
                                                <option >ACER</option>
                                                <option >DELL</option>
                                                <option >LENOVO</option>
                                    <?php } else if($row["p_brand"] == "ACER"){?>
                                                <option >-</option>
                                                <option >MSI</option>
                                                <option >ASUS</option>
                                                <option selected>ACER</option>
                                                <option >DELL</option>
                                                <option >LENOVO</option>
                                    <?php } else if($row["p_brand"] == "DELL"){?>
                                                <option >-</option>
                                                <option >MSI</option>
                                                <option >ASUS</option>
                                                <option >ACER</option>
                                                <option selected>DELL</option>
                                                <option >LENOVO</option>
                                    <?php } else if($row["p_brand"] == "LENOVO"){?>
                                                <option >-</option>
                                                <option >MSI</option>
                                                <option >ASUS</option>
                                                <option >ACER</option>
                                                <option >DELL</option>
                                                <option selected>LENOVO</option>
                                    <?php } else{?>
                                                <option selected>-</option>
                                                <option >MSI</option>
                                                <option >ASUS</option>
                                                <option >ACER</option>
                                                <option >DELL</option>
                                                <option >LENOVO</option>
                                    <?php } ?>
                                

                            </select>
                        </div>
                        <div class="col-4">
                            <label class="form-label">ฃนิดสินค้า</label>
                            <select class="form-select" name="p_type" aria-label="Default select example" required>
                            <?php
                                $row["p_type"];
                                    if ($row["p_type"] == "คอมพิวเตอร์/โน๊ตบุ๊ค") {?>
                                                <option >-</option>
                                                <option selected>คอมพิวเตอร์/โน๊ตบุ๊ค</option>
                                                <option >ไอที</option>
                                                <option >ส่วนเสริม</option>
                                    <?php } 
                                    else if($row["p_type"] == "ไอที"){?>
                                                <option >-</option>
                                                <option >คอมพิวเตอร์/โน๊ตบุ๊ค</option>
                                                <option selected>ไอที</option>
                                                <option >ส่วนเสริม</option>
                                    <?php }
                                    else if($row["p_type"] == "ส่วนเสริม"){?>
                                                <option >-</option>
                                                <option >คอมพิวเตอร์/โน๊ตบุ๊ค</option>
                                                <option >ไอที</option>
                                                <option selected>ส่วนเสริม</option>
                                    <?php }
                                    else{?>
                                                <option selected>-</option>
                                                <option >คอมพิวเตอร์/โน๊ตบุ๊ค</option>
                                                <option >ไอที</option>
                                                <option >ส่วนเสริม</option>
                                    <?php }

                                ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">ชื่อสินค้า</label>
                            <input type="text" name="p_name" class="form-control" placeholder="กรอกชื่อ-รุ่นสินค้า" aria-label="Last name" value="<?php echo $row["p_name"]?>" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">รายละเอียดสินค้า</label>
                            <textarea name="p_details" class="form-control" rows="10" required><?php echo $row["p_details"]?> </textarea>
                        </div>
                        <div class="col-3">
                            <label class="form-label">ราคาสินค้า</label>
                            <input type="text" name="p_price" class="form-control" placeholder="กรอกราคาสินค้า" aria-label="Last name" value="<?php echo $row["p_price"]?>"  required>
                        </div>
                        <div class="col-3">
                            <label class="form-label">ราคาจริงสินค้า</label>
                            <input type="text" name="p_tprice" class="form-control" placeholder="(ไม่จำเป็น)" value="<?php echo $row["p_tprice"]?>" aria-label="Last name">
                        </div>
                        <div class="col-6">
                            <label class="form-label">เลือกรูปสินค้า</label>
                            <input class="form-control" name="p_img" type="file" id="formFileMultiple" value="<?php echo $row["p_img"]; ?>" multiple required>
                            <p><img src="<?php echo $row["p_img"]; ?>" height="150" width="150"></p>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="update" class="btn btn-success col-4">อัพเดทข้อมูล</button>
                            <a href="s_product.php" class="btn btn-secondary">ย้อนกลับ</a>
                        </div>
                    </div>
                </form>
            </div>
        </form>
    </div>
    <?php } else { header("Location: ../../index.php"); } ?>
</body>
</html>