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

$stmt = $conn->prepare("INSERT INTO reg VALUES(?,?)");
$stmt->bind_param("is",$r,$p);
$r=$_POST["email"];
$p=$_POST["pass"];
$stmt->execute();
 echo "Record inserted successfully";  
$stmt->close();
$conn->close();
header("refresh:3; url=project.html");
?>
