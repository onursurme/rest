<?php
/*  * Copyright (c) Labotecha Software 2020
 * 
 * File:      rest_post.php
 * 
 * Contents:  rest_post.html'de axios ile post edilen veriyi alıp mysql'e yazar veya siler
 * 
 * History:   14.03.2021, drx */

	$_POST = json_decode(file_get_contents("php://input"),true);

  $conn = mysqli_connect('localhost', 'root', '', 'learn_mysql', '3306');
	// bu satır uzak serverdaki database'e bağlantı içindi : $conn = mysqli_connect("localhost","u9757088_userCDE","FCke23I4OAac07N","u9757088_dbCDE");
	mysqli_set_charset($conn,"utf8");

	if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

  if ($_POST['opcode']=='1') {
    // prepare and bind
    $stmt = $conn -> prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
    $stmt -> bind_param("sss", $username, $password, $email);
    // set parameters and execute
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];
    
    if ($stmt -> execute()) {
      echo "kayıt başarılı";
    }
  }

  if ($_POST['opcode']=='2') {
    $fn=$_POST['username'];
    $ln=$_POST['password'];
    $qu = "DELETE FROM `users` WHERE `username`=" . '"' . $fn . '"' . " AND " . "`password`=". '"' . $ln . '"';
    echo $qu;
    $pss = mysqli_query($conn,$qu);
    if ($pss) {
      echo "silme işlemi başarılı";
    }
  }
?>