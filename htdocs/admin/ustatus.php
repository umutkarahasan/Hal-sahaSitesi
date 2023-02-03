<?php // veri tabanı bağlantısı
$ip = "localhost"; //host
$user = "root";  // host id
$password = "root";  // password local olduğu için varsayılan şifre boş
$db = "halisaha"; // db adı

//bağlantı
try{
    $db = new PDO("mysql:host=$ip;dbname=$db",$user,$password);
    // türkçe karakter için utf8
    $db->exec("SET CHARSET UTF8");
    //eğer hata olursa pdo nun exception komutu ile ekrana yazdırıyoruz
}catch(PDOException $e){
    die ("Hata var");
}
?>

<?php


if(!isset($_GET['id']))
    $_GET['id']=0;
$users=$db->prepare("SELECT * FROM users WHERE id=?");
$users->execute(array(intval($_GET['id'])));

$users=$users->fetch();





?>



<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Halısaham</title>
    <link rel="stylesheet" href="stylem.css">
    <script src="https://kit.fontawesome.com/bff4935473.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">
</head>

<body>
<section style="background: white" class="" id="">
    <div id="logo" >    <img src="img/logo.jpg" width="200" height="70" alt="Halısaham" />


        <nav>
            <a style="color: black" href="index.php"><i class="fa-solid fa-user ikon"></i>ADMİN PANELİ</a>
            <a style="color: black" href="../index.php"><i class="fa-solid fa-arrow-right-from-bracket ikon"></i></a>
            <a style="color: black" href="sahaoptions.php">SAHA İŞLEMLERİ</a>
            <a style="color: black" href="uyeoptions.php">ÜYE İŞLEMLERİ</a>
        </nav>
</section>

<style>
    .menu
    {
        list-style:none;
        margin:0; padding:0;
    }

    .menu li
    {
        margin:5px;
    }

    .menu a
    {
        display:block;
        width:150px;
        text-decoration:none;
        color:silver;
        font-weight:bold;
        padding:5px;
        background:grey;
        border-left:5px solid black;
        border-right:5px solid white;
        line-height:25px;
    }

    .menu a:hover
    {
        margin-left:5px;
        border-left:5px solid white;
        border-right:5px solid black;
        color:red;
    }
    .profil{
        width: auto;
        height: auto;
        background-color: gray;
        margin:25px;
        padding: 25px;
        display: flex;
        position: relative;
        border-style: double;

    }
    .solmenu{
        height: auto;
        padding: 50px;
        justify-content: space-between;


    }
    a{
        text-decoration: none;
        line-height: 50px;
        color: white;
        font-family: "Calisto MT";


    }
    li{
        list-style-type: none;
    }
    .orta{
        width: 250px;
        height: 250px;
        justify-content: space-between;
        margin-left: 250px;

    }
    .sag{
        margin-left: 250px;
        justify-content: space-between;
        font-family: "Calisto MT";
        color: black;



    }
    #sahadi{
        padding: 10px;
        margin: 5px;

    }
    #detay{
        padding: 10px;
        margin: 5px;
    }
    #fiyat{
        padding: 10px;
        margin: 5px;
    }
    #tel{
        padding: 10px;
        margin: 5px;
    }
    #radio{
        padding: 10px;
        margin: 5px;
        color: white;
    }
    #saha{
        width: 200px;
        color: white;
    }
    .button {
        background-color: white;
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13.5px;
        margin-left: 150px;
        margin-top: 15px;
        border-radius: 5px;
    }
    #button{
        background-color: white;
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13.5px;
        margin-left: 50px;
        margin-top: 15px;
        border-radius: 5px;
    }

</style>



<div class="profil">




    <div class="sag">
        <form action='uguncels.php' method="post">
            <table width="700"   height="150" ">
            <tr>

                <td><input type="hidden" id="sahadi" name="id"  value="<?php echo $users['id']?>" "></td>
            </tr>
            <tr>
                <td><label id="saha">SAHA ADI : </label> </td>
                <td><input type="text" id="sahadi" name="username"  value="<?php echo $users['username']?>" "></td>
            </tr>

            <tr>
                <td> <label id="saha">FİYAT : </label>  </td>
                <td><input type="text" id="fiyat" name="tel" value="<?php echo $users['tel']?>" "></td>
            </tr>

            <tr>
                <td>  <label id="saha">TELEFON : </label> </td>
                <td><input type="text" id="tel" name="email" value="<?php echo $users['email']?>" "></td>
            </tr>

            <tr>
                <td>  <label id="saha">DURUM : </label> </td>
                <td><input type="number" min="0" max="1" id="tel" name="durum" value="<?php echo $users['status']?>" "></td>
                <td><label for=""><----- Buradan durumu 1 yaparak sahayı görünür yapabilirsiniz</label></td>
            </tr>

            <td colspan="2"><button class="button" type="submit" name="ekle" value="ekle">GÜNCELLE</button></td>
            </tr>

            <tr>
                <td colspan="2"></td>
            </tr>

            </table>
        </form>
        <?php

        ?>

    </div>


</div>






</body>
</html>

