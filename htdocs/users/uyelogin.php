<?php

// veri tabanı bağlantısı
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


if($_POST)
{
    $name =$_POST["name"];
    $pass =$_POST["pass"];
    $id=$_POST["id"];


    $query  = $db->query("SELECT * FROM users WHERE username='$name' and sifre='$pass' and status=1",PDO::FETCH_ASSOC);

    if ( $say = $query -> rowCount() ){

        if( $say > 0 ){
            session_start();

            $_SESSION['oturum']=true;
            $_SESSION['name']=$name;
            $_SESSION['pass']=$pass;
           $_SESSION['id']=$id;


            header("Location: index.php");



        }else{
            echo "oturum açılmadı hata";
        }
    }else{
        echo "<h1>Kullanıcı adı veya şifre hatalı</h1>";
        echo 'Tekrar Giriş Yapmak için  <a href="../GirisPage.php">Tıklayınız</a>';
    }
}

?>