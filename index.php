<?php

include "connection.php";
include "form.php";

echo "
<table border=1>
<tr>
    <td><b><center>No</td>
    <td width=400><b><center>Full Name</td>
    <td width=300><b><center>Job</td>
    <td width=100><b><center>Date</td>
</tr>";

    $sql_select = "SELECT * FROM [dbo].[Persons]";
    $stmt = $conn->query($sql_select);
    $getResults = $stmt->fetchAll(); 

    $number = 1;

    foreach($getResults as $var){
        echo "
        <tr>
            <td>$number</td>
            <td>$var[FullName]</td>
            <td>$var[Job]</td>
            <td>$var[DateDesc]</td>
        </tr>";
        $number++;
    }

?>
