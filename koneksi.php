<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'tourtravel_db';
    
    $conn = mysqli_connect('localhost', 'root', '', 'tourtravel_db');
    if($conn){
        //echo "Koneksi Berhasill";
    }
    mysqli_select_db($conn, $db);
?>