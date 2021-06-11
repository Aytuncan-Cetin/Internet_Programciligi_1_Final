<? include("sistem/baglan.php");
session_start();
if (!$_SESSION['username']) //kullanıcı girişi yoksa çalışmasın.
{
  Header('Location:index.php');
  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <title>Loglar</title>
  <style>
    label {
      font-weight: bold;

    }
  </style>
</head>
<!-----------------------------------------NAVBAR-------------------------------->

<header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="logo.png" width="50" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link " href="kisiEkle.php">Kişi Ekle <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="kisiListele.php">Kişi Listele</a>
        <a class="nav-item nav-link active" href="loglar.php">Loglar</a>
        <a class="nav-item nav-link" href="kullaniciBilgileri.php">Kullanıcı Bilgileri</a>
        <a class="nav-item nav-link" href="cikis.php">Çıkış</a>
      </div>
    </div>
  </nav>

</header>
<!---------------------------------------------------------------------------------->

<body>
  <?php

  $ip_adress = $_SERVER['REMOTE_ADDR']; //Ziyaretçinin ip adresini verir.
  $logindate = date('Y.m.d');
  $sorgu = $db->prepare("UPDATE admininfo SET ip=? , logindate= ?  WHERE id=?");
  $guncelle = $sorgu->execute(array($ip_adress, $logindate, 1));
  //-----------------------------------------------------

  $sorgu2 = $db->query("SELECT username, ip, logindate, logoutdate FROM admininfo");
  $sorgu2->execute();
  $yazdir = $sorgu2->fetchAll(PDO::FETCH_ASSOC);

  ?>
  <br>
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">KULLANICI ADI</th>
        <th scope="col">IP</th>
        <th scope="col">SON GİRİŞ TARİHİ</th>
        <th scope="col">SON ÇIKIŞ TARİHİ</th>
      </tr>
    </thead>
    
    
    <?php
			foreach ($yazdir as $row) {
			?>
				<tbody>
					<tr>
						<td > <? echo $row['username']; ?> </td>
						<td> <? echo $row['ip']; ?> </td>
						<td> <? echo $row['logindate']; ?> </td>
						<td> <? echo $row['logoutdate']; ?> </td>
					</tr>


				</tbody>


		<?php
			}
		


		?>



</body>