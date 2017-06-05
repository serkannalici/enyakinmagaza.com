<?php 
 //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'magaza';
 
    //connect with the database
    $con = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
	$kullaniciadi=$_POST['kullaniciAdi'];
	$sifre=$_POST['sifre'];
	$sifreTekrar = $_POST ['sifreTekrar'];
	$ad = $_POST ['adi'];
	$soyad = $_POST ['soyadi'];
	$email = $_POST ['mail'];
	/*if (!$db) {
    die("Baglanti Basarisiz: " . mysqli_connect_error());
}
echo "Baglanti Basarili";
*/
	
	$hata ="";
	sleep(2); // demo oldugu ve gozlemyebilmek icin 2 sn bekletiyoruz sql sorgunuz dahil oldugunda bu satiri silebilirsiniz. 
	$sql_ekle="insert into uye(kullaniciAdi,sifre,sifreTekrar,adi,soyadi,email)values('$kullaniciadi','$sifre','$sifreTekrar','$ad','$soyad','$email')";
if(mysqli_query($con,$sql_ekle))
{
	$hata= "Kayitlar Basariyla Eklendi";
}
else
{
	$hata= "Kayit Basarisiz" .mysqli_error($con);
}

echo $hata;

 ?>

