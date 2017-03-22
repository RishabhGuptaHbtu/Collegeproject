<?php

$con=mysql_connect ("127.0.0.1","root","");
$a=$_POST['uid'];
$b=$_POST['psw'];
 mysql_select_db("rail1",$con);
 
 $sq="select * from user where uid='$a' and psw='$b'; ";
 $res1=mysql_query($sq,$con); 
 $count = mysql_num_rows($res1); 
 if ($count==1)
 {	session_start();
	$_SESSION['Name'] = $a;
	 header ("location: php4.php");
 }
 else
	 echo "INVALID CREDENTIALS"
 ?>