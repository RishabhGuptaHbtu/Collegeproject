<html>
 <?php 
 $con1=mysql_connect ("127.0.0.1","root","");
  if ($con1==false)
 {
	 echo "connection failed".mysql_error();
 }
 
 mysql_select_db("rail1",$con1);
 $res=mysql_query ("train",$con1);
 $a=$_POST['tname'];
 $b=$_POST ['tno'];
 $c=$_POST['src'];
    $d=$_POST['dst'];
 $sq="select * from train where uid='$b';";
        $res1=mysql_query($sq,$con1); 
    $count = mysql_num_rows($res1); 
    if($count==0)
    {
 
 $in="insert into train Values ('$a','$b','$c','$d')";
 $res1=mysql_query($in,$con1);
 if ($in)
 header("Location:php6.php");
	else
	{
		echo "Enter Valid Details";
		header("Location:index6.html");
	}
 }
    
        

 ?>
 </html>