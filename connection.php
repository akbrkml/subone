<?php
    $serverName = "sub-one.database.windows.net";
    $connectionOptions = array(
        "Database" => "subdb", 
        "UID" => "badrun",
        "PWD" => "Adele213",
        "CharacterSet" => "UTF-8"
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if ($conn) {
        echo "Koneksi Berhasil";
    } else {
        echo "koneksi gagal";
    }
?>  


