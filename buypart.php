<?php
    include_once 'dbconnect.php';
    $p_id = $_GET['p_id'];

    $sql = "SELECT * FROM product WHERE p_id = $p_id";
    $result = $conn-> query($sql);
    $row = $result-> fetch_assoc();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/uili.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> 
    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <style>
        .fontstyle{
            font-family: 'Kanit', sans-serif;
        }
        .small-img-group{
            display: flex;
            justify-content: space-between;
        }
        .small-img-col{
            flex-basis: 24%;
            cursor: pointer;
        }
        .dbproduct input{
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }
        .dbproduct input:focus{
            outline:none;
        }
    </style>

    <!-- icons page -->
    <link rel="shortcut icon" href="img/redstar1.jpg">
    <title>RedStar Online ตัวแทนจำหน่าย Gaming laptop MSI ROG Alienware Predator</title>
    
</head>
<body>
    <!-- head -->
    <!-- navbar1 -->
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid" >
                <a class="navbar-brand" href="index.php"><img src="img/redstar-h180a.png" height="50px" alt="" class="me-2"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <form action="#" class="d-flex navbar-brand" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </li>
                    </ul>
                    <?php
                        if(isset($_SESSION['m_email'])){
                            echo "<a href='Logout.php' class='btn btn-outline-danger'><i class='bi bi-person-circle'></i><span> ". $_SESSION['m_email']. "</span></a>";
                        }else{
                            echo "<a href='Login.php' class='btn btn-outline-primary me-2'><i class='bi bi-person-circle'> </i>เข้าสู่ระบบ</a>";
                        }
                    ?>
                </div>
            </div>
        </nav>
        <!-- navbar2 -->
        <div class="nav2 " style="background-color: #fff;">
            <div class="container-fluid">
                <ul class="nav justify-content-center">
                    <li class="navcontainer">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house ms-3 mb-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg><br>
                            หน้าหลัก
                        </a>
                    </li>
                    <li class="navcontainer">
                        <a class="nav-link" href="computer.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-laptop ms-4 mb-2" viewBox="0 0 16 16">
                                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                            </svg><br>
                            คอมพิวเตอร์
                        </a>
                    </li>
                    <li class="navcontainer">
                        <a class="nav-link" href="it.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-keyboard ms-4 mb-2" viewBox="0 0 16 16">
                                <path d="M14 5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h12zM2 4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H2z"/>
                                <path d="M13 10.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm0-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h
                                -.5a.25.25 0 0 1-.25-.25v-.5zm-5 0A.25.25 0 0 1 8.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 8 8.75v-.5zm2 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25v.5a.25.25
                                0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-.5zm1 2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-5-2A.25.25 0 0 1 6.25 8h.5a.25.25 0 0 1
                                .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 6 8.75v-.5zm-2 0A.25.25 0 0 1 4.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 4 8.75v-.5zm-2 0A.25.25 0 0 1 2.25
                                8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 8.75v-.5zm11-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-2
                                    0a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-2 0A.25.25 0 0 1 9.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25
                                    0 0 1 9 6.75v-.5zm-2 0A.25.25 0 0 1 7.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 7 6.75v-.5zm-2 0A.25.25 0 0 1 5.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0
                                    1-.25.25h-.5A.25.25 0 0 1 5 6.75v-.5zm-3 0A.25.25 0 0 1 2.25 6h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5A.25.25 0 0 1 2 6.75v-.5zm0 4a.25.25 0 0 1 .25-.25h.5a.25.25 0 0
                                    1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm2 0a.25.25 0 0 1 .25-.25h5.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-5.5a.25.25 0 0 1-.25-.25v-.5z"/>
                            </svg><br>
                            อุปกรณ์ไอที
                        </a>
                    </li>
                    <li class="navcontainer">
                        <a class="nav-link" href="acess.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag ms-4 mb-2" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg><br>
                            อุปกรณ์เสริม
                        </a>
                    </li>
                    <li class="navcontainer">
                        <a class="nav-link" href="contect.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-headset ms-1 mb-2" viewBox="0 0 16 16">
                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5
                                1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                            </svg><br>
                            ติดต่อ
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- body -->
    <section class="container dbproduct fontstyle">
        <div class="mt-5">
            <div class="row ps-5 pe-5">
                <div class="col-lg-5 col-md-12 col-12">
                    <img class="img-fluid w-100 pb-1" src="admin/product/<?php echo $row['p_img']; ?>" id="MainImg" alt="">
                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="admin/product/img/test/1.jpg" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="admin/product/img/test/2.jpg" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="admin/product/img/test/3.jpg" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="admin/product/img/test/4.jpg" width="100%" class="small-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <h6>Home / <?php echo $row['p_type']?><?php echo " / ".$row['p_brand']?></h6>
                    <h3 class="py-3"><?php echo $row['p_name'] ?></h3>
                    <h5><s style="color:gray;"><?php echo $row['p_tprice'] ?></s></h5>
                    <h2><?php echo $row['p_price'] ?></h2>
                    <input type="number" value="1">
                    <a href="payment.php?p_id=<?php echo $row['p_id'] ?>" class="btn btn-outline-primary">ซื้อ</a>
                    <h4 class="mt-4 mb-3">รายละเอียด</h4>
                    <span>
                        💥 สินค้ามีจำนวนจำกัด<br>
                        💥 ส่งฟรี ทุกออเดอร์<br>
                        **สินค้าทุกตัวของแท้มือ1ไม่แกะกล่อง ประกันศูนย์<br>
                        .<br>
                        ✅สอบถามรายละเอียดหรือสั่งซื้อสินค้าได้ที่<br>
                        👉 M.me/redstaronline<br>
                        หรือ @Line : @RedStarOnline<br>
                        .<br>
                    </span>
                </div>
            </div>
            <div class="row p-5 mt-4">
                <div class="col-md-12 col-12">
                    <h2>รายละเอียดสินค้า</h2>
                    <!-- p_details -->
                    <pre class="bg-color-info">
