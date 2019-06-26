<?php
$ser="localhost";
$user="root";
$pass="";
$db="sample";
$user1 = @$_POST["usr"];
$pass1 = md5(@$_POST["pass"]);
// $user2 = @$_GET["two"];
// $result = @$_GET['three'];
$con=mysqli_connect($ser,$user,$pass,$db) or die("connection_aborted");
// echo $user1."connection_success";
$sql="INSERT INTO login (username,password) VALUES ('$user1','$pass1')";
if($con->query($sql) == TRUE)
{
	echo "Success";
}
else {
	echo "failed";
}
// echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
// header('Location: http://localhost/sampleprjt/flames.html');
// exit;
$con->close();
?>
