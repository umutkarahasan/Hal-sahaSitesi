<html lang="tr">
    <head>
    <meta charset="utf-8">
        <title>Halısaham</title>
        <link rel="stylesheet" href="stylem.css">
        
	<link href="register.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://kit.fontawesome.com/bff4935473.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">
        <style>
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
            }
        </style>
    </head>
    
    <body>
    <section style="background: white" class="menu" id="menu">
        <div id="logo" >    <img src="img/logo.jpg" width="200" height="70" alt="Halısaham" />
        </div>


        <?php
        include("Navbar.php")
        ?>

    </section>



    <br><br><br><br><br><br><br>



    <form action='ekleme.php' method="post">
        <table width="328"   height="118" align="center">
            <tr>
                <td> Kullanıcı Adı : </td>
                <td><input type="text" id="username" name="username" value="Lütfen Boş Bırakmayınız!" onclick="document.getElementById('username').value=''"></td>
            </tr>
            <tr>
                <td> Ad : </td>
                <td><input type="text" id="ad" name="ad" value="Lütfen Boş Bırakmayınız!" onclick="document.getElementById('ad').value=''"></td>
            </tr>
            <tr>
                <td> Soyad : </td>
                <td><input type="text" id="soyad" name="soyad" value="Lütfen Boş Bırakmayınız!" onclick="document.getElementById('soyad').value=''"></td>
            </tr>

            <tr>
                <td>  Telefon : </td>
                <td><input type="text" id="tel" name="tel" value="Lütfen Boş Bırakmayınız!" onclick="document.getElementById('tel').value=''"></td>
            </tr>
            <tr>
                <td>  E-mail : </td>                <td><input type="text" id="email" name="email" value="Lütfen Boş Bırakmayınız!" onclick="document.getElementById('email').value=''"></td>
            </tr>
            <tr>
                <td>  Şifre : </td>
                <td><input type="password" id="sifre" name="sifre" value="Lütfen Boş Bırakmayınız!" onclick="document.getElementById('sifre').value=''"></td>
            </tr>
            <tr>
                <td colspan="2"><button class="button" type="submit" name="ekle" value="ekle">KAYIT OL</button></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>

        </table>
    </form>

    <br><br><br><br><br><br><br><br><br><br><br><br>




    <?php
    include("Footer.php")
    ?>
    
    </body>
</html>