<?php
require_once ("connection.php");

$sql = $connection->prepare("SELECT * FROM commentSection ORDER BY name date, comment asc");

// $result = mysqli_query($connection, $sql, $resultmode = MYSQLI_STORE_RESULT);
// $record_set = array();
// while ($row = mysqli_fetch_assoc($result)) {
//     array_push($record_set, $row);
// }
// mysqli_free_result($result);

// mysqli_close($connection);
// echo json_encode($record_set);
?>