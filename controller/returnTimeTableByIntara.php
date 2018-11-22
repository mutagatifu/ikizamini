<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 22/11/2018
 * Time: 09:32
 */
include '../include/timeTable.php';
$exam = new timeTable();
$intara = $_POST['intara'];

$query = $exam->returnTimeTableByIntara($intara);
$result = mysqli_num_rows($query);
if ($result > 0){
    $message = "success";
    $status = 1;
}
else{
    $message = "no data";
    $status = 0;
}
$exams = array();
foreach ($query as $row){
    $exams[]=$row;
}
$returnJS = array('status'=>$status,'message'=>$message,'data'=>$exams);
echo json_encode($returnJS);

?>