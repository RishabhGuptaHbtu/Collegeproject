<?php

$con=mysql_connect ("127.0.0.1","root","");
$a=$_POST['aid'];
$b=$_POST['psw'];
 mysql_select_db("rail1",$con);
 $sq="select * from admin where Adminid='$a' and Password='$b'; ";
 $res1=mysql_query($sq,$con); 
 $count = mysql_num_rows($res1); 
 if ($count==1)
 {	session_start();
	$_SESSION['Name'] = $a;
	 header ("location: admin1.html");
 }
 else
	 echo "INVALID CREDENTIALS"
 ?>