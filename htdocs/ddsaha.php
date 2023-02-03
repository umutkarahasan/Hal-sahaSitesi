<?php

include("baglan.php")
?>


<?php

if(!isset($_GET['id']))
    $_GET['id']=0;
$saha=$db->prepare("SELECT * FROM saha WHERE saha_id=?");
$saha->execute(array(intval($_GET['id'])));

$saha=$saha->fetch();


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

<section style="background: white" class="menu" id="menu">
    <div id="logo" >    <img src="img/logo.jpg" width="200" height="70" alt="Halısaham" />
    </div>

    <?php
    include("Navbar.php")
    ?>
</section>


<div style="margin-left: 2%;margin-top: 5%;width: 1400px;height: 750px">

    <div style="margin-left: 5%; ">
        <H1><?php echo $saha['saha_name']?></H1>
        <h3><?php echo $saha['saha_text'] ?></h3>
    </div>
      <div class="div">  <img style="float: right" src="img/<?php echo $saha['saha_pic'] ?>">
          <div style="margin-bottom: 80%;margin-left: auto;float: left" >
              <label  style="margin-left: 10%;font-size: 40px">FİYAT : <?php echo $saha['saha_prize'] ?></label>
              <br>
              <label  style="margin-left: 10%;font-size: 40px">REZERVASYON İÇİN ARAYIN : <?php echo $saha['saha_tel'] ?></label>
              <label  style="margin-left: 10%"></label>

          </div>

      </div>

    </div>











<?php
include("Footer.php")
?>

</body>
</html>
