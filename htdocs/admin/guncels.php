<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'root');
mysqli_select_db($con, 'halisaha');


$id = $_POST['id'];
$name = $_POST['sahaadi'];
$fiyat = $_POST['fiyat'];
$tel = $_POST['tel'];
$durum = $_POST['durum'];


$s = "select * from saha where saha_id='$id'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


$req = "update  saha set   saha_name='$name' ,saha_prize='$fiyat' ,saha_tel='$tel' ,durum = '$durum' where saha_id='$id'";
mysqli_query($con, $req);
echo "registration succesful";

header('Location: sahaoptions.php');
