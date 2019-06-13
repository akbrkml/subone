<?php ob_start();
include "connection.php";

$fullname = $_POST['fullname'];
$job      = $_POST['job'];
$date     = date("Y-m-d");

$sql = "INSERT INTO Persons(FullName,Job,DateDesc) VALUES (?, ?, ?)";
$params = array('$fullname','$job','$date');

$stmt = sqlsrv_query($conn, $sql, $params);

if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
} else {
    echo "Record add successfully";
}

header('location:index.php');
?>
