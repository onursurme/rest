<?php
$conn = mysqli_connect("localhost","root","","htlab");
	mysqli_set_charset($conn,"utf8");

    /////////////////////////////////////////////////////////////7
    ////////////////  LOADPATIENTPHP DEN ALINTI AŞAĞISI

	  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    // $qu = "INSERT INTO " . " p1_". $username. " VALUES ('1','veli','tansiyonudeli',now())";
    $qu = "SELECT * FROM " . " p1_". "onurw" . " WHERE tc='". "10448728824" . "'";
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
      /* echo "here is d : " . "<br>";  */
      var_dump($d);
    // echo "-". $d['tc'] ."-" . $d[2] . "-" . $d['username'] . "-" . $d[4] . "-" . $d["year"];
    require "postit.php";
		// echo postit("http://localhost/s0.php",$d);  ASIL ÖRNEKTE BU SATIR COMMENT OUT YAPILMAMIŞTI *********************************************************************
      // var_dump($d);
    } else {
      echo "yükleme başarısız";
      echo mysqli_error($conn); // mysql den gelen hata mesajını gösterir
    }