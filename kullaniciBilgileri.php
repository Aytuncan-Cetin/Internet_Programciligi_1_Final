<? include("sistem/baglan.php");
session_start();
if (!$_SESSION['username']) //kullanıcı girişi yoksa çalışmasın.
{
  Header('Location:index.php');
  exit();
}

$sec = "SELECT * FROM admininfo";
$sonuc = $db->query($sec);
$sonuc->execute();
while ($row = $sonuc->fetch(PDO::FETCH_ASSOC)) {
?>
  <!DOCTYPE html>
  <html>

  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Kullanıcı Bilgileri</title>
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
          <a class="nav-item nav-link" href="loglar.php">Loglar</a>
          <a class="nav-item nav-link active" href="kullaniciBilgileri.php">Kullanıcı Bilgileri</a>
          <a class="nav-item nav-link" href="cikis.php">Çıkış</a>
        </div>
      </div>
    </nav>

  </header>
  <!---------------------------------------------------------------------------------->
  <br>

  <body>
    <form action="guncelle.php" method="POST">
      <div class="form">
        <div class="col">
          <label>KULLANICI ADI</label>
          <input autofocus="autofocus" type="text" class="form-control" name="adminadi" value="<?= $row['username'] ?>" required>
        </div>
      </div>

      <div class="form">
        <div class="col">
          <label>ŞİFRE</label>
          <input autofocus="autofocus" type="text" class="form-control" name="sifre" value="<?= $row['password'] ?>" required>
        </div>
      </div>
      <br>
      <input style="width:130px ; height:60px ;float:right;" type="submit" name="admin_guncelle" value="GÜNCELLE" class="btn btn-success">
    </form>

  </body>
<?
}

?>