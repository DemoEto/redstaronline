<?php
    include_once '../../dbconnect.php';
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <!-- icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"
    integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
  <link rel="shortcut icon" href="../../img/redstar1.jpg">
  <title>admin</title>
</head>

<body>
  <div class="container mt-5 fontstyle">
    <section  class="d-flex justify-content-center">
      <div class="d-block card p-5">
        <div class="sticky-top pt-4 pb-3" style="background-color: white;">
          <h2 class="md-2 text-center">ข้อมูลสินค้า</h2>
          <a href="in_product.php" class="btn btn-success col-12 mb-2">เพิ่มข้อมูล</a>
          <label>ค้นหาข้อมูล</label>
          <form method="get" action="">
            <div class="row">
              <div class="col-3">
                <input class="form-control pe-2" type="text" name="name" placeholder="ค้นหาชื่อ">
              </div>
              <div class="col-2">
                <select class="form-select" name="brand">
                    <option selected>ค้นหาแบรน</option>
                    <option>MSI</option>
                    <option>ASUS</option>
                    <option>ACER</option>
                    <option>DELL</option>
                    <option>LENOVO</option>
                </select>
              </div>
              <div class="col-2">
                  <select class="form-select" name="type">
                      <option selected>ค้นหาชนิด</option>
                    <option>คอมพิวเตอร์/โน๊ตบุ๊ค</option>
                    <option>ไอที</option>
                    <option>ส่วนเสริม</option>
                </select>
              </div>
              <div class="col-1">
                  <button type="submit" class="btn btn-primary" name="search">ค้นหา</button>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-secondary" name="clearSearch">ล้างค้นหา</button>
                </div>
                <div class="col-2">
                    <a href="../manage.php" class="btn btn-danger">ย้อนกลับ</a>
                </div>
            </div>
          </form>
          <?php if (isset($_GET['search'])) {
            $name = $_GET['name'];
            $brand = $_GET['brand'];
            $type = $_GET['type'];
            if (empty($name) && $brand == 'ค้นหาแบรน' && $type == 'ค้นหาชนิด') {
            echo '<button type="button" class="btn btn-danger mt-2" disabled><span id="plsfill"></span></button>';
            }
          } 
          ?>
        </div>
        <table class="table align-middle">
          <thead>
            <tr class="table-info ">
              <th scope="col">ไอดี</th>
              <th scope="col">แบรนสินค้า</th>
              <th scope="col">ฃนิดสินค้า</th>
              <th scope="col">ชื่อสินค้า</th>
              <th scope="col">ราคาสินค้า</th>
              <th scope="col" class="text-center">รูปสินค้า</th>
              <th scope="col" class="text-center">ตำแหน่งไฟล์รูป</th>
              <th scope="col" class="ps-3">แก้ไข</th>
              <th scope="col" class="ps-3">ลบ</th>
            </tr>
          </thead>
          <tbody><img src='. $row["p_img"] .' alt=''>
            <?php 
                            if (isset($_GET['search'])) {
                                if (empty($name) && $brand == 'ค้นหาแบรน' && $type == 'ค้นหาชนิด') {
                                  echo '<script>document.getElementById("plsfill").innerHTML = "โปรดกรอกข้อมูลเพื่อค้นหา";</script>';
                                  $search = "SELECT * FROM product";
                                }
                                elseif ($brand == 'ค้นหาแบรน' && $type == 'ค้นหาชนิด') {
                                  $search = "SELECT * FROM product WHERE p_name LIKE '%$name%'";
                                }elseif (empty($name) && $type == 'ค้นหาชนิด') {
                                  $search = "SELECT * FROM product WHERE p_brand = '$brand'";
                                }elseif (empty($name) && $brand == 'ค้นหาแบรน') {
                                  $search = "SELECT * FROM product WHERE p_type = '$type'";
                                }
                                elseif ($type == 'ค้นหาชนิด') {
                                  $search = "SELECT * FROM product WHERE p_name LIKE '%$name%' AND p_brand = '$brand'";
                                }elseif ($brand == 'ค้นหาแบรน') {
                                  $search = "SELECT * FROM product WHERE p_name LIKE '%$name%' AND p_type = '$type'";
                                }elseif (empty($name)) {
                                  $search = "SELECT * FROM product WHERE p_brand = '$brand' AND p_type = '$type'";
                                }else {
                                  $search = "SELECT * FROM product";
                                }
                                //echo $search;
                                $result = $conn-> query($search);
                            }elseif (isset($_GET['clearSearch'])) {
                                $sql = "SELECT * FROM product";
                                $result = $conn-> query($sql);
                            }
                             else {
                                $sql = "SELECT * FROM product";
                                $result = $conn-> query($sql);
                            }

                            if($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){
                                    echo "<tr>
                                            <td>". $row["p_id"] ."</td>
                                            <td>". $row["p_brand"] ."</td>
                                            <td>". $row["p_type"]."</td>
                                            <td>". $row["p_name"] ."</td>
                                            <td>". $row["p_price"] ."</td>
                                            <td><img class='w-100' src='". $row["p_img"] ."' alt=''></td>
                                            <td>". $row["p_img"] ."</td>
                                            <td><a href='e_product.php?id=". $row["p_id"] ."' class='btn btn-warning' style='width:40px;height:40px;'><i class='fa-solid fa-pen-to-square'></i></a></td>"?>
            <td><a href='d_product.php?id="<?php echo $row["p_id"] ?>"' class='btn btn-danger'
                style='width:40px;height:40px;' onclick="return confirm('ต้องการลบข้อมูลใช่หรือไม่')"><i
                  class='fa-solid fa-trash'></i></a></td>
            </tr><?php
                                }
                                echo "</table>";
                            } else {
                                echo "0 result";
                            }
                            $conn-> close();
                        ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  <?php } else { header("Location: ../../index.php"); } ?>
</body>

</html>