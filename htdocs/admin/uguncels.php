
<?php
session_start();

$con = mysqli_connect('localhost', 'root', 'root');
mysqli_select_db($con, 'halisaha');


$id = $_POST['id'];
$name = $_POST['username'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$durum = $_POST['durum'];


$s = "select * from users where id='$id'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


$req = "update  users set   username='$name' ,email='$email' ,tel='$tel' ,status = '$durum' where id='$id'";
mysqli_query($con, $req);
echo "registration succesful";

header('Location: uyeoptions.php');


?>