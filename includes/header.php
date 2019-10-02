<?php 
require './config/config.php';

if (isset($_SESSION['username'])) {
    $userLoggedIn = $_SESSION['username'];
} else {
    header("Location: register.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dummy Stars</title>
    <script src="./jquery.js"></script>
    <script src="./../assets/js/bootstrap.css"></script>
    <link rel="stylesheet" href="./../assets/css/bootstrap.css">
</head>
<body>