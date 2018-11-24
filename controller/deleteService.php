<?php
include '../include/services.php';

$servisi = new services();
$serviceId=$_POST['serviceId'];
$query = $servisi->deleteService($serviceId);

if($query){
    echo "success";
}
else{
    echo "failed";
}
?>