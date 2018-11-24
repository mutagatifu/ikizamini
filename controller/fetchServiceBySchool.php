<?php
include '../include/school.php';

$skul = new School();
$schoolId = $_POST['school'];
$query = $skul->fetchServiceBySchoolId($schoolId);

$result = mysqli_num_rows($query);

if($result > 0){
    $status =1;
    $message = "success";
}
else{
    $status = 0;
    $message = "no datas";
}
$services = array();

foreach($query as $rows){
    $services[]=$rows;
}
$returnJS = array('status' =>$status ,'message'=>$message,'data'=>$services);
echo json_encode($returnJS);
?>