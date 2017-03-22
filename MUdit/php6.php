<html>
<head>
    
	 <img src="Untitled1.png" alt="some_text" height="15%" width="100%">
 

<style>
     div{width=70%;
            background-color: oldlace;
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
    a.cd:hover {background-color: chocolate;}

li {display: inline;}
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
    height: 2em;
    text-decoration: none;
    color: white;
    background-color: cadetblue;
    padding: 0.2em 0.6em;
    border-right: 1px solid white;
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

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 22%;
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
}
    </style>

   <style>h1
    {
    color : blue;
    }
       form
       {
           width:70%;
       }
       label{
min-width:180px;
display: inline-block;
}
       body{
           background-color: aquamarine;
       }
    </style> 
    <title>
    Register</title>
    </head>
<body><ul>
     <li><a class="cd" href="First.html">Home</a></li>
     <li><a class="cd" href="index6.html">Passenger Register</a></li>
  <li><a class="cd" href="passlogin.html">Passenger Login</a></li>
  <li><a class="cd" href="adminlogin.html">Admin Login</a></li>
 
 
</ul>
    <h2>TRAIN REGISTRATION</h2>

<form action="phptrain.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
      <fieldset>
      <legend>Train details</legend>
    <label><b>Name  </b> </label>
    <input type="text" placeholder="Enter name" name="tname" required ><br>
     <label><b>Train Number</b></label>
    <input type="Number" placeholder="Enter number" name="tno" required><br>
          <label><b>Source</b> </label>
    <input type="text" placeholder="Enter Source" name="src" required ><br>
     <label><b>Destination</b></label>
    <input type="text" placeholder="Enter Destination" name="dst" required><br>
      
      </fieldset>
      <br>
<div class="clearfix">
      <button type="button" class="cancelbtn" >Cancel</button>
      <button type="submit" class="signupbtn" value="Submit">Register</button>
       
    </div>
      
  </div>
</form>
    <?php
    $con=mysql_connect ("127.0.0.1","root","");
    mysql_select_db("rail1",$con);
session_start();
if(isset($_SESSION['Name'])) {

     $_a=$_SESSION['Name'];
  $query = "SELECT * FROM train ;";
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
    </body>
</html>