<?php

$servername ="localhost:3306";
$dBUsername ="mahs_mhartsfield";
$dBPassword ="mustangs";
$dBname = "mahs_mhartsfield";

$conn = mysqli_Connect($servername, $dBUsername, $dBPassword, $dBname);


if (!$conn) {
    die("Connection failed:" .mysqli_Connect_error());
}