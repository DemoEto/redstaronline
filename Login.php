<?php
    include_once 'dbconnect.php';

    session_start();
    

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM member WHERE m_email = '$email' AND m_pass = '$pass'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);

            if($row['m_email'] == 'admin@admin'){

                $_SESSION['m_email'] = $row['m_email'];
                $_SESSION['m_id'] = $row['m_id'];
                header('location:admin/manage.php');

            }elseif (isset($_GET['p_id'])) {
                $_SESSION['m_email'] = $row['m_email'];
                $_SESSION['m_id'] = $row['m_id'];
                header('Location: payment.php?p_id='.$_GET['p_id']);
            }
            else{
                $_SESSION['m_email'] = $row['m_email'];
                $_SESSION['m_id'] = $row['m_id'];
                header('location:index.php');
                }
            
            
        }else{
            $error[] = 'อีเมลหรือรหัสผ่านไม่ถูกต้อง';
        }
    }
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
        body{
            background-image: url("../../img/bg3.jpg");
        }
    </style>
    <!-- icons -->
    <link rel="shortcut icon" href="img/redstar1.jpg">
    <title>เข้าสู่ระบบ</title>
</head>
<body>
    <div class="container mt-5 fontstyle">
        <form action="" method="post" class="d-flex justify-content-center">
            <div class="d-block card p-5">
                <h2 class="md-2">เข้าสู่ระบบ</h2>
                <div class="mb-3">
                    <div class="col-md-12">
                        <label class="form-label ">อีเมล</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="กรอกอีเมล" required>
                        <div class="form-text"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-12">
                        <label for="exampleInputPassword1" class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="กรอกรหัสผ่าน" required>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="col-md-12">
                        <?php
                            if(isset($error)){
                                foreach($error as $error){
                                echo '<span class="text-danger">'.$error.'</span>';
                                }
                            }
                        ?>
                    </div>
                </div>
                <a href="#">ลืมรหัสผ่าน</a>
                <p class="pt-1">( หรือ เข้าใช้งานผ่าน Social Login )</p>
                <a class="btn btn-outline-danger mb-1" href="https://www.ninenik.com/authen/google/?action=connect">
                    <i class="bi bi-google"></i>
                    ล็อกอินด้วย Google			
                </a><br>
                <a class="btn btn-outline-primary mb-1" href="https://www.ninenik.com/authen/facebook/?action=connect">
                    <i class="bi bi-facebook"></i>
                    ล็อกอินด้วย Facebook			
                </a><br>
                <a class="btn btn-outline-success mb-1" href="https://www.ninenik.com/authen/facebook/?action=connect">
                    <i class="bi bi-line"></i>
                    ล็อกอินด้วย Line			
                </a><br>
                <div class="mt-3">
                    <button type="submit" name="login" class="btn btn-primary">เข้าสู่ระบบ</button>
                    <a href="register.php" class="btn btn-success">ลงทะเบียน</a>
                    <a href="index.php" class="btn btn-secondary">กลับ</a>
                </div>
                
            </div>
        </form>
    </div>
    
</body>
</html>