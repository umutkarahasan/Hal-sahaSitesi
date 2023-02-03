<?php
session_start();

$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'halisaha');




$city=$_POST['city_name'];
$sahaadi=$_POST['sahaadi'];
$detay=$_POST['detay'];
$fiyat=$_POST['fiyat'];
$tel=$_POST['tel'];
$resim=$_POST['resim'];
$name = $_SESSION['name'];
$id=$_POST['id'];



$s="select saha_pic,saha_name,saha_prize,saha_tel,saha_text,s.username,u.id,city_id from saha s ,users u where s.id=u.id";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);


$req="insert into saha(saha_pic,saha_name,saha_prize,saha_tel,saha_text,username,id,city_id) values ('$resim','$sahaadi','$fiyat','$tel','$detay','$name','$id','$city') ";
mysqli_query($con,$req);
echo "registration succesful";

header('Location: index.php');

?>
