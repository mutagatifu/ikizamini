<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 22/11/2018
 * Time: 09:15
 */
include '../include/timeTable.php';

$intara = new timeTable();
$query = $intara->returnIntara();

$result = mysqli_num_rows($query);
if ($result > 0){
    $message = "success";
    $status = 1;
}
else{
    $message = "no data";
    $status = 0;
}
$intaras = array();
foreach ($query as $row){
    $intaras[]=$row;
}
 //$returnJS = array('status'=>$status,'message'=>$message,'data'=>$intaras);
echo json_encode($intaras);
?>