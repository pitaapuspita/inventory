<?php

$conn = mysqli_connect('localhost','root','','db_inventory_ziskapuspita');

if(!$conn){
    die('koneksi gagal' .mysqli_connect_errno());
}