<?php
session_start();

  if(isset($_SESSION["name"])&&isset($_SESSION["pass"]))

      $name = $_SESSION['name'];

                        $con=mysqli_connect("localhost","root","root","halisaha");
                        $sql="select * from users username where username like '%$name%'";
                        $ac=mysqli_query($con,$sql);


?>




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
    #fontt{
        font-size: 20px ;
        font-weight: bold;
    }
    #font {
        font-family: Arial, Helvetica, sans-serif;
        color: white;
    }
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13.5px;
        margin: auto;
</style>




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
    <div id="logo" >   <img src="/img/logo.jpg" width="200" height="70" alt="Halısaham" /> <?php print 'Hoş geldiniz '.$_SESSION['name']; ?>
    </div>


    <nav>
        <a style="color: black" href="index.php"><i class="fa-solid fa-user ikon"></i>Benim Saham</a>
        <a style="color: black" href="profilayarlar.php"><i class="fa-solid fa-user ikon"></i>Saha Ekle</a>
        <a style="color: black" href="../index.php"><i class="fa-solid fa-arrow-right-from-bracket ikon"></i></a>
    </nav>
</section>


<?php





?>

<div class="profil">

    <div class="solmenu">
        <ul class="menu">
            <li> <a href="index.php"></i> SAHAM</a> </li>


        </ul>
    </div>
    <div class="kutu" >
        <table class="table" >
            <thead>
            <tr id="fontt">
                <td>*</td>
                <td>SAHA İSMİ</td>
                <td>FİYAT</td>
                <td>TELEFON NUMARASI</td>
                <td>AÇIKLAMA</td>
                <td>ŞEHİR</td>
            </tr>
            </thead>
            <tbody>
            <?php
            $name = $_SESSION['name'];

            $conn = mysqli_connect("localhost","root","root","halisaha");
            $query="select * from saha s ,city c,users u where (c.city_id=s.city_id) and (u.id=s.id) and durum='1' and s.username like '%$name%'";
            $r = mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($r)){
                ?>
                <tr>
                    <td><img src="/img/<?php echo $row['saha_pic']?>" class="img-responsive img-thumnail" width="250"></td>
                    <td id="font"><?php echo $row['saha_name']?></td>
                    <td id="font"><?php echo $row['saha_prize']?></td>
                    <td id="font"> <?php echo $row['saha_tel']?></td>
                    <td id="font"><?php echo $row['saha_text']?></td>
                    <td id="font"><?php echo $row['city_name']?></td>
                    <td><a class="button" href="sahageuncelle.php?id=<?php echo $row['saha_id'] ?>">Güncelle</a></td>
                    <td><a class="button" href="sahasil.php?id=<?php echo $row['saha_id'] ?>">Sil</a></td>



                </tr>

                <?php
            }
            ?>
            </tbody>
        </table>

    </div>
</div>




        <?php
    include("Footer.php")
    ?>
    
    </body>
</html>
