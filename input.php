<?php
//the example of inserting data with variable from HTML form
//input.php
//mysql_connect("localhost","root","");//database connection
//mysql_select_db("login");

//$host="localhost"; // Host name
//$username="root"; // Mysql username
//$email="";
//$password=""; // Mysql password
//$repassword="";
//$db_name="login"; // Database name
//$tbl_name="logintable"; // Table name

// Connect to server and select database.
mysql_connect("localhost","root","")or die("cannot connect");
mysql_select_db("login") or die ("cannot select DB");

$myusername=$_POST["myusername"];
$myemail=$_POST["myemail"];
$mypassword=$_POST["mypassword"];
$myrepassword=$_POST["myrepassword"];

//inserting data order
$order =( "INSERT INTO logintable
            (username, email,password,repassword)
         VALUES ('$myusername','$myemail','$mypassword','$myrepassword')");
//declare in the order variable
//$result = mysql_query($order);  //order executes
if(mysql_query($order))
{
   echo("<br>Input data is succeed");
}
 else
 {
    echo("<br>Input data is fail");
}

?>

<!--declare in the order variable
$result = mysql_query($order);  //order executes
if($result){
   echo("<br>Input data is succeed");
} else{
    echo("<br>Input data is fail");
}
if(isset($POST['Submit']))
{
	$myusername=$_POST["myusername"];
	$myemail=$_POST["myemail"];
	$mypassword=$_POST["mypassword"];
	$myrepassword=$_POST["myrepassword"];
if($myname !=''||$email !=''){-->
