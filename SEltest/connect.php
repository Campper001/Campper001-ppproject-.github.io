<?php
$servername = "localhost";  // ชื่อโฮสต์ที่เชื่อมต่อ
$username = "root";         // ชื่อผู้ใช้ฐานข้อมูล
$password = "";             // รหัสผ่าน (ถ้าใช้ XAMPP หรือ MAMP จะไม่มีรหัสผ่าน)
$dbname = "pjadmission"; // ชื่อฐานข้อมูลที่คุณต้องการเชื่อมต่อ

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
