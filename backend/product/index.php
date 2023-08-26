<?php
require_once('../../config/connection.php');
$data = array();
if ($result = mysqli_query($conn, "SELECT * FROM product ORDER BY kd_product ASC")) {
    	while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        	$data[] = $row;
    	}
	mysqli_close($conn);
    echo json_encode($data);
}
?>