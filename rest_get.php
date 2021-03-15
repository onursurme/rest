<?php
/*  * Annova Özel Eğitim Kurumları ERP yazılımı
 * 
 * Copyright (c) Annova Software 2020
 * 
 * File:      rest.php
 * 
 * Contents:  axios ile yapılan get request'e yanıt verir
 * 
 * History:   14.03.2021, drx */
$myArray = array();

$myArray[] = array("id" => 1, "data" => 45);
$myArray[] = array("id" => 3, "data" => 54);

header('Content-Type: application/json;charset=utf-8');
echo json_encode($myArray);
?>