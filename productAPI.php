<?php
include("dbconfig.php");

$sql = "SELECT * FROM products";
$query = mysqli_query($connection, $sql);

while ($data = mysqli_fetch_array($query)) {
    $product[] = array(
        'name' =>$data['name'],
        'description' =>$data['desc']
    );
}

echo json_encode($product);

?>
