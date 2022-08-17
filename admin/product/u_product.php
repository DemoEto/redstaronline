<?php
    include_once '../../dbconnect.php';
    //insert img
    session_start();
    if($_SESSION['m_email'] == 'admin@admin') {
        $brand = $_POST['p_brand'];
        $type = $_POST['p_type'];
        $name = $_POST['p_name'];
        $details = $_POST['p_details'];
        $price = $_POST['p_price'];
        $tprice = $_POST['p_tprice'];
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
        
        $sql = "INSERT INTO product (p_id, p_brand, p_type, p_name, p_details, p_price, p_tprice, p_img) 
        VALUES (NULL, '$brand', '$type', '$name', '$details', '$price', '$tprice', '$fileImage')";
            
        //echo "$sql";
        if ($conn->query($sql) == TRUE) {
            echo "New record created successfully";
            header("Location: s_product.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
} else { header("Location: ../../index.php"); } ?>