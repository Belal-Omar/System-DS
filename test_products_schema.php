<?php
include 'config.php';
/** @var mysqli $conn */
$res = $conn->query('DESCRIBE products');
if ($res) {
    while($row = $res->fetch_assoc()) {
        echo $row['Field'] . " " . $row['Type'] . "<br>\n";
    }
} else {
    echo "Query failed: " . $conn->error;
}
?>
