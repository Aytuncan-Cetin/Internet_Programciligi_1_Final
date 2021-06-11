<?
  //* PDO İle Veri Tabanı Bağlantısı

   try
   {
      $db = new PDO("mysql:host=localhost;dbname=int_prog_1_final",'root','');

   }
   catch(PDOException $hata)
   {
      echo "ERROR".$hata->getMessage();
   }

  



   //* Mysqli ile bağlantı oluşturma
 /*

 $servername = "localhost";
$username = "root";
$password = "";
$db="int_prog_1_vize";   
//Bağlantı oluşturma
$baglan = new mysqli($servername,$username,$password,$db);
//Bağlantı kontorlü
if ($baglan->connect_error){
   die("bağlantı hatası: ".$baglan->connect_error);
} 

mysqli_set_charset($baglan,"utf8");*/













?>