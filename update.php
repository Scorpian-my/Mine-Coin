<?php
session_start();
include("config.php");

if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $info = info($username);

    $new_balance = $info["balanse"];
    $new_charge = $info["charge"];

    if (isset($_POST["number"])) {
        $new_balance += intval($_POST["number"]);
        $new_charge -= intval($_POST["number"]);
    }

    if (isset($_POST["charge"])) {
        $new_charge = intval($_POST["charge"]);
    }

    // کد به‌روزرسانی موجودی در پایگاه داده
    $query = "UPDATE users SET balanse = $new_balance, charge = $new_charge WHERE username = '$username'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo json_encode(["success" => true, "balanse" => $new_balance, "charge" => $new_charge]);
    } else {
        echo json_encode(["success" => false, "message" => "Database update failed"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
}
