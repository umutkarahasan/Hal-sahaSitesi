
<style>
    .button
    {
        display: block;
        width: 150px;
        height: 30px;
        background-color: red;
        color: white;
        text-decoration: none;
        margin: 10px;
        border-radius: 5px;
        font-size: 20px;
        padding: 5px;
    }
</style>







<?php

try {
    $baglanti = new PDO("mysql:host=localhost;dbname=halisaha", "root", "root");
    $baglanti->exec("SET NAMES utf8");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}
if(!isset($_GET['id']))
    $_GET['id']=0;
$urun=$baglanti->prepare("DELETE FROM saha where saha_id=?");
$urun->execute(array(intval($_GET['id'])));
$urun=$urun->fetch();
header("Location: index.php");

?>