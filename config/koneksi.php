<?php

$conn = mysqli_connect('localhost','root','','db_inventory_nazrina_xi4');

if(!$conn){
    die("koneksi gagal". mysqli_connect_error());
}