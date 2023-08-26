<?php 
include_once('../../config/connection.php');

$kdProduct  = empty($_POST['kd_product']) ? null : $_POST['kd_product'];
$name       = empty($_POST['name']) ? null : $_POST['name'];
$qty        = empty($_POST['qty']) ? null : $_POST['qty'];
$desc       = empty($_POST['description']) ? null : $_POST['description'];
$photo      = empty($_POST['photo']) ? null : $_POST['photo'];

if(empty($_POST['kd_product']))
{
  $errorMessage = 'KD Product is required';
  echo $errorMessage;
}

if(empty($_POST['name']))
{
  $errorMessage = 'Name Product is required';
  echo "/ ".$errorMessage;
}

if(empty($_POST['qty']))
{
  $errorMessage = 'Qty Product is required';
  echo "/ ".$errorMessage;
}

if(empty($_POST['description']))
{
  $errorMessage = 'Description Product is required';
  echo "/ ".$errorMessage;
}

if(empty($_POST['photo']))
{
  $errorMessage = 'Photo Product is required';
  echo "/ ".$errorMessage;
}

if (isset($_POST['kd_product']) && isset($_POST['name']) && isset($_POST['qty']) && isset($_POST['description']) && isset($_POST['photo'])) {
    $sql = mysqli_query($conn,"INSERT INTO product (kd_product, name, qty, description, photo) VALUES ('$kdProduct','$name','$qty','$desc','$photo')");
    if($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
    }else{
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
	echo " Error";
}
?>