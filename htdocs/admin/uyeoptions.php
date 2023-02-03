
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script src="https://kit.fontawesome.com/bff4935473.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">
    <script>  $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

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
<section id="menu" >
    <div id="logo" >   <img src="/img/logo.jpg" width="200" height="70" alt="Halısaham" />
    </div>


    <nav>
        <a style="color: black" href="admin.php"><i class="fa-solid fa-user ikon"></i>ADMİN PANELİ</a>
        <a style="color: black" href="sahaoptions.php">SAHA İŞLEMLERİ</a>
        <a style="color: black" href="uyeoptions.php">ÜYE İŞLEMLERİ</a>
        <a style="color: black" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket ikon"></i></a>

    </nav>
</section>


<?php
$con=mysqli_connect("localhost","root","root","halisaha");
$sql="select * from users";
$ac=mysqli_query($con,$sql);


?>


<div class="" >
    <table class="display" id="myTable" >
        <thead>
        <tr>
            <td>KULLANICI ADI</td>
            <td>İSİM</td>
            <td>SOY İSİM</td>
            <td>TELEFON</td>
            <td>E_MAİL</td>
            <td>DURUM</td>

        </tr>
        </thead>
        <tbody>
        <?php
        $conn = mysqli_connect("localhost","root","root","halisaha");
        $query="select * from users ";
        $r = mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($r)){
            ?>
            <form action="status.php" method="post">
                <tr>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['ad']?></td>
                    <td><?php echo $row['soyad']?></td>
                    <td><?php echo $row['tel']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['status']?></td>

                    <td><a class="button" href="ustatus.php?id=<?php echo $row['id']?>">DURUM GÜNCELLE</a></td>


                </tr>
            </form>
            <?php
        }
        ?>
        </tbody>
    </table>

</div>



</body>
</html>



















