<?php
include '../include/services.php';

$newService = new services();

$serviceId = $_POST['serviceId'];
$serviceName = $_POST['serviceName'];
$price = $_POST['cost'];

$updateTime = date("Y-m-d h:i:s");

$newService ->setServiceName($serviceName);
$newService->setPrice($price);

$query = $newService->updateService($serviceId,$updateTime);
if($query){
    echo "success";
}
else{
    echo "failed";
}
?>