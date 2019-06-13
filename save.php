<?php ob_start();
include "connection.php";

$fullname = $_POST['fullname'];
$job      = $_POST['job'];
$date     = date("Y-m-d");

$conn->exec("INSERT INTO [dbo].[Persons] (FullName,Job,DateDesc) 
VALUES ('$fullname','$job','$date')");

header('location:index.php');
?>
