//pdo ile yapabiliriz öyle yaparsak daha iyi olabilir

<?php


$con=mysqli_connect('localhost','root','root');
mysqli_select_db($con,'halisaha');

$kadi = $_POST['kadi'];
$sifre = $_POST['paro'];

$sql_check = mysqli_query($con,"select * from users where username='".$kadi."' and sifre='".$sifre."' and status='1'") or die($mysqli_error());

if ($uyebilgi = mysqli_fetch_assoc($sor)){

    $_SESSION['id'] = $uyebilgi['id'];
    $_SESSION['kuladi'] = $uyebilgi['kuladi'];
    $_SESSION['adisoyadi'] = $uyebilgi['adi_soyadi'];
    header('Location: users/default.php');
}



else {
    if($kadi=="" or $sifre=="") {
        echo "Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a>";
    }
    else {
        echo "Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a>";
    }
}

ob_end_flush();
?>


