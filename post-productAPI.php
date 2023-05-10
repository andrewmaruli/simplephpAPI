<?php
include('dbconfig.php');

$name = isset($_POST['name']) ? $_POST['name'] : "";
$description = isset($_POST['desc']) ? $_POST['desc'] : "";

$sql = "INSERT INTO `products` (`name`, `desc`) VALUES ('".$name."', '".$description."');";

$query = mysqli_query($connection, $sql);
?>