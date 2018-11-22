<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 22/11/2018
 * Time: 09:32
 */
include '../include/timeTable.php';
$uturere = new timeTable();
$intara = $_POST['intara'];

$query = $uturere->returnDistrictByIntara($intara);
$result = mysqli_num_rows($query);
if ($result > 0){
    $message = "success";
    $status = 1;
}
else{
    $message = "no data";
    $status = 0;
}
$utureres = array();
foreach ($query as $row){
    $utureres[]=$row;
}
$returnJS = array('status'=>$status,'message'=>$message,'data'=>$utureres);
echo json_encode($returnJS);
?>