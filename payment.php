<?php
    include_once 'dbconnect.php';
    $p_id = $_GET['p_id'];

    $sql = "SELECT * FROM product WHERE p_id = $p_id";
    $result = $conn-> query($sql);
    $row = $result-> fetch_assoc();
    session_start();
?>
<?php if(isset($_SESSION['m_email'])) {?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style/addr-section.css" type="text/css">
  <link rel="stylesheet" href="style/paymenttab.css" type="text/css">
  <link rel="stylesheet" href="style/uili.css" type="text/css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
    integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">  -->
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
  <!-- font style -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
  <style>
  .fontstyle {
    font-family: 'Kanit', sans-serif;
  }

  .dd-selected {
    color: black;
  }
  </style>
  <!-- icons -->
  <link rel="shortcut icon" href="img/redstar1.jpg">
  <title>RedStar Online ตัวแทนจำหน่าย Gaming laptop MSI ROG Alienware Predator</title>
</head>

<body>
  <!-- head -->
  <!-- navbar1 -->
  <div class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">

        <a class="navbar-brand" href="index.php"><img src="img/redstar-h180a.png" height="50px" alt="" class="me-2"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <form action="#" class="d-flex navbar-brand" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success me-2" type="submit"><i class="bi bi-search"></i></button>
                <?php
                                    if(isset($_SESSION['m_email']) == 'admin@admin') {
                                        echo "<a href='admin/manage.php' class='btn btn-dark me-2'><i class='bi bi-gear-fill'></i></a>";
                                    }/* else { header("Location: index.php"); } */
                                ?>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-house ms-3 mb-2" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                <path fill-rule="evenodd"
                  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
              </svg><br>
              หน้าหลัก
            </a>
          </li>
          <li class="navcontainer">
            <a class="nav-link" href="computer.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-laptop ms-4 mb-2" viewBox="0 0 16 16">
                <path
                  d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
              </svg><br>
              คอมพิวเตอร์
            </a>
          </li>
          <li class="navcontainer">
            <a class="nav-link" href="it.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-keyboard ms-4 mb-2" viewBox="0 0 16 16">
                <path
                  d="M14 5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h12zM2 4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H2z" />
                <path
                  d="M13 10.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm0-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h
                                -.5a.25.25 0 0 1-.25-.25v-.5zm-5 0A.25.25 0 0 1 8.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 8 8.75v-.5zm2 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25v.5a.25.25
                                0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25v-.5zm1 2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-5-2A.25.25 0 0 1 6.25 8h.5a.25.25 0 0 1
                                .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 6 8.75v-.5zm-2 0A.25.25 0 0 1 4.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 4 8.75v-.5zm-2 0A.25.25 0 0 1 2.25
                                8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 8.75v-.5zm11-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-2
                                    0a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm-2 0A.25.25 0 0 1 9.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25
                                    0 0 1 9 6.75v-.5zm-2 0A.25.25 0 0 1 7.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 7 6.75v-.5zm-2 0A.25.25 0 0 1 5.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0
                                    1-.25.25h-.5A.25.25 0 0 1 5 6.75v-.5zm-3 0A.25.25 0 0 1 2.25 6h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5A.25.25 0 0 1 2 6.75v-.5zm0 4a.25.25 0 0 1 .25-.25h.5a.25.25 0 0
                                    1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5zm2 0a.25.25 0 0 1 .25-.25h5.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-5.5a.25.25 0 0 1-.25-.25v-.5z" />
              </svg><br>
              อุปกรณ์ไอที
            </a>
          </li>
          <li class="navcontainer">
            <a class="nav-link" href="acc.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-bag ms-4 mb-2" viewBox="0 0 16 16">
                <path
                  d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
              </svg><br>
              อุปกรณ์เสริม
            </a>
          </li>
          <li class="navcontainer">
            <a class="nav-link" href="contact.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-headset ms-1 mb-2" viewBox="0 0 16 16">
                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5
                                1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
              </svg><br>
              ติดต่อ
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- body -->
  <section class="address-section">

    <div class="contaibar mb-4">

      <div class="title" style="float: left;">ที่อยู่จัดส่งสินค้า</div>
      <label for="cancledelete" class=" mt-2" style="float: right;"><u class="btncancledelete">ยกเลิก</u></label>
      <label for="deleteaddr" class="btndeleteaddr mt-2 me-3" style="float: right;"><u>จัดการที่อยู่</u></label>
      <a href="addadd.php?p_id=<?php echo $row['p_id'] ?>" style="float: right;" class="me-3 mt-2">เพิ่มที่อยู่</a>
      <div class="manage-addr" style="float: left;">
        <input type="radio" name="operater" id="deleteaddr">
        <input type="radio" name="operater" checked id="cancledelete">
      </div>
      <?php 
      if(isset($_SESSION['m_id'])){
        $m_id = $_SESSION['m_id'];
            $addr = mysqli_query($conn,"SELECT * FROM address WHERE m_id = $m_id");
            if($addr-> num_rows > 0){?>
      
            
      <table class="table align-middle">
        <thead>
          <tr class="border-top">
            <th scope="col">ข้อมูล</th>
            <th scope="col">ที่อยู่</th>
            <th scope="col" class="text-center">เลือก</th>
          </tr>
        </thead>
        <tbody>
          <form action="" method="post">
            <?php 
              while($row = $addr-> fetch_assoc()){?>
            <tr>
              <td><?php echo $row["m_name"]."<br>".$row["m_tel"]; ?></td>
              <td>
                <?php echo $row["m_add"]." ".$row["m_subdis"]." ".$row["m_district"]." ".$row["m_province"]." ".$row["m_zip"]; ?>
              </td>
              <td class="text-center">
                <div class="button-operator">
                  <div class="cancledelete operator">
                    <input type="radio" name="selectaddr" id="selectaddr" style="width:20px; height:20px;"
                      value="<?php echo $row["a_id"]; ?>" checked>
                  </div>
                  <div class="deleteaddr operator">
                    <a href='d_member.php?id="<?php echo $row["m_id"] ?>"' class='btn btn-danger'
                      onclick="return confirm('ต้องการลบข้อมูลใช่หรือไม่')"><i class='fa-solid fa-trash'></i></a>
                  </div>
                </div>
              </td>

            </tr><?php
              }
              echo "</form>";
              echo "</table>";
          
          
            }else{?>
              <div class="row d-flex mt-5" style="clear: both;">
              <label class="form-label justify-content-center text-center align-middle">
                <p class="fs-4">ที่อยู่จัดส่งสินค้า</p>
                <a href="addadd.php?p_id=<?php echo $row['p_id'];?>"
                  class="btn btn-outline-danger rounded-4 px-5 fs-5">เพิ่มที่อยู่</a>
              </label>
            </div>
            <?php }
            }else{ ?>
              <div class="row d-flex mt-5" style="clear: both;">
              <label class="form-label justify-content-center text-center align-middle">
                <p class="fs-4">ที่อยู่จัดส่งสินค้า</p>
                <a href="addadd.php?p_id=<?php echo $row['p_id'];?>"
                  class="btn btn-outline-danger rounded-4 px-5 fs-5">เพิ่มที่อยู่</a>
              </label>
            </div>
              <?php }
      ?>
    </div>
  </section>

  <section class="payments-section">
    <div class="containar">
      <div class="title">ช่องทางชำระเงิน</div>
      <div class="content">
        <input type="radio" name="indicator" checked id="credit">
        <input type="radio" name="indicator" id="transfer">
        <input type="radio" name="indicator" id="cash">
        <input type="radio" name="indicator" id="installment">
        <div class="list">
          <label for="credit" class="credit">
            <i class="fa-solid fa-credit-card"></i>
            <span>บัตรเครดิต/บัตรเดบิต</span>
          </label>
          <label for="transfer" class="transfer">
            <i class="fa-solid fa-building-columns"></i>
            <span>โอนเงิน</span>
          </label>
          <label for="cash" class="cash">
            <i class="fa-duotone fa-money-bill-wave"></i>
            <span>เก็บเงินปลายทาง</span>
          </label>
          <label for="installment" class="installment">
            <i class="fa-solid fa-calendar-days"></i>
            <span>ผ่อนชำระ</span>
          </label>
          <div class="indicator"></div>
        </div>
        <div class="form-content">
          <div class="credit formpay">
            <form action="u_payment.php" method="POST">
              <div class="row g-3">
                <div class="col-8">
                  <label class="form-label">หมายเลขบัตรเครดิต 16 หลัก</label>
                  <input type="text" name="p_name" class="form-control" placeholder="กรอกหมายเลขบัตรเครดิต"
                    aria-label="Last name" required>
                </div>
              </div>
              <div class="row g-3">
                <div class="col-8">
                  <label class="form-label">ชื่อบนบัตร</label>
                  <input type="text" name="p_name" class="form-control" placeholder="กรอกชื่อบนบัตรเครดิต"
                    aria-label="Last name" required>
                </div>
              </div>
              <div class="row g-3">
                <div class="col-4">
                  <label class="form-label">วันหมดอายุ</label>
                  <input type="text" name="p_name" class="form-control" placeholder="ดด/ปป" aria-label="Last name"
                    required>
                </div>
                <div class="col-4">
                  <label class="form-label">รหัส CVV</label>
                  <input type="text" name="p_name" class="form-control" placeholder="กรอกรหัส CVV"
                    aria-label="Last name" required>
                </div>
              </div>
              <div class="row g-3 mt-1">
                <div class="col-3">
                  <img src="img/card.png" alt="" class="mb-4">
                </div>
                <div class="col-2">
                  <img src="img/unionpay.png" alt="" class="mb-4" width="100px">
                </div>
              </div>
            </form>
          </div>
          <div class="transfer formpay">
            <p>เลือกธนาคารที่คุณต้องการชำระเงิน ตามรายชื่อธนาคารดังนี้</p>
            <div class="row border rounded py-2" style="width: 55%;">
              <div class="col-3">
                <img src="img/BBK.jpg" class="rounded" width="50" height="50" alt="">
              </div>
              <div class="col pt-2 fs-5 fw-semibold">
                <label>ธนาคารกรุงเทพ</label>
              </div>
            </div>
            <div class="row border rounded py-2" style="width: 55%;">
              <div class="col-3">
                <img src="img/KBank.jpg" class="rounded" width="50" height="50" alt="">
              </div>
              <div class="col pt-2 fs-5 fw-semibold">
                <label>ธนาคารกสิกรไทย</label>
              </div>
            </div>
            <div class="row border rounded py-2" style="width: 55%;">
              <div class="col-3">
                <img src="img/krungsri-300x300.png" class="rounded" width="50" height="50" alt="">
              </div>
              <div class="col pt-2 fs-5 fw-semibold">
                <label>ธนาคารกรุงศรี</label>
              </div>
            </div>
            <div class="row border rounded py-2" style="width: 55%;">
              <div class="col-3">
                <img src="img/SCB.jpg" class="rounded" width="50" height="50" alt="">
              </div>
              <div class="col pt-2 fs-5 fw-semibold">
                <label>ธนาคารไทยพาณิชย์</label>
              </div>
            </div>
            <p>คุณสามารถชำระเงิน และแนบหลักฐานการโอนเงิน หลังจากกดปุ่ม “ชำระเงิน”</p>
          </div>
          <div class="cash formpay">

            <label class="text-center ms-5">
              <i class='fa-duotone fa-money-bill-wave fa-4x' style='color:#027a00'></i><br>
              <h5><b>คุณสามารถชำระเงินสด แบบเก็บเงินปลายทางได้</b></h5>
              <span>กรุณาเตรียมเงินให้พอดีกับพนักงานจัดส่งสินค้า<br> เพื่อความสะดวกและรวดเร็ว</span>
            </label>

          </div>
          <div class="installment formpay">
            <form action="u_payment.php" method="POST">
              <div class="row g-3">
                <div class="col-4">
                  <label class="form-label">ธนาคารที่ผ่อนชำระ</label>
                  <select class="form-select" name="bank" id="bank">
                    <option selected>เลือกธนาคาร</option>
                    <option>ธนาคารกรุงเทพ</option>
                    <option>ธนาคารกสิกรไทย</option>
                    <option>ธนาคารกรุงศรี</option>
                    <option>ธนาคารไทยพาณิชย์</option>
                    <option>ซิตี้แบงก์</option>
                  </select>
                </div>
                <div class="col-4">
                  <label class="form-label">ธนาคารที่ผ่อนชำระ</label>
                  <select class="form-select" name="timeinstallment">
                    <option selected>เลือกระยะเวลาผ่อนชำระ</option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                  </select>
                </div>
              </div>
              <div class="row g-3">
                <div class="col-8">
                  <label class="form-label">หมายเลขบัตรเครดิต 16 หลัก</label>
                  <input type="text" name="p_name" class="form-control" placeholder="กรอกหมายเลขบัตรเครดิต"
                    aria-label="Last name" required>
                </div>
              </div>
              <div class="row g-3">
                <div class="col-8">
                  <label class="form-label">ชื่อบนบัตร</label>
                  <input type="text" name="p_name" class="form-control" placeholder="กรอกชื่อบนบัตรเครดิต"
                    aria-label="Last name" required>
                </div>
              </div>
              <div class="row g-3">
                <div class="col-4">
                  <label class="form-label">วันหมดอายุ</label>
                  <input type="text" name="p_name" class="form-control" placeholder="ดด/ปป" aria-label="Last name"
                    required>
                </div>
                <div class="col-4">
                  <label class="form-label">รหัส CVV</label>
                  <input type="text" name="p_name" class="form-control" placeholder="กรอกรหัส CVV"
                    aria-label="Last name" required>
                </div>
              </div>
              <div class="row g-3 mt-1">
                <div class="col-3">
                  <img src="img/card.png" alt="" class="mb-4">
                </div>
                <div class="col-2">
                  <img src="img/unionpay.png" alt="" class="mb-4" width="100px">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="total-section">
    <div class="container border rounded-4 p-5 mt-2 shadow" style="width: 960px;">
      <label class="fs-3">
        <i class='fa-solid fa-barcode fa-sm' style='color:#000000'></i>
        <span>ตรวจสอบยอด</span>
      </label>
      <?php 
        $sql = "SELECT * FROM product WHERE p_id = $p_id";
        $result = $conn-> query($sql);
        $row = $result-> fetch_assoc();
      ?>
      <div class="row mt-3 text-center">
        <div class="col-2 ">
          <img src="admin/product/<?php echo $row['p_img'] ?>" class="" alt="" width="100px" height="100px">
        </div>
        <div class="col-7">
          <label class="pt-4"><?php echo $row['p_name'] ?></label>
        </div>
        <div class="col-3">
          <label class="fs-5 pt-4"><?php echo $row['p_price'] ?></label>
          <label class="fs-6 text-decoration-line-through text-secondary"><?php echo $row['p_tprice'] ?></label>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-3">
          <label class="fs-5">รวมยอดสั่งซื้อทั้งหมด :</label>
        </div>
        <div class="col-6">
          
        </div>
        <div class="col-3 text-center">
        <label class="fs-5"><?php echo $row['p_price'] ?></label>
          <label class="fs-6 text-decoration-line-through text-secondary"><?php echo $row['p_tprice'] ?></label>
        </div>
      </div>
      <div class="row ">
        <div class="col-3"></div>
        <div class="col-6"></div>
        <div class="col-3 text-center align-middle">
          <!-- <a href="" class="btn btn-primary mt-3 fs-6" style="width: 130px;">สั่งสินค้า</a> -->
          
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <center>
    <hr width="80%" height="4px" style="color: red;">
  </center>
  <div class="container-fluid mt-4 " style="padding-left: 10%; padding-bottom: 50px;">
    <p><b>Payment Method</b></p>
    <img src="img/bank.png" alt="" class="mb-4"> <img src="img/card.png" alt="" class="mb-4"><br>
    <p><b>Transportation</b></p>
    <img src="img/R.png" alt="" width="100px" class="me-3">
    <img src="img/flash.png" alt="" width="100px" style="background-color: yellow; padding:4px;" class="me-3">
    <img src="img/j&t.png" alt="" width="100px">
  </div>
  <?php } else { header("Location: Login.php?p_id=".$row["p_id"]); } ?>
</body>

</html>