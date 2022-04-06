<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
<header>
    <a href="#" class="logo">Banger</a>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#"class="active">Users</a></li>
        </ul>
</header>




<?php
require_once('connection.php');
include('getUsers.php');
?>
<main class="container">
    <h1 class="m-4 text-uppercase">Zoznam uživateľov</h1>
   <ul class="list-group">
       <li class="list-group-item "id="hore">
           
           <span class="col-3"> Avatar</span>
           <span class="col-3"> Username</span>
           <span class="col-3"> Email</span>
       </li>
   </ul>
   <?php foreach ($users as $user) : ?>
        <a href="index.php" class="text-decoration-none">
        <li class="list-group-item list-group-item-action d-flex row align-items-center"id="users">
            
            <div class="col-2">
                <img src="15-scientist-512.webp"<?php echo $user["Avatar"]?> alt="<?php echo $user["user_username"]?>" style="width: 50px">
            </div>
            <span class="col-3"> <?php echo $user["user_username"] ?></span>
            <span class="col-3"> <?php echo $user["user_email"] ?></span>
        </li>
   
   <?php endforeach ?>
   
   
   </main>
   </body>
   </html>
