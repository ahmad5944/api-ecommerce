<?php
// include database connection file
include_once("../../config/connection.php");
 
// Get id from URL to delete that user
$id = $_GET['kd_product'];
 
// Delete user row from table based on given id
$sql = "DELETE FROM product WHERE kd_product=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record with ID $id deleted successfully.";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>