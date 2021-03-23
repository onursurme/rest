<?php
/*  * Copyright (c) Labotecha Software 2020
 * 
 * File:      rest_get_categories.php
 * 
  * Contents:  Fatih Kılınç'ın intro'sundan axios ile yapılan get request'e yanıt verir
 * Bu dosyayla birlikte kullanılan intro versiyonun build klasörü zip'li olarak bu klasörde mevcut
 * birincibasamak.com/intro linkinde HepsiAnnova tıklandıktan sonra çalıştığı görülebilirr
 * 
 * History:   14.03.2021, drx */
$myArray = array();

$myArray[] = array("id" => 1, "categoryName" => "Beverages", "seoUrl" => "beverages");
$myArray[] = array("id" => 2, "categoryName" => "Condiments", "seoUrl" => "condiments");
$myArray[] = array("id" => 3, "categoryName" => "Confections", "seoUrl" => "confections");
$myArray[] = array("id" => 4, "categoryName" => "Dairy Products", "seoUrl" => "dairy-products");
$myArray[] = array("id" => 5, "categoryName" => "Grains/Cereals", "seoUrl" => "grains-cereals");
$myArray[] = array("id" => 6, "categoryName" => "Meat/Poultry", "seoUrl" => "meat-poultry");
$myArray[] = array("id" => 7, "categoryName" => "Produce", "seoUrl" => "produce");
$myArray[] = array("id" => 8, "categoryName" => "Seafood", "seoUrl" => "seafood");
$myArray[] = array("id" => 9, "categoryName" => "newKategori");

header('Content-Type: application/json;charset=utf-8');
echo json_encode($myArray);
?>