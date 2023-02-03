

<html>

<head>

    <title>Üye Giriş Sistemi</title>

    <link rel="stylesheet" href="stylem.css">

    <meta charset="utf-8">
    <title>Halısaham</title>
    <link rel="stylesheet" href="stylem.css">
    <script src="https://kit.fontawesome.com/bff4935473.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">

    <style type="text/css">



        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13.5px;
        }


        }
    </style>


</head>

<body>
<section  style="background: white" class="menu" id="menu">
    <div id="logo" >    <img src="img/logo.jpg" width="200" height="70" alt="Halısaham" />
    </div>
    <?php
    include("Navbar.php");
    ?>


</section>
<br><br><br><br><br><br><br><br><br><br><br><br>
<section>
    <form  style="background: 800px" action="users/uyelogin.php" method="POST">
        <table align="center">
            <tr>
                <td style="width:350px"><input type="hidden" name="id" ></td>
            </tr>
            <tr>


                <td>KULLANICI ADI</td>
                <td>:</td>
                <td style="width:350px"><input type="text" name="name" id="username"></td>
            </tr>
            <tr>
                <td>ŞİFRE</td>
                <td>:</td>
                <td><input type="password" name="pass" id="sifre"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input  class="button" type="submit" value="Giris"></td>
            </tr>
        </table>
    </form>
  </section>
<br><br><br><br><br><br><br><br><br><br><br><br>


<?php
include("Footer.php")
?>

</body>

</html>