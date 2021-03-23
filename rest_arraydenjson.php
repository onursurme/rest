<?php
/*  * Copyright (c) Labotecha Software 2020
 * 
 * File:      rest_get_categories.php
 * 
 * Contents: rest_get_arraydenjson.html'nin get talebine yanıt verir
 * 
 * History:   14.03.2021, drx */
$data = ["a","1"];/** whatever you're serializing **/
header('Content-Type: application/json');
echo json_encode($data);
?>