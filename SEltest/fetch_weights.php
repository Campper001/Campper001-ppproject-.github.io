<?php
include('connect.php');

header('Content-Type: application/json; charset=utf-8');

if (isset($_POST['FA_cla'])) {
    $fa_cla = $_POST['FA_cla'];
    $sql = "SELECT `GPAX%`, `TG`, `TGAT-1`, `TGAT-2`, `TGAT-3`, 
                   `TPAT-1`, `TPAT-2`, `TPAT-3`, `TPAT-4`, `TPAT-5`, PCBE1, SEC,
                   `A-Math1`, `A-Math2`, `A-Science`, `A-Physice`, `A-Chemical`, 
                   `A-Biology`, `A-Society`, `A-Thai`, `A-English`, `A-French`, 
                   `A-German`, `A-Japan`, `A-Korean`, `A-chinese`, `A-Spanish`, `A-Bali`
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
            'weights' => [
                'gpx' => floatval($row['GPAX%'] ?? 0),
                'Tgat' => floatval($row['TG'] ?? 0),
                'Tgat1' => floatval($row['TGAT-1'] ?? 0),
                'Tgat2' => floatval($row['TGAT-2'] ?? 0),
                'Tgat3' => floatval($row['TGAT-3'] ?? 0),
                'Tpat1' => floatval($row['TPAT-1'] ?? 0),
                'Tpat2' => floatval($row['TPAT-2'] ?? 0),
                'Tpat3' => floatval($row['TPAT-3'] ?? 0),
                'Tpat4' => floatval($row['TPAT-4'] ?? 0),
                'Tpat5' => floatval($row['TPAT-5'] ?? 0),
                'AL1' => floatval($row['A-Math1'] ?? 0),
                'AL2' => floatval($row['A-Math2'] ?? 0),
                'ALsci' => floatval($row['A-Science'] ?? 0),
                'ALphy' => floatval($row['A-Physice'] ?? 0),
                'ALchm' => floatval($row['A-Chemical'] ?? 0),
                'ALbio' => floatval($row['A-Biology'] ?? 0),
                'ALscd' => floatval($row['A-Society'] ?? 0),
                'ALthi' => floatval($row['A-Thai'] ?? 0),
                'ALeng' => floatval($row['A-English'] ?? 0),
                'ALfan' => floatval($row['A-French'] ?? 0),
                'ALger' => floatval($row['A-German'] ?? 0),
                'ALjap' => floatval($row['A-Japan'] ?? 0),
                'ALkor' => floatval($row['A-Korean'] ?? 0),
                'ALchi' => floatval($row['A-chinese'] ?? 0),
                'ALsph' => floatval($row['A-Spanish'] ?? 0),
                'ALbai' => floatval($row['A-Bali'] ?? 0),
                'SEC' => floatval($row['SEC'] ?? 0),
                'PCBE1' => floatval($row['PCBE1'] ?? 0)
            ]
        ];
        echo json_encode($response);
    } else {
        echo json_encode([
            'weights' => [
                'gpx' => 0,
                'tgat' => 0,
                'Tgat1' => 0,
                'Tgat2' => 0,
                'Tgat3' => 0,
                'Tpat1' => 0,
                'Tpat2' => 0,
                'Tpat3' => 0,
                'Tpat4' => 0,
                'Tpat5' => 0,
                'AL1' => 0,
                'AL2' => 0,
                'ALsci' => 0,
                'ALphy' => 0,
                'ALchm' => 0,
                'ALbio' => 0,
                'ALscd' => 0,
                'ALthi' => 0,
                'ALeng' => 0,
                'ALfan' => 0,
                'ALger' => 0,
                'ALjap' => 0,
                'ALkor' => 0,
                'ALchi' => 0,
                'ALsph' => 0,
                'ALbai' => 0,
                'SEC' => 0,
                'PCBE1' => 0
            ]
        ]);
    }
    $stmt->close();
} else {
    echo json_encode(['error' => 'No FA_cla provided']);
}
$conn->close();
?>