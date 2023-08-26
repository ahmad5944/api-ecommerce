<?php
require_once('../../config/connection.php');

if (isset($_POST['kd_product'])) {
    $id         = $_POST['kd_product'];
    $name       = $_POST['name'];
    $qty        = $_POST['qty'];
    $desc       = $_POST['description'];
    $photo      = $_POST['photo'];
    
    $sql = mysqli_query($conn, "UPDATE product SET name='$name', qty='$qty', description='$desc', photo='$photo' WHERE kd_product='$id'");

    if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo "GAGAL";
}
