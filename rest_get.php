<?php
/*  *  Copyright (c) Labotecha Software 2020
 * 
 * File:      rest_get.php
 * 
 * Contents:  rest_get.html'den axios ile yapılan get request'e yanıt verir
 * 
 * History:   14.03.2021, drx */
$myArray = array();

$myArray[] = array("id" => 1, "data" => 45);
$myArray[] = array("id" => 3, "data" => 54);

header('Content-Type: application/json;charset=utf-8');
echo json_encode($myArray);
?>