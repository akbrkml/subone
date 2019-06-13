<?php

include "connection.php";
include "form.php";

echo "
<table border=0>
<tr>
    <td><b>No</td>
    <td width=250><b>Full Name</td>
    <td width=200><b>Job</td>
    <td width=100><b>Date</td>
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
