<?php
$number = $_POST['number'];
$username = $_POST["username"];
$user = str_replace("?user=", "", $username);
$connect = mysqli_connect("localhost", "root", "", "scorpian-coin");
mysqli_query($connect, "UPDATE `users` SET `balanse`=balanse+1 WHERE username='$user';");