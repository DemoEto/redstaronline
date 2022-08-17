<?php
    include_once '../../dbconnect.php';
    
    if(isset($_POST['submit'])){
        
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $sql = "INSERT INTO `member` (`m_id`, `m_email`, `m_pass`) VALUES (NULL, '$email', '$pass')";

            if ($conn->query($sql) == TRUE) {
                echo "New record created successfully";
                header("Location: s_member.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        
    }
    session_start();
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
    <div class="container mt-5 fontstyle">
        <form action="" method="post" class="d-flex justify-content-center">
            <div class="d-block card p-5">
                <h2 class="md-2 text-center">เพิ่มข้อมูลสมาฃิก</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">อีเมล</label>
                        <input type="email" name="email" class="form-control" placeholder="กรอกอีเมล"  required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">รหัสผ่าน</label>
                        <input type="text" name="pass" class="form-control" id="exampleInputPassword1" placeholder="กรอกรหัสผ่าน"  required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">เพิ่มข้อมูล</button>
                    <a href="s_member.php" class="btn btn-secondary">ย้อนกลับ</a>
                </form>
            </div>
        </form>
    </div>
    <?php } else { header("Location: ../../index.php"); } ?>
</body>
</html>