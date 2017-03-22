<html>
 <?php 
 $con1=mysql_connect ("127.0.0.1","root","");
  if ($con1==false)
 {
	 echo "connection failed".mysql_error();
 }
 
 mysql_select_db("rail1",$con1);
 $res=mysql_query ("user",$con1);
 $a=$_POST['uname'];
 $b=$_POST ['fname'];
 $c=$_POST['DOB'];
    $d=$_POST['gender'];
    $e=$_POST['address'];
$f=$_POST['uid'];
    $g=$_POST['psw'];
    $h=$_POST['rpsw'];
 $sq="select * from user where uid='$f';";
        $res1=mysql_query($sq,$con1); 
    $count = mysql_num_rows($res1); 
    if($count==0)
    {
 if ($h!=$g )
 {
	 echo '<script type="text/javascript">'; 
echo 'alert("review your entries");'; 
echo 'window.location.href = "index6.html";';
echo '</script>';
 }
 else
 {
 $in="insert into user Values ('$a','$b','$c','$d','$e','$f','$g')";
 $res1=mysql_query($in,$con1);
 if ($in)
 header("Location:signup.html");
	else
	{
		echo "Enter Valid Details";
		header("Location:index6.html");
	}
 }
    }
    else
        {
	 echo '<script type="text/javascript">'; 
echo 'alert("Application id not valied");'; 
echo 'window.location.href = "index6.html";';
echo '</script>';
 }
        

 ?>
 </html>