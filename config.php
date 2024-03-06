<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "ukk04";

$koneksi = mysqli_connect($hostname,$username,$password,$database);

if (!$koneksi){
    echo "Koneksi Gagal";
}
