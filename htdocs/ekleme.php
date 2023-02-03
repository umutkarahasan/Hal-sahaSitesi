<?php
$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'halisaha');

$ad=$_POST['ad'];
$username=$_POST['username'];
$soyad=$_POST['soyad'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$sifre=$_POST['sifre'];


$s="select * from users where email='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);


$req="insert into users(username,ad,soyad,tel,email,sifre) values ('$username','$ad','$soyad','$tel','$email','$sifre') ";
mysqli_query($con,$req);
echo "registration succesful";

header('Location: GirisPage.php');

?>

