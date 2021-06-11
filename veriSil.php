<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'int_prog_1_final');

if (isset($_POST['deletedata'])) 
{
	$id = $_POST['s_id'];
	
	

	$query = "DELETE FROM users WHERE id='$id'";
	$query_run=mysqli_query($connection,$query);

	if ($query_run) 
	{
		echo '<script> alert("Seçilen Kişi Silindi"); </script>';
		header("Location:kisiListele.php");
		
	}
	else
	{
		echo '<script> alert("Silme İşlemi Başarısız !"); </script>';
		header("refresh:0;url=kisiListele.php");
	}
}





?>