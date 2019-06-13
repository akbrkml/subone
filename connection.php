<?php
    $connectionInfo = array(
        "UID" => "badrun@sub-one", 
        "pwd" => "Adele213", 
        "Database" => "subdb"
    );
    $serverName = "tcp:sub-one.database.windows.net,1433";
    
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if ($conn) {
        echo "Koneksi Berhasil";
    } else {
        echo "koneksi gagal";
    }
?>  


