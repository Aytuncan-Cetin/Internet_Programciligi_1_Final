<?include ("sistem/baglan.php");
session_start();
session_destroy();

$logoutdate = date('Y.m.d H:i:s');
$sorgu = $db->prepare("UPDATE admininfo SET logoutdate= ?  WHERE id=?");
$guncelle = $sorgu->execute(array($logoutdate, 1));
Header('refresh:0.5;url=index.php');
?>
