<?php
session_start();

$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'halisaha');



$id=$_POST['id'];
$detay=$_POST['detay'];
$fiyat=$_POST['fiyat'];
$tel=$_POST['tel'];
$resim=$_POST['resim'];



$s="select * from saha where saha_id='$id'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);


$req="update  saha set   saha_pic='$resim' ,saha_prize='$fiyat' ,saha_tel='$tel' ,saha_text = '$detay' where saha_id='$id'";
mysqli_query($con,$req);
echo "registration succesful";

header('Location: index.php');

?>
