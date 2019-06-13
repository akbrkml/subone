<?php
    $serverName = "sub-one.database.windows.net";
    $connectionOptions = array(
        "Database" => "subdb", 
        "Uid" => "badrun",
        "PWD" => "Adele213"
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    // $tsql= "SELECT * FROM Persons";
    // $getResults= sqlsrv_query($conn, $tsql);
    // echo ("Reading data from table" . PHP_EOL);
    // if ($getResults == FALSE)
    //     echo (sqlsrv_errors());
    // while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    //  echo ($row['ID'] . " " . $row['FullName'] . PHP_EOL);
    // }
    // sqlsrv_free_stmt($getResults);
?>  


