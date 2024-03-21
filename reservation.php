<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="reservation";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  

}  
echo 'Connected successfully<br/>';  

$stmt = $conn->prepare("INSERT INTO user VALUES(?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssissii", $f, $m,$l,$s,$g,$ph,$ca,$e,$pa,$ti);
$f=$_POST["firstname"];
$m=$_POST["middlename"];
$l=$_POST["lastname"];
$s=$_POST["city"];
$g=$_POST["gender"];
$ph=$_POST["phone"];
$ca=$_POST["address"];
$e=$_POST["email"];
$pa=$_POST["password"];
$ti=$_POST["transactionid"];

$stmt->execute();
 echo "Record inserted successfully";  
$stmt->close();
$conn->close();
header("refresh:3; url=homepage.html");
?> 
