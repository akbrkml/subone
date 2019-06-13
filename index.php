<?php

include "connection.php";
include "form.php";

echo "
<center><table border=1>
<tr>
    <td><b><center>No</td>
    <td><b><center>Full Name</td>
    <td><b><center>Job</td>
    <td><b><center>Date</td>
</tr>";

try {
    $conn = new PDO("sqlsrv:server = tcp:sub-one.database.windows.net,1433; Database = subdb", "badrun", "Adele213");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $tsql = "SELECT * FROM dbo.Persons";
    $getResults = sqlsrv_query($conn, $tsql);

    $number = 1;

    while($var = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)){
        echo "
        <tr>
            <td>$number</td>
            <td>$var[FullName]</td>
            <td>$var[Job]</td>
            <td>$var[DateDesc]</td>
        </tr>";
        $number++;
    }
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


?>
