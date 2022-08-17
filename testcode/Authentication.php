<?php
    include_once 'auth.php'; //เรียกไฟล์จากภายนอก ที่ชื่อ auth.php

    $email = $_POST['email']; //สร้างตัวแปร email เก็บตัวแปรที่ส่งมาจากฟอร์ม Login
    $password = $_POST['password']; //กำหนดตัวแปร $password มีค่าเป็นข้อมูลที่รับมาจากหน้า Login
    $data = array(); //กำหนดตัวแปร $data มีค่าเป็น array()
    $status = false; //กำหนดตัวแปร $status มีค่าเป็น false

    function view($auth,$email,$password){  //เปิดใช้งานฟังก์ชั่นชื่อ view โดยดึงข้อมูลมาใช้ในฟังก์ชั่นจากตัวแปร $auth,$email,$password
        $status = false;    //กำหนดตัวแปร $status มีค่าเป็น false
        foreach ($auth as $key => $value) { //ทำการตรวจสอบข้อมูลในตัวแปร $auth เปลี่ยนเป็น $key แล้วนำไปเก็บใน $value แบบ Array
            if ($email == $value["email"] && $password == $value["password"]) {//ถ้าตัวแปร $email มีค่าเท่ากับ $value ในอาร์เรย์ email และถ้าตัวแปร $password มีค่าเท่ากับ $value ในอาร์เรย์ password ให้ทำตามเงื่อนไข
                $status = true; //กำหนดตัวแปร $status มีค่าเป็น true
                break; //บังคับหยุดการทำงาน
            }
            //  foreach ($value as $k => $v) {
            //     array_push($data, $v);
            //  }
            //  if ($email == $data[1] && $password == $data[2]) {
            //      $status = true;
            //      break;
            //  }else{
            //      $data = array();
            //  }
        }
        if ($status == true) { //ถ้าตัวแปร $status มีค่าเท่ากับ true ให้ทำตามเงื่อนไข
            echo "Login Successful."; //แสดงข้อความ Login Successful.
        }else{ //ถ้าไม่
            echo "Login Fail."; //แสดงข้อความ Login Fail.
        }
    } //ปิดฟังก์ชั่น
    echo view($auth,$email,$password); //เรียกใช้งานฟังก์ชั่น
?>