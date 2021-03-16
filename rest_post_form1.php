<?php

	$_POST = json_decode(file_get_contents("php://input"),true);
	//echo $_POST['firstname'];
	//echo $_POST['lastname'];

	$conn = mysqli_connect("localhost","u9757088_userCDE","FCke23I4OAac07N","u9757088_dbCDE");
	mysqli_set_charset($conn,"utf8");

	if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

  if ($_POST['opcode']=='1') {
    $qu = "INSERT INTO `users` (`id`, `firstname`, `lastname`) VALUES (NULL, '" . $_POST['firstname']. "', '" . $_POST['lastname']. "');";
    $pss = mysqli_query($conn,$qu);
    if ($pss) {
      echo "kayıt başarılı";
    }
  }

  if ($_POST['opcode']=='2') {
    $fn=$_POST['firstname'];
    $ln=$_POST['lastname'];
    $qu = "DELETE FROM `users` WHERE `firstname`=" . '"' . $fn . '"' . " AND " . "`lastname`=". '"' . $ln . '"';
    echo $qu;
    $pss = mysqli_query($conn,$qu);
    if ($pss) {
      echo "silme işlemi başarılı";
    }
  }
?>