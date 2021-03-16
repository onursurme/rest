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
$myArray =  [
    {
      "id": 1,
      "categoryName": "Beverages",
      "seoUrl": "beverages"
    },
    {
      "id": 2,
      "categoryName": "Condiments",
      "seoUrl": "condiments"
    },
    {
      "id": 3,
      "categoryName": "Confections",
      "seoUrl": "confections"
    },
    {
      "id": 4,
      "categoryName": "Dairy Products",
      "seoUrl": "dairy-products"
    },
    {
      "id": 5,
      "categoryName": "Grains/Cereals",
      "seoUrl": "grains-cereals"
    },
    {
      "id": 6,
      "categoryName": "Meat/Poultry",
      "seoUrl": "meat-poultry"
    },
    {
      "id": 7,
      "categoryName": "Produce",
      "seoUrl": "produce"
    },
    {
      "id": 8,
      "categoryName": "Seafood",
      "seoUrl": "seafood"
    },
    {
      "id": "9",
      "categoryName": "newKategori"
    }
];
  
header('Content-Type: application/json;charset=utf-8');
echo json_encode($myArray);
?>