<?php include '../config/config.php';

$searchTerm = $_GET['word'];
$query = "SELECT * FROM customer_info WHERE id = '".$searchTerm."'";
while ($row = mysql_fetch_array($query)) {
    $data[] = $row['id'];
}
//return json data
echo json_encode($data);

?>