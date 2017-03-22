<html>
<head>
     <img src="Untitled1.png" alt="some_text" height="15%" width="100%">
	 
    <style>
ul {
    float: left;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style-type: none;
}

a.cd {
    float: left;
    width: 19.55em;
    height : 2em;
    text-decoration: none;
    color: white;
    background-color: grey;
    padding: 0.2em 0.6em;
    border-right: 1px solid white;
} 
        h1
    {
    color : saddlebrown;
        background-color: gainsboro;
        text-align: center;
        font-size: 44px;
        margin:0;
    padding:0;
    }

a.cd:hover {background-color: #ff3300;}

li {display: inline;}
       
</style>

<style>
     div{
            background-color: #e0ebeb;
         height: auto;
        }
    /* Full-width input fields */
input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    height:10px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
    width=25%;
}
table {
    width :100%;
    text-align: left;
    border: 1px solid black;
    border-collapse: collapse;
    border-spacing: 10px ;
}
    
tr, th {border-collapse: collapse;
    text-align: center;
    border: 1px solid black;
    background-color: aliceblue;
     border-spacing: 10px ;
    padding: 15px;
	
}
/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 22%;
}
footer {
    position : absolute;
        background-color: white;
    bottom : 40px;
    height : 80px;
    margin-top : 0;
       }
/* Add padding to container elements */
.container {width:100%;
    
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
    height:30px;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}body{
        background-color: aquamarine;
    }
    </style>
<ul>
   <li><a class="cd" href="First.html">Home</a></li>
     <li><a class="cd" href="index6.html">Passenger Register</a></li>
  <li><a class="cd" href="passlogin.html">Passenger Login</a></li>
  <li><a class="cd" href="adminlogin.html">Admin Login</a></li>
 </ul>
   <style>h1
    {
    color : blue;
    }
       label{
min-width:180px;
display: inline-block;
}
    </style> 
    <title>
    Register</title>
    </head>
<body>

<?php
    $con=mysql_connect ("127.0.0.1","root","");
    mysql_select_db("rail1",$con);
session_start();
if(isset($_SESSION['Name'])) {
echo "Welcome " . $_SESSION['Name']." to your Account";
     $_a=$_SESSION['Name'];
  $query = "SELECT * FROM user where uid='$_a';";
    function mysql_query_or_die($query) {
    $result = mysql_query($query);
    if ($result)
        return $result;
    else {
        $err = mysql_error();
        die("<br>{$query}<br>*** {$err} ***<br>");
    }
}
$result = mysql_query_or_die($query);
echo("<table>");
$first_row = true;
while ($row = mysql_fetch_assoc($result)) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '<tr>';
        foreach($row as $key => $field) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach($row as $key => $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
echo("</table>"); 
    /*
    $sql = "SELECT * FROM std where appid='$_a';";
$res1=mysql_query($sql,$con); 
if ($res1->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";*/
    }
     ?>
    <br>
     <h1>Ticket avilability</h1>

<form action="php5.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
      <fieldset>
      <legend>Journey Details</legend>
     <label><b>Source</b></label>
    <input type="text" placeholder="Enter starting station" name="source" required><br>
      <label><b>Destination</b></label>
    <input type="text" placeholder="Enter end station" name="Dest" required><br>
        
          </fieldset>
      <fieldset>
         
      <br>
<div class="clearfix">
      <button type="button" class="cancelbtn" >Cancel</button>
      <button type="submit" class="signupbtn" value="Submit">Check</button>
       
    </div>
      
  </div>
</form>
  
    </body>
</html>