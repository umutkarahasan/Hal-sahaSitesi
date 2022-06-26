<?php
sleep(1);
?>
<?php
include("config.php");
if (isset($_POST['request'])){
    $request = $_POST['request'];
    $conn = mysqli_connect("localhost","root","root","halisaha");

    $query ="select saha_id,saha_pic,saha_name,saha_prize,saha_tel,saha_text,c.city_name from saha s ,city c where c.city_id=s.city_id and c.city_name ='$request' and durum='1'";
    $result = mysqli_query($conn,$query);
    $count =mysqli_num_rows($result);

?>
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
    }
</style>
<table class="table" id="fetch">
    <?php
    if ($count){


    ?>
    <thead>
    <tr>
        <td>*</td>
        <td>SAHA İSMİ</td>
        <td>FİYAT</td>
        <td>TELEFON NUMARASI</td>
        <td>AÇIKLAMA</td>
        <td>ŞEHİR</td>
    </tr>
    <?php
    }else{
        echo "Sorry no record Found";
    }
    ?>
    </thead>
    <tbody>
    <?php
     while($row = mysqli_fetch_assoc($result)){

     ?>
    <tr class="abc">
        <td><?php echo $row["saha_id"]?></td>
        <td><img src="img/<?php echo $row['saha_pic']?>" class="img-responsive img-thumnail" width="250"></td>
        <td><?php echo $row['saha_name']?></td>
        <td><?php echo $row['saha_prize']?></td>
        <td><?php echo $row['saha_tel']?></td>
        <td><?php echo $row['saha_text']?></td>
        <td><?php echo $row['city_name']?></td>
        <td><a class="button" href="ddsaha.php?id=<?php echo $row['saha_id'] ?>">DETAYLAR</a></td>

    </tr>
    <?php
     }
    ?>
    </tbody>
</table>


    <?php
}
    ?>



