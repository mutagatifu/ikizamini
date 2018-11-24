<?php
include '../include/examterms.php';

$terms = new examTerm();

$query = $terms->returnTerms();

$result = mysqli_num_rows($query);
if($result > 0){
    $status= 1;
    $message="success";
}
else{
    $status=0;
    $message = "no data available";
}
$term = array();
foreach($query as $rows){
    $term[]=$rows;
}
//$returnJS = array('status'=>$status,'message'=>$message,'data'=>$term);

echo json_encode($term);
?>