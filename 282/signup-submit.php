
<?php
	/*  Assignment 4 Harmony
		Author: Kainoa Lloyd 
		Student number: 10114858 
		NetID:13krl1@queensu.ca
		CISC 282
	*/
	//$username = $_REQUEST["username"];
	$name = $_POST["name"];
	if (is_uploaded_file($_FILES["pic"]["tmp_name"])){
		move_uploaded_file($_FILES["pic"]["tmp_name"], "image/$name.jpg");
	}
	$userInfo = " ";
	foreach($_POST as $param => $value){
		if ($param != "pic"){
			$userInfo .= "$param : $value &";
		}else{
			$filename2 = "pic.jpg";
			file_put_contents($filename, $value);
		}
	}
	$filename =  "clients.txt";
	file_put_contents($filename, $userInfo);
?>

<DOCTYPE html>
<html>
	<head>
		<title>Thank You!</title>
	</head>
	
	<body>
		<h1>Thank You!</h1>
	</body>
</html>