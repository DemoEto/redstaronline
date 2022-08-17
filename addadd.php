<?php
    include_once 'dbconnect.php';

    session_start();
    $p_id = $_GET['p_id'];
    
    $sql = "SELECT * FROM product WHERE p_id = $p_id";
    $result = $conn-> query($sql);
    $row = $result-> fetch_assoc();

    if(isset($_POST['name'])){

      $name = $_POST['name'];
      $tel = $_POST['tel'];
      $address = $_POST['address'];
      $province = $_POST['province'];
      $district = $_POST['district'];
      $subdis = $_POST['subdis'];
      $zip = $_POST['zip'];
      $m_id = $_SESSION['m_id'];
      
      $insadd = "INSERT INTO `address` (`a_id`, `m_id`, `m_name`, `m_tel`, `m_add`, `m_province`, `m_district`, `m_subdis`, `m_zip`) VALUES (NULL, $m_id, '$name', '$tel', '$address', '$province', '$district', '$subdis', '$zip')";

      
      if ($conn->query($insadd) === TRUE) {
        echo "New record created successfully";
        header("location: payment.php?p_id=".$row['p_id']);
      } else {
        echo "Error: " . $insadd . "<br>" . $conn->error;
      }
      
      $conn->close();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <!-- icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
    integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
  <!-- font style -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
  <style>
  .fontstyle {
    font-family: 'Kanit', sans-serif;
  }
  </style>
  <!-- icons -->
  <link rel="shortcut icon" href="img/redstar1.jpg">
  <title>เพิ่มที่อยู่ใหม่</title>
</head>

<body>
  <div class="container mt-5 fontstyle border rounded w-50 p-5">
    <section class="address">
      <form action="" method="POST">
        <h2 class="mb-4"><i class="bi bi-house"></i> เพิ่มที่อยู่ใหม่</h2>
        <div class="row g-3 mb-2 justify-content-center">
          <div class="col-6 ">
            <label class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" name="name" class="form-control" placeholder="กรอกชื่อ-นามสกุล" 
              required>
          </div>
          <div class="col-6">
            <label class="form-label">หมายเลขโทรศัพท์</label>
            <input type="text" name="tel" class="form-control" placeholder="กรอกหมายเลขโทรศัพท์" 
              required>
          </div>
        </div>
        <div class="row g-3 mb-2 justify-content-center">
          <div class="col-12">
            <label class="form-label">ที่อยู่</label>
            <textarea class="form-control" name="address"
              placeholder="กรอกบ้านเลขที่, หมู่, ซอย, อาคาร, ถนน และจุดสังเกตุ (ถ้ามี)" rows="3"></textarea>
          </div>
        </div>
        <div class="row g-3 mb-2 justify-content-center">
          <div class="col-6">
            <label class="form-label">จังหวัด</label>
            <input type="text" name="province" class="form-control" placeholder="กรอกจังหวัด" 
              required>
          </div>
          <div class="col-6">
            <label class="form-label">อำเภอ</label>
            <input type="text" name="district" class="form-control" placeholder="กรอกอำเภอ" 
              required>
          </div>
        </div>
        <div class="row g-3 mb-2 justify-content-center">
          <div class="col-6">
            <label class="form-label">ตำบล/แขวง</label>
            <input type="text" name="subdis" class="form-control" placeholder="กรอกตำบล/แขวง" 
              required>
          </div>
          <div class="col-6">
            <label class="form-label">รหัสไปรษณีย์</label>
            <input type="text" name="zip" class="form-control" placeholder="กรอกอำเภอ" required>
          </div>
        </div>
        <div class="row g-3 mb-2 mt-2 justify-content-center">
          <div class="col-12">
            <button type="submit" class="btn btn-primary">บันทึก</button>
            <a href="payment.php?p_id=<?php echo $row['p_id']; ?>" class="btn btn-secondary">ย้อนกลับ</a>
          </div>
        </div>
      </form>
    </section>
  </div>

</body>

</html>