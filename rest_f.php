<?php
$myArray = array("deneme" => array({"id":1,"data":45},{"id":3,"data":54});

header('Content-Type: application/json');
echo json_encode($myArray);
?>