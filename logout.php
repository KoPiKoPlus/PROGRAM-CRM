<?php
    session_start(); //ประกาศ การใช้งาน session
    session_destroy(); // ลบตัวแปร session ทั้งหมด
    header('location:../'); // redirect ไปที่หน้า index.php
?>