<?php 
 //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'magaza';
 
    //connect with the database
    $db = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
	$adi=$_POST['adi'];
	$sifre=$_POST['sifre'];
	/*if (!$db) {
    die("Baglanti Basarisiz: " . mysqli_connect_error());
}
echo "Baglanti Basarili";
*/
	$query = "SELECT *FROM uye  ";
	$sql_con=mysqli_query($db,$query);
	
if ((isset($adi))&& (isset($sifre))) {
	$hata ="";
	sleep(2); // gozlemyebilmek icin 2 sn bekletiyoruz sql sorgunuz dahil oldugunda bu satiri silebilirsiniz. 
	
	if(mysqli_num_rows($sql_con)>0)
{
	while($kayit=mysqli_fetch_assoc($sql_con))
	{
		if(($adi==$kayit["kullaniciAdi"])&&($sifre == $kayit["sifre"]))
		{
			$hata="";
			echo '<script>window.location.href="/webproje/html/login.html";</script>'; 
			 
		}
		
		else if(($adi!=$kayit['kullaniciAdi'])||($sifre!= $kayit['sifre']))
		{
			 $hata="Hatalı Kullanıcı veya Şifre ";
			
		}
		else if($adi == "")
		{
			  $hata="Kullanıcı Adınızı Girmediniz ";
		}
	
}
}
else{
	echo "Kullanıcı Bulunamadı";
}
	
	
}
echo $hata;


 ?>

