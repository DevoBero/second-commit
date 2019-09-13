<?php
// require 'unset.php';
​
	if (isset($_POST['btn'])) {
​
		$image = $_FILES["photo"]["name"];
​
		$sql = "INSERT INTO upload (id , image) VALUES ('','$image')";
​
		if (mysqli_query($link,$sql)) {
			echo "For database: success";
		}
		else{
			echo "For database: error";
		}
​
		$uploadFile = $_FILES["photo"]["tmp_name"];
​
		$target = "image/".basename($image);
​
		if(move_uploaded_file($uploadFile,$target)){
			echo "For folder: success";
		}
		else{
			echo "For folder: error";
		}
	
	}
// ​first
$server = "localhost";
$user = "root";
$pass = "";
$db = "upload";
​
$link = mysqli_connect($server,$user,$pass,$db);
​
if (!$link) {
    die("Error in Connection to db").mysqli_connect_error();
}
else{
    echo "";
}
// ​second
// require 'unset.php';
​
	if (isset($_POST['btn'])) {
​
		$image = $_FILES["photo"]["name"];
​
		$sql = "INSERT INTO upload (id , image) VALUES ('','$image')";
​
		if (mysqli_query($link,$sql)) {
			echo "For database: success";
		}
		else{
			echo "For database: error";
		}
​
		$uploadFile = $_FILES["photo"]["tmp_name"];
​
		$target = "image/".basename($image);