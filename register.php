<?php
    include_once 'dbconnect.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        $sql = " SELECT * FROM member WHERE m_email = '$email' && m_pass = '$pass' ";

        $result = mysqli_query($conn, $sql);
     
        if(mysqli_num_rows($result) > 0){
     
           $error[] = 'ไม่มีชื่อผู้ใช้งานนี้';
     
        }else{
     
           if($pass != $cpass){
              $error[] = 'รหัสผ่านไม่ตรงกัน';
           }else{
              $sql = "INSERT INTO member (`m_id`, `m_email`, `m_pass`)
              VALUES (NULL, '$email', '$pass')";
              mysqli_query($conn, $sql);
              header('location:Login.php');
           }
        }

        /* if($pass == $cpass){
            $sql = "INSERT INTO `member` (`m_id`, `m_user`, `m_pass`)
             VALUES (NULL, '$email', '$pass')";
             if ($conn->query($sql) == TRUE) {
                echo "New record created successfully";
                header("Location:login.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            exit;
        }else{
            $error[] = "password not matched!";
        } */
        
    }
    $conn->close();
    
?>


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
    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <style>
        .fontstyle{
            font-family: 'Kanit', sans-serif;
        }
        body{
            background-image: url("img/bg3.jpg");
        }
    </style>
    <!-- icons -->
    <link rel="shortcut icon" href="img/redstar1.jpg">
    <title>ลงทะเบียน</title>
</head>
<body>
    <div class="container mt-5 fontstyle">
        <form action="" method="post" class="d-flex justify-content-center">
            <div class="d-block card p-5">
                <h2 class="md-2">ลงทะเบียน</h2>
                <div class="mb-3">
                    <div class="col-md-12">
                        <label class="form-label ">อีเมล</label>
                        <input type="email" name="email" class="form-control" placeholder="กรอกอีเมล"  required>
                        <div class="form-text"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-12">
                        <label for="exampleInputPassword1" class="form-label">รหัสผ่าน</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="กรอกรหัสผ่าน" required>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-12">
                        <input type="password" name="cpass" class="form-control" id="exampleInputPassword1" placeholder="กรอกรหัสผ่านอีกครั้ง" required>
                        
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-12">
                        <?php
                            if(isset($error)){
                                foreach($error as $error){
                                    echo '<span class="text-danger p-1">'.$error.'</span>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">สมัครสมาชิก</button>
                <a href="login.php" class="btn btn-secondary">กลับ</a>
            </div>
        </form>
    </div>
</body>
</html>