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

$myArray[] = array("id" => 1, "categoryId" => 2, "productName" => "Chai", "quantityPerUnit" => "48 - 6 oz jars", "unitPrice" => "24", "unitsInStock" => 53);
$myArray[] = array("id" => 2, "categoryId" => 1, "productName" => "Chang", "quantityPerUnit" => "24 - 12 oz bottles", "unitPrice" => "21", "unitsInStock" => 17);
$myArray[] = array("id" => 3, "categoryId" => 3, "productName" => "Chai2", "quantityPerUnit" => "48 - 6 oz jars", "unitPrice" => "24", "unitsInStock" => 53);
$myArray[] = array("id" => 4, "categoryId" => 4, "productName" => "Chang2", "quantityPerUnit" => "24 - 12 oz bottles", "unitPrice" => "21", "unitsInStock" => 17);
$myArray[] = array("id" => 5, "categoryId" => 5, "productName" => "Chai3", "quantityPerUnit" => "48 - 6 oz jars", "unitPrice" => "24", "unitsInStock" => 53);
$myArray[] = array("id" => 6, "categoryId" => 6, "productName" => "Chang3", "quantityPerUnit" => "24 - 12 oz bottles", "unitPrice" => "21", "unitsInStock" => 17);
$myArray[] = array("id" => 7, "categoryId" => 7, "productName" => "Chai4", "quantityPerUnit" => "48 - 6 oz jars", "unitPrice" => "24", "unitsInStock" => 53);
$myArray[] = array("id" => 8, "categoryId" => 8, "productName" => "Chang4", "quantityPerUnit" => "24 - 12 oz bottles", "unitPrice" => "21", "unitsInStock" => 17);
$myArray[] = array("id" => 9, "categoryId" => 2, "productName" => "Chai5", "quantityPerUnit" => "48 - 6 oz jars", "unitPrice" => "24", "unitsInStock" => 53);
$myArray[] = array("id" => 10, "categoryId" => 1, "productName" => "Chang5", "quantityPerUnit" => "24 - 12 oz bottles", "unitPrice" => "21", "unitsInStock" => 17);
$myArray[] = array("id" => 11, "categoryId" => 3, "productName" => "Chai6", "quantityPerUnit" => "48 - 6 oz jars", "unitPrice" => "24", "unitsInStock" => 53);
$myArray[] = array("id" => 12, "categoryId" => 4, "productName" => "Chang6", "quantityPerUnit" => "24 - 12 oz bottles", "unitPrice" => "21", "unitsInStock" => 17);
$myArray[] = array("id" => 13, "categoryId" => 5, "productName" => "Chai7", "quantityPerUnit" => "48 - 6 oz jars", "unitPrice" => "24", "unitsInStock" => 53);
$myArray[] = array("id" => 14, "categoryId" => 6, "productName" => "Chang7", "quantityPerUnit" => "24 - 12 oz bottles", "unitPrice" => "21", "unitsInStock" => 17);
$myArray[] = array("id" => 15, "categoryId" => 7, "productName" => "Chai8", "quantityPerUnit" => "48 - 6 oz jars", "unitPrice" => "24", "unitsInStock" => 53);
$myArray[] = array("id" => 16, "categoryId" => 8, "productName" => "Chang8", "quantityPerUnit" => "24 - 12 oz bottles", "unitPrice" => "21", "unitsInStock" => 17);


header('Content-Type: application/json;charset=utf-8');
echo json_encode($myArray);
?>