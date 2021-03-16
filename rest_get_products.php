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

$myArray[] = array("id": 1,
"categoryId": 2,
"productName": "Chai",
"quantityPerUnit": "48 - 6 oz jars",
"unitPrice": "24",
"unitsInStock": 5);
$myArray[] = array("id": 2,
"categoryId": 1,
"productName": "Chang",
"quantityPerUnit": "24 - 12 oz bottles",
"unitPrice": "21",
"unitsInStock": 17);

header('Content-Type: application/json;charset=utf-8');
echo json_encode($myArray);
?>