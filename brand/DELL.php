<?php
    include_once '../dbconnect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../style/uili.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- font-awesome -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/redstar1.jpg">
    <title>RedStar Online ตัวแทนจำหน่าย Gaming laptop MSI ROG Alienware Predator</title>
    
</head>
<body>
    <!-- head -->
    <!-- navbar1 -->
    <div class="sticky-top">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid" >
                
                <a class="navbar-brand" href="index.php"><img src="../img/redstar-h180a.png" height="50px" alt="" class="me-2"></a>
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
                        <a class="nav-link active" aria-current="page" href="../index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house ms-3 mb-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg><br>
                            หน้าหลัก
                        </a>
                    </li>
                    <li class="navcontainer">
                        <a class="nav-link" href="../computer.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-laptop ms-4 mb-2" viewBox="0 0 16 16">
                                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                            </svg><br>
                            คอมพิวเตอร์
                        </a>
                    </li>
                    <li class="navcontainer">
                        <a class="nav-link" href="../it.php">
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
                        <a class="nav-link" href="../acc.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag ms-4 mb-2" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg><br>
                            อุปกรณ์เสริม
                        </a>
                    </li>
                    <li class="navcontainer">
                        <a class="nav-link" href="../contact.php">
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
    <div class="container"  style="padding-left: 7%;">
        <form action="select.php" method="post" class="row g-3">
            <div class="col-md-4">
                <label for="inputState" class="form-label">Brand</label>
                <select id="inputState" class="form-select" name="select">
                    <option selected> - </option>
                    <option value="msi">MSI</option> 
                    <option value="asus">ASUS</option>
                    <option value="acer">ACER</option>
                    <option value="dell">DELL</option>
                    <option value="lenovo">LENOVO</option>
                </select>
            </div>
            <div class="col-md-4 mt-5">
                <button type="submit" class="btn btn-outline-success"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
    <div class="product">
        <div class="container mt-4" >
            <div class="d-flex justify-content-center">
                <div class="d-block ms-5">
                    <h2 class="text-start">สินค้าทั้งหมด</h2>
                    <?php
                        $sql = "SELECT * FROM product WHERE p_brand = 'dell'";
                        $result = $conn-> query($sql);

                        if($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                                echo '<div class="card me-2 mb-2" style="width: 18rem;float: left;height: 29rem;">
                                    <img src="../admin/product/'.$row["p_img"].'" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">'.$row["p_name"].'</p>
                                        <h5 class="card-title ">'.$row["p_price"].'<br></h5>
                                        <a href="buypart.php" class="btn btn-warning float-right"><i class="bi bi-cart-plus">รายละเอียดสินค้า</i></a>
                                    </div>
                                </div>';
                                
                            } 
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <center><hr width="80%" height="4px" style="color: red;"></center>
    <div class="container-fluid mt-4 " style="padding-left: 10%; padding-bottom: 50px;">
        <p><b>Payment Method</b></p>
        <img src="../img/bank.png" alt="" class="mb-4"> <img src="../img/card.png" alt="" class="mb-4"><br>
        <p><b>Transportation</b></p>
        <img src="../img/R.png" alt="" width="100px" class="me-3">
        <img src="../img/flash.png" alt="" width="100px" style="background-color: yellow; padding:4px;" class="me-3">
        <img src="../img/j&t.png" alt="" width="100px"">
    </div>
</body>
</html>