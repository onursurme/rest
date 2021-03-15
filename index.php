<?php
$conn = mysqli_connect("localhost","root","","htlab");
	mysqli_set_charset($conn,"utf8");

    /////////////////////////////////////////////////////////////7
    ////////////////  LOADPATIENTPHP DEN ALINTI AŞAĞISI

	  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    // $qu = "INSERT INTO " . " p1_". $username. " VALUES ('1','veli','tansiyonudeli',now())";
    $qu = "SELECT * FROM " . " p1_". $_POST["username"] . " WHERE tc='". $_POST["tcload"] . "'";
    // echo $qu;
    $pss = mysqli_query($conn,$qu);
    if ($pss) {
      echo "yükleme başarılı";
      $row=mysqli_fetch_array($pss, MYSQLI_ASSOC);
      /* echo "here is row : " . "<br>";
      var_dump($row); */
      foreach ($row as $key => $value){
        $d[$key]=$value;
      }
      /* echo "here is d : " . "<br>";
      var_dump($d); */
    // echo "-". $d['tc'] ."-" . $d[2] . "-" . $d['username'] . "-" . $d[4] . "-" . $d["year"];
    require "postit.php";
		// echo postit("http://localhost/s0.php",$d);  ASIL ÖRNEKTE BU SATIR COMMENT OUT YAPILMAMIŞTI *********************************************************************
      // var_dump($d);
    } else {
      echo "yükleme başarısız";
      echo mysqli_error($conn); // mysql den gelen hata mesajını gösterir
    }

    /////////////////////////////////////////////////////////////7
////////// AUTH.PHP DEN ALINTI AŞAĞISI
		$pss = mysqli_query($conn,"SELECT password FROM users WHERE username='" . $_POST["username"] . "'");
	$count  = mysqli_num_rows($pss);
	// echo $count . " sonuç var" . "</br>";
	$pssw = mysqli_fetch_array($pss);
	// echo $pssw[0] . " database'deki şifre" . "</br>";
	// echo $_POST["password"] . " girilen şifre " . "</br>";
	if($count!="0" and password_verify($_POST["password"], $pssw[0])) {
		// echo "You are successfully authenticated!";
		ob_end_clean();  //Clean (erase) the output buffer and turn off output buffering
		require "postit.php";
		require "degiskenler.php";
		echo postit("http://localhost/smain1.php",$d);
		// echo $username;
	} else {
		// echo "Invalid Username or Password!";
		header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/login.php");
    echo "</body></html>";
	}

	////////////////////////////////////////////////////
	////////////// AUTH_REG2.PHP DEN ALINTI AŞAĞISI

			$q1=$_POST["username"];
		$qu="SELECT username FROM users WHERE username='$q1'";
		$result = mysqli_query($conn,$qu);
		if (mysqli_num_rows($result)!=0) {
			mysqli_close($con);
			$m=array('message'=>'<p align="center">Bu isimde kayıtlı bir kullanıcı var. </br> Lütfen başka bir kullanıcı adı seçiniz.</p>');
			echo postit("http://localhost/registration_form2.php", $m);
		} else {
		$hash= password_hash($_POST["password_1"],PASSWORD_DEFAULT,['cost'=>5]);
		$q2=$_POST["name"];
		$q3=$_POST["surname"];
		$q4=$_POST["phone"];
		$q5=$_POST["email"];
		$q6=$_POST["ahbs"];
		$q7=$_POST["workplace"];
		$qu = "INSERT INTO users VALUES ('$q1','$hash','$q2','$q3','$q4','$q5','$q6','$q7',now())";
		$pss = mysqli_query($conn,$qu);
			if ($pss) {
				// echo "kayıt başarılı";
				// mysqli_close($con);
				$tablename='P1_' . $q1;
				echo $tablename;
				$qu = "CREATE TABLE $tablename (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				firstname VARCHAR(30) NOT NULL,
				lastname VARCHAR(30) NOT NULL,
				reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
				)";
				// $qu= "CREATE TABLE $tablename (
				//  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
				//  `firstname` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
				//  `lastname` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
				//  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				//  PRIMARY KEY (`id`)
				// )";
				if (mysqli_query($conn,$qu)) {
					echo "patient table for the user $q1 created successfuly";
				} else {
					echo "patient table oluşturulamadı.";
				}
				require "degiskenler.php";
				echo postit("http://localhost/s0.php",$d);
			} else {
				echo "kayıt YAPILAMADI";
				echo '<p>' . mysqli_error($conn) .'<br><br>';
			}
		}

///////////////////////////////////////////////////////7
		//////////////// SAVEPATIENT.PHP DEN ALINTI AŞAĞISI
		  $qu = "INSERT INTO " . " p1_". $_POST['username']. " VALUES (";
  foreach($degiskenler as $a) {
    // $qu=$qu. $a;
    if ($a=="acil" or $a=="tedavialiyor") {
      $qu=$qu . "'". "${$a}" . "'". ',';
    } elseif (${$a}=="NA") {
      $qu=$qu . "'NA'". ',';
    } elseif ($a!="state" and $a!="username") {
      $qu=$qu . "${$a}" . ',';
    }
  }
  $qu=$qu . "NOW())";
  // echo '<p style="font-size:0.1em;text-align:left;">' . $qu . '</p>';
  $pss = mysqli_query($conn,$qu);
  if ($pss) {
    echo 'Kayıt başarılı.';
    mysqli_close($conn);
  } else {
    echo 'Kayıt başarılı DEĞİL. ';
    echo " (hata mesajı : " . mysqli_error($conn) . ")</br>"; // mysql den gelen hata mesajını gösterir
    mysqli_close($conn);
  }

  //////////////////////////////////////////////////////////////7
  ///////////////
?>