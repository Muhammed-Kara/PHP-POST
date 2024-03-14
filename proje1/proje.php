<?php

$email = $_POST["email"];
$isim = $_POST["isim"];
$parola = $_POST["parola"];






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color:gray;
    }
    .deneme{
        margin-left:23%;
        margin-top:20%;
        background-color: orange;
        border-radius:40px;
        text-align: center;
        width:1000px;
        
        
    }


</style>
<body>
    <div class="deneme">
<?php
  if(empty($isim && $parola && $email)){
    echo"Kayıt Başarısız! <br> <br>Lütfen Tüm Alanları Doldurunuz";
    header("Refresh: 3; url=http://localhost/php%20ba%c5%9flang%c4%b1%c3%a7/");
  }else{
    echo "Kayıt Başarılı<br>E-posta adresiniz:$email <br> İsminiz:$isim <br> Parolanız:$parola";
    header("Refresh: 3; url=http://localhost/php%20ba%c5%9flang%c4%b1%c3%a7/");

  }
?>

    </div>
</body>
</html>

