<?php
	function postit($url,$data){
		$curl = curl_init($url);
		//curl_setopt ($curl, CURLOPT_HTTPHEADER, array("Content-Type: Content-Type: text/html; charset=UTF-8\r\n")); bunu commentout yaptım ama doğru header ne bilmiyorum
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($curl);
		if(curl_errno($curl)){
		    throw new Exception(curl_error($curl));
		}
		curl_close($curl);
		return $result;
	}
?>
