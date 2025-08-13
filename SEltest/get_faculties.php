<?php
include('connect.php');

if (isset($_POST['university'])) {
    $university = $_POST['university'];
    $sql = "SELECT DISTINCT `FA-cla` FROM admission_rcttest WHERE `UN` = ? AND `FA-cla` IS NOT NULL ORDER BY `FA-cla`";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $university);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<li class="p-2 hover:bg-gray-200 cursor-pointer" onclick="selectFA(\'' . $row['FA-cla'] . '\')">' . $row['FA-cla'] . '</li>';
        }
    } else {
        echo '<li class="p-2 text-gray-500">ไม่พบข้อมูล</li>';
    }
    $stmt->close();
}
$conn->close();
?>