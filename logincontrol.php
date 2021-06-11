<html><head><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head></html>
<?
include("sistem/baglan.php");
error_reporting(0); //Gelen hataların ekrana yansımamasını sağlar.
session_start();
if (!empty($_SESSION['username'])) {
	Header('Location:kisiEkle.php');
	exit();
}
//!---------SECURITY CODE---------- 
include_once 'securimage/securimage.php';
$securimage = new Securimage();

if ($securimage->check($_POST['securitycode']) == false) {
	echo '<script> swal({
		title: "GÜVENLİK KODU HATALI !",
		icon: "error",
	  }); </script>';
	header("refresh:2;url=index.php");//ALERT
	exit;
  }
  
  else {//Sayfanın en altında kapatıldı

  
//!--------------------------------

$username = $_POST['username'];
$password = $_POST['password'];

if ($_POST) {
		$sorgu = $db->prepare("SELECT * FROM admininfo WHERE username=:kullaniciAdi");//=: kullanmamızın nedeni isteğimiz dışında veir girilerek veri tabanınan ulaşılmasını engellemek
		$sorgu->execute(['kullaniciAdi' => $username]);		
		$kullanici = $sorgu->fetch(PDO::FETCH_ASSOC);//fetch dönen cevabı alır.FETCH_ASSOC sadece sütün isimleriyle verileri ver.
		
		if ($kullanici) //! Kullanıcı varsa
		{
			if ($password === $kullanici['password']) {
				//şifre eşit ise veritabanındaki şifreye
				//!Giriş Yaptıysa
				$_SESSION['username'] = $username;

				echo '<script>swal({
					title: "GİRİŞ BAŞARILI !",
					icon: "success",
				  });</script>';
				header("refresh:1.5;url=kisiEkle.php");
			}
			else{
				//!ŞİFRE HATALI İSE
				
				echo '<script> swal({
					title: "ŞİFRE HATALI !",
					icon: "error",
				  }); </script>';
				header("refresh:2;url=index.php");
			}
		}
		else //! Kullanıcı yoksa
		{
			echo '<script> swal({
				title: "KULLANICI BULUNAMADI !",
				icon: "error",
			  });</script>';
				header("refresh:2;url=index.php");
		}
	
}

}

/*
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['giris'])) {


	if ($username == "aytuncan" && $password == "12345") {

		header("refresh:0.5;url=kisiEkle.php");
		echo '<script> alert(" GİRİŞ BAŞARILI"); </script>';
	} else {
		header("refresh:0.5;url=index.php");
		echo '<script> alert(" GİRİŞ BAŞARISIZ "); </script>';
	}
}
*/