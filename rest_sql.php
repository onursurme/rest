<?php
$serverName = "LATITUDE"; 
$connectionInfo = array( "Database"=>"TIGER3", "UID"=>"sa", "PWD"=>"Er533770++");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    echo "Connection established.<br />";
    //$myArray = array();

	//$myArray[] = array("id" => 1, "data" => 45);
	//$myArray[] = array("id" => 3, "data" => 54);

	//header('Content-Type: application/json');
	//echo json_encode($myArray);
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}


// $conn = mysqli_connect("localhost","root","","htlab");
// 	mysqli_set_charset($conn,"utf8");

//     /////////////////////////////////////////////////////////////7
//     ////////////////  LOADPATIENTPHP DEN ALINTI AŞAĞISI

// 	  if (!$conn) {
//       die("Connection failed: " . mysqli_connect_error());
//     }
//     // $qu = "INSERT INTO " . " p1_". $username. " VALUES ('1','veli','tansiyonudeli',now())";
//     $qu = "SELECT * FROM " . " p1_". "onurw" . " WHERE tc='". "10448728824" . "'";
//     // echo $qu;
//     $pss = mysqli_query($conn,$qu);
//     if ($pss) {
//       echo "yükleme başarılı";
//       $row=mysqli_fetch_array($pss, MYSQLI_ASSOC);
//       /* echo "here is row : " . "<br>";
//       var_dump($row); */
//       foreach ($row as $key => $value){
//         $d[$key]=$value;
//       }
//       /* echo "here is d : " . "<br>";  */
//       var_dump($d);
//     }


?>