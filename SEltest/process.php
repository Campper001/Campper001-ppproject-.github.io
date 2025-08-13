<?php
// รวมไฟล์ connect.php เพื่อเชื่อมต่อกับฐานข้อมูล
include('connect.php');

// ตรวจสอบว่าเป็นการส่งข้อมูลแบบ POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลที่ส่งมาจากฟอร์ม
    $fa_cla = isset($_POST['FA_cla']) ? $_POST['FA_cla'] : null;
    $UN = isset($_POST['UN']) ? $_POST['UN'] : null;

    // กำหนดชื่อเต็มของมหาวิทยาลัย
    $universityMapping = [
        'NU' => 'มหาวิทยาลัยนเรศวร',
        'CU' => 'จุฬาลงกรณ์มหาวิทยาลัย',
        'KU' => 'มหาวิทยาลัยเกษตรศาสตร์'
    ];

}

// ปิดการเชื่อมต่อ
$conn->close();
?>
