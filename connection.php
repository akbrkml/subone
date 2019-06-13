<?php
    // $serverName = "sub-one.database.windows.net";
    // $connectionInfo = array(
    //     "Database" => "subdb", 
    //     "UID" => "badrun",
    //     "pwd" => "Adele213"
    // );
    
    // $conn = sqlsrv_connect($serverName, $connectionInfo);
    // //Establishes the connection
    // $conn = sqlsrv_connect($serverName, $connectionOptions);
    // if ($conn) {
    //     echo "Koneksi Berhasil";
    // } else {
    //     echo "koneksi gagal";
    // }

    // PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:sub-one.database.windows.net,1433; Database = subdb", "badrun", "Adele213");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>  


