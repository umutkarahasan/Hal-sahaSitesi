<?php

session_start();

$kullaniciadi = $_SESSION['kuladi'];

$adisoyadi = $_SESSION['ad'];

if ($kullaniciadi == "" || $adisoyadi == "") {

    echo "<script>location.href='index.php';</script>";

}
?>
<html>

<head>

<style type="text/css">
    body {

    font-family:Tahoma;

font-size:13px;

color:#666666;

padding:20px;

}

#cikis {

font-family:Tahoma;

font-size:13px;

color:#01A1FE;

text-decoration:none;

font-weight:bold;

}

#cikis:hover {

color:#666666;

text-decoration:underline;

}
 </style>

<title>Üye Giriş Sistemi</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<?php

echo "“Hoşgeldin”";

echo $adisoyadi;

echo “?><br><?php”;

echo "“Kullanıcı Adın”";

echo $kullaniciadi;

echo “?><br><?php”;
?>

<a href="cikis.php" id="cikis">Çıkış Yap</a>

</body>

</html>
