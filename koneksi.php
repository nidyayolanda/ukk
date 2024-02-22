<?php
$server= "localhost";
$username = "root";
$password = "";
$db = "spp";

$koneksi = new mysqli
("$server", "$username", "$password", "$db");

if(!$koneksi){
    die(mysql_error($koneksi));
}

?>