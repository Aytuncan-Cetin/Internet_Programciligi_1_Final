<?php
include("sistem/baglan.php");

$gruplar=$_POST["gruplar"];
$tc = $_POST["tc"];
$adi = $_POST["adi"];
$soyadi = $_POST["soyadi"];
$meslek = $_POST["meslek"];
$email = $_POST["email"];
$telno = $_POST["telno"];
$cinsiyet = $_POST["cinsiyet"];
$dtarih = $_POST["dtarih"];
$adres = $_POST["adres"];
$kbilgisi = $_POST["kbilgisi"];


if (isset($_POST["gonder"])) {
	$kaydet = $db->prepare("INSERT INTO users SET personelGrup=?,tc=?,ad=?,soyad=?,meslek=?,mail=?,telefon=?,cinsiyet=?,dtarihi=?,adres=?,kbilgisi=?");
	$kaydet->execute(array($gruplar,$tc,$adi,$soyadi,$meslek,$email,$telno,$cinsiyet,$dtarih,$adres,$kbilgisi));
	if ($kaydet) 
	{
		header("refresh:0.5;url=kisiEkle.php");
		echo '<script> alert("Kişi Başarıyla Eklendi..."); </script>';
	}
	else
	{
		header("refresh:0.5;url=kisiEkle.php");
		echo '<script> alert("Kişi Kaydedilemedi !!!"); </script>';
	}
}







/*if (isset($_POST["gonder"])) 
{
	$sql = "insert into users(personelGrup,tc,ad,soyad,meslek,mail,telefon,cinsiyet,dtarihi,adres,kbilgisi)values('$gruplar','$tc','$adi','$soyadi','$meslek','$email','$telno','$cinsiyet','$dtarih','$adres','$kbilgisi')";
	$sonuc = mysqli_query($baglan,$sql);
	if ($sonuc) 
	{
		header("refresh:0.5;url=kisiEkle.php");
		echo '<script> alert("Kişi Başarıyla Eklendi..."); </script>';
			
	}
	else
	{
		//header("refresh:0.5;url=kisiEkle.php");
		echo '<script> alert("Kişi Kaydedilemedi !!!"); </script>';
		
	}
}*/
?>