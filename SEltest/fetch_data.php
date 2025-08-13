<?php
include('connect.php');

header('Content-Type: application/json; charset=utf-8');

if (isset($_POST['FA_cla'])) {
    $fa_cla = $_POST['FA_cla'];
    $sql = "SELECT PointMin1, PointMax1, PointMin2, PointMax2, quantity,
                    `CDM`, `CDS`, `CDE`,MSSEC,MS1PCBE,
                   `GPAX`, `MSTG`, `MSTG-1`, `MSTG-2`, `MSTG-3`, `MSTP-1`, `MSTP-2`, `MSTP-3`, `MSTP-4`, `MSTP-5`, 
                   `MSA-Math1`, `MSA-Math2`, `MSA-Sci`, `MSA-Phy`, `MSA-Che`, `MSA-Bio`, `MSA-Soci`, 
                   `MSA-Thai`, `MSA-English`, `MSA-French`, `MSA-German`, `MSA-Japan`, `MSA-Korean`, 
                   `MSA-chinese`, `MSA-Spanish`, `MSA-Bali`,`MSTG`, `IELTS`,`TOEFL IBT`,`TOEFL PBT`,`TOEFL CBT`
            FROM admission_rcttest 
            WHERE `FA-cla` = ? 
            LIMIT 1";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo json_encode(['error' => 'SQL preparation failed: ' . $conn->error]);
        exit;
    }
    $stmt->bind_param("s", $fa_cla);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $response = [
            'PointMin1' => $row['PointMin1'] ?? 'N/A',
            'PointMax1' => $row['PointMax1'] ?? 'N/A',
            'PointMin2' => $row['PointMin2'] ?? 'N/A',
            'PointMax2' => $row['PointMax2'] ?? 'N/A',
            'quantity' => $row['quantity'] ?? 'N/A',
            'minimum_scores' => [
                'CDM' => floatval($row['CDM'] ?? 0),
                'CDS' => floatval($row['CDS'] ?? 0),
                'CDE' => floatval($row['CDE'] ?? 0),
                'MSSEC' => floatval($row['MSSEC'] ?? 0),
                'MS1PCBE' => floatval($row['MS1PCBE'] ?? 0),
                'GPAX' => floatval($row['GPAX'] ?? 0),
                'MSTG' => floatval($row['MSTG'] ?? 0),
                'MSTG1' => floatval($row['MSTG-1'] ?? 0),
                'MSTG2' => floatval($row['MSTG-2'] ?? 0),
                'MSTG3' => floatval($row['MSTG-3'] ?? 0),
                'MSTP1' => floatval($row['MSTP-1'] ?? 0),
                'MSTP2' => floatval($row['MSTP-2'] ?? 0),
                'MSTP3' => floatval($row['MSTP-3'] ?? 0),
                'MSTP4' => floatval($row['MSTP-4'] ?? 0),
                'MSTP5' => floatval($row['MSTP-5'] ?? 0),
                'MSAMath1' => floatval($row['MSA-Math1'] ?? 0),
                'MSAMath2' => floatval($row['MSA-Math2'] ?? 0),
                'MSASci' => floatval($row['MSA-Sci'] ?? 0),
                'MSAPhy' => floatval($row['MSA-Phy'] ?? 0),
                'MSAChe' => floatval($row['MSA-Che'] ?? 0),
                'MSABio' => floatval($row['MSA-Bio'] ?? 0),
                'MSASoci' => floatval($row['MSA-Soci'] ?? 0),
                'MSAThai' => floatval($row['MSA-Thai'] ?? 0),
                'MSAEnglish' => floatval($row['MSA-English'] ?? 0),
                'MSAFrench' => floatval($row['MSA-French'] ?? 0),
                'MSAGerman' => floatval($row['MSA-German'] ?? 0),
                'MSAJapan' => floatval($row['MSA-Japan'] ?? 0),
                'MSAKorean' => floatval($row['MSA-Korean'] ?? 0),
                'MSAchinese' => floatval($row['MSA-chinese'] ?? 0),
                'MSASpanish' => floatval($row['MSA-Spanish'] ?? 0),
                'MSABali' => floatval($row['MSA-Bali'] ?? 0),
                'MSIELTS' => floatval($row['IELTS'] ?? 0),
                'MSTOEFLIBT' => floatval($row['TOEFL IBT'] ?? 0),
                'MSTOEFLPBT' => floatval($row['TOEFL PBT'] ?? 0),
                'MSTOEFLCBT' => floatval($row['TOEFL CBT'] ?? 0)
            ]
        ];
        echo json_encode($response);
    } else {
        echo json_encode([
            'minimum_scores' => [
                'CDM' => 0,
                'CDS' => 0,
                'CDE' => 0,
                'MSSEC' => 0,
                'MS1PCBE' => 0,
                'GPAX' => 0,
                'MSTG1' => 0,
                'MSTG' => 0,
                'MSTG2' => 0,
                'MSTG3' => 0,
                'MSTP1' => 0,
                'MSTP2' => 0,
                'MSTP3' => 0,
                'MSTP4' => 0,
                'MSTP5' => 0,
                'MSAMath1' => 0,
                'MSAMath2' => 0,
                'MSASci' => 0,
                'MSAPhy' => 0,
                'MSAChe' => 0,
                'MSABio' => 0,
                'MSASoci' => 0,
                'MSAThai' => 0,
                'MSAEnglish' => 0,
                'MSAFrench' => 0,
                'MSAGerman' => 0,
                'MSAJapan' => 0,
                'MSAKorean' => 0,
                'MSAchinese' => 0,
                'MSASpanish' => 0,
                'MSABali' => 0,
                'MSIELTS' => 0,
                'MSTOEFLIBT' => 0,
                'MSTOEFLPBT' => 0,
                'MSTOEFLCBT' => 0

            ]
        ]);
    }
    $stmt->close();
} else {
    echo json_encode(['error' => 'No FA_cla provided']);
}
$conn->close();
?>