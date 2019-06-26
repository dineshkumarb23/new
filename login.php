<?php
$ser="localhost";
$user="root";
$pass="";
$db="sample";
$user1 = @$_POST["usr"];
$pass1 = md5(@$_POST["pass"]);
$c=0;
$con=mysqli_connect($ser,$user,$pass,$db) or die("connection_aborted");
$usernames="SELECT * FROM login";
if($res = mysqli_query($con, $usernames))
{
	// echo $res['username']."succ";
	while ($row = mysqli_fetch_array($res)) { 
            if($user1 == $row['username'])
            {
            	if($pass1 == $row['password'])
            	{
            		// echo "present";
            		header('Location: http://localhost/sampleprjt/index.html');
            		$c=1;
            	}
            }
        }

}
else {
	echo "failed";
}
// echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
if($c == 0) 
{
	header('Location: http://localhost/sampleprjt/login.html');
}
// header('Location: http://localhost/sampleprjt/flames.html');
// exit;
$con->close();
?>
