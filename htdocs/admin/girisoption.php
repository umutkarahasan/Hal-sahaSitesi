<?php
$user = "umut";
$pass = "123456";
session_start();
ob_start();
if(($_POST["admin_name"]==$user) and ($_POST["admin_sifre"]==$pass)){
    $_SESSION["login"] = "true";
    $_SESSION["admin_name"] = $user;
    $_SESSION["admin_sifre"] = $pass;
    header("Location:admin.php");
}else{
    echo "Kullancı Adı veya Şifre Yanlış.<br>";
    echo "Giriş sayfasına yönlendiriliyorsunuz.";
    header("Refresh: 2; url=./login.php");
}
ob_end_flush();
?>