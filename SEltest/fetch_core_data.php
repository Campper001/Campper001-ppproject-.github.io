<?php
include('connect.php');
header('Content-Type: application/json; charset=utf-8');

if (isset($_POST['FA_cla'])) {
    $fa_cla = $_POST['FA_cla'];

    // ดึงข้อมูลจากฐานข้อมูล
    $sql = "SELECT Core, international, vocation, NFE, GED 
            FROM admission_rcttest 
            WHERE `FA-cla` = ? 
            LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $fa_cla);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // คำอธิบายข้อความในแต่ละหมวด
        $labels = [
            'core' => 'ผู้สมัครที่จบจาก รร. หลักสูตรแกนกลาง',
            'international' => 'ผู้สมัครที่จบจาก รร. หลักสูตรนานาชาติ',
            'vocation' => 'ผู้สมัครที่จบจาก รร. หลักสูตรอาชีวศึกษา',
            'nfe' => 'ผู้สมัครที่จบจาก รร. หลักสูตรตามอัธยาศัย (กศน.)',
            'ged' => 'ผู้สมัครที่จบหลักสูตร GED'
        ];

        // Mapping key → ชื่อคอลัมน์จริงใน DB
        $columnMap = [
            'core' => 'Core',
            'international' => 'international',
            'vocation' => 'vocation',
            'nfe' => 'NFE',
            'ged' => 'GED'
        ];

        // เตรียมข้อมูลสำหรับฝั่ง JS
        $coreInfo = [];
        foreach ($labels as $key => $desc) {
            $col = $columnMap[$key];
            $accept = isset($row[$col]) && floatval($row[$col]) >= 1;
            $coreInfo[$key] = [
                'img' => $accept ? 'img/check.png' : 'img/no.png',
                'text' => ($accept ? 'รับ' : 'ไม่รับ') . $desc
            ];
        }

        echo json_encode([
            'status' => 'success',
            'coreInfo' => $coreInfo
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'error' => 'ไม่พบข้อมูลในระบบ'
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'error' => 'ไม่ได้รับค่า FA_cla'
    ]);
}
