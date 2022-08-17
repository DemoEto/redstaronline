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
    <section class="d-flex justify-content-center">
      <div class="d-block card p-5">
        <div class="sticky-top pt-4 pb-3" style="background-color: white;">
          <h2 class="md-2 text-center">ข้อมูลสมาฃิก</h2>
          <a href="in_member.php" class="btn btn-success col-12 mb-2">เพิ่มข้อมูล</a>
          <label>ค้นหาข้อมูล</label>
          <form method="get" action="">
            <div class="row">
              <div class="col-4">
                <input class="form-control pe-2" type="text" name="email" placeholder="ค้นหาอีเมล">
              </div>
              <div class="col-2">
                <button type="submit" class="btn btn-primary" name="search">ค้นหา</button>
              </div>
              <div class="col-3">
                <button type="submit" class="btn btn-secondary" name="clearSearch">ล้างค้นหา</button>
              </div>
              <div class="col-3">
                <a href="../manage.php" class="btn btn-danger">ย้อนกลับ</a>
              </div>
            </div>
          </form>
          <?php 
            if (isset($_GET['search'])) {
              if (empty($email)) {
                echo '<button type="button" class="btn btn-danger mt-2" disabled><span id="plsfill">โปรดกรอกข้อมูลเพื่อค้นหา</span></button>';
                }
            }
          ?>
        </div>
        <table class="table align-middle">
          <thead>
            <tr class="table-info ">
              <th scope="col">ไอดี</th>
              <th scope="col">อีเมล</th>
              <th scope="col">รหัสผ่าน</th>
              <th scope="col" class="ps-3">แก้ไข</th>
              <th scope="col" class="ps-3">ลบ</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                            if (isset($_GET['search'])) {
                                $email = $_GET['email'];
                                
                                $search = "SELECT * FROM member WHERE m_email LIKE '%$email%'";
                                //echo $search;
                                $result = $conn-> query($search);
                            }elseif (isset($_GET['clearSearch'])) {
                                header("location:s_member.php");
                            }
                             else {
                                $sql = "SELECT * FROM member";
                                $result = $conn-> query($sql);
                            }
                            if($result-> num_rows > 0){
                                while($row = $result-> fetch_assoc()){?>
            <tr>
              <td><?php echo $row["m_id"]; ?></td>
              <td><?php echo $row["m_email"]; ?></td>
              <td><?php echo $row["m_pass"]; ?></td>
              <td><a href='e_member.php?id=". $row["m_id"] ."' class='btn btn-warning'><i
                    class='fa-solid fa-pen-to-square'></i></a></td>
              <td><a href='d_member.php?id="<?php echo $row["m_id"] ?>"' class='btn btn-danger'
                  onclick="return confirm('ต้องการลบข้อมูลใช่หรือไม่')"><i class='fa-solid fa-trash'></i></a></td>
            </tr><?php
                                }
                                echo "</table>";
                            } else {
                                echo "0 result";
                            }
                        ?>
          </tbody>
        </table>
      </div>
      </form>
  </div>
  <?php } else { header("Location: ../../index.php"); } ?>
</body>

</html>