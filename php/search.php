
<?php
	
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'magaza';
 
    //connect with the database
    $db = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
	
	/*if (!$db) {
    die("Baglanti Basarisiz: " . mysqli_connect_error());
}
echo "Baglanti Basarili";
*/


 $term = $_GET['term'];
    //get matched data from skills table
    $query = "SELECT * FROM marka WHERE markaAdi LIKE '%".$term."%' ORDER BY markaAdi ASC";
	$sql_con=mysqli_query($db,$query);
	
	$data=array();
    while ($row = mysqli_fetch_array($sql_con)) {
		
        $data[]=$row["markaAdi"];
	}

    //return json data
   echo json_encode($data);
?>
