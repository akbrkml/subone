<?php
    $connectionInfo = array(
        "UID" => "badrun", 
        "pwd" => "Adele213", 
        "Database" => "subdb"
    );
    $serverName = "sub-one.database.windows.net";
    
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if ($conn) {
        echo "Koneksi Berhasil";
    } else {
        echo "koneksi gagal";
    }
?>  


