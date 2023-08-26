<?php
// include database connection file
include_once("../../config/connection.php");
 
// Get id from URL to delete that user
$id = $_GET['kd_product'];
 
// Delete user row from table based on given id

// $checkData = mysqli_query($conn, "SELECT * FROM product WHERE kd_product=$id");
// echo json_encode($checkData);
// die();

// if($checkData != null){
    $sql = "DELETE FROM product WHERE kd_product=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record with ID $id deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
// }else{
//     echo "KD Product " .$_GET['kd_product']. " not valid";
// }

$conn->close();
?>