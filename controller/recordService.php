<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 21/11/2018
 * Time: 09:39
 */

include '../include/services.php';
$servise = new services();
$serviseName =$_POST['servise'];
$price = $_POST['price'];
$school = $_POST['school'];
if (!empty($serviseName) && !empty($price) && !empty($school)) {
   $servise->setServiceName($serviseName);
//$servise->getServiceName();
   $servise->setPrice($price);
   $servise->setSchool($school);
//$servise->getPrice();
   // echo $servi . " " . $prixe;
$query = $servise ->recordServisi();
if ($query){
    echo "success";
}
else{
    echo "nothing happened!";
}
    }
    else{
        echo "no field would be left empty";
    }
?>