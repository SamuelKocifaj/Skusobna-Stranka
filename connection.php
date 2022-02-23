<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname= "projekt";

$conn=new mysqli($servername, $username,$password, $dbname);


if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, password FROM users";
$result = mysqli_query($conn, $sql);
print_r(mysqli_num_rows($result) );

if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
    echo"id:" . $row["id"]. "- Name:" . $row ["username"]." " ."<br>";
}
}else {
    echo"0 vyledkov";
}






//echo "Connected successfully </br>";
?>