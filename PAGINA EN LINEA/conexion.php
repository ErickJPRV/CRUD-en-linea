<?php
function connection() {
    $host= 'localhost';
    $user= "root";
    $pass="";
    $bd ="articulos";
    $connect=mysqli_connect($host,$user,$pass,$bd);
    mysqli_select_db($connect,$bd);
    return $connect;
}
?>;