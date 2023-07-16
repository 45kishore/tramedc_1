<?php

include 'db_connect.php';
if (isset($_POST["register"])) {
    $full_name = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $number = $_POST["number"];
    $pass = $_POST["password"];

    $sql = "INSERT INTO `patients` (`fname`,`lname`,`username`,`phonenumber`,`password`) VALUES ( '$full_name', '$lname', '$username', '$number', '$pass')";

    $rs = mysqli_query($conn, $sql);

    if (!$rs) {
        echo mysqli_error($conn);
    }
}
mysqli_close($conn);
header("Location: ");

?>