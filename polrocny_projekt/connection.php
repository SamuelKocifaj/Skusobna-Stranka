<?php
$servername="localhost";
$username="root";
$password="";
$database="stranka";

$conn=new mysqli($servername,$username,$password,$database);

$user_id=$_POST["User_ID"];
$email_id=$_POST["Email_ID"];
$pass=$_POST["Password"];
$s="select *from usertable where Email_ID="$email_id"";
$result=mysqli_query($con,$s);
$num= mysqli_num_rows($result);
if($num==1){
    echo"email already taken";
}else{
    $reg="insert into usertable(User_ID,Email_ID,Password )values ("$user_id","$email_id","$pass")";
    mysqli_query($con,$reg);
    echo"Registration complete";
}