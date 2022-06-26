<?php
include("config.php");
?>


<html lang="tr">
<head>

    <title>Halısaham</title>
    <link rel="stylesheet" href="stylem.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" rel=""></script>


    <script src="https://kit.fontawesome.com/bff4935473.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">
<style>
    .box {
        margin-left: 10%;
        margin-top: 2%;
        margin-bottom: 2%;
    }

    .box select {
        background-color: #0563af;
        color: white;
        padding: 12px;
        width: 250px;
        border: none;
        font-size: 20px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
        -webkit-appearance: button;
        outline: none;
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
    }


    .box select option {
        padding: 30px;
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

<div class="box" id="filter">
    <span>İL SEÇİNİZ &nbsp;</span>
    <select  name="city_name" id="fetch">
        <?php
        $con=mysqli_connect("localhost","root","root","halisaha");
        $sql="select * from city";
        $ac=mysqli_query($con,$sql);

        while ($category = mysqli_fetch_array(
            $ac,MYSQLI_ASSOC)):;
            ?>
            <option value="<?php echo $category["city_name"];

            ?>">
                <?php echo $category["city_name"];

                ?>
            </option>
        <?php
        endwhile;

        ?>
    </select>
</div>

<div class="kutu" >
    <table class="table" >
        <thead>
        <tr>
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
        $conn = mysqli_connect("localhost","root","root","halisaha");
        $query="select saha_pic,saha_name,saha_prize,saha_tel,saha_text,c.city_name from saha s ,city c where c.city_id=s.city_id and durum='1'";
        $r = mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($r)){
        ?>
            <tr>
                <td><img src="img/<?php echo $row['saha_pic']?>" class="img-responsive img-thumnail" width="250"></td>
                <td><?php echo $row['saha_name']?></td>
                <td><?php echo $row['saha_prize']?></td>
                <td><?php echo $row['saha_tel']?></td>
                <td><?php echo $row['saha_text']?></td>
                <td><?php echo $row['city_name']?></td>
               <td><a class="button" href="ddsaha.php">DETAYLAR</a></td>


            </tr>

        <?php
        }
        ?>
        </tbody>
    </table>

</div>

<script type="text/javascript">
    $(document).ready(function (){
        $("#fetch").on('change',function (){
            var value = $(this).val();
          //  alert(value);
            $.ajax({
                url:"fetch.php",
                type:"POST",
                data:'request='+value,
                success:function (data){
                    $(".kutu").html(data);
                }
            });
        });
    });
</script>

<?php
include("Footer.php")
?>

</body>
</html>



















