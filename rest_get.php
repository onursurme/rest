<?php
$myArray = array();

$myArray[] = array("id" => 1, "data" => 45);
$myArray[] = array("id" => 3, "data" => 54);

header('Content-Type: application/json');
echo json_encode($myArray);
?>