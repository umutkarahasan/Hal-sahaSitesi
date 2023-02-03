<?php
$user = "umut";
$pass = "123456";
session_start();
if(!isset($_SESSION["login"])){
    echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{


    ?>


    <html>
    <head>
        <title>Halısaham</title>
        <link rel="stylesheet" href="/admin/stylem.css">
        <meta charset="utf-8">
        <script src="https://kit.fontawesome.com/bff4935473.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">

        <style>
            #menu{
                height: 80px;
                padding: 0 20px;
                background-color: white;
            }

            #logo{
                font-size: 30px;
                line-height: 80px;
                color :#003666;
                float: left;
            }

            nav{
                float: right;
                line-height: 80px;
                color: black;

            }
            nav a:link{
                text-decoration: none;
                margin-right: 25px;
                color :floralwhite;
            }

            nav a:hover{
                border-bottom: 2px solid #003666 ;
            }

            nav a:visited{
                text-decoration: none;
                margin-right: 25px;
                color : black;;
            }
        </style>


    </head>
    <body>
    <section id="menu" >
        <div id="logo" >   <img src="/img/logo.jpg" width="200" height="70" alt="Halısaham" /> <?php print 'Hoş geldiniz '.$user.''; ?>
        </div>


        <nav>
            <a style="color: black" href="admin.php"><i class="fa-solid fa-user ikon"></i>ADMİN PANELİ</a>
            <a style="color: black" href="sahaoptions.php">SAHA İŞLEMLERİ</a>
            <a style="color: black" href="uyeoptions.php">ÜYE İŞLEMLERİ</a>
            <a style="color: black" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket ikon"></i></a>

        </nav>
    </section>

    <div class="konteynır">
        <div style="float: left;background:white">


        </div>

    </div>


    </section>


    </body>

    </html>




    <?php
}
?>