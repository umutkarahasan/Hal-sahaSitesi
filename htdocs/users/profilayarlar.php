
<?php
session_start();

if(isset($_SESSION["name"])&&isset($_SESSION["pass"]))



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
<section id="menu">
    <div id="logo">Halısaham</div>

    <nav>
        <a style="color: black" href="index.php"><i class="fa-solid fa-user ikon"></i>Benim Saham</a>
        <a style="color: black" href="profilayarlar.php"><i class="fa-solid fa-user ikon"></i>Saha Ekle</a>
        <a style="color: black" href="../index.php"><i class="fa-solid fa-arrow-right-from-bracket ikon"></i></a>
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
        <form action='sahaekle.php' method="post">

            <table width="500"   height="118" ">
            <?php
            $name = $_SESSION['name'];
            $con=mysqli_connect("localhost","root","root","halisaha");
            $sql="select * from users where username like '%$name%'";
            $ac=mysqli_query($con,$sql);

            $category = mysqli_fetch_array($ac,MYSQLI_ASSOC);


            ?>
            <tr>

                <td><input type="hidden" id="sahadi" name="id" value="<?php echo $category['id']; ?>" "></td>
            </tr>
                <tr>
                    <td><label id="saha">SAHA ADI : </label> </td>
                    <td><input type="text" id="sahadi" name="sahaadi"  "></td>
                </tr>
                <tr>
                    <td><label id="saha">SAHA DETAY : </label>  </td>
                    <td><input type="text" id="detay" name="detay" "></td>
                </tr>
                <tr>
                    <td> <label id="saha">FİYAT : </label>  </td>
                    <td><input type="text" id="fiyat" name="fiyat" "></td>
                </tr>

                <tr>
                    <td>  <label id="saha">TELEFON : </label> </td>
                    <td><input type="text" id="tel" name="tel" "></td>
                </tr>
            <tr>
                <td><label id="saha">ŞEHİR : </label></td>
                <td>
                    <select  name="city_name" id="fetch">
                        <?php
                        $con=mysqli_connect("localhost","root","root","halisaha");
                        $sql="select * from city";
                        $ac=mysqli_query($con,$sql);

                        while ($category = mysqli_fetch_array($ac,MYSQLI_ASSOC)):;
                            ?>
                            <option value="<?php echo $category["city_id"];

                            ?>">
                                <?php echo $category["city_name"];

                                ?>
                            </option>
                        <?php
                        endwhile;

                        ?>
            </tr>

                <tr>
                    <td>  <label id="saha">Resim : </label> </td>
                    <td><input type="file" name="resim"></td>
                </tr>

                    <td colspan="2"><button class="button" type="submit" name="ekle" value="ekle">SAHAYI KAYDET</button></td>
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
<?php
include("Footer.php")

?>
