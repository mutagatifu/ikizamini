<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 22/11/2018
 * Time: 11:00
 */

include '../include/school.php';
$skul = new School();

$query = $skul->fetchSchools();

$result = mysqli_num_rows($query);
if($result > 0 ){
    $status = 1;
    $message = "success";
}
else{
    $status = 0;
    $message = "no data";
}
 $schoolss = array();
foreach ($query as $row){
    $schoolss[]=$row;
}
$returnJS = array('status'=>$status,'message'=>$message,'data'=>$schoolss);
echo json_encode($returnJS);

?>