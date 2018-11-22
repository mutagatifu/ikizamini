<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 22/11/2018
 * Time: 12:17
 */
include '../include/school.php';
$shule = new School();
$schoolId = $_POST['school'];
$query = $shule->fetchStaffBySchool($schoolId);
$result = mysqli_num_rows($query);
if($result > 0){
    $status = 1;
    $message = "success";
}
else{
    $status = 0;
    $message = "no data";
}
$staffs = array();
foreach ($query as $row){
    $staffs[]=$row;
}
$returnJS=array('status'=>$status,'message'=>$message,'data'=>$staffs);
echo json_encode($returnJS);

?>