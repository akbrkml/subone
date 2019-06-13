<?php
    $serverName = "sub-one.database.windows.net";
    $connectionInfo = array(
        "Database" => "subdb", 
        "UID" => "badrun",
        "pwd" => "Adele213"
    );
    
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if ($conn) {
        echo "Koneksi Berhasil";
    } else {
        echo "koneksi gagal";
    }
?>  


