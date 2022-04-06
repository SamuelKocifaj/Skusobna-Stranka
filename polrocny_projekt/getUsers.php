<?php
require_once('connection.php');

$sql = "SELECT * FROM usertable";
$result = $conn->query($sql);
$users = [];

while($user = $result->fetch_assoc()){
    array_push($users, $user);
}
?>