<?php
$connect = mysqli_connect("localhost", "root", "", "scorpian-coin");
function info($user)
{
    global $connect;
    $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `username`='$user'");
    return mysqli_fetch_assoc($result);
}
function users($user)
{
    global $connect;
    $usernames = array();

    $result = mysqli_query($connect, "SELECT username FROM `users`");

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $usernames[] = $row['username'];
        }
    }
    if (in_array($user, $usernames)) {
        return 1;
    } else {
        mysqli_query($connect, "INSERT INTO `users`(`username`, `balanse`,`invites`) VALUES ('$user','0','0')");
        return  0;
    }
}
