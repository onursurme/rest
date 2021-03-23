<?php
/*  *  Copyright (c) Labotecha Software 2020
 * 
 * File:      mssqlbaglantisi_remote.php
 * 
 * Contents:  sqlsrv kurmadığım için bu script'i henüz deneyemedim,
 * veritabanı bağlantı bilgilerini de güncellemek gerekebilir.
 * 
 * History:   14.03.2021, drx */
$serverName = "nova-db.database.windows.net"; 
$connectionInfo = array( "Database"=>"TIGER3", "UID"=>"annova", "PWD"=>"Er7703193++");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    echo "Connection established.<br />";
    //$myArray = array();

    // $myArray'e böyle literal değil, sql sorgusundan dönen veriyi atayacağız :
	//$myArray[] = array("id" => 1, "data" => 45);
	//$myArray[] = array("id" => 3, "data" => 54);

	//header('Content-Type: application/json');
	//echo json_encode($myArray);
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>