<?php echo $row['p_details']; ?>
                    </pre>
                    <span>
                        ------------------------------------------------<br>
                        <br>
                        การจัดส่งสินค้า :<br>
                        <br>
                        - จัดส่งถึงบ้าน โดย Kerry, J&T, Flash โดยทั่วไปจะใช้เวลาจัดส่ง 1-3 วันทำการ (ไม่นับวันหยุดราชการ)<br>
                        <br>
                        - หากเลือกไปรับสินค้าเอง สามารถมารับได้ที่หน้าร้าน RedStarOnline จ.เชียงใหม่<br>
                        <br>
                        หมายเหตุ :<br>
                        <br>
                        - สามารถออกใบกำกับภาษีได้<br>
                        <br>
                        ------------------------------------------------<br>
                        <br>
                        ติดต่อเราได้ที่ :<br>
                        <br>
                        334 ถนน มณีนพรัตน์ ตำบล ศรีภูมิ อำเภอเมืองเชียงใหม่ เชียงใหม่ 50200 โทรศัพท์: 053 287079<br>
                        <br>
                        จังหวัดเชียงใหม่<br>
                        <br>
                        อำเภอเมืองเชียงใหม่<br>
                        <br>
                        50200<br>
                        <br>
                        .<br>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <center><hr width="80%" height="4px" style="color: red;"></center>
    <div class="container-fluid mt-4 " style="padding-left: 10%; padding-bottom: 50px;">
        <p><b>Payment Method</b></p>
        <img src="img/bank.png" alt="" class="mb-4"> <img src="img/card.png" alt="" class="mb-4"><br>
        <p><b>Transportation</b></p>
        <img src="img/R.png" alt="" width="100px" class="me-3">
        <img src="img/flash.png" alt="" width="100px" style="background-color: yellow; padding:4px;" class="me-3">
        <img src="img/j&t.png" alt="" width="100px"">
    </div>
    <!-- javascript -->
    <script>
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img');

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }

    </script>
</body>
</html>